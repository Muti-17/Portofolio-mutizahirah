<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Portfolio — Muti Zahirah</title>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet"/>
<style>
  :root {
    --bg-base: #07101f;
    --bg-sec: #0b1628;
    --bg-card: rgba(255,255,255,0.035);
    --blue: #4f8ef7;
    --cyan: #38bdf8;
    --blue-glow: rgba(79,142,247,0.35);
    --text: #e2eaf8;
    --muted: #7a93b8;
    --border: rgba(79,142,247,0.18);
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body {
    font-family: 'Outfit', sans-serif;
    background: var(--bg-base);
    color: var(--text);
    overflow-x: hidden;
    cursor: none;
  }

  .cursor {
    width: 12px; height: 12px;
    background: var(--blue);
    border-radius: 50%;
    position: fixed; top: 0; left: 0;
    pointer-events: none; z-index: 9999;
    transition: transform 0.15s ease;
    mix-blend-mode: screen;
  }
  .cursor-ring {
    width: 36px; height: 36px;
    border: 1.5px solid rgba(79,142,247,0.5);
    border-radius: 50%;
    position: fixed; top: 0; left: 0;
    pointer-events: none; z-index: 9998;
    transition: all 0.25s ease;
  }

  body::before {
    content: '';
    position: fixed; inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
    opacity: 0.4;
    pointer-events: none;
    z-index: 1;
  }

  .bg-blob {
    position: fixed;
    border-radius: 50%;
    filter: blur(120px);
    pointer-events: none;
    z-index: 0;
    animation: blobFloat 10s ease-in-out infinite alternate;
  }
  .blob1 { width: 500px; height: 500px; background: rgba(79,142,247,0.07); top: -150px; left: -100px; }
  .blob2 { width: 400px; height: 400px; background: rgba(56,189,248,0.05); bottom: 100px; right: -80px; animation-delay: -4s; }
  .blob3 { width: 300px; height: 300px; background: rgba(79,142,247,0.06); top: 40%; left: 40%; animation-delay: -7s; }
  @keyframes blobFloat {
    from { transform: translate(0,0) scale(1); }
    to { transform: translate(30px, 40px) scale(1.08); }
  }

  nav {
    position: fixed; top: 0; left: 0; right: 0;
    z-index: 100;
    display: flex; align-items: center; justify-content: space-between;
    padding: 18px 60px;
    background: rgba(7,16,31,0.7);
    backdrop-filter: blur(20px);
    border-bottom: 1px solid var(--border);
  }
  .nav-logo {
    font-family: 'Syne', sans-serif;
    font-weight: 800; font-size: 1.25rem;
    background: linear-gradient(90deg, var(--blue), var(--cyan));
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    letter-spacing: -0.02em;
  }
  .nav-links { display: flex; gap: 36px; list-style: none; }
  .nav-links a {
    color: var(--muted); text-decoration: none;
    font-size: 0.9rem; font-weight: 500;
    letter-spacing: 0.04em;
    transition: color 0.2s;
    position: relative;
  }
  .nav-links a::after {
    content: ''; position: absolute; bottom: -4px; left: 0;
    width: 0; height: 1.5px;
    background: var(--blue);
    transition: width 0.25s ease;
  }
  .nav-links a:hover { color: var(--text); }
  .nav-links a:hover::after { width: 100%; }

  section { position: relative; z-index: 2; }

  #hero {
    min-height: 100vh;
    display: flex; align-items: center;
    padding: 120px 60px 80px;
    overflow: hidden;
  }
  .hero-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(7,16,31,0.9) 40%, rgba(11,22,40,0.75) 100%);
    z-index: 1;
  }
  .hero-grid-bg {
    position: absolute; inset: 0;
    background-image:
      linear-gradient(rgba(79,142,247,0.06) 1px, transparent 1px),
      linear-gradient(90deg, rgba(79,142,247,0.06) 1px, transparent 1px);
    background-size: 60px 60px;
    z-index: 0;
  }
  .hero-inner {
    position: relative; z-index: 2;
    display: flex; align-items: center;
    justify-content: space-between;
    width: 100%; max-width: 1200px; margin: 0 auto;
    gap: 60px;
  }
  .hero-left { flex: 1; }
  .hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(79,142,247,0.1);
    border: 1px solid rgba(79,142,247,0.25);
    border-radius: 20px;
    padding: 6px 16px;
    font-size: 0.8rem; color: var(--cyan); letter-spacing: 0.06em;
    margin-bottom: 24px;
    animation: fadeUp 0.7s ease both;
  }
  .hero-badge span { width: 7px; height: 7px; background: var(--cyan); border-radius: 50%; animation: pulse 2s infinite; }
  @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.4;transform:scale(0.8)} }
  .hero-name {
    font-family: 'Syne', sans-serif;
    font-size: clamp(2.6rem, 5vw, 4rem);
    font-weight: 800; line-height: 1.1;
    letter-spacing: -0.03em; margin-bottom: 12px;
    background: linear-gradient(135deg, #e2eaf8 30%, var(--blue) 80%, var(--cyan));
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    animation: fadeUp 0.8s 0.1s ease both;
  }
  .hero-title {
    font-size: 1.1rem; color: var(--cyan);
    font-weight: 500; margin-bottom: 20px;
    letter-spacing: 0.02em;
    animation: fadeUp 0.8s 0.2s ease both;
  }
  .hero-desc {
    font-size: 1rem; color: var(--muted);
    line-height: 1.75; max-width: 480px; margin-bottom: 36px;
    animation: fadeUp 0.8s 0.3s ease both;
  }
  .hero-btns {
    display: flex; gap: 16px; flex-wrap: wrap;
    animation: fadeUp 0.8s 0.4s ease both;
  }
  .btn-primary {
    padding: 13px 28px; border-radius: 8px;
    background: linear-gradient(135deg, var(--blue), var(--cyan));
    color: #fff; font-weight: 600; font-size: 0.92rem;
    text-decoration: none; border: none; cursor: pointer;
    box-shadow: 0 0 24px rgba(79,142,247,0.35);
    transition: all 0.25s ease; letter-spacing: 0.02em;
  }
  .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 0 40px rgba(79,142,247,0.55); }
  .btn-ghost {
    padding: 13px 28px; border-radius: 8px;
    background: transparent; color: var(--text);
    font-weight: 600; font-size: 0.92rem;
    text-decoration: none; border: 1.5px solid var(--border); cursor: pointer;
    transition: all 0.25s ease;
  }
  .btn-ghost:hover { border-color: var(--blue); color: var(--blue); background: rgba(79,142,247,0.06); }

  /* ============ PHOTO — FIXED ============ */
  .hero-right { flex-shrink: 0; }

  .photo-frame {
    position: relative;
    width: 260px;
    height: 340px;
    animation: fadeUp 0.9s 0.3s ease both;
  }

  /* gradient border wrapper */
  .photo-frame::before {
    content: '';
    position: absolute; inset: -2px;
    border-radius: 26px;
    background: linear-gradient(135deg, var(--blue), var(--cyan), transparent 60%);
    z-index: 0;
    opacity: 0.8;
  }

  /* outer pulse ring */
  .photo-frame::after {
    content: '';
    position: absolute; inset: -12px;
    border-radius: 32px;
    border: 1px solid rgba(79,142,247,0.15);
    z-index: 0;
    animation: framePulse 3s ease-in-out infinite;
  }
  @keyframes framePulse {
    0%,100% { box-shadow: 0 0 0 rgba(79,142,247,0); }
    50%      { box-shadow: 0 0 30px rgba(79,142,247,0.2); }
  }

  /* inner container — MUST match frame exactly */
  .photo-inner {
    position: relative; z-index: 1;
    width: 100%; height: 100%;
    border-radius: 24px;
    overflow: hidden;
    background: linear-gradient(135deg, #0d1b2a, #1b2a4a);
    border: 1px solid rgba(255,255,255,0.06);
  }

  /* image fills the frame perfectly */
  .photo-inner img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center top;
    display: block;
    border-radius: 24px;
  }

  /* placeholder only shows when no img */
  .photo-placeholder {
    position: absolute; inset: 0;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    gap: 12px; color: var(--muted);
  }
  .photo-placeholder svg { opacity: 0.3; }
  .photo-placeholder p { font-size: 0.8rem; opacity: 0.5; text-align: center; line-height: 1.5; }

  /* hide placeholder when real img loaded */
  .photo-inner img ~ .photo-placeholder { display: none; }
  /* ======================================= */

  .section-wrap { max-width: 1200px; margin: 0 auto; padding: 100px 60px; }
  .section-label {
    font-size: 0.78rem; color: var(--cyan);
    letter-spacing: 0.14em; text-transform: uppercase;
    font-weight: 600; margin-bottom: 12px;
    display: flex; align-items: center; gap: 10px;
  }
  .section-label::before { content: ''; width: 28px; height: 1.5px; background: var(--cyan); }
  .section-title {
    font-family: 'Syne', sans-serif;
    font-size: clamp(1.8rem, 3vw, 2.6rem);
    font-weight: 800; line-height: 1.15;
    letter-spacing: -0.02em; margin-bottom: 16px;
  }
  .section-sub { color: var(--muted); font-size: 1rem; max-width: 560px; line-height: 1.7; margin-bottom: 60px; }

  .divider {
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--border), transparent);
    margin: 0 60px;
  }

  #about { background: var(--bg-sec); }
  .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .about-text p { color: var(--muted); line-height: 1.8; font-size: 1rem; margin-bottom: 16px; }
  .about-text p span { color: var(--text); font-weight: 500; }
  .about-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
  .stat-card {
    background: var(--bg-card); border: 1px solid var(--border);
    border-radius: 14px; padding: 24px 20px;
    backdrop-filter: blur(12px); transition: all 0.3s ease; text-align: center;
  }
  .stat-card:hover { border-color: rgba(79,142,247,0.4); box-shadow: 0 0 24px rgba(79,142,247,0.12); transform: translateY(-3px); }
  .stat-num {
    font-family: 'Syne', sans-serif; font-size: 2rem; font-weight: 800;
    background: linear-gradient(90deg, var(--blue), var(--cyan));
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    line-height: 1; margin-bottom: 6px;
  }
  .stat-label { font-size: 0.82rem; color: var(--muted); }

  .timeline { position: relative; padding-left: 30px; }
  .timeline::before {
    content: ''; position: absolute; left: 0; top: 8px; bottom: 8px;
    width: 1.5px;
    background: linear-gradient(to bottom, var(--blue), var(--cyan), transparent);
  }
  .timeline-item { position: relative; margin-bottom: 36px; }
  .timeline-dot {
    position: absolute; left: -36px; top: 6px;
    width: 13px; height: 13px; border-radius: 50%;
    background: var(--bg-base); border: 2px solid var(--blue);
    box-shadow: 0 0 12px rgba(79,142,247,0.5);
  }
  .timeline-card {
    background: var(--bg-card); border: 1px solid var(--border);
    border-radius: 14px; padding: 24px 28px;
    backdrop-filter: blur(12px); transition: all 0.3s ease;
  }
  .timeline-card:hover { border-color: rgba(79,142,247,0.35); box-shadow: 0 4px 30px rgba(79,142,247,0.1); transform: translateX(4px); }
  .tl-header { display: flex; align-items: flex-start; justify-content: space-between; gap: 12px; margin-bottom: 10px; flex-wrap: wrap; }
  .tl-title { font-family: 'Syne', sans-serif; font-weight: 700; font-size: 1rem; }
  .tl-badge {
    background: rgba(79,142,247,0.12); border: 1px solid rgba(79,142,247,0.2);
    border-radius: 20px; padding: 3px 12px;
    font-size: 0.75rem; color: var(--cyan); white-space: nowrap;
  }
  .tl-org { font-size: 0.85rem; color: var(--blue); margin-bottom: 8px; }
  .tl-desc { font-size: 0.9rem; color: var(--muted); line-height: 1.7; }
  .tl-link {
    display: inline-flex; align-items: center; gap: 6px;
    margin-top: 12px; font-size: 0.85rem; color: var(--cyan);
    text-decoration: none; font-weight: 500; transition: gap 0.2s;
  }
  .tl-link:hover { gap: 10px; }

  #projects { background: var(--bg-sec); }
  .projects-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
  .project-card {
    background: var(--bg-card); border: 1px solid var(--border);
    border-radius: 16px; padding: 28px 24px;
    backdrop-filter: blur(14px); transition: all 0.3s ease;
    display: flex; flex-direction: column;
    position: relative; overflow: hidden;
  }
  .project-card::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; height: 2px;
    background: linear-gradient(90deg, var(--blue), var(--cyan));
    opacity: 0; transition: opacity 0.3s;
  }
  .project-card:hover { border-color: rgba(79,142,247,0.35); box-shadow: 0 8px 40px rgba(79,142,247,0.12); transform: translateY(-5px); }
  .project-card:hover::before { opacity: 1; }
  .project-icon {
    width: 44px; height: 44px; border-radius: 10px;
    background: rgba(79,142,247,0.12); border: 1px solid rgba(79,142,247,0.2);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.3rem; margin-bottom: 18px;
  }
  .project-name { font-family: 'Syne', sans-serif; font-weight: 700; font-size: 1rem; margin-bottom: 10px; }
  .project-desc { font-size: 0.88rem; color: var(--muted); line-height: 1.7; flex: 1; margin-bottom: 18px; }
  .project-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 20px; }
  .tag {
    background: rgba(79,142,247,0.08); border: 1px solid rgba(79,142,247,0.15);
    border-radius: 20px; padding: 3px 11px; font-size: 0.75rem; color: var(--muted);
  }
  .project-link {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: 0.85rem; color: var(--blue); font-weight: 600;
    text-decoration: none; transition: gap 0.2s;
  }
  .project-link:hover { gap: 10px; color: var(--cyan); }

  .skills-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
  .skill-group-title {
    font-family: 'Syne', sans-serif; font-size: 1rem; font-weight: 700;
    margin-bottom: 18px; color: var(--cyan);
    display: flex; align-items: center; gap: 10px;
  }
  .skill-group-title::after { content: ''; flex: 1; height: 1px; background: var(--border); }
  .skill-tags { display: flex; flex-wrap: wrap; gap: 10px; }
  .skill-tag {
    background: var(--bg-card); border: 1px solid var(--border);
    border-radius: 8px; padding: 8px 16px;
    font-size: 0.88rem; color: var(--text); font-weight: 500;
    backdrop-filter: blur(8px); transition: all 0.25s; cursor: default;
  }
  .skill-tag:hover { border-color: var(--blue); color: var(--blue); box-shadow: 0 0 16px rgba(79,142,247,0.15); transform: translateY(-2px); }

  #contact { background: var(--bg-sec); }
  .contact-inner { text-align: center; }
  .contact-inner .section-label { justify-content: center; }
  .contact-inner .section-label::before { display: none; }
  .contact-inner .section-sub { margin-left: auto; margin-right: auto; text-align: center; }
  .social-links { display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin-bottom: 56px; }
  .social-btn {
    display: flex; align-items: center; gap: 10px;
    background: var(--bg-card); border: 1px solid var(--border);
    border-radius: 12px; padding: 14px 24px;
    color: var(--text); text-decoration: none;
    font-size: 0.9rem; font-weight: 500;
    backdrop-filter: blur(12px); transition: all 0.3s ease;
  }
  .social-btn:hover { border-color: var(--blue); color: var(--blue); box-shadow: 0 0 28px rgba(79,142,247,0.2); transform: translateY(-3px); }
  .social-btn svg { flex-shrink: 0; }

  .contact-form { max-width: 560px; margin: 0 auto; display: flex; flex-direction: column; gap: 16px; }
  .contact-form input, .contact-form textarea {
    width: 100%; background: var(--bg-card); border: 1px solid var(--border);
    border-radius: 10px; padding: 14px 18px; color: var(--text);
    font-family: 'Outfit', sans-serif; font-size: 0.92rem;
    backdrop-filter: blur(8px); outline: none; transition: border-color 0.25s; resize: none;
  }
  .contact-form input::placeholder, .contact-form textarea::placeholder { color: var(--muted); }
  .contact-form input:focus, .contact-form textarea:focus { border-color: var(--blue); }
  .contact-form textarea { height: 130px; }

  footer {
    position: relative; z-index: 2; text-align: center;
    padding: 36px 60px; color: var(--muted); font-size: 0.85rem;
    border-top: 1px solid var(--border);
  }
  footer span { color: var(--blue); }

  .reveal { opacity: 0; transform: translateY(28px); transition: opacity 0.65s ease, transform 0.65s ease; }
  .reveal.visible { opacity: 1; transform: translateY(0); }
  @keyframes fadeUp { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: translateY(0); } }

  @media (max-width: 900px) {
    nav { padding: 16px 24px; }
    .nav-links { display: none; }
    #hero { padding: 110px 24px 60px; }
    .hero-inner { flex-direction: column-reverse; gap: 40px; }
    .photo-frame { width: 200px; height: 260px; }
    .section-wrap { padding: 70px 24px; }
    .about-grid { grid-template-columns: 1fr; }
    .projects-grid { grid-template-columns: 1fr; }
    .skills-grid { grid-template-columns: 1fr; }
    .divider { margin: 0 24px; }
  }
</style>
</head>
<body>

<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>
<div class="bg-blob blob1"></div>
<div class="bg-blob blob2"></div>
<div class="bg-blob blob3"></div>

<nav>
  <div class="nav-logo">〈 Portofolio 〉</div>
  <ul class="nav-links">
    <li><a href="#about">Tentang</a></li>
    <li><a href="#experience">Pengalaman</a></li>
    <li><a href="#projects">Proyek</a></li>
    <li><a href="#skills">Keahlian</a></li>
    <li><a href="#contact">Kontak</a></li>
  </ul>
</nav>

<section id="hero">
  <div class="hero-overlay"></div>
  <div class="hero-grid-bg"></div>
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-badge"><span></span>Tersedia untuk Kolaborasi &amp; Freelance</div>
      <h1 class="hero-name">Halo, Saya<br>Muti Zahirah 👋</h1>
      <p class="hero-title">RPL Graduate · Penulis Lepas · Junior Developer</p>
      <p class="hero-desc">
        Siswa SMK jurusan Rekayasa Perangkat Lunak yang akan segera lulus. 
        Saya percaya bahwa teknologi dan kreativitas bisa berjalan beriringan — 
        dari baris kode hingga rangkaian kata.
      </p>
      <div class="hero-btns">
        <a href="#projects" class="btn-primary">Lihat Proyek →</a>
        <a href="#contact" class="btn-ghost">Hubungi Saya</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="photo-frame">
        <div class="photo-inner">
          <!-- ✅ Ganti "foto.jpeg" dengan nama file foto kamu -->
          <img src="foto.jpeg" alt="Muti Zahirah" />
          <div class="photo-placeholder">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#4f8ef7" stroke-width="1.2">
              <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
            </svg>
            <p>Upload foto kamu<br/>di sini</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section id="about">
  <div class="section-wrap">
    <div class="about-grid reveal">
      <div class="about-text">
        <div class="section-label">Tentang Saya</div>
        <h2 class="section-title">Sedikit Cerita<br/>Tentang Saya</h2>
        <p>Saya adalah siswa <span>SMKN 1 Lemahsugih jurusan RPL</span> yang akan segera lulus. Selain belajar coding, saya aktif sebagai <span>penulis lepas</span> dan telah menerbitkan <span>1 buku di tahun 2025</span>.</p>
        <p>Saya membuka <span>jasa penulisan proposal bisnis dan laporan</span> yang telah melayani lebih dari <span>50 klien</span> — mayoritas pelajar dan mahasiswa. Bagi saya, setiap tulisan adalah solusi.</p>
        <p>Saya juga punya pengalaman nyata di dunia bisnis: mulai dari <span>PKL 4 bulan</span> di instansi pemerintah hingga <span>berjualan 50 pcs dalam 3 hari</span> di proyek bisnis kelas.</p>
      </div>
      <div class="about-stats">
        <div class="stat-card"><div class="stat-num">50+</div><div class="stat-label">Klien Penulisan</div></div>
        <div class="stat-card"><div class="stat-num">1</div><div class="stat-label">Buku Diterbitkan</div></div>
        <div class="stat-card"><div class="stat-num">4</div><div class="stat-label">Bulan PKL</div></div>
        <div class="stat-card"><div class="stat-num">✓</div><div class="stat-label">UKK Kompeten</div></div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section id="experience">
  <div class="section-wrap">
    <div class="reveal">
      <div class="section-label">Perjalanan</div>
      <h2 class="section-title">Pengalaman Saya</h2>
      <p class="section-sub">Kumpulan pengalaman nyata yang membentuk saya — dari bangku sekolah hingga dunia kerja.</p>
    </div>
    <div class="timeline">
      <div class="timeline-item reveal">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="tl-header"><div class="tl-title">💻 UKK — Aplikasi Perpustakaan Digital Berbasis Web</div><div class="tl-badge">Kompeten ✓</div></div>
          <div class="tl-org">SMKN 1 Lemahsugih · April 2025</div>
          <div class="tl-desc">Mengembangkan aplikasi perpustakaan digital berbasis web sebagai proyek UKK. Fitur mencakup katalog buku, manajemen pengguna, dan sistem peminjaman.</div>
          <a href="https://github.com/[USERNAME]" target="_blank" class="tl-link">Lihat di GitHub →</a>
        </div>
      </div>
      <div class="timeline-item reveal">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="tl-header"><div class="tl-title">🏛️ PKL — Dinas Arsip dan Perpustakaan</div><div class="tl-badge">4 Bulan</div></div>
          <div class="tl-org">Instansi Pemerintah · 2024</div>
          <div class="tl-desc">Magang selama 4 bulan di Dinas Arsip dan Perpustakaan. Pengalaman dalam pengelolaan data, layanan digital, dan lingkungan kerja profesional di sektor publik.</div>
        </div>
      </div>
      <div class="timeline-item reveal">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="tl-header"><div class="tl-title">✍️ Penulis Lepas & Jasa Penulisan</div><div class="tl-badge">50+ Klien</div></div>
          <div class="tl-org">Freelance · 2024–Sekarang</div>
          <div class="tl-desc">Menerbitkan 1 buku di tahun 2025 dan membuka jasa penulisan proposal bisnis serta laporan. Melayani 50+ klien dari kalangan pelajar dan mahasiswa.</div>
        </div>
      </div>
      <div class="timeline-item reveal">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="tl-header"><div class="tl-title">📦 Proyek Bisnis Kelas 11</div><div class="tl-badge">50 pcs / 3 hari</div></div>
          <div class="tl-org">SMKN 1 Lemahsugih · Kelas 11</div>
          <div class="tl-desc">Berjualan kelompok dan berhasil menjual ±50 pcs dalam 3 hari. Menyusun proposal bisnis dengan analisis SWOT dan presentasi di depan kelas.</div>
        </div>
      </div>
      <div class="timeline-item reveal">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="tl-header"><div class="tl-title">🛍️ P5 — Bazar Kewirausahaan</div><div class="tl-badge">Kegiatan Sekolah</div></div>
          <div class="tl-org">SMKN 1 Lemahsugih</div>
          <div class="tl-desc">Berpartisipasi dalam bazar kewirausahaan P5. Menerapkan skill pemasaran dan pelayanan pelanggan secara langsung di lingkungan sekolah.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section id="projects">
  <div class="section-wrap">
    <div class="reveal">
      <div class="section-label">Karya</div>
      <h2 class="section-title">Proyek Saya</h2>
      <p class="section-sub">Beberapa hal yang pernah saya kerjakan — dari aplikasi web hingga karya tulis.</p>
    </div>
    <div class="projects-grid">
      <div class="project-card reveal">
        <div class="project-icon">📚</div>
        <div class="project-name">Aplikasi Perpustakaan Digital</div>
        <div class="project-desc">Aplikasi web perpustakaan digital untuk UKK. Dilengkapi katalog buku, sistem peminjaman, dan manajemen pengguna.</div>
        <div class="project-tags"><span class="tag">HTML</span><span class="tag">CSS</span><span class="tag">JavaScript</span><span class="tag">PHP</span></div>
        <a href="https://github.com/[USERNAME]" target="_blank" class="project-link">GitHub →</a>
      </div>
      <div class="project-card reveal">
        <div class="project-icon">✍️</div>
        <div class="project-name">Jasa Penulisan Profesional</div>
        <div class="project-desc">Layanan penulisan proposal bisnis, laporan, dan dokumen akademik. Melayani 50+ klien dari kalangan pelajar dan mahasiswa.</div>
        <div class="project-tags"><span class="tag">Writing</span><span class="tag">Business</span><span class="tag">Freelance</span><span class="tag">SWOT</span></div>
        <a href="#contact" class="project-link">Pesan Sekarang →</a>
      </div>
      <div class="project-card reveal">
        <div class="project-icon">📖</div>
        <div class="project-name">Buku Karya Pertama</div>
        <div class="project-desc">Buku yang diterbitkan pada tahun 2025 — hasil dari dedikasi sebagai penulis muda yang terus memotivasi untuk berkarya.</div>
        <div class="project-tags"><span class="tag">Published 2025</span><span class="tag">Writing</span><span class="tag">Creative</span></div>
        <a href="#contact" class="project-link">Info Lebih Lanjut →</a>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section id="skills">
  <div class="section-wrap">
    <div class="reveal">
      <div class="section-label">Kemampuan</div>
      <h2 class="section-title">Keahlian Saya</h2>
      <p class="section-sub">Kombinasi skill teknis dari jurusan RPL dan kemampuan non-teknis yang diasah lewat pengalaman nyata.</p>
    </div>
    <div class="skills-grid reveal">
      <div>
        <div class="skill-group-title">⚙️ Teknis</div>
        <div class="skill-tags">
          <span class="skill-tag">HTML / CSS</span>
          <span class="skill-tag">JavaScript</span>
          <span class="skill-tag">PHP (Dasar)</span>
          <span class="skill-tag">Microsoft Office</span>
          <span class="skill-tag">AI Tools</span>
          <span class="skill-tag">Basic Coding (RPL)</span>
          <span class="skill-tag">Web Development</span>
        </div>
      </div>
      <div>
        <div class="skill-group-title">🌟 Non-Teknis</div>
        <div class="skill-tags">
          <span class="skill-tag">Penulisan Kreatif</span>
          <span class="skill-tag">Proposal Bisnis</span>
          <span class="skill-tag">Analisis SWOT</span>
          <span class="skill-tag">Kewirausahaan</span>
          <span class="skill-tag">Bahasa Inggris</span>
          <span class="skill-tag">Komunikasi</span>
          <span class="skill-tag">Presentasi</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section id="contact">
  <div class="section-wrap">
    <div class="contact-inner">
      <div class="section-label">Kontak</div>
      <h2 class="section-title reveal">Mari Terhubung 🤝</h2>
      <p class="section-sub reveal">Terbuka untuk peluang kolaborasi, freelance, atau sekadar ngobrol santai. Jangan ragu untuk menghubungi!</p>
      <div class="social-links reveal">
        <a href="https://github.com/[USERNAME]" target="_blank" class="social-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
          GitHub
        </a>
        <a href="https://instagram.com/[USERNAME]" target="_blank" class="social-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
          Instagram
        </a>
        <a href="https://linkedin.com/in/[USERNAME]" target="_blank" class="social-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
          LinkedIn
        </a>
      </div>
      <form class="contact-form reveal" onsubmit="handleForm(event)">
        <input type="text" placeholder="Nama Kamu" required />
        <input type="email" placeholder="Email Kamu" required />
        <textarea placeholder="Pesan kamu..."></textarea>
        <button type="submit" class="btn-primary" style="border:none;font-family:'Outfit',sans-serif;cursor:pointer;">Kirim Pesan →</button>
      </form>
    </div>
  </div>
</section>

<footer>
  <span>Muti Zahirah</span> · RPL Graduate, SMKN 1 Lemahsugih 🇮🇩 · Dibuat dengan ☕ &amp; semangat
</footer>

<script>
  const cursor = document.getElementById('cursor');
  const ring = document.getElementById('cursorRing');
  let mx = 0, my = 0, rx = 0, ry = 0;
  document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; });
  function animCursor() {
    cursor.style.left = mx - 6 + 'px'; cursor.style.top = my - 6 + 'px';
    rx += (mx - rx) * 0.15; ry += (my - ry) * 0.15;
    ring.style.left = rx - 18 + 'px'; ring.style.top = ry - 18 + 'px';
    requestAnimationFrame(animCursor);
  }
  animCursor();
  document.querySelectorAll('a, button, .skill-tag, .stat-card').forEach(el => {
    el.addEventListener('mouseenter', () => { cursor.style.transform = 'scale(2)'; ring.style.transform = 'scale(1.4)'; });
    el.addEventListener('mouseleave', () => { cursor.style.transform = 'scale(1)'; ring.style.transform = 'scale(1)'; });
  });

  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver(entries => {
    entries.forEach((e, i) => {
      if (e.isIntersecting) setTimeout(() => e.target.classList.add('visible'), i * 80);
    });
  }, { threshold: 0.12 });
  reveals.forEach(r => observer.observe(r));

  function handleForm(e) {
    e.preventDefault();
    const btn = e.target.querySelector('button');
    btn.textContent = 'Terkirim! ✓';
    btn.style.background = 'linear-gradient(135deg, #22c55e, #16a34a)';
    setTimeout(() => { btn.textContent = 'Kirim Pesan →'; btn.style.background = ''; e.target.reset(); }, 3000);
  }
</script>
</body>
</html>