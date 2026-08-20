<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
<title>XI RPL 2 - Kelompok 9 | Profile Anggota</title>
=======
<title>XI Rekayasa Perangkat Lunak - Kelompok 9 | Profile Anggota</title>
>>>>>>> origin/adjie
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

  .sun-icon, .moon-icon {
    display: none;
  }

  [data-theme="dark"] .sun-icon { display: block; }
  [data-theme="dark"] .moon-icon { display: none; }

  /* HERO */
  .hero {
    padding: 70px 0 50px;
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
    font-size: 46px;
    font-weight: 800;
    letter-spacing: -2px;
    margin-bottom: 16px;
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
    font-size: 16px;
    max-width: 550px;
    margin: 0 auto 24px;
    text-align: center;
  }

  .hero-topik {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--font-mono);
    font-size: 12px;
    color: var(--blue-500);
    background: rgba(59, 130, 246, 0.1);
    border: 1px solid rgba(59, 130, 246, 0.2);
    padding: 10px 20px;
    border-radius: 25px;
  }

  .hero-topik svg {
    width: 16px;
    height: 16px;
  }

  /* MAIN */
  main {
    padding: 40px 0 80px;
  }

  /* SECTION */
  .section {
    margin-bottom: 60px;
  }

  .section-header {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 28px;
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

  .section h2 {
    font-size: 22px;
    font-weight: 600;
  }

  .section-line {
    flex: 1;
    height: 1px;
    background: var(--border);
  }

  /* MEMBERS GRID */
  .members-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }

  @media (max-width: 1024px) {
    .members-grid { grid-template-columns: repeat(2, 1fr); }
  }

  @media (max-width: 600px) {
    .members-grid { grid-template-columns: 1fr; }
    .hero h1 { font-size: 32px; }
  }

  .member-card {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 24px 18px;
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
    width: 68px;
    height: 68px;
    border-radius: 50%;
    margin: 0 auto 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: 700;
    color: white;
  }

  .avatar-1 { background: linear-gradient(135deg, var(--blue-500), #8b5cf6); }
  .avatar-2 { background: linear-gradient(135deg, var(--blue-400), var(--blue-600)); }
  .avatar-3 { background: linear-gradient(135deg, #f97316, #ef4444); }
  .avatar-4 { background: linear-gradient(135deg, #10b981, #059669); }

  .member-status {
    font-family: var(--font-mono);
    font-size: 9px;
    color: var(--blue-500);
    background: rgba(59, 130, 246, 0.1);
    border: 1px solid rgba(59, 130, 246, 0.2);
    padding: 4px 10px;
    border-radius: 12px;
    display: inline-block;
    margin-bottom: 10px;
  }

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
    margin-bottom: 12px;
  }

  .member-tags {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 4px;
    margin-bottom: 12px;
  }

  .member-tag {
    font-family: var(--font-mono);
    font-size: 9px;
    padding: 3px 8px;
    border-radius: 6px;
    background: rgba(59, 130, 246, 0.1);
    color: var(--blue-500);
    border: 1px solid rgba(59, 130, 246, 0.2);
  }

  .member-cta {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
    font-family: var(--font-mono);
    font-size: 11px;
    color: var(--text-muted);
    transition: color 0.2s ease;
  }

  .member-card:hover .member-cta {
    color: var(--blue-500);
  }

  .member-cta svg {
    width: 14px;
    height: 14px;
    transition: transform 0.2s ease;
  }

  .member-card:hover .member-cta svg {
    transform: translateX(3px);
  }

  /* GITHUB SECTION */
  .github-section {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 28px;
    margin-top: 32px;
    transition: background 0.3s ease, border-color 0.3s ease;
  }

  .github-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
    flex-wrap: wrap;
    gap: 16px;
  }

  .github-info h3 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 2px;
  }

  .github-info p {
    font-size: 13px;
    color: var(--text-secondary);
  }

  .github-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--font-mono);
    font-size: 12px;
    font-weight: 500;
    padding: 10px 18px;
    border-radius: 8px;
    background: var(--bg-tertiary);
    border: 1px solid var(--border);
    color: var(--text-primary);
    transition: all 0.2s ease;
  }

  .github-btn:hover {
    border-color: var(--blue-500);
    background: rgba(59, 130, 246, 0.1);
  }

  .github-btn svg {
    width: 16px;
    height: 16px;
  }

  .repo-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 14px;
  }

  .repo-card {
    background: var(--bg-tertiary);
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: 18px;
    transition: all 0.2s ease;
  }

  .repo-card:hover {
    border-color: var(--blue-500);
  }

  .repo-name {
    font-family: var(--font-mono);
    font-size: 13px;
    font-weight: 500;
    color: var(--blue-500);
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .repo-name svg {
    width: 14px;
    height: 14px;
  }

  .repo-desc {
    font-size: 12px;
    color: var(--text-secondary);
    margin-bottom: 10px;
  }

  .repo-meta {
    display: flex;
    gap: 14px;
    font-family: var(--font-mono);
    font-size: 10px;
    color: var(--text-muted);
  }

  .repo-lang {
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .lang-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
  }

  /* FOOTER */
  footer {
    border-top: 1px solid var(--border);
    padding: 28px 0;
    text-align: center;
    transition: border-color 0.3s ease;
  }

  footer p {
    font-family: var(--font-mono);
    font-size: 11px;
    color: var(--text-muted);
  }

  footer span {
    color: var(--blue-500);
  }
</style>
</head>
<body>

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
<<<<<<< HEAD
          <div class="brand-name">XI RPL 2</div>
=======
          <div class="brand-name">XI Rekayasa Perangkat Lunak</div>
>>>>>>> origin/adjie
          <div class="brand-sub">Kelompok 9</div>
        </div>
      </div>
      <div class="header-actions">
        <div class="nav-badge">GitHub Collaboration</div>
        <button class="theme-toggle" onclick="toggleTheme()" aria-label="Toggle theme">
          <svg class="sun-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
          <svg class="moon-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>

<section class="hero">
  <div class="container">
<<<<<<< HEAD
    <div class="hero-eyebrow">SMKN 1 Garut</div>
    <h1>Profile <span class="accent">Anggota Tim</span></h1>
    <p class="hero-desc">
      Siswa kelas XI RPL 2 yang sedang belajar kolaborasi tim menggunakan Git dan GitHub.
=======
    <div class="hero-eyebrow">SMKN 1 GARUT</div>
    <h1>Profile <span class="accent">Anggota Tim</span></h1>
    <p class="hero-desc">
      Kelas XI Rekayasa Perangkat Lunak yang berprestasi, pernah juara 1 Teater dan juara 2 Padus, serta memiliki banyak murid berprestasi.
>>>>>>> origin/adjie
    </p>
    <div class="hero-topik">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
      </svg>
      Topik: {{ $topik }}
    </div>
  </div>
</section>

<main>
  <div class="container">
    <div class="section">
      <div class="section-header">
        <div class="section-eyebrow">// DEVELOPER</div>
        <h2>Anggota Tim</h2>
        <div class="section-line"></div>
      </div>

      <div class="members-grid">
        @foreach($anggotaList as $anggota)
        <a href="{{ route('anggota.show', $anggota['id']) }}" class="member-card">
          <div class="member-avatar avatar-{{ $anggota['id'] }}">
            {{ $anggota['inisial'] }}
          </div>
          <div class="member-status">{{ $anggota['status'] }}</div>
          <div class="member-name">{{ $anggota['nama'] }}</div>
          <div class="member-role">{{ $anggota['role'] }}</div>
          <div class="member-kelas">{{ $anggota['kelas'] }}</div>
          <div class="member-tags">
            @foreach(array_slice($anggota['minat'], 0, 2) as $minat)
            <span class="member-tag">{{ $minat }}</span>
            @endforeach
          </div>
          <div class="member-cta">
            Lihat Profile
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </div>
        </a>
        @endforeach
      </div>

      <div class="github-section">
        <div class="github-header">
          <div class="github-info">
            <h3>Repository Tim</h3>
            <p>Kelola project bersama menggunakan Git dan GitHub</p>
          </div>
          <a href="https://github.com/rakaXPPL2/Website-Profil-Kelas-XI-RPL" target="_blank" class="github-btn">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 .5C5.73.5.5 5.73.5 12c0 5.08 3.29 9.39 7.86 10.91.57.1.78-.25.78-.55v-2.15c-3.2.7-3.87-1.36-3.87-1.36-.53-1.34-1.29-1.7-1.29-1.7-1.05-.72.08-.71.08-.71 1.17.08 1.78 1.2 1.78 1.2 1.03 1.77 2.7 1.26 3.36.96.1-.75.4-1.26.73-1.55-2.55-.29-5.23-1.28-5.23-5.68 0-1.26.45-2.28 1.19-3.09-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.18 1.18a11 11 0 0 1 5.79 0c2.2-1.49 3.17-1.18 3.17-1.18.64 1.59.24 2.76.12 3.05.74.81 1.18 1.83 1.18 3.09 0 4.41-2.68 5.38-5.24 5.67.41.36.77 1.06.77 2.14v3.17c0 .3.21.66.79.55A10.52 10.52 0 0 0 23.5 12C23.5 5.73 18.27.5 12 .5Z"/>
            </svg>
            Buka GitHub
          </a>
        </div>
        <div class="repo-grid">
          <div class="repo-card">
            <div class="repo-name">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.4 5.4 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/>
                <path d="M9 18c-4.51 2-5-2-7-2"/>
              </svg>
              rakaXPPL2/Website-Profil-Kelas-XI-RPL
            </div>
<<<<<<< HEAD
            <p class="repo-desc">Repository utama untuk project kelompok 9 XI RPL 2</p>
=======
            <p class="repo-desc">Repository utama untuk project kelompok 9 XI Rekayasa Perangkat Lunak</p>
>>>>>>> origin/adjie
            <div class="repo-meta">
              <span class="repo-lang">
                <span class="lang-dot" style="background: #f1e05a;"></span>
                JavaScript
              </span>
              <span>Star 0</span>
              <span>Fork 0</span>
            </div>
          </div>
          <div class="repo-card">
            <div class="repo-name">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.4 5.4 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/>
                <path d="M9 18c-4.51 2-5-2-7-2"/>
              </svg>
              rakaXPPL2/LKPD-4
            </div>
            <p class="repo-desc">Tugas LKPD 4 - Kolaborasi Tim Menggunakan Git dan GitHub</p>
            <div class="repo-meta">
              <span class="repo-lang">
                <span class="lang-dot" style="background: #563d7c;"></span>
                HTML
              </span>
              <span>Star 0</span>
              <span>Fork 0</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<footer>
  <div class="container">
    <p>&copy; 2026 {{ $kelas }}, {{ $sekolah }} &middot; <span>Kelompok 9</span> &middot; Kolaborasi Tim Menggunakan Git dan GitHub</p>
  </div>
</footer>

<script>
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
