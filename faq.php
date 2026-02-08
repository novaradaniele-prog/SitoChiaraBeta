<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FAQ - Domande Frequenti | Chiara Capotorto</title>
<meta name="description" content="Risposte alle domande più frequenti sull'educazione cinofila. Scopri come funzionano i percorsi con Chiara Capotorto.">
<meta name="keywords" content="FAQ educazione cane, domande educatore cinofilo, come funziona addestramento cane">

<!-- Open Graph -->
<meta property="og:title" content="FAQ - Domande Frequenti | Chiara Capotorto">
<meta property="og:description" content="Risposte alle domande più frequenti sull'educazione cinofila.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.chiaracapotorto.com/faq.php">
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

  /* FAQ SECTION */
  .faq-section {
    padding: 100px 40px;
  }

  .faq-section:nth-child(odd) {
    background: var(--cream-light);
  }

  .section-container {
    max-width: 900px;
    margin: 0 auto;
  }

  .section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700;
    color: var(--brown-dark);
    margin-bottom: 40px;
    text-align: center;
  }

  .section-title em {
    font-style: italic;
    color: var(--brown-warm);
  }

  /* ACCORDION */
  .faq-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  .faq-item {
    background: white;
    border-radius: 20px;
    border: 1px solid rgba(92, 61, 46, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
  }

  .faq-item:hover {
    box-shadow: 0 8px 32px rgba(92, 61, 46, 0.08);
  }

  .faq-question {
    width: 100%;
    padding: 28px 32px;
    background: none;
    border: none;
    text-align: left;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    font-family: 'DM Sans', sans-serif;
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--brown-dark);
    transition: all 0.3s ease;
  }

  .faq-question:hover {
    color: var(--brown-warm);
  }

  .faq-question .emoji {
    font-size: 1.5rem;
    flex-shrink: 0;
  }

  .faq-question .text {
    flex-grow: 1;
  }

  .faq-question .toggle {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: var(--cream);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
    transition: all 0.3s ease;
  }

  .faq-item.active .faq-question .toggle {
    background: var(--rose);
    transform: rotate(45deg);
  }

  .faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
  }

  .faq-item.active .faq-answer {
    max-height: 500px;
  }

  .faq-answer-content {
    padding: 0 32px 28px;
    padding-left: 80px;
  }

  .faq-answer-content p {
    font-size: 1rem;
    color: var(--text-mid);
    line-height: 1.8;
    margin-bottom: 16px;
  }

  .faq-answer-content p:last-child {
    margin-bottom: 0;
  }

  .faq-answer-content ul {
    list-style: none;
    margin: 16px 0;
  }

  .faq-answer-content ul li {
    padding: 8px 0;
    padding-left: 28px;
    position: relative;
    color: var(--text-mid);
  }

  .faq-answer-content ul li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--sage);
    font-weight: 700;
  }

  /* CONTACT CARD */
  .contact-card {
    background: linear-gradient(135deg, var(--rose-light) 0%, var(--sage-light) 100%);
    border-radius: 24px;
    padding: 48px;
    text-align: center;
    margin-top: 60px;
  }

  .contact-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    color: var(--brown-dark);
    margin-bottom: 16px;
  }

  .contact-card p {
    font-size: 1.1rem;
    color: var(--text-mid);
    margin-bottom: 32px;
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
  }

  .btn-primary:hover {
    background: #4A2E1F;
    transform: translateY(-4px);
    box-shadow: 0 16px 48px rgba(74, 46, 31, 0.3);
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
    .faq-section {
      padding: 80px 24px;
    }

    .page-hero {
      padding-top: 140px;
    }

    .faq-question {
      padding: 20px 24px;
      font-size: 1rem;
    }

    .faq-answer-content {
      padding: 0 24px 20px;
      padding-left: 24px;
    }

    .contact-card {
      padding: 32px 24px;
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
  <h1>Domande <em>Frequenti</em> ❓</h1>
  <p>Le risposte alle domande che mi fanno più spesso</p>
</section>

<!-- FAQ - GENERALI -->
<section class="faq-section">
  <div class="section-container">
    <h2 class="section-title">Domande <em>Generali</em> 🐕</h2>

    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">🤔</span>
          <span class="text">Qual è la differenza tra educatore e addestratore?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              L'<strong>educatore cinofilo</strong> lavora sulla relazione tra cane e proprietario,
              aiutando entrambi a comunicare meglio e a costruire una convivenza serena.
              L'<strong>addestratore</strong> tradizionalmente si concentra sull'insegnamento
              di comandi specifici, spesso per scopi lavorativi o sportivi.
            </p>
            <p>
              Io preferisco definirmi <strong>dog trainer</strong> con focus sulla comunicazione:
              il mio obiettivo non è solo che il cane "obbedisca", ma che tu e lui vi capiate davvero.
            </p>
          </div>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">🐶</span>
          <span class="text">Da che età posso iniziare con un cucciolo?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              Puoi iniziare appena il cucciolo arriva a casa! Anzi, è il momento migliore.
              I primi mesi di vita sono fondamentali per la socializzazione e per
              impostare le basi di una relazione sana.
            </p>
            <p>
              Non aspettare che "sia grande abbastanza" o che "completi le vaccinazioni":
              ci sono molte cose che possiamo fare in sicurezza anche con cuccioli molto piccoli.
            </p>
          </div>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">👴</span>
          <span class="text">Il mio cane è adulto/anziano, è troppo tardi?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              <strong>Mai troppo tardi!</strong> I cani imparano per tutta la vita.
              Certo, un cane adulto potrebbe avere abitudini più radicate,
              ma questo non significa che non possa cambiare.
            </p>
            <p>
              Spesso con i cani adulti si ottengono risultati anche più veloci,
              perché sono più calmi e concentrati rispetto ai cuccioli.
            </p>
          </div>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">🏠</span>
          <span class="text">Lavori a domicilio o devo venire da te?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              Lavoro principalmente <strong>a domicilio</strong> o nei luoghi che frequenti
              abitualmente con il tuo cane (parchi, strade del quartiere, ecc.).
              Questo perché i comportamenti si manifestano nel contesto reale,
              e lì è dove devono essere affrontati.
            </p>
            <p>
              Offro anche <strong>consulenze online</strong> per chi non può incontrarmi di persona.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ - PERCORSI -->
<section class="faq-section">
  <div class="section-container">
    <h2 class="section-title">Sui <em>Percorsi</em> 📋</h2>

    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">⏱️</span>
          <span class="text">Quanto dura un percorso di educazione?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              Dipende molto dalla situazione! Alcuni problemi si risolvono in poche sessioni,
              altri richiedono più tempo e costanza. In media, un percorso base dura
              <strong>4-8 settimane</strong>, ma costruirò una proposta personalizzata
              dopo la consulenza iniziale.
            </p>
            <p>
              Non ti prometterò mai miracoli in 3 giorni – preferisco essere onesta
              piuttosto che venderti illusioni.
            </p>
          </div>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">👨‍👩‍👧</span>
          <span class="text">Deve essere presente tutta la famiglia?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              <strong>Sì, idealmente!</strong> Il cane vive con tutti voi, quindi tutti
              dovrebbero essere allineati sulle regole e sui modi di comunicare.
              Almeno per le prime sessioni è importante che partecipino tutti.
            </p>
            <p>
              Se qualcuno non può essere sempre presente, troveremo comunque il modo
              di coinvolgerlo (video riepilogativi, materiale scritto, ecc.).
            </p>
          </div>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">💻</span>
          <span class="text">Come funzionano le consulenze online?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              Ci colleghiamo in videochiamata (Zoom) e lavoriamo insieme in tempo reale.
              Ti guido mentre interagisci con il tuo cane, ti do feedback immediati
              e ti spiego cosa osservare.
            </p>
            <p>
              Spesso ti chiederò anche di inviarmi video del cane nella vita quotidiana,
              così posso analizzare comportamenti che magari non emergono durante la chiamata.
            </p>
          </div>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">📱</span>
          <span class="text">Posso contattarti tra una sessione e l'altra?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              <strong>Certo!</strong> Resto disponibile via messaggio per dubbi,
              domande veloci o per ricevere aggiornamenti sui progressi.
              Non ti lascio solo tra una sessione e l'altra.
            </p>
            <p>
              Per questioni più complesse che richiedono una discussione approfondita,
              organizziamo una chiamata extra.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ - METODO -->
<section class="faq-section">
  <div class="section-container">
    <h2 class="section-title">Sul <em>Metodo</em> 🎯</h2>

    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">🤗</span>
          <span class="text">Usi metodi gentili? Cosa significa esattamente?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              Sì, uso esclusivamente <strong>metodi gentili</strong>, basati sul rinforzo positivo
              e sulla scienza del comportamento. Questo significa:
            </p>
            <ul>
              <li>Niente punizioni fisiche o psicologiche</li>
              <li>Niente collari a strozzo, elettrici o con le punte</li>
              <li>Niente "dominanza" o sottomissione forzata</li>
              <li>Focus sulla motivazione e sulla comunicazione</li>
            </ul>
            <p>
              Gentile non significa permissivo: ci sono regole chiare, ma vengono
              insegnate con rispetto, non con la paura.
            </p>
          </div>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">🍖</span>
          <span class="text">Devo usare sempre i bocconcini?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              Il cibo è uno strumento potente, ma non è l'unico!
              Uso anche gioco, carezze, accesso all'ambiente e altre forme di rinforzo.
            </p>
            <p>
              L'obiettivo è che il cane impari a collaborare per motivazione intrinseca,
              non solo per avere il premio. I bocconcini sono un mezzo, non il fine.
            </p>
          </div>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">😰</span>
          <span class="text">Il mio cane ha paure/aggressività, puoi aiutarlo?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              Sì, lavoro regolarmente con cani che hanno <strong>problemi comportamentali</strong>
              come paure, fobie, reattività e aggressività.
              Questi casi richiedono un approccio delicato e personalizzato.
            </p>
            <p>
              Prima di iniziare, faccio sempre una valutazione approfondita e,
              se necessario, ti consiglio di consultare anche un veterinario
              comportamentalista per escludere cause mediche.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ - PRATICHE -->
<section class="faq-section">
  <div class="section-container">
    <h2 class="section-title">Domande <em>Pratiche</em> 💼</h2>

    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">💰</span>
          <span class="text">Quanto costa un percorso?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              I prezzi variano in base al tipo di percorso e alla situazione specifica.
              Preferisco fare prima una <strong>consulenza gratuita</strong> per capire
              le tue esigenze e poi proporti un preventivo chiaro e personalizzato.
            </p>
            <p>
              Offro sempre la possibilità di pagamenti flessibili e pacchetti
              che ti permettono di risparmiare rispetto alle singole sessioni.
            </p>
          </div>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">📍</span>
          <span class="text">In che zone lavori?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              Lavoro principalmente nella mia zona di riferimento e dintorni.
              Per le <strong>consulenze online</strong> invece non ci sono limiti geografici:
              possiamo lavorare insieme ovunque tu sia!
            </p>
            <p>
              Contattami per verificare se posso raggiungerti di persona.
            </p>
          </div>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">📅</span>
          <span class="text">Come prenoto una consulenza?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              Semplicissimo! Vai alla pagina <a href="calendario.php" style="color: var(--rose-dark); font-weight: 600;">Prenota</a>,
              scegli un giorno e un orario che ti va bene, compila il form con qualche
              informazione su di te e sul tuo cane, e il gioco è fatto.
            </p>
            <p>
              Riceverai una conferma via email con il link per la videochiamata.
            </p>
          </div>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span class="emoji">❌</span>
          <span class="text">Cosa succede se devo annullare?</span>
          <span class="toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-content">
            <p>
              Capisco che possono esserci imprevisti! Ti chiedo solo di avvisarmi
              con almeno <strong>24 ore di anticipo</strong> così posso riorganizzare l'agenda.
            </p>
            <p>
              Se annulli all'ultimo momento senza un motivo valido, potrei chiederti
              un contributo simbolico per la sessione persa.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- CONTACT CARD -->
    <div class="contact-card">
      <h3>Non hai trovato la risposta? 🤷</h3>
      <p>
        Scrivimi! Sono felice di rispondere a qualsiasi domanda tu abbia.
      </p>
      <a href="calendario.php" class="btn-primary">Contattami</a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="cta-content">
    <h2>Pronto a iniziare? 🐾</h2>
    <p>
      Prenota la tua consulenza gratuita e parliamo del tuo cane!
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

  function toggleFaq(button) {
    const faqItem = button.parentElement;
    const isActive = faqItem.classList.contains('active');

    // Close all other FAQs
    document.querySelectorAll('.faq-item').forEach(item => {
      item.classList.remove('active');
    });

    // Toggle current FAQ
    if (!isActive) {
      faqItem.classList.add('active');
    }
  }
</script>

</body>
</html>
