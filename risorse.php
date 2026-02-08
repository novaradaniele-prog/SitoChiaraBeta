<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Risorse Gratuite - Chiara Capotorto | Educazione Cinofila</title>
<meta name="description" content="Guide gratuite, video e contenuti per educare il tuo cane. Risorse utili da Chiara Capotorto, educatrice cinofila.">
<meta name="keywords" content="guide educazione cane, video addestramento cane, risorse gratuite cane, consigli cane">

<!-- Open Graph -->
<meta property="og:title" content="Risorse Gratuite - Chiara Capotorto | Educazione Cinofila">
<meta property="og:description" content="Guide gratuite, video e contenuti per educare il tuo cane.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.chiaracapotorto.com/risorse.php">
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

  /* SECTION */
  .content-section {
    padding: 100px 40px;
  }

  .content-section:nth-child(odd) {
    background: var(--cream-light);
  }

  .section-container {
    max-width: 1200px;
    margin: 0 auto;
  }

  .section-header {
    text-align: center;
    margin-bottom: 60px;
  }

  .section-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 2.8rem);
    font-weight: 700;
    color: var(--brown-dark);
    margin-bottom: 16px;
  }

  .section-header h2 em {
    font-style: italic;
    color: var(--brown-warm);
  }

  .section-header p {
    font-size: 1.1rem;
    color: var(--text-mid);
    max-width: 600px;
    margin: 0 auto;
  }

  /* RESOURCE CARDS */
  .resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 32px;
  }

  .resource-card {
    background: white;
    border-radius: 24px;
    overflow: hidden;
    border: 1px solid rgba(92, 61, 46, 0.08);
    transition: all 0.4s ease;
  }

  .resource-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 48px rgba(92, 61, 46, 0.12);
  }

  .resource-image {
    height: 180px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 5rem;
  }

  .resource-image.guide {
    background: linear-gradient(135deg, var(--rose-light) 0%, var(--cream) 100%);
  }

  .resource-image.video {
    background: linear-gradient(135deg, var(--sage-light) 0%, var(--cream) 100%);
  }

  .resource-image.tips {
    background: linear-gradient(135deg, #E8D4C4 0%, var(--cream) 100%);
  }

  .resource-content {
    padding: 32px;
  }

  .resource-tag {
    display: inline-block;
    background: var(--cream);
    color: var(--brown-warm);
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 16px;
  }

  .resource-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--brown-dark);
    margin-bottom: 12px;
  }

  .resource-card p {
    font-size: 0.95rem;
    color: var(--text-mid);
    line-height: 1.7;
    margin-bottom: 24px;
  }

  .resource-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--rose-dark);
    font-weight: 600;
    text-decoration: none;
    font-size: 0.95rem;
    transition: all 0.3s ease;
  }

  .resource-link:hover {
    color: var(--brown-dark);
    gap: 12px;
  }

  /* COMING SOON SECTION */
  .coming-soon-section {
    padding: 100px 40px;
    background: linear-gradient(135deg, var(--brown-dark) 0%, #4A2E1F 100%);
  }

  .coming-soon-card {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 32px;
    padding: 60px 48px;
  }

  .coming-soon-emoji {
    font-size: 5rem;
    margin-bottom: 24px;
    display: block;
  }

  .coming-soon-card h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    color: var(--cream);
    margin-bottom: 20px;
  }

  .coming-soon-card p {
    font-size: 1.1rem;
    color: rgba(245, 237, 228, 0.75);
    line-height: 1.8;
    margin-bottom: 32px;
  }

  .coming-soon-features {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 24px;
    margin-bottom: 40px;
  }

  .coming-feature {
    display: flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.1);
    padding: 12px 20px;
    border-radius: 50px;
    font-size: 0.95rem;
    color: var(--cream);
  }

  .btn-primary {
    background: var(--rose);
    color: var(--brown-dark);
    padding: 18px 48px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    display: inline-block;
  }

  .btn-primary:hover {
    background: var(--rose-dark);
    transform: translateY(-4px);
    box-shadow: 0 16px 48px rgba(212, 160, 160, 0.35);
  }

  /* TIPS SECTION */
  .tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 24px;
  }

  .tip-card {
    background: white;
    border-radius: 20px;
    padding: 32px;
    border: 1px solid rgba(92, 61, 46, 0.08);
    transition: all 0.3s ease;
    text-align: center;
  }

  .tip-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 36px rgba(92, 61, 46, 0.1);
  }

  .tip-emoji {
    font-size: 3rem;
    margin-bottom: 20px;
    display: block;
  }

  .tip-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    color: var(--brown-dark);
    margin-bottom: 12px;
  }

  .tip-card p {
    font-size: 0.9rem;
    color: var(--text-mid);
    line-height: 1.7;
  }

  /* NEWSLETTER CTA */
  .newsletter-section {
    padding: 100px 40px;
    background: linear-gradient(135deg, var(--rose) 0%, var(--rose-dark) 100%);
  }

  .newsletter-content {
    max-width: 700px;
    margin: 0 auto;
    text-align: center;
  }

  .newsletter-emoji {
    font-size: 4rem;
    margin-bottom: 24px;
    display: block;
  }

  .newsletter-content h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 2.8rem);
    color: var(--brown-dark);
    margin-bottom: 20px;
  }

  .newsletter-content p {
    font-size: 1.1rem;
    color: rgba(74, 46, 31, 0.8);
    margin-bottom: 32px;
    line-height: 1.8;
  }

  .newsletter-benefits {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 40px;
  }

  .newsletter-benefit {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.95rem;
    color: var(--brown-dark);
    font-weight: 500;
  }

  .newsletter-content .btn-primary {
    background: var(--brown-dark);
    color: var(--cream);
  }

  .newsletter-content .btn-primary:hover {
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
    .content-section,
    .coming-soon-section,
    .newsletter-section {
      padding: 80px 24px;
    }

    .page-hero {
      padding-top: 140px;
    }

    .coming-soon-card {
      padding: 40px 24px;
    }

    .coming-soon-features {
      flex-direction: column;
      align-items: center;
    }

    .newsletter-benefits {
      flex-direction: column;
      align-items: center;
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
  <h1>Risorse <em>Gratuite</em> 📚</h1>
  <p>Contenuti utili per capire meglio il tuo cane e migliorare la vostra relazione</p>
</section>

<!-- GUIDE GRATUITE -->
<section class="content-section">
  <div class="section-container">
    <div class="section-header">
      <h2>Guide <em>Scaricabili</em> 📖</h2>
      <p>PDF pratici che puoi scaricare e consultare quando vuoi</p>
    </div>

    <div class="resources-grid">
      <div class="resource-card">
        <div class="resource-image guide">🐶</div>
        <div class="resource-content">
          <span class="resource-tag">Guida PDF</span>
          <h3>Il Cucciolo a Casa</h3>
          <p>
            I primi passi per accogliere un cucciolo: cosa fare nelle prime settimane,
            errori da evitare, come impostare le basi di una relazione sana.
          </p>
          <a href="#" class="resource-link">
            🔜 In arrivo...
          </a>
        </div>
      </div>

      <div class="resource-card">
        <div class="resource-image guide">🦮</div>
        <div class="resource-content">
          <span class="resource-tag">Guida PDF</span>
          <h3>Passeggiata Perfetta</h3>
          <p>
            Come trasformare la passeggiata da stress a piacere.
            Tecniche pratiche per gestire il guinzaglio e le distrazioni.
          </p>
          <a href="#" class="resource-link">
            🔜 In arrivo...
          </a>
        </div>
      </div>

      <div class="resource-card">
        <div class="resource-image guide">😰</div>
        <div class="resource-content">
          <span class="resource-tag">Guida PDF</span>
          <h3>Capire lo Stress</h3>
          <p>
            Impara a riconoscere i segnali di stress del tuo cane.
            Una guida visiva ai calming signals e al linguaggio del corpo.
          </p>
          <a href="#" class="resource-link">
            🔜 In arrivo...
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONSIGLI VELOCI -->
<section class="content-section">
  <div class="section-container">
    <div class="section-header">
      <h2>Consigli <em>Veloci</em> 💡</h2>
      <p>Pillole di saggezza cinofila da mettere subito in pratica</p>
    </div>

    <div class="tips-grid">
      <div class="tip-card">
        <span class="tip-emoji">👀</span>
        <h3>Osserva prima di agire</h3>
        <p>Prima di correggere un comportamento, chiediti: cosa sta cercando di comunicarmi il mio cane?</p>
      </div>

      <div class="tip-card">
        <span class="tip-emoji">⏰</span>
        <h3>La costanza vince</h3>
        <p>5 minuti ogni giorno sono meglio di un'ora una volta a settimana. La costanza batte l'intensità.</p>
      </div>

      <div class="tip-card">
        <span class="tip-emoji">🎉</span>
        <h3>Celebra i successi</h3>
        <p>Quando il tuo cane fa qualcosa di giusto, festeggia! Il rinforzo positivo costruisce fiducia.</p>
      </div>

      <div class="tip-card">
        <span class="tip-emoji">🧘</span>
        <h3>Tu sei lo specchio</h3>
        <p>Il tuo stato emotivo influenza il cane. Se sei calmo, è più facile che lo sia anche lui.</p>
      </div>

      <div class="tip-card">
        <span class="tip-emoji">🛑</span>
        <h3>Rispetta i "no"</h3>
        <p>Se il tuo cane si allontana o evita un'interazione, rispetta il suo bisogno di spazio.</p>
      </div>

      <div class="tip-card">
        <span class="tip-emoji">🎯</span>
        <h3>Obiettivi realistici</h3>
        <p>Non aspettarti perfezione. I progressi sono fatti di piccoli passi, non di salti giganteschi.</p>
      </div>

      <div class="tip-card">
        <span class="tip-emoji">💤</span>
        <h3>Il riposo è sacro</h3>
        <p>Un cane stanco mentalmente impara poco. Assicurati che dorma abbastanza (i cuccioli: 18-20 ore!).</p>
      </div>

      <div class="tip-card">
        <span class="tip-emoji">🧩</span>
        <h3>Stimola la mente</h3>
        <p>Un gioco di attivazione mentale stanca più di una corsa. Usa puzzle e giochi olfattivi.</p>
      </div>
    </div>
  </div>
</section>

<!-- COMING SOON -->
<section class="coming-soon-section">
  <div class="coming-soon-card">
    <span class="coming-soon-emoji">🚀</span>
    <h2>Qualcosa di speciale sta arrivando...</h2>
    <p>
      Sto preparando contenuti esclusivi per chi vuole approfondire davvero
      la comunicazione con il proprio cane. Video corsi, guide avanzate e molto altro.
    </p>

    <div class="coming-soon-features">
      <div class="coming-feature">
        <span>🎥</span>
        Video lezioni
      </div>
      <div class="coming-feature">
        <span>📚</span>
        Guide avanzate
      </div>
      <div class="coming-feature">
        <span>👥</span>
        Community
      </div>
      <div class="coming-feature">
        <span>🎯</span>
        Percorsi guidati
      </div>
    </div>

    <p style="font-size: 0.95rem; margin-bottom: 32px;">
      Vuoi essere tra i primi a sapere quando sarà disponibile?
    </p>

    <a href="iscrizione_newsletter.php" class="btn-primary">Iscriviti alla Newsletter</a>
  </div>
</section>

<!-- VIDEO -->
<section class="content-section">
  <div class="section-container">
    <div class="section-header">
      <h2>Video <em>Utili</em> 🎬</h2>
      <p>Contenuti video per imparare osservando</p>
    </div>

    <div class="resources-grid">
      <div class="resource-card">
        <div class="resource-image video">📹</div>
        <div class="resource-content">
          <span class="resource-tag">Video</span>
          <h3>I Segnali Calmanti</h3>
          <p>
            Video introduttivo sui calming signals: cosa sono, come riconoscerli
            e cosa significano.
          </p>
          <a href="#" class="resource-link">
            🔜 In arrivo...
          </a>
        </div>
      </div>

      <div class="resource-card">
        <div class="resource-image video">📹</div>
        <div class="resource-content">
          <span class="resource-tag">Video</span>
          <h3>Il Gioco Corretto</h3>
          <p>
            Come giocare con il tuo cane in modo costruttivo.
            Regole del gioco e segnali da osservare.
          </p>
          <a href="#" class="resource-link">
            🔜 In arrivo...
          </a>
        </div>
      </div>

      <div class="resource-card">
        <div class="resource-image video">📹</div>
        <div class="resource-content">
          <span class="resource-tag">Video</span>
          <h3>Esercizi di Focus</h3>
          <p>
            Esercizi pratici per migliorare l'attenzione del tuo cane
            anche in ambienti distraenti.
          </p>
          <a href="#" class="resource-link">
            🔜 In arrivo...
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- NEWSLETTER CTA -->
<section class="newsletter-section">
  <div class="newsletter-content">
    <span class="newsletter-emoji">📬</span>
    <h2>Resta Aggiornato!</h2>
    <p>
      Iscriviti alla newsletter per ricevere consigli pratici, nuove risorse
      e contenuti esclusivi direttamente nella tua casella email.
    </p>

    <div class="newsletter-benefits">
      <div class="newsletter-benefit">
        <span>✅</span>
        Consigli settimanali
      </div>
      <div class="newsletter-benefit">
        <span>✅</span>
        Risorse esclusive
      </div>
      <div class="newsletter-benefit">
        <span>✅</span>
        Niente spam
      </div>
    </div>

    <a href="iscrizione_newsletter.php" class="btn-primary">Iscriviti Gratis</a>
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
