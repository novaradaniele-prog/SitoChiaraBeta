<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iscriviti alla Newsletter - Chiara Capotorto</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
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

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html {
    scroll-behavior: smooth;
  }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--cream);
    color: var(--text-dark);
    overflow-x: hidden;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }

  /* ════════════════════════════════════════
     HEADER MINIMAL
  ════════════════════════════════════════ */
  .site-header {
    background: var(--brown-dark);
    padding: 20px 40px;
    text-align: center;
  }

  .site-logo {
    font-family: 'Playfair Display', serif;
    color: var(--cream);
    font-size: 1.4rem;
    font-weight: 700;
  }

  .site-logo span {
    color: var(--rose);
  }

  /* ════════════════════════════════════════
     MAIN CONTENT
  ════════════════════════════════════════ */
  main {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
  }

  .container {
    width: 100%;
    max-width: 800px;
    background: white;
    border-radius: 24px;
    box-shadow: 0 20px 60px rgba(92, 61, 46, 0.12);
    overflow: hidden;
    position: relative;
    animation: fadeIn 0.6s ease-out;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .header {
    background: var(--brown-dark);
    padding: 60px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .header::before {
    content: '';
    position: absolute;
    top: -100px;
    right: -100px;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(212, 160, 160, 0.15) 0%, transparent 70%);
  }

  .header::after {
    content: '';
    position: absolute;
    bottom: -80px;
    left: -80px;
    width: 250px;
    height: 250px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(143, 168, 122, 0.12) 0%, transparent 70%);
  }

  .badge {
    display: inline-block;
    background: rgba(212, 160, 160, 0.18);
    border: 1px solid rgba(212, 160, 160, 0.4);
    color: var(--rose-light);
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 500;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 24px;
    position: relative;
    z-index: 1;
  }

  .header h1 {
    font-family: 'Playfair Display', serif;
    color: var(--cream);
    font-size: clamp(1.8rem, 4vw, 2.5rem);
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 16px;
    position: relative;
    z-index: 1;
  }

  .header h1 em {
    font-style: italic;
    color: var(--rose);
  }

  .header p {
    color: rgba(245, 237, 228, 0.7);
    font-size: 1rem;
    font-weight: 300;
    line-height: 1.7;
    max-width: 520px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
  }

  .content {
    padding: 50px 40px;
  }

  .benefits {
    margin-bottom: 40px;
  }

  .benefit-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    font-weight: 600;
    color: var(--brown-dark);
    margin-bottom: 24px;
    text-align: center;
  }

  .benefit-list {
    display: grid;
    gap: 16px;
    margin-bottom: 40px;
  }

  .benefit-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 16px;
    background: var(--cream-light);
    border-radius: 12px;
    border: 1px solid rgba(92, 61, 46, 0.08);
    transition: transform 0.3s, box-shadow 0.3s;
    animation: fadeIn 0.6s ease-out;
  }

  .benefit-item:nth-child(1) { animation-delay: 0.1s; }
  .benefit-item:nth-child(2) { animation-delay: 0.2s; }
  .benefit-item:nth-child(3) { animation-delay: 0.3s; }
  .benefit-item:nth-child(4) { animation-delay: 0.4s; }

  .benefit-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(92, 61, 46, 0.08);
  }

  .benefit-icon {
    flex-shrink: 0;
    width: 24px;
    height: 24px;
    background: var(--rose);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
    font-weight: 600;
    margin-top: 2px;
  }

  .benefit-text {
    color: var(--text-mid);
    font-size: 0.95rem;
    line-height: 1.6;
  }

  .form-wrapper {
    background: var(--cream-light);
    padding: 32px;
    border-radius: 16px;
    border: 2px solid rgba(212, 160, 160, 0.2);
  }

  .form-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--brown-dark);
    margin-bottom: 20px;
    text-align: center;
  }

  iframe {
    width: 100%;
    min-height: 500px;
    border: none;
    border-radius: 8px;
  }

  .footer-note {
    text-align: center;
    margin-top: 32px;
    padding-top: 32px;
    border-top: 1px solid rgba(92, 61, 46, 0.1);
    color: var(--text-light);
    font-size: 0.85rem;
    line-height: 1.6;
  }

  .footer-note a {
    color: var(--brown-warm);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
  }

  .footer-note a:hover {
    color: var(--brown-dark);
  }

  /* ════════════════════════════════════════
     FOOTER MINIMAL
  ════════════════════════════════════════ */
  .site-footer {
    background: var(--brown-dark);
    padding: 24px 40px;
    text-align: center;
  }

  .site-footer p {
    color: rgba(245, 237, 228, 0.5);
    font-size: 0.85rem;
    margin-bottom: 12px;
  }

  .site-footer-links {
    display: flex;
    justify-content: center;
    gap: 24px;
  }

  .site-footer-links a {
    color: rgba(245, 237, 228, 0.6);
    text-decoration: none;
    font-size: 0.85rem;
    transition: color 0.3s;
  }

  .site-footer-links a:hover {
    color: var(--cream);
  }

  /* ════════════════════════════════════════
     RESPONSIVE
  ════════════════════════════════════════ */
  @media (max-width: 768px) {
    .site-header {
      padding: 16px 24px;
    }

    .header {
      padding: 40px 24px;
    }

    .content {
      padding: 40px 24px;
    }

    .form-wrapper {
      padding: 24px;
    }

    .benefit-item {
      padding: 12px;
    }

    .site-footer {
      padding: 20px 24px;
    }

    .site-footer-links {
      gap: 16px;
    }
  }
</style>
</head>
<body>

<!-- HEADER MINIMAL -->
<header class="site-header">
  <div class="site-logo">Chiara <span>Capotorto</span></div>
</header>

<!-- MAIN CONTENT -->
<main>
  <div class="container">
    <!-- Header -->
    <div class="header">
      <div class="badge">Newsletter Esclusiva</div>
      <h1>Unisciti alla <em>community</em> del cane felice</h1>
      <p>Ricevi consigli esclusivi, tecniche pratiche e storie ispiranti direttamente nella tua casella email. Ogni settimana.</p>
    </div>

    <!-- Content -->
    <div class="content">

      <!-- Benefits -->
      <div class="benefits">
        <h2 class="benefit-title">Cosa riceverai iscrivendoti:</h2>

        <div class="benefit-list">
          <div class="benefit-item">
            <div class="benefit-icon">✓</div>
            <div class="benefit-text">
              <strong>Consigli settimanali pratici</strong> per migliorare la comunicazione con il tuo cane
            </div>
          </div>

          <div class="benefit-item">
            <div class="benefit-icon">✓</div>
            <div class="benefit-text">
              <strong>Accesso anticipato</strong> a nuovi corsi, risorse e contenuti esclusivi
            </div>
          </div>

          <div class="benefit-item">
            <div class="benefit-icon">✓</div>
            <div class="benefit-text">
              <strong>Guide gratuite</strong> e mini-tutorial riservati agli iscritti
            </div>
          </div>

          <div class="benefit-item">
            <div class="benefit-icon">✓</div>
            <div class="benefit-text">
              <strong>Storie di successo</strong> e casi studio dalla community
            </div>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="form-wrapper">
        <h3 class="form-title">Compila il form per iscriverti</h3>

        <iframe
          src="https://app.chiaracapotorto.com/widget/form/JcdsXE31AFGRGVOxzO7x"
          id="inline-JcdsXE31AFGRGVOxzO7x"
          data-layout="{'id':'INLINE'}"
          data-trigger-type="alwaysShow"
          data-trigger-value=""
          data-activation-type="alwaysActivated"
          data-activation-value=""
          data-deactivation-type="neverDeactivate"
          data-deactivation-value=""
          data-form-name="Form Iscrizione Newsletter"
          data-height="undefined"
          data-layout-iframe-id="inline-JcdsXE31AFGRGVOxzO7x"
          data-form-id="JcdsXE31AFGRGVOxzO7x"
          title="Form Iscrizione Newsletter"
        ></iframe>
      </div>

      <!-- Footer Note -->
      <div class="footer-note">
        <p>
          I tuoi dati sono al sicuro. Puoi annullare l'iscrizione in qualsiasi momento.<br>
          Niente spam, solo contenuti di valore per te e il tuo cane.
        </p>
      </div>

    </div>
  </div>
</main>

<!-- FOOTER MINIMAL -->
<footer class="site-footer">
  <p>&copy; <?php echo date('Y'); ?> Chiara Capotorto</p>
  <div class="site-footer-links">
    <a href="privacy.php">Privacy</a>
    <a href="cookie.php">Cookie</a>
    <a href="termini.php">Termini</a>
  </div>
</footer>

<script src="https://app.chiaracapotorto.com/js/form_embed.js"></script>

</body>
</html>
