<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Servizi - Chiara Capotorto | Educazione Cinofila</title>
<meta name="description" content="Scopri i servizi di educazione cinofila di Chiara Capotorto: percorsi individuali, educazione base e avanzata, problemi comportamentali, sport cinofili.">
<meta name="keywords" content="educazione cane, addestramento cani, problemi comportamentali cane, dog dance, rally obedience">

<!-- Open Graph -->
<meta property="og:title" content="Servizi - Chiara Capotorto | Educazione Cinofila">
<meta property="og:description" content="Percorsi personalizzati per migliorare la relazione con il tuo cane.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.chiaracapotorto.com/servizi.php">
<meta property="og:image" content="https://www.chiaracapotorto.com/src/img/og-image.jpg">

<script defer src="https://cloud.umami.is/script.js" data-website-id="f141f3dc-ffeb-4a2f-aedd-6ae03608718d"></script>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
  :root {
    --brown-dark: #5C3D2E;
    --brown-mid: #7E5A45;
    --brown-warm: #A0714F;
    --cream: #F5EDE4;
    --cream-light: #FAF7F3;
    --rose: #D4A0A0;
    --rose-light: #F0D5D5;
    --rose-dark: #B87878;
    --sage: #8FA87A;
    --sage-light: #C5D9B0;
    --sage-dark: #5F7A4A;
    --text-dark: #4A2E1F;
    --text-mid: #7E5A45;
    --text-light: #A08570;
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }
  html { scroll-behavior: smooth; }
  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--cream);
    color: var(--text-dark);
    overflow-x: hidden;
    line-height: 1.6;
  }

  /* HEADER */
  header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background: rgba(92, 61, 46, 0.92);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(212, 160, 160, 0.15);
    transition: all 0.3s ease;
  }

  header.scrolled {
    background: rgba(92, 61, 46, 0.98);
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.12);
  }

  nav {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .logo {
    font-family: 'Playfair Display', serif;
    color: var(--cream);
    font-size: 1.4rem;
    font-weight: 700;
    text-decoration: none;
    transition: transform 0.3s ease;
  }

  .logo:hover { transform: scale(1.03); }
  .logo span { color: var(--rose); }

  .nav-left {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .nav-menu {
    display: flex;
    gap: 40px;
    list-style: none;
    align-items: center;
  }

  .nav-menu a {
    color: var(--cream);
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 500;
    letter-spacing: 0.5px;
    opacity: 0.85;
    transition: opacity 0.3s, color 0.3s;
    position: relative;
  }

  .nav-menu a::after {
    content: '';
    position: absolute;
    bottom: -6px;
    left: 0;
    width: 0;
    height: 2px;
    background: var(--rose);
    transition: width 0.3s ease;
  }

  .nav-menu a:hover { opacity: 1; color: var(--rose-light); }
  .nav-menu a:hover::after { width: 100%; }

  .nav-cta {
    background: var(--rose);
    color: var(--brown-dark);
    padding: 12px 28px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    transition: all 0.3s ease;
    border: 2px solid transparent;
  }

  .nav-cta:hover {
    background: var(--rose-dark);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(212, 160, 160, 0.3);
  }

  .menu-toggle {
    display: block;
    background: none;
    border: none;
    cursor: pointer;
    padding: 10px;
    z-index: 1001;
  }

  .hamburger {
    display: flex;
    flex-direction: column;
    gap: 5px;
  }

  .hamburger span {
    display: block;
    width: 24px;
    height: 2px;
    background: var(--cream);
    transition: all 0.3s ease;
  }

  .menu-toggle.active .hamburger span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }
  .menu-toggle.active .hamburger span:nth-child(2) { opacity: 0; }
  .menu-toggle.active .hamburger span:nth-child(3) {
    transform: rotate(-45deg) translate(5px, -5px);
  }

  .mobile-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 20px;
    min-width: 240px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 12px 40px rgba(92, 61, 46, 0.2);
    border: 1px solid rgba(92, 61, 46, 0.1);
    z-index: 999;
    padding: 12px 0;
    flex-direction: column;
    animation: dropdownFade 0.2s ease;
  }

  @keyframes dropdownFade {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .mobile-menu.active { display: flex; }

  .mobile-menu a {
    color: var(--brown-dark);
    text-decoration: none;
    font-size: 0.95rem;
    font-weight: 500;
    padding: 14px 24px;
    transition: all 0.2s;
  }

  .mobile-menu a:hover {
    background: var(--cream);
    color: var(--rose-dark);
  }

  /* PAGE HERO */
  .page-hero {
    padding: 180px 40px 100px;
    background: linear-gradient(135deg, var(--brown-dark) 0%, #4A2E1F 100%);
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .page-hero::before {
    content: '';
    position: absolute;
    top: -20%;
    right: -10%;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(212, 160, 160, 0.12) 0%, transparent 70%);
  }

  .page-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 700;
    color: var(--cream);
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
  }

  .page-hero h1 em {
    font-style: italic;
    color: var(--rose);
  }

  .page-hero p {
    font-size: 1.2rem;
    color: rgba(245, 237, 228, 0.75);
    max-width: 600px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
  }

  /* SERVICES GRID */
  .services-section {
    padding: 100px 40px;
  }

  .services-section:nth-child(odd) {
    background: var(--cream-light);
  }

  .section-container {
    max-width: 1200px;
    margin: 0 auto;
  }

  .section-intro {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 60px;
  }

  .section-intro h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 2.8rem);
    font-weight: 700;
    color: var(--brown-dark);
    margin-bottom: 20px;
  }

  .section-intro h2 em {
    font-style: italic;
    color: var(--brown-warm);
  }

  .section-intro p {
    font-size: 1.1rem;
    color: var(--text-mid);
    line-height: 1.8;
  }

  /* SERVICE CARDS */
  .services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 32px;
  }

  .service-card {
    background: white;
    border-radius: 28px;
    padding: 48px 40px;
    border: 1px solid rgba(92, 61, 46, 0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
  }

  .service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 6px;
    background: linear-gradient(90deg, var(--rose), var(--sage));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
  }

  .service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 24px 64px rgba(92, 61, 46, 0.15);
  }

  .service-card:hover::before {
    transform: scaleX(1);
  }

  .service-emoji {
    font-size: 4rem;
    margin-bottom: 24px;
    display: block;
  }

  .service-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--brown-dark);
    margin-bottom: 8px;
  }

  .service-tag {
    display: inline-block;
    background: var(--sage-light);
    color: var(--sage-dark);
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 20px;
  }

  .service-card p {
    font-size: 1rem;
    color: var(--text-mid);
    line-height: 1.8;
    margin-bottom: 28px;
  }

  .service-features {
    list-style: none;
    margin-bottom: 32px;
  }

  .service-features li {
    font-size: 0.95rem;
    color: var(--text-mid);
    padding: 10px 0;
    padding-left: 32px;
    position: relative;
    border-bottom: 1px solid rgba(92, 61, 46, 0.06);
  }

  .service-features li:last-child {
    border-bottom: none;
  }

  .service-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--sage);
    font-weight: 700;
    font-size: 1.1rem;
  }

  .btn-primary {
    background: var(--rose);
    color: var(--brown-dark);
    padding: 16px 38px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    display: inline-block;
    border: 2px solid var(--rose);
    width: 100%;
    text-align: center;
  }

  .btn-primary:hover {
    background: var(--rose-dark);
    transform: translateY(-3px);
    box-shadow: 0 12px 32px rgba(212, 160, 160, 0.35);
  }

  /* PROCESS SECTION */
  .process-section {
    padding: 100px 40px;
    background: linear-gradient(135deg, var(--brown-dark) 0%, #4A2E1F 100%);
  }

  .process-header {
    text-align: center;
    margin-bottom: 60px;
  }

  .process-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 2.8rem);
    font-weight: 700;
    color: var(--cream);
    margin-bottom: 20px;
  }

  .process-header p {
    font-size: 1.1rem;
    color: rgba(245, 237, 228, 0.7);
    max-width: 600px;
    margin: 0 auto;
  }

  .process-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 32px;
    max-width: 1200px;
    margin: 0 auto;
  }

  .process-step {
    text-align: center;
    position: relative;
  }

  .process-step::after {
    content: '→';
    position: absolute;
    right: -20px;
    top: 40px;
    font-size: 2rem;
    color: var(--rose);
  }

  .process-step:last-child::after {
    display: none;
  }

  .step-number {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid var(--rose);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin: 0 auto 24px;
  }

  .process-step h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
    color: var(--cream);
    margin-bottom: 12px;
  }

  .process-step p {
    font-size: 0.9rem;
    color: rgba(245, 237, 228, 0.65);
    line-height: 1.7;
  }

  /* PRICING INFO */
  .pricing-section {
    padding: 100px 40px;
    background: var(--cream-light);
  }

  .pricing-note {
    background: white;
    border-radius: 24px;
    padding: 48px;
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    box-shadow: 0 8px 32px rgba(92, 61, 46, 0.08);
  }

  .pricing-note h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    color: var(--brown-dark);
    margin-bottom: 24px;
  }

  .pricing-note p {
    font-size: 1.1rem;
    color: var(--text-mid);
    line-height: 1.8;
    margin-bottom: 32px;
  }

  .pricing-benefits {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
    margin-bottom: 32px;
  }

  .pricing-benefit {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 1rem;
    color: var(--text-dark);
  }

  .pricing-benefit span {
    font-size: 1.5rem;
  }

  /* CTA */
  .cta {
    padding: 100px 40px;
    background: linear-gradient(135deg, var(--rose) 0%, var(--rose-dark) 100%);
    text-align: center;
  }

  .cta-content {
    max-width: 700px;
    margin: 0 auto;
  }

  .cta h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--brown-dark);
    margin-bottom: 24px;
  }

  .cta p {
    font-size: 1.1rem;
    color: rgba(74, 46, 31, 0.8);
    margin-bottom: 40px;
  }

  .cta .btn-primary {
    background: var(--brown-dark);
    color: var(--cream);
    border-color: var(--brown-dark);
    width: auto;
    padding: 18px 48px;
  }

  .cta .btn-primary:hover {
    background: #4A2E1F;
    box-shadow: 0 16px 48px rgba(74, 46, 31, 0.3);
  }

  /* FOOTER */
  footer {
    background: var(--brown-dark);
    color: var(--cream);
    padding: 80px 40px 40px;
  }

  .footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr 1fr;
    gap: 60px;
    margin-bottom: 60px;
  }

  .footer-about h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.6rem;
    font-weight: 700;
    margin-bottom: 12px;
  }

  .footer-about h3 span { color: var(--rose); }

  .footer-payoff {
    color: rgba(245, 237, 228, 0.6);
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 24px;
    font-style: italic;
  }

  .social-links {
    display: flex;
    gap: 16px;
    margin-bottom: 32px;
  }

  .social-links a {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    font-size: 1.2rem;
  }

  .social-links a:hover {
    background: var(--rose);
    transform: translateY(-4px);
  }

  .footer-links h4 {
    font-family: 'Playfair Display', serif;
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 20px;
    color: var(--cream);
  }

  .footer-links ul { list-style: none; }
  .footer-links ul li { margin-bottom: 12px; }

  .footer-links ul li a {
    color: rgba(245, 237, 228, 0.7);
    text-decoration: none;
    font-size: 0.9rem;
    transition: color 0.3s ease;
  }

  .footer-links ul li a:hover { color: var(--cream); }

  .footer-newsletter h4 {
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 12px;
    color: var(--cream);
  }

  .footer-newsletter p {
    color: rgba(245, 237, 228, 0.6);
    font-size: 0.85rem;
    line-height: 1.6;
    margin-bottom: 16px;
  }

  .newsletter-link {
    display: inline-block;
    background: var(--rose);
    color: var(--brown-dark);
    padding: 12px 24px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.85rem;
    transition: all 0.3s ease;
  }

  .newsletter-link:hover {
    background: var(--rose-dark);
    transform: translateY(-2px);
  }

  .footer-bottom {
    max-width: 1200px;
    margin: 0 auto;
    padding-top: 40px;
    border-top: 1px solid rgba(245, 237, 228, 0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: rgba(245, 237, 228, 0.5);
    font-size: 0.85rem;
  }

  .footer-bottom-links {
    display: flex;
    gap: 24px;
  }

  .footer-bottom-links a {
    color: rgba(245, 237, 228, 0.5);
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-bottom-links a:hover { color: var(--cream); }

  /* RESPONSIVE */
  @media (max-width: 1024px) {
    .process-steps {
      grid-template-columns: repeat(2, 1fr);
    }

    .process-step::after {
      display: none;
    }

    .footer-content {
      grid-template-columns: repeat(2, 1fr);
    }

    .footer-about {
      grid-column: span 2;
    }
  }

  @media (max-width: 768px) {
    nav { padding: 16px 24px; }

    .page-hero,
    .services-section,
    .process-section,
    .pricing-section {
      padding: 80px 24px;
    }

    .page-hero {
      padding-top: 140px;
    }

    .services-grid {
      grid-template-columns: 1fr;
    }

    .process-steps {
      grid-template-columns: 1fr;
    }

    .pricing-benefits {
      flex-direction: column;
      gap: 20px;
    }

    .footer-content {
      grid-template-columns: 1fr;
      gap: 40px;
    }

    .footer-about { grid-column: span 1; }

    .footer-bottom {
      flex-direction: column;
      gap: 20px;
      text-align: center;
    }
  }
</style>
</head>
<body>

<!-- HEADER -->
<header id="header">
  <nav>
    <div class="nav-left">
      <button class="menu-toggle" id="menuToggle" onclick="toggleMenu()">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
      <a href="/" class="logo">Chiara <span>Capotorto</span></a>
    </div>

    <ul class="nav-menu">
      <li><a href="chi-sono.php">Chi Sono</a></li>
      <li><a href="servizi.php">Servizi</a></li>
      <li><a href="faq.php">FAQ</a></li>
      <li><a href="calendario.php" class="nav-cta">Prenota</a></li>
    </ul>
  </nav>
</header>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
  <a href="/" onclick="toggleMenu()">Home</a>
  <a href="chi-sono.php" onclick="toggleMenu()">Chi Sono</a>
  <a href="servizi.php" onclick="toggleMenu()">Servizi</a>
  <a href="faq.php" onclick="toggleMenu()">FAQ</a>
  <a href="risorse.php" onclick="toggleMenu()">Risorse</a>
  <a href="calendario.php" onclick="toggleMenu()">Prenota</a>
  <a href="iscrizione_newsletter.php" onclick="toggleMenu()">Newsletter</a>
</div>

<!-- PAGE HERO -->
<section class="page-hero">
  <h1>I Miei <em>Servizi</em> 🎓</h1>
  <p>Percorsi personalizzati per ogni cane, ogni famiglia, ogni obiettivo</p>
</section>

<!-- SERVICES -->
<section class="services-section">
  <div class="section-container">
    <div class="section-intro">
      <h2>Come posso <em>aiutarti</em></h2>
      <p>
        Ogni cane è unico e merita un percorso costruito su misura.
        Ecco i servizi che offro, tutti basati su metodi gentili e rispettosi.
      </p>
    </div>

    <div class="services-grid">

      <!-- EDUCAZIONE BASE -->
      <div class="service-card">
        <span class="service-emoji">🎓</span>
        <h3>Educazione Base</h3>
        <span class="service-tag">Cuccioli & Adulti</span>
        <p>
          Le fondamenta per una convivenza serena. Imparerai a comunicare
          con il tuo cane e a gestire le situazioni quotidiane con sicurezza.
        </p>
        <ul class="service-features">
          <li>Richiamo e attenzione</li>
          <li>Passeggiata al guinzaglio</li>
          <li>Gestione degli incontri</li>
          <li>Comandi base utili</li>
          <li>Socializzazione guidata</li>
        </ul>
        <a href="calendario.php" class="btn-primary">Richiedi Info</a>
      </div>

      <!-- EDUCAZIONE AVANZATA -->
      <div class="service-card">
        <span class="service-emoji">🚀</span>
        <h3>Educazione Avanzata</h3>
        <span class="service-tag">Per chi vuole di più</span>
        <p>
          Porta la relazione con il tuo cane al livello successivo.
          Lavoriamo su sfide più complesse e obiettivi ambiziosi.
        </p>
        <ul class="service-features">
          <li>Gestione a distanza</li>
          <li>Controllo in contesti difficili</li>
          <li>Esercizi di problem solving</li>
          <li>Affidabilità avanzata</li>
          <li>Lavoro in ambienti distraenti</li>
        </ul>
        <a href="calendario.php" class="btn-primary">Richiedi Info</a>
      </div>

      <!-- SESSIONI 1:1 -->
      <div class="service-card">
        <span class="service-emoji">👤</span>
        <h3>Sessioni Individuali 1:1</h3>
        <span class="service-tag">Percorsi Personalizzati</span>
        <p>
          Incontri dedicati esclusivamente a te e al tuo cane.
          Il massimo della personalizzazione per risultati ottimali.
        </p>
        <ul class="service-features">
          <li>Analisi approfondita della situazione</li>
          <li>Piano d'azione su misura</li>
          <li>Supporto continuo tra le sessioni</li>
          <li>Video riepilogativi</li>
          <li>Flessibilità di orari e luoghi</li>
        </ul>
        <a href="calendario.php" class="btn-primary">Richiedi Info</a>
      </div>

      <!-- PROBLEMI COMPORTAMENTALI -->
      <div class="service-card">
        <span class="service-emoji">🔧</span>
        <h3>Problemi Comportamentali</h3>
        <span class="service-tag">Interventi Mirati</span>
        <p>
          Paure, ansie, reattività, aggressività... Affrontiamo insieme
          le sfide più complesse con un approccio scientifico e gentile.
        </p>
        <ul class="service-features">
          <li>Valutazione comportamentale completa</li>
          <li>Piano di modificazione comportamentale</li>
          <li>Gestione di paure e fobie</li>
          <li>Lavoro sulla reattività</li>
          <li>Supporto alla famiglia</li>
        </ul>
        <a href="calendario.php" class="btn-primary">Richiedi Info</a>
      </div>

      <!-- SPORT CINOFILI -->
      <div class="service-card">
        <span class="service-emoji">🏆</span>
        <h3>Sport Cinofili</h3>
        <span class="service-tag">Dog Dance & Rally-O</span>
        <p>
          Divertiti con il tuo cane attraverso lo sport!
          Attività che stimolano mente e corpo, rafforzando il vostro legame.
        </p>
        <ul class="service-features">
          <li>Introduzione alla Dog Dance</li>
          <li>Rally Obedience base e avanzato</li>
          <li>Tricks e abilità creative</li>
          <li>Preparazione a competizioni</li>
          <li>Allenamenti divertenti</li>
        </ul>
        <a href="calendario.php" class="btn-primary">Richiedi Info</a>
      </div>

      <!-- CONSULENZA ONLINE -->
      <div class="service-card">
        <span class="service-emoji">💻</span>
        <h3>Consulenza Online</h3>
        <span class="service-tag">Da ovunque tu sia</span>
        <p>
          Non riesci a raggiungermi di persona? Nessun problema!
          Lavoriamo insieme attraverso videochiamate efficaci.
        </p>
        <ul class="service-features">
          <li>Comodità da casa tua</li>
          <li>Analisi video dei comportamenti</li>
          <li>Sessioni flessibili</li>
          <li>Materiale didattico incluso</li>
          <li>Follow-up via messaggio</li>
        </ul>
        <a href="calendario.php" class="btn-primary">Richiedi Info</a>
      </div>

    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="process-section">
  <div class="section-container">
    <div class="process-header">
      <h2>Come funziona 🛤️</h2>
      <p>Il percorso insieme è semplice e strutturato per darti il massimo supporto</p>
    </div>

    <div class="process-steps">
      <div class="process-step">
        <div class="step-number">📞</div>
        <h3>1. Consulenza Gratuita</h3>
        <p>Raccontami di te e del tuo cane. Capiamo insieme se posso aiutarti e come.</p>
      </div>

      <div class="process-step">
        <div class="step-number">📋</div>
        <h3>2. Valutazione</h3>
        <p>Analizzo la situazione in dettaglio e creo un piano personalizzato.</p>
      </div>

      <div class="process-step">
        <div class="step-number">🎯</div>
        <h3>3. Percorso</h3>
        <p>Lavoriamo insieme sessione dopo sessione verso i tuoi obiettivi.</p>
      </div>

      <div class="process-step">
        <div class="step-number">🌟</div>
        <h3>4. Risultati</h3>
        <p>Vedi i progressi e continui a crescere con il supporto continuo.</p>
      </div>
    </div>
  </div>
</section>

<!-- PRICING NOTE -->
<section class="pricing-section">
  <div class="section-container">
    <div class="pricing-note">
      <h2>💰 Prezzi e Preventivi</h2>
      <p>
        Ogni situazione è diversa, per questo preferisco parlare con te prima di darti un prezzo.
        La consulenza iniziale è <strong>gratuita</strong> e senza impegno: dopo averti ascoltato,
        ti proporrò il percorso più adatto con un preventivo chiaro e trasparente.
      </p>

      <div class="pricing-benefits">
        <div class="pricing-benefit">
          <span>✅</span>
          Consulenza gratuita
        </div>
        <div class="pricing-benefit">
          <span>✅</span>
          Preventivo personalizzato
        </div>
        <div class="pricing-benefit">
          <span>✅</span>
          Nessun vincolo
        </div>
        <div class="pricing-benefit">
          <span>✅</span>
          Pagamenti flessibili
        </div>
      </div>

      <a href="calendario.php" class="btn-primary">Prenota la Consulenza Gratuita</a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="cta-content">
    <h2>Pronto a iniziare? 🐾</h2>
    <p>
      Prenota la tua consulenza gratuita e raccontami di te e del tuo cane.
      Insieme troveremo la strada migliore.
    </p>
    <a href="calendario.php" class="btn-primary">Prenota Ora</a>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-content">
    <div class="footer-about">
      <h3>Chiara Capotorto – <span>Dog Trainer</span></h3>
      <p class="footer-payoff">Comunicazione, osservazione e relazione uomo-cane</p>
      <div class="social-links">
        <a href="#" aria-label="Facebook">📘</a>
        <a href="#" aria-label="Instagram">📷</a>
      </div>
    </div>

    <div class="footer-links">
      <h4>Navigazione</h4>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="chi-sono.php">Chi Sono</a></li>
        <li><a href="servizi.php">Servizi</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="calendario.php">Prenota</a></li>
      </ul>
    </div>

    <div class="footer-links">
      <h4>Risorse</h4>
      <ul>
        <li><a href="risorse.php">Guide Gratuite</a></li>
        <li><a href="risorse.php">Video</a></li>
      </ul>
    </div>

    <div class="footer-newsletter">
      <h4>Newsletter 📬</h4>
      <p>Consigli pratici e contenuti esclusivi sul tuo cane</p>
      <a href="iscrizione_newsletter.php" class="newsletter-link">Iscriviti Ora</a>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© 2026 Chiara Capotorto. Tutti i diritti riservati.</p>
    <div class="footer-bottom-links">
      <a href="privacy.php">Privacy</a>
      <a href="cookie.php">Cookie</a>
      <a href="termini.php">Termini</a>
    </div>
  </div>
</footer>

<script>
  window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  function toggleMenu() {
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    menuToggle.classList.toggle('active');
    mobileMenu.classList.toggle('active');
  }

  document.addEventListener('click', function(e) {
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    if (!menuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
      menuToggle.classList.remove('active');
      mobileMenu.classList.remove('active');
    }
  });
</script>

</body>
</html>
