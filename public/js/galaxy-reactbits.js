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

    float hash21(vec2 p) {
      p = fract(p * vec2(123.34, 456.21));
      p += dot(p, p + 45.32);
      return fract(p.x * p.y);
    }

    float triangle(float value) {
      return abs(fract(value) * 2.0 - 1.0);
    }

    vec3 starLayer(vec2 uv, float layer) {
      vec3 color = vec3(0.0);
      vec2 grid = fract(uv) - 0.5;
      vec2 id = floor(uv);

      for (int y = -1; y <= 1; y++) {
        for (int x = -1; x <= 1; x++) {
          vec2 cell = id + vec2(float(x), float(y));
          float seed = hash21(cell + layer * 17.0);
          float size = fract(seed * 345.32);
          vec2 drift = vec2(
            triangle(seed * 34.0 + uTime * 0.08),
            triangle(seed * 38.0 + uTime * 0.035)
          ) - 0.5;
          float distanceToStar = length(grid - vec2(float(x), float(y)) - drift * 0.18);
          float glow = 0.006 / max(distanceToStar, 0.006);
          float flare = smoothstep(0.88, 1.0, size) * 0.12 / max(distanceToStar, 0.02);
          float twinkle = 0.75 + 0.25 * triangle(uTime * 0.45 + seed * 6.28);
          vec3 starColor = mix(vec3(0.72, 0.84, 1.0), vec3(0.42, 0.92, 1.0), seed);
          color += (glow + flare) * starColor * twinkle;
        }
      }
      return color;
    }

    void main() {
      vec2 uv = (gl_FragCoord.xy - uResolution * 0.5) / uResolution.y;
      vec2 mouse = (uMouse - 0.5) * vec2(0.32, -0.22);
      uv -= mouse * 0.12 * uActive;
      float angle = uTime * 0.018;
      mat2 rotation = mat2(cos(angle), -sin(angle), sin(angle), cos(angle));
      uv = rotation * uv;

      vec3 color = vec3(0.0);
      for (float layer = 0.0; layer < 4.0; layer += 1.0) {
        float depth = fract(layer * 0.25 + uTime * 0.018);
        float scale = mix(22.0, 2.0, depth);
        color += starLayer(uv * scale, layer) * depth * 0.22;
      }

      float vignette = smoothstep(1.35, 0.15, length(uv));
      gl_FragColor = vec4(color * vignette, 1.0);
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