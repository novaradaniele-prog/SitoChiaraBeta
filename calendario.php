<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prenota una Consulenza - Chiara Capotorto</title>
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

  /* ════════════════════════════════════════
     HEADER & NAVIGATION (da index.php)
  ════════════════════════════════════════ */
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

  /* ════════════════════════════════════════
     MAIN CONTENT
  ════════════════════════════════════════ */
  main {
    padding-top: 80px;
    min-height: 100vh;
  }

  .page-header {
    background: linear-gradient(135deg, var(--brown-dark) 0%, #4A2E1F 100%);
    padding: 60px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .page-header::before {
    content: '';
    position: absolute;
    top: -100px;
    right: -100px;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(212, 160, 160, 0.12) 0%, transparent 70%);
  }

  .page-header::after {
    content: '';
    position: absolute;
    bottom: -120px;
    left: -80px;
    width: 350px;
    height: 350px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(143, 168, 122, 0.1) 0%, transparent 70%);
  }

  .page-header h1 {
    font-family: 'Playfair Display', serif;
    color: var(--cream);
    font-size: clamp(2rem, 4vw, 2.8rem);
    font-weight: 700;
    margin-bottom: 16px;
    position: relative;
    z-index: 1;
  }

  .page-header h1 em {
    font-style: italic;
    color: var(--rose);
  }

  .page-header p {
    color: rgba(245, 237, 228, 0.75);
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.7;
    position: relative;
    z-index: 1;
  }

  /* Info Cards */
  .info-section {
    padding: 40px;
    background: var(--cream-light);
  }

  .info-cards {
    max-width: 900px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
  }

  .info-card {
    background: white;
    padding: 24px;
    border-radius: 16px;
    border: 1px solid rgba(92, 61, 46, 0.08);
    display: flex;
    align-items: flex-start;
    gap: 16px;
  }

  .info-card-icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, var(--rose-light), var(--sage-light));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    flex-shrink: 0;
  }

  .info-card-content h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--brown-dark);
    margin-bottom: 4px;
  }

  .info-card-content p {
    font-size: 0.9rem;
    color: var(--text-mid);
    line-height: 1.5;
  }

  /* Calendly Container */
  .calendly-section {
    padding: 40px;
    background: var(--cream);
  }

  .calendly-container {
    max-width: 1100px;
    margin: 0 auto;
    background: white;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 16px 48px rgba(92, 61, 46, 0.1);
    border: 1px solid rgba(92, 61, 46, 0.08);
  }

  .calendly-inline-widget {
    min-width: 320px;
    height: 750px;
  }

  .calendly-inline-widget iframe {
    width: 100% !important;
    height: 100% !important;
  }

  /* Policy Notice */
  .policy-notice {
    max-width: 900px;
    margin: 0 auto;
    padding: 24px 40px;
    background: rgba(212, 160, 160, 0.15);
    border-radius: 16px;
    border-left: 4px solid var(--rose);
    margin-top: 32px;
  }

  .policy-notice h4 {
    font-family: 'Playfair Display', serif;
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--brown-dark);
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .policy-notice p {
    font-size: 0.95rem;
    color: var(--text-mid);
    line-height: 1.6;
  }

  /* ════════════════════════════════════════
     FOOTER (da index.php)
  ════════════════════════════════════════ */
  footer {
    background: var(--brown-dark);
    color: var(--cream);
    padding: 60px 40px 40px;
  }

  .footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr 1fr;
    gap: 60px;
    margin-bottom: 40px;
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
    overflow: hidden;
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

  /* ════════════════════════════════════════
     RESPONSIVE
  ════════════════════════════════════════ */
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
    .nav-menu { display: none; }

    .page-header { padding: 40px 24px; }
    .info-section { padding: 24px; }
    .calendly-section { padding: 24px; }
    .policy-notice { padding: 20px 24px; margin: 24px; }

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

<!-- Calendly CSS -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
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
      <a href="index.php" class="logo">Chiara <span>Capotorto</span></a>
    </div>

    <ul class="nav-menu">
      <li><a href="index.php#about">Chi Sono</a></li>
      <li><a href="index.php#services">Servizi</a></li>
      <li><a href="index.php#testimonials">Testimonianze</a></li>
      <li><a href="index.php#contact" class="nav-cta">Conosciamoci</a></li>
    </ul>
  </nav>
</header>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
  <a href="iscrizione_newsletter.php" onclick="toggleMenu()">Iscriviti alla Newsletter</a>
  <a href="calendario.php" onclick="toggleMenu()">Calendario</a>
  <a href="index.php#services" onclick="toggleMenu()">Scopri i Percorsi</a>
  <a href="index.php#contact" onclick="toggleMenu()">Conosciamoci</a>
</div>

<!-- MAIN CONTENT -->
<main>
  <!-- Page Header -->
  <div class="page-header">
    <h1>Prenota una <em>Consulenza Gratuita</em></h1>
    <p>Scegli il giorno e l'orario che preferisci per la nostra chiamata conoscitiva. Parleremo del tuo cane e di come posso aiutarti.</p>
  </div>

  <!-- Info Cards -->
  <section class="info-section">
    <div class="info-cards">
      <div class="info-card">
        <div class="info-card-icon">⏱️</div>
        <div class="info-card-content">
          <h3>Durata: 60 minuti</h3>
          <p>Una chiamata conoscitiva per capire le tue esigenze</p>
        </div>
      </div>

      <div class="info-card">
        <div class="info-card-icon">💻</div>
        <div class="info-card-content">
          <h3>Videochiamata Zoom</h3>
          <p>Riceverai il link via email dopo la prenotazione</p>
        </div>
      </div>

      <div class="info-card">
        <div class="info-card-icon">🎁</div>
        <div class="info-card-content">
          <h3>Completamente Gratuita</h3>
          <p>Senza impegno, per conoscerti meglio</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Calendly Embed -->
  <section class="calendly-section">
    <div class="calendly-container">
      <div class="calendly-inline-widget">
        <iframe
          src="https://calendly.com/chiaracapotorto/30min?hide_gdpr_banner=1&hide_landing_page_details=1&background_color=ffffff&text_color=5c3d2e&primary_color=d4a0a0"
          width="100%"
          height="100%"
          frameborder="0"
          title="Prenota una consulenza">
        </iframe>
      </div>
    </div>

    <!-- Policy Notice -->
    <div class="policy-notice">
      <h4>⚠️ Politica di Cancellazione</h4>
      <p>Le modifiche e gli annullamenti devono essere effettuati <strong>almeno 24 ore prima</strong> dell'appuntamento. Cancellazioni tardive o mancate presenze potrebbero limitare la possibilità di prenotare future consulenze.</p>
    </div>
  </section>
</main>

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
        <li><a href="index.php#services">Servizi</a></li>
        <li><a href="index.php#about">Chi Sono</a></li>
        <li><a href="index.php#testimonials">Testimonianze</a></li>
        <li><a href="calendario.php">Calendario</a></li>
      </ul>
    </div>

    <div class="footer-links">
      <h4>Risorse</h4>
      <ul>
        <li><a href="#">Video</a></li>
        <li><a href="#">Guide Gratuite</a></li>
        <li><a href="membership.php">Dog Communication Club</a></li>
      </ul>
    </div>

    <div class="footer-newsletter">
      <h4>Newsletter</h4>
      <p>Iscriviti per consigli pratici e contenuti esclusivi sul tuo cane</p>
      <a href="iscrizione_newsletter.php" class="newsletter-link">Iscriviti Ora</a>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; <?php echo date('Y'); ?> Chiara Capotorto. Tutti i diritti riservati.</p>
    <div class="footer-bottom-links">
      <a href="privacy.php">Privacy</a>
      <a href="cookie.php">Cookie</a>
      <a href="termini.php">Termini</a>
    </div>
  </div>
</footer>

<!-- Calendly JS -->
<script src="https://assets.calendly.com/assets/external/widget.js" async></script>

<!-- Custom JS -->
<script>
  // Header scroll effect
  window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // Dropdown menu toggle
  function toggleMenu() {
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    menuToggle.classList.toggle('active');
    mobileMenu.classList.toggle('active');
  }

  // Chiudi dropdown cliccando fuori
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
