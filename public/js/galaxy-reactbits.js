(function () {
  const canvas = document.getElementById('galaxy-background');
  if (!canvas) return;

  const vertexSource = `
    attribute vec2 position;
    void main() { gl_Position = vec4(position, 0.0, 1.0); }
  `;
  const fragmentSource = `
    precision highp float;
    uniform float uTime;
    uniform vec2 uResolution;
    uniform vec2 uMouse;
    uniform float uActive;

    #define NUM_LAYER 4.0
    #define MAT45 mat2(0.7071, -0.7071, 0.7071, 0.7071)
    #define PERIOD 3.0

    float hash21(vec2 p) {
      p = fract(p * vec2(123.34, 456.21));
      p += dot(p, p + 45.32);
      return fract(p.x * p.y);
    }

    float tri(float value) {
      return abs(fract(value) * 2.0 - 1.0);
    }

    float tris(float value) {
      return 1.0 - smoothstep(0.0, 1.0, abs(2.0 * fract(value) - 1.0));
    }

    float trisn(float value) {
      return 2.0 * tris(value) - 1.0;
    }

    vec3 hsv2rgb(vec3 color) {
      vec4 k = vec4(1.0, 2.0 / 3.0, 1.0 / 3.0, 3.0);
      vec3 p = abs(fract(color.xxx + k.xyz) * 6.0 - k.www);
      return color.z * mix(k.xxx, clamp(p - k.xxx, 0.0, 1.0), color.y);
    }

    float star(vec2 uv, float flare) {
      float distanceToCenter = length(uv);
      float result = (0.05 * 0.5) / max(distanceToCenter, 0.001);
      float rays = smoothstep(0.0, 1.0, 1.0 - abs(uv.x * uv.y * 1000.0));
      result += rays * flare * 0.5;
      uv *= MAT45;
      rays = smoothstep(0.0, 1.0, 1.0 - abs(uv.x * uv.y * 1000.0));
      result += rays * 0.15 * flare;
      return result * smoothstep(1.0, 0.2, distanceToCenter);
    }

    vec3 starLayer(vec2 uv, float layer) {
      vec3 color = vec3(0.0);
      vec2 grid = fract(uv) - 0.5;
      vec2 id = floor(uv);

      for (int y = -1; y <= 1; y++) {
        for (int x = -1; x <= 1; x++) {
          vec2 cell = id + vec2(float(x), float(y));
          float seed = hash21(cell + layer);
          float size = fract(seed * 345.32);
          float gloss = tri(0.5 / (PERIOD * seed + 1.0));
          float flare = smoothstep(0.9, 1.0, size) * gloss;
          float red = smoothstep(0.2, 1.0, hash21(cell + 1.0)) + 0.2;
          float blue = smoothstep(0.2, 1.0, hash21(cell + 3.0)) + 0.2;
          float green = min(red, blue) * seed;
          vec3 base = vec3(red, green, blue);
          float hue = atan(base.g - base.r, base.b - base.r) / 6.28318 + 0.5;
          float saturation = length(base - vec3(dot(base, vec3(0.299, 0.587, 0.114)))) * 0.8;
          float value = max(max(base.r, base.g), base.b);
          base = hsv2rgb(vec3(fract(hue + 240.0 / 360.0), saturation, value));
          vec2 drift = vec2(
            tris(seed * 34.0 + uTime / 10.0),
            tris(seed * 38.0 + uTime / 30.0)
          ) - 0.5;
          float brightness = trisn(uTime + seed * 6.2831) * 0.5 + 1.0;
          color += star(grid - vec2(float(x), float(y)) - drift, flare)
            * size * base * mix(1.0, brightness, 0.3);
        }
      }
      return color;
    }

    void main() {
      vec2 focal = vec2(0.5) * uResolution;
      vec2 uv = (gl_FragCoord.xy - focal) / uResolution.y;
      vec2 mouse = (uMouse * uResolution - focal) / uResolution.y;
      float distanceToMouse = length(uv - mouse);
      vec2 repulsion = normalize(uv - mouse) * (2.0 / (distanceToMouse + 0.1));
      uv += repulsion * 0.05 * uActive;
      float angle = uTime * 0.1;
      uv = mat2(cos(angle), -sin(angle), sin(angle), cos(angle)) * uv;

      vec3 color = vec3(0.0);
      for (float layer = 0.0; layer < 1.0; layer += 1.0 / NUM_LAYER) {
        float depth = fract(layer + uTime * 0.05);
        float scale = mix(30.0 * 1.5, 0.75 * 1.5, depth);
        float fade = depth * smoothstep(1.0, 0.9, depth);
        color += starLayer(uv * scale + layer * 453.32, layer) * fade;
      }
      gl_FragColor = vec4(color, 1.0);
    }
  `;

  const context = canvas.getContext('webgl', { alpha: false, antialias: true });
  if (!context) return;

  function compile(type, source) {
    const shader = context.createShader(type);
    context.shaderSource(shader, source);
    context.compileShader(shader);
    if (!context.getShaderParameter(shader, context.COMPILE_STATUS)) {
      context.deleteShader(shader);
      return null;
    }
    return shader;
  }

  const vertex = compile(context.VERTEX_SHADER, vertexSource);
  const fragment = compile(context.FRAGMENT_SHADER, fragmentSource);
  if (!vertex || !fragment) return;

  const program = context.createProgram();
  context.attachShader(program, vertex);
  context.attachShader(program, fragment);
  context.linkProgram(program);
  if (!context.getProgramParameter(program, context.LINK_STATUS)) return;

  const buffer = context.createBuffer();
  context.bindBuffer(context.ARRAY_BUFFER, buffer);
  context.bufferData(context.ARRAY_BUFFER, new Float32Array([-1, -1, 1, -1, -1, 1, 1, 1]), context.STATIC_DRAW);
  const position = context.getAttribLocation(program, 'position');
  const time = context.getUniformLocation(program, 'uTime');
  const resolution = context.getUniformLocation(program, 'uResolution');
  const mouse = context.getUniformLocation(program, 'uMouse');
  const active = context.getUniformLocation(program, 'uActive');
  let pointer = { x: 0.5, y: 0.5 };
  let animationId;

  function resize() {
    const ratio = Math.min(window.devicePixelRatio || 1, 2);
    canvas.width = Math.max(1, Math.floor(window.innerWidth * ratio));
    canvas.height = Math.max(1, Math.floor(window.innerHeight * ratio));
    context.viewport(0, 0, canvas.width, canvas.height);
  }

  function render(now) {
    context.useProgram(program);
    context.bindBuffer(context.ARRAY_BUFFER, buffer);
    context.enableVertexAttribArray(position);
    context.vertexAttribPointer(position, 2, context.FLOAT, false, 0, 0);
    context.uniform1f(time, now * 0.001);
    context.uniform2f(resolution, canvas.width, canvas.height);
    context.uniform2f(mouse, pointer.x, pointer.y);
    context.uniform1f(active, document.body.classList.contains('galaxy-active') ? 1 : 0);
    context.drawArrays(context.TRIANGLE_STRIP, 0, 4);
    animationId = requestAnimationFrame(render);
  }

  window.toggleGalaxy = function () {
    const isActive = document.body.classList.toggle('galaxy-active');
    localStorage.setItem('galaxy', isActive ? 'on' : 'off');
    document.querySelectorAll('[data-bg-toggle]').forEach((button) => {
      button.setAttribute('aria-pressed', String(isActive));
      button.setAttribute('aria-label', isActive ? 'Matikan background Galaxy' : 'Aktifkan background Galaxy');
      button.setAttribute('title', isActive ? 'Matikan background Galaxy' : 'Aktifkan background Galaxy');
    });
  };

  window.addEventListener('resize', resize);
  window.addEventListener('pointermove', (event) => {
    pointer = { x: event.clientX / window.innerWidth, y: 1 - event.clientY / window.innerHeight };
  });
  resize();
  if (localStorage.getItem('galaxy') === 'on') document.body.classList.add('galaxy-active');
  animationId = requestAnimationFrame(render);
})();