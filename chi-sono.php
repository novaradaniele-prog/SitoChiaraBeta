<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chi Sono - Chiara Capotorto | Educatrice Cinofila</title>
<meta name="description" content="Scopri chi è Chiara Capotorto: educatrice e istruttrice cinofila con oltre 10 anni di esperienza. Comunicazione e osservazione del cane.">
<meta name="keywords" content="educatore cinofilo, chi sono, Chiara Capotorto, dog trainer, esperienza cinofila">

<!-- Open Graph -->
<meta property="og:title" content="Chi Sono - Chiara Capotorto | Educatrice Cinofila">
<meta property="og:description" content="Educatrice e istruttrice cinofila con oltre 10 anni di esperienza nella comunicazione uomo-cane.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.chiaracapotorto.com/chi-sono.php">
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

  /* Hamburger Menu */
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
  .menu-toggle.active .hamburger span:nth-child(2) {
    opacity: 0;
  }
  .menu-toggle.active .hamburger span:nth-child(3) {
    transform: rotate(-45deg) translate(5px, -5px);
  }

  /* Dropdown Menu */
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

  /* CONTENT SECTIONS */
  .content-section {
    padding: 100px 40px;
  }

  .content-section:nth-child(even) {
    background: var(--cream-light);
  }

  .section-container {
    max-width: 1000px;
    margin: 0 auto;
  }

  .section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 2.8rem);
    font-weight: 700;
    color: var(--brown-dark);
    margin-bottom: 40px;
    text-align: center;
  }

  .section-title em {
    font-style: italic;
    color: var(--brown-warm);
  }

  .content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
  }

  .content-grid.reverse {
    direction: rtl;
  }

  .content-grid.reverse > * {
    direction: ltr;
  }

  .content-text p {
    font-size: 1.1rem;
    color: var(--text-mid);
    line-height: 1.9;
    margin-bottom: 24px;
  }

  .content-text p:last-child {
    margin-bottom: 0;
  }

  .emoji-icon {
    font-size: 4rem;
    margin-bottom: 20px;
    display: block;
    text-align: center;
  }

  /* TIMELINE */
  .timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
  }

  .timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 3px;
    height: 100%;
    background: linear-gradient(to bottom, var(--rose), var(--sage));
    border-radius: 3px;
  }

  .timeline-item {
    display: flex;
    align-items: center;
    margin-bottom: 60px;
  }

  .timeline-item:nth-child(odd) {
    flex-direction: row;
  }

  .timeline-item:nth-child(even) {
    flex-direction: row-reverse;
  }

  .timeline-content {
    width: 45%;
    padding: 30px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(92, 61, 46, 0.08);
    position: relative;
  }

  .timeline-emoji {
    font-size: 2.5rem;
    margin-bottom: 16px;
  }

  .timeline-content h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    color: var(--brown-dark);
    margin-bottom: 12px;
  }

  .timeline-content p {
    font-size: 0.95rem;
    color: var(--text-mid);
    line-height: 1.7;
  }

  .timeline-dot {
    width: 20px;
    height: 20px;
    background: var(--rose);
    border-radius: 50%;
    border: 4px solid var(--cream);
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
  }

  /* VALUES GRID */
  .values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 32px;
  }

  .value-card {
    background: white;
    border-radius: 24px;
    padding: 40px 32px;
    text-align: center;
    border: 1px solid rgba(92, 61, 46, 0.08);
    transition: all 0.3s ease;
  }

  .value-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 48px rgba(92, 61, 46, 0.12);
  }

  .value-emoji {
    font-size: 3.5rem;
    margin-bottom: 24px;
    display: block;
  }

  .value-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    color: var(--brown-dark);
    margin-bottom: 16px;
  }

  .value-card p {
    font-size: 0.95rem;
    color: var(--text-mid);
    line-height: 1.7;
  }

  /* CTA SECTION */
  .cta {
    padding: 100px 40px;
    background: linear-gradient(135deg, var(--rose) 0%, var(--rose-dark) 100%);
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .cta::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 800px;
    height: 800px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
  }

  .cta-content {
    max-width: 700px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
  }

  .cta h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--brown-dark);
    line-height: 1.3;
    margin-bottom: 24px;
  }

  .cta p {
    font-size: 1.1rem;
    color: rgba(74, 46, 31, 0.8);
    line-height: 1.8;
    margin-bottom: 40px;
  }

  .btn-primary {
    background: var(--brown-dark);
    color: var(--cream);
    padding: 18px 48px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    display: inline-block;
    border: 2px solid var(--brown-dark);
  }

  .btn-primary:hover {
    background: #4A2E1F;
    transform: translateY(-4px);
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
    .content-grid {
      grid-template-columns: 1fr;
      gap: 40px;
    }

    .content-grid.reverse {
      direction: ltr;
    }

    .footer-content {
      grid-template-columns: repeat(2, 1fr);
    }

    .footer-about {
      grid-column: span 2;
    }

    .timeline::before {
      left: 20px;
    }

    .timeline-item,
    .timeline-item:nth-child(even) {
      flex-direction: row;
      justify-content: flex-start;
      padding-left: 50px;
    }

    .timeline-content {
      width: 100%;
    }

    .timeline-dot {
      left: 20px;
    }
  }

  @media (max-width: 768px) {
    nav { padding: 16px 24px; }

    .page-hero,
    .content-section {
      padding: 80px 24px;
    }

    .page-hero {
      padding-top: 140px;
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
  <h1>Chi <em>Sono</em> 🐕</h1>
  <p>Educatrice cinofila con il cuore, la passione e oltre 10 anni di esperienza sul campo</p>
</section>

<!-- INTRO -->
<section class="content-section">
  <div class="section-container">
    <div class="content-grid">
      <div class="content-text">
        <span class="emoji-icon">👩‍🏫</span>
        <h2 class="section-title">Ciao, sono <em>Chiara</em></h2>
        <p>
          Sono un'educatrice e istruttrice cinofila. Da oltre dieci anni lavoro
          nel campo della comunicazione uomo–cane, accompagnando centinaia di
          famiglie, cuccioli e cani adulti in percorsi di crescita e comprensione reciproca.
        </p>
        <p>
          Il mio approccio non parte dal controllo, ma dalla <strong>comprensione</strong>.
          Credo che dietro ogni comportamento ci sia sempre un messaggio.
          Quando impariamo a leggerlo, smettiamo di correggere a caso e
          iniziamo a costruire una relazione che funziona davvero.
        </p>
      </div>
      <div style="text-align: center;">
        <span style="font-size: 8rem;">🤝</span>
      </div>
    </div>
  </div>
</section>

<!-- IL MIO PERCORSO -->
<section class="content-section">
  <div class="section-container">
    <h2 class="section-title">Il mio <em>percorso</em> 🛤️</h2>

    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-content">
          <span class="timeline-emoji">🐶</span>
          <h3>L'inizio dell'amore</h3>
          <p>Fin da bambina ho sempre avuto una connessione speciale con i cani. Non era solo affetto, era curiosità: volevo capire cosa pensavano, cosa sentivano.</p>
        </div>
        <div class="timeline-dot"></div>
      </div>

      <div class="timeline-item">
        <div class="timeline-content">
          <span class="timeline-emoji">📚</span>
          <h3>La formazione</h3>
          <p>Ho studiato etologia, comportamento animale e comunicazione interspecifica. La teoria mi ha dato gli strumenti, ma è stato il campo a insegnarmi davvero.</p>
        </div>
        <div class="timeline-dot"></div>
      </div>

      <div class="timeline-item">
        <div class="timeline-content">
          <span class="timeline-emoji">🎓</span>
          <h3>Certificazione professionale</h3>
          <p>Ho conseguito le certificazioni come educatrice e istruttrice cinofila, specializzandomi in comunicazione e osservazione del comportamento.</p>
        </div>
        <div class="timeline-dot"></div>
      </div>

      <div class="timeline-item">
        <div class="timeline-content">
          <span class="timeline-emoji">💪</span>
          <h3>Oltre 10 anni sul campo</h3>
          <p>Centinaia di famiglie, ogni cane una storia diversa. Ho imparato che non esistono formule magiche, ma percorsi costruiti insieme con pazienza e rispetto.</p>
        </div>
        <div class="timeline-dot"></div>
      </div>

      <div class="timeline-item">
        <div class="timeline-content">
          <span class="timeline-emoji">🌟</span>
          <h3>Oggi</h3>
          <p>Continuo a studiare, sperimentare e crescere. Ogni giorno è un'opportunità per aiutare qualcuno a capire meglio il proprio cane.</p>
        </div>
        <div class="timeline-dot"></div>
      </div>
    </div>
  </div>
</section>

<!-- I MIEI VALORI -->
<section class="content-section">
  <div class="section-container">
    <h2 class="section-title">I miei <em>valori</em> ❤️</h2>

    <div class="values-grid">
      <div class="value-card">
        <span class="value-emoji">👀</span>
        <h3>Osservazione</h3>
        <p>Prima di agire, osservo. Ogni comportamento ha un significato e merita di essere compreso prima di essere modificato.</p>
      </div>

      <div class="value-card">
        <span class="value-emoji">💬</span>
        <h3>Comunicazione</h3>
        <p>Il mio lavoro è costruire ponti tra te e il tuo cane. Quando la comunicazione funziona, tutto diventa più semplice.</p>
      </div>

      <div class="value-card">
        <span class="value-emoji">🤗</span>
        <h3>Rispetto</h3>
        <p>Metodi gentili, mai coercitivi. Il rispetto per il cane e per te è alla base di ogni mio intervento.</p>
      </div>

      <div class="value-card">
        <span class="value-emoji">🎯</span>
        <h3>Personalizzazione</h3>
        <p>Non esistono soluzioni universali. Ogni percorso è costruito su misura per te, il tuo cane e la vostra vita insieme.</p>
      </div>

      <div class="value-card">
        <span class="value-emoji">🌱</span>
        <h3>Crescita continua</h3>
        <p>Studio sempre, mi aggiorno costantemente. La cinofilia evolve e io evolvo con lei.</p>
      </div>

      <div class="value-card">
        <span class="value-emoji">🤝</span>
        <h3>Collaborazione</h3>
        <p>Non sono io a "addestrare" il tuo cane. Lavoriamo insieme, come una squadra, verso obiettivi condivisi.</p>
      </div>
    </div>
  </div>
</section>

<!-- COSA MI RENDE DIVERSA -->
<section class="content-section">
  <div class="section-container">
    <div class="content-grid reverse">
      <div class="content-text">
        <span class="emoji-icon">✨</span>
        <h2 class="section-title">Cosa mi rende <em>diversa</em></h2>
        <p>
          🔬 <strong>Approccio scientifico</strong> – Baso il mio lavoro su studi di etologia
          e comportamento animale, non su miti o tradizioni superate.
        </p>
        <p>
          💡 <strong>Capire, non solo gestire</strong> – Non ti insegno solo a "controllare"
          il tuo cane, ma a comprenderlo veramente.
        </p>
        <p>
          👨‍👩‍👧‍👦 <strong>Tutta la famiglia</strong> – Coinvolgo tutti i membri della famiglia,
          perché la relazione con il cane riguarda tutti.
        </p>
        <p>
          📱 <strong>Supporto continuo</strong> – Non ti lascio solo dopo le sessioni.
          Sono disponibile per dubbi e domande, sempre.
        </p>
      </div>
      <div style="text-align: center;">
        <span style="font-size: 8rem;">🏆</span>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="cta-content">
    <h2>Vuoi conoscermi meglio? 🐾</h2>
    <p>
      Prenota una consulenza gratuita. Raccontami di te e del tuo cane,
      e vediamo insieme come posso aiutarti.
    </p>
    <a href="calendario.php" class="btn-primary">Prenota una Consulenza</a>
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
