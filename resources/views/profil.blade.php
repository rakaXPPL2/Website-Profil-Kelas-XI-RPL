<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil XI Rekayasa Perangkat Lunak - SMKN 1 GARUT</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
  :root {
    --bg-primary: #ffffff;
    --bg-secondary: #f8fafc;
    --bg-tertiary: #f1f5f9;
    --bg-card: #ffffff;
    --border: #e2e8f0;
    --text-primary: #1e293b;
    --text-secondary: #64748b;
    --text-muted: #94a3b8;
    --blue-400: #60a5fa;
    --blue-500: #3b82f6;
    --blue-600: #2563eb;
    --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    --font-mono: 'JetBrains Mono', 'Fira Code', ui-monospace, monospace;
  }

  [data-theme="dark"] {
    --bg-primary: #0f1419;
    --bg-secondary: #161b22;
    --bg-tertiary: #1c2128;
    --bg-card: #21262d;
    --border: #30363d;
    --text-primary: #e6edf3;
    --text-secondary: #8b949e;
    --text-muted: #6e7681;
  }

  body { position: relative; overflow-x: hidden; }

  #galaxy-background {
    position: fixed;
    inset: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.45s ease;
    background: #050816;
  }

  body.galaxy-active #galaxy-background { opacity: 1; }

  body.galaxy-active {
    --bg-primary: #080d1c;
    --bg-secondary: #0d1428;
    --bg-tertiary: rgba(23, 34, 62, 0.78);
    --bg-card: rgba(10, 18, 38, 0.84);
    --border: rgba(111, 151, 224, 0.25);
    --text-primary: #edf4ff;
    --text-secondary: #aebddd;
  }

  header, main, footer, .hero { position: relative; z-index: 1; }

  * { margin: 0; padding: 0; box-sizing: border-box; }

  body {
    background: var(--bg-primary);
    color: var(--text-primary);
    font-family: var(--font-sans);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    min-height: 100vh;
    transition: background 0.3s ease, color 0.3s ease;
  }

  a { color: inherit; text-decoration: none; }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
  }

  /* HEADER */
  header {
    background: var(--bg-secondary);
    border-bottom: 1px solid var(--border);
    position: sticky;
    top: 0;
    z-index: 100;
    transition: background 0.3s ease;
  }

  .header-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 16px 0;
  }

  .brand {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .brand-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: linear-gradient(135deg, var(--blue-500), var(--blue-600));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
  }

  .brand-icon svg {
    width: 20px;
    height: 20px;
  }

  .brand-text {
    display: flex;
    flex-direction: column;
  }

  .brand-name {
    font-weight: 700;
    font-size: 15px;
    letter-spacing: -0.3px;
  }

  .brand-sub {
    font-family: var(--font-mono);
    font-size: 11px;
    color: var(--blue-500);
  }

  .header-actions {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .nav-badge {
    font-family: var(--font-mono);
    font-size: 11px;
    color: var(--blue-500);
    background: rgba(59, 130, 246, 0.1);
    border: 1px solid rgba(59, 130, 246, 0.2);
    padding: 6px 14px;
    border-radius: 20px;
  }

  .theme-toggle {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: var(--bg-tertiary);
    border: 1px solid var(--border);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .theme-toggle:hover {
    border-color: var(--blue-500);
  }

  .theme-toggle svg {
    width: 20px;
    height: 20px;
    color: var(--text-secondary);
    transition: transform 0.3s ease;
  }

  .theme-toggle:hover svg {
    transform: rotate(15deg);
  }

  .background-toggle .icon-galaxy { display: block; color: #60a5fa; }
  .background-toggle .icon-sun { display: none; color: #fbbf24; }
  body.galaxy-active .background-toggle { background: rgba(125, 211, 252, 0.12); border-color: rgba(125, 211, 252, 0.4); }
  body.galaxy-active .background-toggle .icon-galaxy { display: none; }
  body.galaxy-active .background-toggle .icon-sun { display: block; }

  /* HERO */
  .hero {
    padding: 80px 0 60px;
    position: relative;
    overflow: hidden;
  }

  .hero::before {
    content: "";
    position: absolute;
    top: -200px;
    left: 50%;
    transform: translateX(-50%);
    width: 800px;
    height: 800px;
    background: radial-gradient(circle, rgba(59, 130, 246, 0.12) 0%, transparent 70%);
    pointer-events: none;
  }

  .hero-eyebrow {
    font-family: var(--font-mono);
    font-size: 12px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--blue-500);
    margin-bottom: 16px;
    text-align: center;
  }

  .hero h1 {
    font-size: 52px;
    font-weight: 800;
    letter-spacing: -2px;
    margin-bottom: 20px;
    line-height: 1.1;
    text-align: center;
  }

  .hero h1 .accent {
    background: linear-gradient(135deg, var(--blue-400), var(--blue-600));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .hero-desc {
    color: var(--text-secondary);
    font-size: 18px;
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
    line-height: 1.7;
  }

  /* MAIN */
  main {
    padding: 40px 0 100px;
  }

  /* SECTION TITLE */
  .section-header {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 24px;
  }

  .section-eyebrow {
    font-family: var(--font-mono);
    font-size: 11px;
    color: var(--blue-500);
    background: rgba(59, 130, 246, 0.1);
    border: 1px solid rgba(59, 130, 246, 0.2);
    padding: 6px 14px;
    border-radius: 20px;
  }

  .section h3 {
    font-size: 20px;
    font-weight: 600;
  }

  .section-line {
    flex: 1;
    height: 1px;
    background: var(--border);
  }

  /* PROFILE CARD */
  .profile-card {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 32px;
    margin-bottom: 32px;
    transition: background 0.3s ease, border-color 0.3s ease;
  }

  .profile-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 28px;
    padding-bottom: 24px;
    border-bottom: 1px solid var(--border);
  }

  .profile-logo {
    width: 72px;
    height: 72px;
    border-radius: 14px;
    background: linear-gradient(135deg, var(--blue-500), var(--blue-600));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    flex-shrink: 0;
  }

  .profile-logo svg {
    width: 36px;
    height: 36px;
  }

  .profile-title h2 {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 4px;
  }

  .profile-title .subtitle {
    font-family: var(--font-mono);
    font-size: 12px;
    color: var(--blue-500);
  }

  .profile-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 16px;
  }

  .info-box {
    background: var(--bg-secondary);
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: 16px;
    transition: background 0.3s ease;
  }

  .info-box h4 {
    font-family: var(--font-mono);
    font-size: 10px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--blue-500);
    margin-bottom: 6px;
  }

  .info-box p {
    color: var(--text-primary);
    font-size: 14px;
  }

  /* VISI MISI */
  .visi-misi-card {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 32px;
    margin-bottom: 32px;
    transition: background 0.3s ease, border-color 0.3s ease;
  }

  .visi-misi-card h3 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .visi-misi-card h3 svg {
    width: 20px;
    height: 20px;
    color: var(--blue-500);
  }

  .visi-content, .misi-content {
    margin-bottom: 20px;
  }

  .visi-content h4, .misi-content h4 {
    font-family: var(--font-mono);
    font-size: 10px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--blue-500);
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .visi-content h4 svg, .misi-content h4 svg {
    width: 14px;
    height: 14px;
  }

  .visi-content p {
    color: var(--text-secondary);
    font-size: 14px;
    line-height: 1.8;
  }

  .misi-list {
    list-style: none;
    display: grid;
    gap: 10px;
  }

  .misi-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 14px;
    background: var(--bg-secondary);
    border-radius: 8px;
    border-left: 2px solid var(--blue-500);
    color: var(--text-secondary);
    font-size: 13px;
    line-height: 1.6;
    transition: background 0.3s ease;
  }

  .misi-list li svg {
    width: 14px;
    height: 14px;
    color: var(--blue-500);
    flex-shrink: 0;
    margin-top: 2px;
  }

  /* TEAM GRID */
  .members-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 32px;
  }

  @media (max-width: 1024px) {
    .members-grid { grid-template-columns: repeat(2, 1fr); }
  }

  @media (max-width: 600px) {
    .members-grid { grid-template-columns: 1fr; }
    .hero h1 { font-size: 36px; }
    .profile-header { flex-direction: column; text-align: center; }
  }

  .member-card {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 24px 16px;
    text-align: center;
    transition: all 0.2s ease;
    display: block;
  }

  .member-card:hover {
    border-color: var(--blue-500);
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(59, 130, 246, 0.15);
  }

  .member-avatar {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    margin: 0 auto 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    font-weight: 700;
    color: white;
  }

  .avatar-1 { background: linear-gradient(135deg, var(--blue-500), #8b5cf6); }
  .avatar-2 { background: linear-gradient(135deg, var(--blue-400), var(--blue-600)); }
  .avatar-3 { background: linear-gradient(135deg, #f97316, #ef4444); }
  .avatar-4 { background: linear-gradient(135deg, #10b981, #059669); }

  .member-name {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 2px;
  }

  .member-role {
    font-size: 12px;
    color: var(--blue-500);
    margin-bottom: 2px;
  }

  .member-kelas {
    font-family: var(--font-mono);
    font-size: 10px;
    color: var(--text-muted);
  }

  /* CTA */
  .cta-section {
    text-align: center;
    margin-top: 24px;
  }

  .cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--font-mono);
    font-size: 12px;
    font-weight: 500;
    padding: 12px 24px;
    border-radius: 10px;
    background: var(--blue-600);
    color: white;
    border: none;
    transition: all 0.2s ease;
  }

  .cta-btn:hover {
    background: var(--blue-500);
    transform: translateY(-2px);
    box-shadow: 0 4px 20px rgba(59, 130, 246, 0.3);
  }

  .cta-btn svg {
    width: 16px;
    height: 16px;
  }

  /* FOOTER */
  footer {
    border-top: 1px solid var(--border);
    padding: 32px 0;
    text-align: center;
    transition: border-color 0.3s ease;
  }

  footer p {
    font-family: var(--font-mono);
    font-size: 12px;
    color: var(--text-muted);
  }

  footer span {
    color: var(--blue-500);
  }
</style>
</head>
<body>

<canvas id="galaxy-background" aria-hidden="true"></canvas>

<header>
  <div class="container">
    <div class="header-inner">
      <div class="brand">
        <div class="brand-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
          </svg>
        </div>
        <div class="brand-text">
          <div class="brand-name">XI Rekayasa Perangkat Lunak</div>
          <div class="brand-sub">SMKN 1 GARUT</div>
        </div>
      </div>
      <div class="header-actions">
        <div class="nav-badge">Challenge 4</div>
        <button class="theme-toggle background-toggle" type="button" data-bg-toggle onclick="toggleBackground()" aria-pressed="false" aria-label="Aktifkan background Galaxy" title="Aktifkan background Galaxy">
          <svg class="icon-galaxy" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3c-.6 1.7-.6 3.4 0 5 .6 1.6 1.8 2.8 3.4 3.4 1.6.6 3.3.6 5 0-1.1 2.7-3.1 4.9-5.7 6.2-4.5 2.2-9.9.4-12.1-4.1C.4 9 2.2 3.6 6.7 1.4c1.7-.8 3.5-1 5.3-.7Z"/>
            <circle cx="18.5" cy="6" r="0.9" fill="currentColor" stroke="none"/>
            <circle cx="20" cy="14.5" r="0.6" fill="currentColor" stroke="none"/>
          </svg>
          <svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="5"/>
            <line x1="12" y1="1" x2="12" y2="3"/>
            <line x1="12" y1="21" x2="12" y2="23"/>
            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
            <line x1="1" y1="12" x2="3" y2="12"/>
            <line x1="21" y1="12" x2="23" y2="12"/>
            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>

<section class="hero">
  <div class="container">
    <div class="hero-eyebrow">SMKN 1 GARUT</div>
    <h1>Profil <span class="accent">Kelas XI Rekayasa Perangkat Lunak</span></h1>
    <p class="hero-desc">
      Kelas kita pernah menjuarai Juara 1 Teater dan Juara 2 Padus, serta memiliki banyak murid yang berprestasi.
    </p>
  </div>
</section>

<main>
  <div class="container">
    <div class="profile-card">
      <div class="profile-header">
        <div class="profile-logo">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
            <polyline points="9 22 9 12 15 12 15 22"/>
          </svg>
        </div>
        <div class="profile-title">
          <h2>XI Rekayasa Perangkat Lunak</h2>
          <span class="subtitle">SMKN 1 GARUT</span>
        </div>
      </div>

      <div class="profile-grid">
        <div class="info-box">
          <h4>Nama Sekolah</h4>
          <p>SMKN 1 GARUT</p>
        </div>
        <div class="info-box">
          <h4>Nama Kelas</h4>
          <p>XI Rekayasa Perangkat Lunak</p>
        </div>
        <div class="info-box">
          <h4>Program Keahlian</h4>
          <p>Mempelajari Pengembangan Perangkat Lunak</p>
        </div>
        <div class="info-box">
          <h4>Deskripsi Kelas</h4>
          <p>Kelas kita pernah menjuarai Juara 1 Teater dan Juara 2 Padus, serta memiliki banyak murid yang berprestasi.</p>
        </div>
        <div class="info-box">
          <h4>Visi Kelas</h4>
          <p>Berusaha menjadi lebih baik dan mengikuti perlombaan antar jurusan.</p>
        </div>
        <div class="info-box">
          <h4>Topik Pembelajaran</h4>
          <p>Kolaborasi Tim Menggunakan Git dan GitHub</p>
        </div>
      </div>
    </div>

    <div class="visi-misi-card">
      <h3>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"/>
          <circle cx="12" cy="12" r="6"/>
          <circle cx="12" cy="12" r="2"/>
        </svg>
        Visi dan Misi
      </h3>

      <div class="visi-content">
        <h4>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
          </svg>
          Visi
        </h4>
        <p>
          Berusaha menjadi lebih baik dan mengikuti perlombaan antar jurusan.
        </p>
      </div>

      <div class="misi-content">
        <h4>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/>
            <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/>
          </svg>
          Misi
        </h4>
        <ul class="misi-list">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            Mengembangkan kemampuan dalam pengembangan perangkat lunak dan kolaborasi tim
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            Menjaga semangat belajar agar terus menjadi lebih baik
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            Aktif mengikuti perlombaan antar jurusan untuk meningkatkan prestasi
          </li>
        </ul>
      </div>
    </div>

    <div class="section-header">
      <div class="section-eyebrow">// ANGGOTA</div>
      <h3>Kelompok 7</h3>
      <div class="section-line"></div>
    </div>

    <div class="members-grid">
      @foreach($anggotaList as $anggota)
      <a href="{{ route('anggota.show', $anggota['id']) }}" class="member-card">
        <div class="member-avatar avatar-{{ $anggota['id'] }}">
          {{ $anggota['inisial'] }}
        </div>
        <div class="member-name">{{ $anggota['nama'] }}</div>
        <div class="member-role">{{ $anggota['role'] }}</div>
        <div class="member-kelas">{{ $anggota['kelas'] }}</div>
      </a>
      @endforeach
    </div>

    <div class="cta-section">
      <a href="{{ route('home') }}" class="cta-btn">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
          <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>
        </svg>
        Lihat Detail Anggota
      </a>
    </div>
  </div>
</main>

<footer>
  <div class="container">
    <p>&copy; 2026 {{ $kelas }}, {{ $sekolah }} &middot; <span>Kelompok 7</span> &middot; Kolaborasi Tim Menggunakan Git dan GitHub</p>
  </div>
</footer>

<script>
  const galaxyScript = document.createElement('script');
  galaxyScript.type = 'module';
  galaxyScript.src = '/js/galaxy-reactbits.js';
  document.body.appendChild(galaxyScript);

  window.toggleBackground = function () {
    const isActive = document.body.classList.toggle('galaxy-active');
    localStorage.setItem('galaxy', isActive ? 'on' : 'off');
    document.querySelectorAll('[data-bg-toggle]').forEach((button) => {
      button.setAttribute('aria-pressed', String(isActive));
      button.setAttribute('aria-label', isActive ? 'Matikan background Galaxy' : 'Aktifkan background Galaxy');
      button.setAttribute('title', isActive ? 'Matikan background Galaxy' : 'Aktifkan background Galaxy');
    });
  };

  function toggleTheme() {
    const body = document.body;
    const currentTheme = body.getAttribute('data-theme');

    if (currentTheme === 'dark') {
      body.removeAttribute('data-theme');
      localStorage.setItem('theme', 'light');
    } else {
      body.setAttribute('data-theme', 'dark');
      localStorage.setItem('theme', 'dark');
    }
  }

  // Load saved theme
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme === 'dark') {
    document.body.setAttribute('data-theme', 'dark');
  }
</script>

</body>
</html>
