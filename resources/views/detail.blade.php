<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $anggota['nama'] }} - XI Rekayasa Perangkat Lunak</title>
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
    --green-500: #22c55e;
    --orange-500: #f97316;
    --purple-500: #a855f7;
    --red-500: #ef4444;
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

  header, main, footer { position: relative; z-index: 1; }

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

  .header-left {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .back-link {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--text-secondary);
    font-family: var(--font-mono);
    font-size: 13px;
    transition: color 0.2s ease;
  }

  .back-link:hover {
    color: var(--blue-500);
  }

  .back-link svg {
    width: 16px;
    height: 16px;
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

  /* MAIN */
  main {
    padding: 60px 0 100px;
  }

  /* PROFILE CARD */
  .profile-card {
    display: grid;
    grid-template-columns: 300px 1fr;
    gap: 40px;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 18px;
    padding: 40px;
    transition: background 0.3s ease, border-color 0.3s ease;
  }

  @media (max-width: 900px) {
    .profile-card {
      grid-template-columns: 1fr;
      text-align: center;
    }
  }

  .profile-left {
    text-align: center;
  }

  .profile-avatar {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 44px;
    font-weight: 700;
    color: white;
  }

  .avatar-1 { background: linear-gradient(135deg, var(--blue-500), #8b5cf6); }
  .avatar-2 { background: linear-gradient(135deg, var(--blue-400), var(--blue-600)); }
  .avatar-3 { background: linear-gradient(135deg, #f97316, #ef4444); }
  .avatar-4 { background: linear-gradient(135deg, #10b981, #059669); }

  .profile-status {
    font-family: var(--font-mono);
    font-size: 10px;
    color: var(--blue-500);
    background: rgba(59, 130, 246, 0.1);
    border: 1px solid rgba(59, 130, 246, 0.2);
    padding: 6px 14px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 12px;
  }

  .profile-name {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 2px;
  }

  .profile-role {
    font-size: 15px;
    color: var(--blue-500);
    margin-bottom: 2px;
  }

  .profile-kelas {
    font-family: var(--font-mono);
    font-size: 11px;
    color: var(--text-muted);
    margin-bottom: 24px;
  }

  .profile-info {
    display: flex;
    flex-direction: column;
    gap: 10px;
    text-align: left;
  }

  @media (max-width: 900px) {
    .profile-info { align-items: center; }
  }

  .info-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    color: var(--text-secondary);
  }

  .info-item svg {
    width: 16px;
    height: 16px;
    color: var(--blue-500);
    flex-shrink: 0;
  }

  .profile-right {
    display: flex;
    flex-direction: column;
    gap: 28px;
  }

  .section-title {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 14px;
  }

  /* BIO */
  .bio-text {
    color: var(--text-secondary);
    font-size: 14px;
    line-height: 1.8;
  }

  /* STATS */
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
  }

  @media (max-width: 600px) {
    .stats-grid { grid-template-columns: repeat(2, 1fr); }
  }

  .stat-card {
    background: var(--bg-tertiary);
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: 18px;
    text-align: center;
    transition: background 0.3s ease;
  }

  .stat-value {
    font-size: 26px;
    font-weight: 700;
    color: var(--blue-500);
    margin-bottom: 2px;
  }

  .stat-label {
    font-family: var(--font-mono);
    font-size: 9px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--text-muted);
  }

  /* CURRENT */
  .current-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 8px;
  }

  .current-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    background: var(--bg-tertiary);
    border-radius: 8px;
    font-size: 13px;
    color: var(--text-secondary);
    transition: background 0.3s ease;
  }

  .current-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    flex-shrink: 0;
  }

  .dot-green { background: var(--green-500); }
  .dot-blue { background: var(--blue-500); }
  .dot-purple { background: var(--purple-500); }
  .dot-orange { background: var(--orange-500); }

  /* SKILLS */
  .skills-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .skill-item {
    display: flex;
    align-items: center;
    gap: 14px;
  }

  .skill-name {
    width: 110px;
    font-size: 12px;
    font-weight: 500;
    color: var(--text-secondary);
    flex-shrink: 0;
  }

  .skill-bar {
    flex: 1;
    height: 6px;
    background: var(--bg-tertiary);
    border-radius: 3px;
    overflow: hidden;
    transition: background 0.3s ease;
  }

  .skill-progress {
    height: 100%;
    border-radius: 3px;
  }

  .progress-blue { background: var(--blue-500); }
  .progress-green { background: var(--green-500); }
  .progress-orange { background: var(--orange-500); }
  .progress-purple { background: var(--purple-500); }
  .progress-red { background: var(--red-500); }

  .skill-percent {
    width: 36px;
    font-family: var(--font-mono);
    font-size: 11px;
    color: var(--text-muted);
    text-align: right;
  }

  /* TOOLS */
  .tools-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .tool-tag {
    font-family: var(--font-mono);
    font-size: 11px;
    padding: 6px 12px;
    border-radius: 6px;
    background: var(--bg-tertiary);
    border: 1px solid var(--border);
    color: var(--text-secondary);
    transition: background 0.3s ease;
  }

  /* PRESTASI */
  .prestasi-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .prestasi-card {
    background: var(--bg-tertiary);
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 18px;
    display: flex;
    gap: 16px;
    align-items: flex-start;
    transition: background 0.3s ease;
  }

  @media (max-width: 600px) {
    .prestasi-card { flex-direction: column; }
  }

  .prestasi-badge {
    width: 52px;
    height: 52px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
    color: white;
    flex-shrink: 0;
  }

  .badge-1 { background: linear-gradient(135deg, #f59e0b, #d97706); }
  .badge-2 { background: linear-gradient(135deg, #6b7280, #4b5563); }
  .badge-3 { background: linear-gradient(135deg, #b45309, #92400e); }

  .prestasi-content h4 {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 2px;
  }

  .prestasi-content p {
    font-size: 13px;
    color: var(--text-secondary);
    line-height: 1.6;
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

<canvas id="galaxy-background" aria-hidden="true"></canvas>

<header>
  <div class="container">
    <div class="header-inner">
      <div class="header-left">
        <a href="{{ route('home') }}" class="back-link">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 12H5M12 19l-7-7 7-7"/>
          </svg>
          Kembali
        </a>
      </div>
      <div class="header-actions">
        <div class="nav-badge">Profile Anggota</div>
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

<main>
  <div class="container">
    <div class="profile-card">
      <div class="profile-left">
        <div class="profile-avatar avatar-{{ $anggota['id'] }}">
          {{ $anggota['inisial'] }}
        </div>
        <div class="profile-status">{{ $anggota['status'] }}</div>
        <div class="profile-name">{{ $anggota['nama'] }}</div>
        <div class="profile-role">{{ $anggota['role'] }}</div>
        <div class="profile-kelas">{{ $anggota['kelas'] }} - {{ $anggota['sekolah'] }}</div>

        <div class="profile-info">
          <div class="info-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
            {{ $anggota['lokasi'] }}
          </div>
          <div class="info-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
              <line x1="16" y1="2" x2="16" y2="6"/>
              <line x1="8" y1="2" x2="8" y2="6"/>
              <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            Tanggal Lahir: {{ $anggota['tanggal_lahir'] ?? '-' }}
          </div>
          <div class="info-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
              <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
            </svg>
            {{ $anggota['jurusan'] }}
          </div>
          <div class="info-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.74 19.74 0 0 1 3.1 5.18 2 2 0 0 1 5.11 3h3a2 2 0 0 1 2 1.72l.45 2.07a2 2 0 0 1-.57 1.9L8.7 9.58a16 16 0 0 0 6.7 6.7l.89-.89a2 2 0 0 1 1.9-.57l2.07.45A2 2 0 0 1 22 16.92z"/>
            </svg>
            {{ $anggota['no_hp'] ?? '-' }}
          </div>
          <div class="info-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
              <polyline points="22,6 12,13 2,6"/>
            </svg>
            {{ $anggota['email'] }}
          </div>
          <div class="info-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
              <circle cx="12" cy="12" r="4"/>
              <circle cx="18" cy="6" r="1" fill="currentColor" stroke="none"/>
            </svg>
            {{ $anggota['instagram'] ?? '-' }}
          </div>
          <div class="info-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
              <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
            {{ $anggota['alamat_sekolah'] ?? $anggota['sekolah'] }}
          </div>
          <div class="info-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
            </svg>
            <a href="{{ $anggota['github'] ?? '#' }}" target="_blank" rel="noopener noreferrer">GitHub Profile</a>
          </div>
        </div>
      </div>

      <div class="profile-right">
        <div>
          <h3 class="section-title">Tentang</h3>
          <p class="bio-text">{{ $anggota['bio'] }}</p>
        </div>

        <div>
          <h3 class="section-title">Statistik</h3>
          <div class="stats-grid">
            <div class="stat-card">
              <div class="stat-value">{{ $anggota['stats']['juara'] }}</div>
              <div class="stat-label">Juara</div>
            </div>
            <div class="stat-card">
              <div class="stat-value">{{ $anggota['stats']['lomba'] }}</div>
              <div class="stat-label">Lomba</div>
            </div>
            <div class="stat-card">
              <div class="stat-value">{{ $anggota['stats']['bidang'] }}</div>
              <div class="stat-label">Bidang</div>
            </div>
            <div class="stat-card">
              <div class="stat-value">{{ $anggota['stats']['tahun'] }}</div>
              <div class="stat-label">Tahun</div>
            </div>
          </div>
        </div>

        <div>
          <h3 class="section-title">Sedang Dipelajari</h3>
          <ul class="current-list">
            @foreach($anggota['saat_ini'] as $saat)
            <li class="current-item">
              <span class="current-dot dot-{{ $saat['color'] }}"></span>
              {{ $saat['text'] }}
            </li>
            @endforeach
          </ul>
        </div>

        <div>
          <h3 class="section-title">Skill</h3>
          <div class="skills-list">
            @foreach($anggota['skill'] as $skill)
            <div class="skill-item">
              <span class="skill-name">{{ $skill['nama'] }}</span>
              <div class="skill-bar">
                <div class="skill-progress progress-{{ $skill['color'] }}" style="width: {{ $skill['persen'] }}%"></div>
              </div>
              <span class="skill-percent">{{ $skill['persen'] }}%</span>
            </div>
            @endforeach
          </div>
        </div>

        <div>
          <h3 class="section-title">Tools</h3>
          <div class="tools-grid">
            @foreach($anggota['tools'] as $tool)
            <span class="tool-tag">{{ $tool }}</span>
            @endforeach
          </div>
        </div>

        @if(count($anggota['prestasi']) > 0)
        <div>
          <h3 class="section-title">Prestasi</h3>
          <div class="prestasi-list">
            @foreach($anggota['prestasi'] as $pres)
            <div class="prestasi-card">
              <div class="prestasi-badge badge-{{ $pres['juara'] }}">
                {{ $pres['badge'] }}
              </div>
              <div class="prestasi-content">
                <h4>{{ $pres['nama'] }}</h4>
                <p>{{ $pres['deskripsi'] }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif
      </div>
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
