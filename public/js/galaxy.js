(function () {
  const canvas = document.getElementById('galaxy-background');
  if (!canvas) return;

  const context = canvas.getContext('2d');
  let stars = [];
  let animationId;
  let mouse = { x: 0.5, y: 0.5, active: false };

  function resize() {
    const ratio = Math.min(window.devicePixelRatio || 1, 2);
    canvas.width = window.innerWidth * ratio;
    canvas.height = window.innerHeight * ratio;
    context.setTransform(ratio, 0, 0, ratio, 0, 0);
    stars = Array.from({ length: Math.min(460, Math.max(180, Math.floor(window.innerWidth / 2.4))) }, () => ({
      angle: Math.random() * Math.PI * 2,
      distance: Math.random() * Math.max(window.innerWidth, window.innerHeight) * 0.78,
      depth: 0.2 + Math.random() * 0.8,
      size: 0.35 + Math.random() * 1.8,
      hue: 185 + Math.random() * 95,
      twinkle: Math.random() * Math.PI * 2
    }));
  }

  function render(time) {
    const width = window.innerWidth;
    const height = window.innerHeight;
    const centerX = width * 0.52;
    const centerY = height * 0.46;
    context.clearRect(0, 0, width, height);
    context.fillStyle = 'rgba(5, 8, 22, 0.24)';
    context.fillRect(0, 0, width, height);

    stars.forEach((star) => {
      const rotation = time * 0.00004 * (1.25 - star.depth);
      const radius = star.distance * star.depth;
      let x = centerX + Math.cos(star.angle + rotation) * radius;
      let y = centerY + Math.sin(star.angle + rotation) * radius * 0.56;

      if (mouse.active) {
        const mouseX = mouse.x * width;
        const mouseY = mouse.y * height;
        const distance = Math.hypot(x - mouseX, y - mouseY);
        if (distance < 170) {
          const force = (170 - distance) / 170;
          x += (x - mouseX) * force * 0.16;
          y += (y - mouseY) * force * 0.16;
        }
      }

      const alpha = 0.24 + star.depth * 0.65 + Math.sin(time * 0.002 + star.twinkle) * 0.13;
      context.fillStyle = `hsla(${star.hue}, 82%, 78%, ${Math.max(0.08, alpha)})`;
      context.beginPath();
      context.arc(x, y, star.size * star.depth, 0, Math.PI * 2);
      context.fill();
    });

    animationId = requestAnimationFrame(render);
  }

  window.toggleGalaxy = function () {
    const active = document.body.classList.toggle('galaxy-active');
    localStorage.setItem('galaxy', active ? 'on' : 'off');
    if (active && !animationId) animationId = requestAnimationFrame(render);
  };

  window.setWhiteBackground = function () {
    document.body.classList.remove('galaxy-active');
    document.body.removeAttribute('data-theme');
    localStorage.setItem('galaxy', 'off');
    localStorage.setItem('theme', 'light');
  };

  window.addEventListener('resize', resize);
  canvas.addEventListener('mousemove', (event) => {
    mouse = { x: event.clientX / window.innerWidth, y: event.clientY / window.innerHeight, active: true };
  });
  canvas.addEventListener('mouseleave', () => { mouse.active = false; });

  resize();
  if (localStorage.getItem('galaxy') === 'on') {
    document.body.classList.add('galaxy-active');
    animationId = requestAnimationFrame(render);
  }
})();
