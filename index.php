<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chiara Capotorto - Dog Trainer</title>
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
     HEADER & NAVIGATION
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
    from {
      opacity: 0;
      transform: translateY(-10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .mobile-menu.active {
    display: flex;
  }

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
     HERO SECTION
  ════════════════════════════════════════ */
  .hero {
    min-height: 100vh;
    background: linear-gradient(135deg, var(--brown-dark) 0%, #4A2E1F 100%);
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    padding: 140px 40px 80px;
  }

  .hero::before {
    content: '';
    position: absolute;
    top: -10%;
    right: -10%;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(212, 160, 160, 0.15) 0%, transparent 70%);
    animation: float 20s ease-in-out infinite;
  }

  .hero::after {
    content: '';
    position: absolute;
    bottom: -15%;
    left: -5%;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(143, 168, 122, 0.12) 0%, transparent 70%);
    animation: float 25s ease-in-out infinite reverse;
  }

  @keyframes float {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(30px, -30px) scale(1.05); }
  }

  .hero-content {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 80px;
    align-items: center;
  }

  .hero-text h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.2rem, 4vw, 3.2rem);
    font-weight: 700;
    color: var(--cream);
    line-height: 1.3;
    margin-bottom: 16px;
  }

  .hero-text h1 em {
    font-style: normal;
    color: var(--rose-light);
    display: block;
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    font-weight: 500;
    font-family: 'DM Sans', sans-serif;
    margin-top: 12px;
    letter-spacing: 0.5px;
  }

  .hero-text p {
    font-size: 1.15rem;
    color: rgba(245, 237, 228, 0.75);
    line-height: 1.8;
    margin-bottom: 40px;
    font-weight: 300;
  }

  .hero-buttons {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
  }

  .btn-primary {
    background: var(--rose);
    color: var(--brown-dark);
    padding: 16px 38px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    display: inline-block;
    border: 2px solid var(--rose);
  }

  .btn-primary:hover {
    background: var(--rose-dark);
    transform: translateY(-3px);
    box-shadow: 0 12px 32px rgba(212, 160, 160, 0.35);
  }

  .btn-secondary {
    background: transparent;
    color: var(--cream);
    padding: 16px 38px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    display: inline-block;
    border: 2px solid rgba(245, 237, 228, 0.3);
  }

  .btn-secondary:hover {
    background: rgba(245, 237, 228, 0.1);
    border-color: var(--cream);
    transform: translateY(-3px);
  }

  /* Image Container con fallback */
  .image-container {
    position: relative;
    aspect-ratio: 1;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
  }

  .image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .image-placeholder {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, var(--rose-light) 0%, var(--sage-light) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Playfair Display', serif;
    font-size: 1rem;
    color: var(--brown-mid);
    text-align: center;
    padding: 40px;
    font-style: italic;
  }

  .image-container img + .image-placeholder {
    display: none;
  }

  .image-container img[src=""],
  .image-container img:not([src]) {
    display: none;
  }

  .image-container img[src=""] + .image-placeholder,
  .image-container img:not([src]) + .image-placeholder {
    display: flex;
  }

  /* ════════════════════════════════════════
     ABOUT SECTION
  ════════════════════════════════════════ */
  .about {
    padding: 120px 40px;
    background: var(--cream-light);
  }

  .about-container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
  }

  .about-image {
    aspect-ratio: 4/5;
    border-radius: 24px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 16px 48px rgba(0, 0, 0, 0.08);
  }

  .about-text .label {
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--sage-dark);
    margin-bottom: 16px;
  }

  .about-text h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--brown-dark);
    line-height: 1.25;
    margin-bottom: 24px;
  }

  .about-text h2 em {
    font-style: italic;
    color: var(--brown-warm);
  }

  .about-text p {
    font-size: 1.05rem;
    color: var(--text-mid);
    line-height: 1.8;
    margin-bottom: 20px;
    font-weight: 300;
  }

  /* ════════════════════════════════════════
     COURSES - BENTO GRID
  ════════════════════════════════════════ */
  .courses {
    padding: 120px 40px;
    background: var(--cream);
  }

  .section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 80px;
  }

  .section-header .label {
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--sage-dark);
    margin-bottom: 16px;
  }

  .section-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--brown-dark);
    line-height: 1.25;
    margin-bottom: 20px;
  }

  .section-header h2 em {
    font-style: italic;
    color: var(--brown-warm);
  }

  .section-header p {
    font-size: 1.05rem;
    color: var(--text-mid);
    line-height: 1.8;
    font-weight: 300;
  }

  .bento-grid {
    max-width: 1300px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 24px;
  }

  .course-card {
    background: white;
    border-radius: 24px;
    padding: 40px;
    border: 1px solid rgba(92, 61, 46, 0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
  }

  .course-card::before {
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

  .course-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 24px 64px rgba(92, 61, 46, 0.12);
    border-color: var(--rose-light);
  }

  .course-card:hover::before {
    transform: scaleX(1);
  }

  .course-card:nth-child(1) { grid-column: span 4; }
  .course-card:nth-child(2) { grid-column: span 4; }
  .course-card:nth-child(3) { grid-column: span 4; }
  .course-card:nth-child(4) { grid-column: span 6; }
  .course-card:nth-child(5) { grid-column: span 6; }

  .course-icon {
    width: 80px;
    height: 80px;
    border-radius: 20px;
    background: linear-gradient(135deg, var(--rose-light), var(--sage-light));
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    margin-bottom: 28px;
  }

  .course-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--brown-dark);
    margin-bottom: 8px;
  }

  .course-level {
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--sage-dark);
    margin-bottom: 20px;
  }

  .course-description {
    font-size: 0.95rem;
    color: var(--text-mid);
    line-height: 1.7;
    margin-bottom: 28px;
    flex-grow: 1;
  }

  .course-features {
    list-style: none;
    margin-bottom: 32px;
  }

  .course-features li {
    font-size: 0.9rem;
    color: var(--text-mid);
    padding: 8px 0;
    padding-left: 28px;
    position: relative;
  }

  .course-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--sage);
    font-weight: 700;
  }

  .course-card .btn-primary {
    width: 100%;
    text-align: center;
  }

  /* ════════════════════════════════════════
     FEATURES - GLASSMORPHISM
  ════════════════════════════════════════ */
  .features {
    padding: 120px 40px;
    background: linear-gradient(135deg, var(--brown-dark) 0%, #4A2E1F 100%);
    position: relative;
    overflow: hidden;
  }

  .features::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 20% 30%, rgba(212, 160, 160, 0.1) 0%, transparent 50%),
      radial-gradient(circle at 80% 70%, rgba(143, 168, 122, 0.1) 0%, transparent 50%);
  }

  .features-grid {
    max-width: 1200px;
    margin: 80px auto 0;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 32px;
    position: relative;
    z-index: 1;
  }

  .feature-card {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 24px;
    padding: 40px 32px;
    transition: all 0.4s ease;
  }

  .feature-card:hover {
    background: rgba(255, 255, 255, 0.12);
    transform: translateY(-8px);
    border-color: rgba(212, 160, 160, 0.3);
  }

  .feature-icon {
    font-size: 3rem;
    margin-bottom: 24px;
    display: block;
  }

  .feature-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--cream);
    margin-bottom: 16px;
  }

  .feature-card p {
    font-size: 0.95rem;
    color: rgba(245, 237, 228, 0.7);
    line-height: 1.7;
  }

  /* ════════════════════════════════════════
     TESTIMONIALS
  ════════════════════════════════════════ */
  .testimonials {
    padding: 120px 40px;
    background: var(--cream-light);
  }

  .testimonials-grid {
    max-width: 1200px;
    margin: 80px auto 0;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 32px;
  }

  .testimonial-card {
    background: white;
    border-radius: 24px;
    padding: 40px;
    border: 1px solid rgba(92, 61, 46, 0.08);
    transition: all 0.3s ease;
  }

  .testimonial-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 48px rgba(92, 61, 46, 0.1);
  }

  .testimonial-stars {
    color: var(--rose);
    font-size: 1.2rem;
    margin-bottom: 20px;
  }

  .testimonial-text {
    font-size: 1rem;
    color: var(--text-mid);
    line-height: 1.8;
    margin-bottom: 28px;
    font-style: italic;
  }

  .testimonial-author {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .author-avatar {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--rose-light), var(--sage-light));
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
  }

  .author-info h4 {
    font-weight: 600;
    color: var(--brown-dark);
    margin-bottom: 4px;
  }

  .author-info p {
    font-size: 0.85rem;
    color: var(--text-light);
  }

  /* ════════════════════════════════════════
     CTA SECTION
  ════════════════════════════════════════ */
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

  .cta h2 em {
    font-style: italic;
    color: white;
  }

  .cta p {
    font-size: 1.1rem;
    color: rgba(74, 46, 31, 0.8);
    line-height: 1.8;
    margin-bottom: 40px;
  }

  .cta .btn-primary {
    background: var(--brown-dark);
    color: var(--cream);
    border-color: var(--brown-dark);
    font-size: 1rem;
    padding: 18px 48px;
  }

  .cta .btn-primary:hover {
    background: #4A2E1F;
    transform: translateY(-4px);
    box-shadow: 0 16px 48px rgba(74, 46, 31, 0.3);
  }

  /* ════════════════════════════════════════
     FOOTER
  ════════════════════════════════════════ */
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
    overflow: hidden;
  }

  .social-links a img {
    width: 24px;
    height: 24px;
    object-fit: contain;
    filter: brightness(0) invert(1);
    transition: filter 0.3s ease;
  }

  .social-links a:hover {
    background: var(--rose);
    transform: translateY(-4px);
  }

  .social-links a:hover img {
    filter: brightness(0);
  }

  .footer-cta {
    margin-top: 32px;
    padding-top: 32px;
    border-top: 1px solid rgba(245, 237, 228, 0.15);
  }

  .footer-cta p {
    color: var(--cream);
    font-family: 'Playfair Display', serif;
    font-size: 1.1rem;
    font-weight: 500;
    margin-bottom: 16px;
    font-style: italic;
  }

  .footer-cta-btn {
    display: inline-block;
    color: var(--rose-light);
    padding: 0;
    border-bottom: 2px solid var(--rose);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
  }

  .footer-cta-btn:hover {
    color: var(--cream);
    border-color: var(--cream);
  }

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
    .hero-content {
      grid-template-columns: 1fr;
      gap: 50px;
    }

    .image-container {
      max-width: 500px;
      margin: 0 auto;
    }

    .about-container {
      grid-template-columns: 1fr;
      gap: 50px;
    }

    .bento-grid .course-card {
      grid-column: span 12 !important;
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

    .hero,
    .about,
    .courses,
    .features,
    .testimonials {
      padding: 80px 24px;
    }

    .section-header { margin-bottom: 50px; }

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

    .hero-buttons { flex-direction: column; }

    .btn-primary,
    .btn-secondary {
      width: 100%;
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
      <li><a href="#about">Chi Sono</a></li>
      <li><a href="#services">Servizi</a></li>
      <li><a href="#testimonials">Testimonianze</a></li>
      <li><a href="#contact" class="nav-cta">Conosciamoci</a></li>
    </ul>
  </nav>
</header>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
  <a href="iscrizione_newsletter.php" onclick="toggleMenu()">Iscriviti alla Newsletter</a>
  <a href="calendario.php" onclick="toggleMenu()">Calendario</a>
  <a href="#services" onclick="toggleMenu()">Scopri i Percorsi</a>
  <a href="#contact" onclick="toggleMenu()">Conosciamoci</a>
</div>

<!-- HERO SECTION -->
<section class="hero" id="home">
  <div class="hero-content">
    <div class="hero-text">
      <h1>
        Chiara Capotorto
        <em>Dog trainer specializzata in comunicazione e osservazione del cane</em>
      </h1>
      <p>
        Ti aiuto a capire il tuo cane, non solo a gestirlo. Attraverso
        l'osservazione e la comunicazione, costruiamo insieme una relazione
        basata sulla comprensione reciproca e sulla fiducia.
      </p>
      <div class="hero-buttons">
        <a href="#services" class="btn-primary">I Miei Servizi</a>
        <a href="#about" class="btn-secondary">Conosciamoci</a>
      </div>
    </div>

    <div class="image-container">
      <img src="src/img/hero-chiara.jpg" alt="Chiara Capotorto al lavoro con un cane" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
      <div class="image-placeholder">
        Inserisci qui una foto di te al lavoro con un cane
      </div>
    </div>
  </div>
</section>

<!-- ABOUT SECTION -->
<section class="about" id="about">
  <div class="about-container">
    <div class="image-container about-image">
      <img src="src/img/about-chiara.jpg" alt="Foto professionale di Chiara Capotorto" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
      <div class="image-placeholder">
        Foto professionale di Chiara
      </div>
    </div>

    <div class="about-text">
      <div class="label">Chi Sono</div>
      <h2>Chiara Capotorto – <em>Dog trainer</em></h2>
      <p>
        Sono un'educatrice e istruttrice cinofila e da oltre dieci anni lavoro
        nel campo della comunicazione uomo–cane. In questo tempo ho accompagnato
        centinaia di famiglie, cuccioli e cani adulti, ognuno con la propria
        storia, i propri bisogni e il proprio modo di comunicare.
      </p>
      <p>
        Osservando e lavorando sul campo ho imparato che dietro a ogni
        comportamento c'è sempre un messaggio. Quando impariamo a leggerlo,
        smettiamo di correggere a caso e iniziamo a costruire una relazione
        che funziona davvero.
      </p>
      <p>
        Il mio lavoro non parte dal controllo, ma dalla comprensione. Attraverso
        l'osservazione e la comunicazione, aiuto i proprietari a sviluppare
        nuove chiavi di lettura per interpretare ciò che il cane sta esprimendo
        e rispondere in modo più consapevole.
      </p>
      <a href="calendario.php" class="btn-primary">Conosciamoci</a>
    </div>
  </div>
</section>

<!-- SERVICES SECTION -->
<section class="courses" id="services">
  <div class="section-header">
    <div class="label">I Miei Servizi</div>
    <h2>Come posso <em>aiutarti</em></h2>
    <p>
      Ogni cane è unico. Per questo offro servizi personalizzati
      che si adattano alle tue esigenze e a quelle del tuo compagno.
    </p>
  </div>

  <div class="bento-grid">
    <div class="course-card">
      <div class="course-icon">🎓</div>
      <h3>Educazione Base e Avanzata</h3>
      <div class="course-level">Cuccioli & Adulti</div>
      <p class="course-description">
        Percorso completo, online o in presenza, per aiutare il tuo cane a
        vivere al meglio nella quotidianità.
      </p>
      <ul class="course-features">
        <li>Sessioni individuali personalizzate</li>
        <li>Video e riassunti pratici</li>
        <li>Supporto diretto</li>
      </ul>
      <a href="calendario.php" class="btn-primary">Richiedi Info</a>
    </div>

    <div class="course-card">
      <div class="course-icon">👤</div>
      <h3>Sessioni Individuali 1:1</h3>
      <div class="course-level">Percorsi Personalizzati</div>
      <p class="course-description">
        Percorsi personalizzati per affrontare le sfide specifiche del tuo cane.
      </p>
      <ul class="course-features">
        <li>Analisi approfondita</li>
        <li>Strategie personalizzate</li>
        <li>Supporto tra le sessioni</li>
      </ul>
      <a href="calendario.php" class="btn-primary">Richiedi Info</a>
    </div>

    <div class="course-card">
      <div class="course-icon">🔧</div>
      <h3>Problemi Comportamentali</h3>
      <div class="course-level">Interventi Mirati</div>
      <p class="course-description">
        Percorsi mirati per risolvere paure, ansia, aggressività o comportamenti indesiderati.
      </p>
      <ul class="course-features">
        <li>Valutazione del comportamento</li>
        <li>Strategie testate sul campo</li>
        <li>Approccio gentile</li>
      </ul>
      <a href="calendario.php" class="btn-primary">Richiedi Info</a>
    </div>

    <div class="course-card">
      <div class="course-icon">🏆</div>
      <h3>Sport e Attività Cinofile</h3>
      <div class="course-level">Dog Dance & Rally Obedience</div>
      <p class="course-description">
        Avviamento allo sport per stimolare mente e corpo del tuo cane.
      </p>
      <ul class="course-features">
        <li>Programmi passo passo</li>
        <li>Allenamento divertente</li>
        <li>Supporto tecnico</li>
      </ul>
      <a href="calendario.php" class="btn-primary">Richiedi Info</a>
    </div>

    <div class="course-card">
      <div class="course-icon">🌟</div>
      <h3>Dog Communication Club</h3>
      <div class="course-level">Membership Online</div>
      <p class="course-description">
        Percorso continuo online per approfondire comunicazione e relazione.
      </p>
      <ul class="course-features">
        <li>Video lezioni e live</li>
        <li>PDF guide scaricabili</li>
        <li>Percorsi tematici</li>
      </ul>
      <a href="membership.php" class="btn-primary">Entra nel Club</a>
    </div>
  </div>
</section>

<!-- FEATURES SECTION -->
<section class="features">
  <div class="section-header">
    <div class="label" style="color: var(--rose-light);">Il Mio Approccio</div>
    <h2 style="color: var(--cream);">
      Educazione <em style="color: var(--rose);">gentile ed efficace</em>
    </h2>
    <p style="color: rgba(245, 237, 228, 0.7);">
      Lavoro con metodi basati sulla scienza del comportamento animale.
    </p>
  </div>

  <div class="features-grid">
    <div class="feature-card">
      <span class="feature-icon">🤝</span>
      <h3>Metodi Gentili</h3>
      <p>Niente punizioni né dominanza. Guido con rispetto e chiarezza.</p>
    </div>

    <div class="feature-card">
      <span class="feature-icon">🔬</span>
      <h3>Approccio Scientifico</h3>
      <p>Tecniche validate dalla ricerca moderna sull'etologia canina.</p>
    </div>

    <div class="feature-card">
      <span class="feature-icon">🎯</span>
      <h3>Personalizzazione</h3>
      <p>Ogni cane è diverso. Programmi su misura per te.</p>
    </div>

    <div class="feature-card">
      <span class="feature-icon">🏠</span>
      <h3>Nella Vita Reale</h3>
      <p>Lavoro nel tuo ambiente quotidiano: casa, parco, città.</p>
    </div>

    <div class="feature-card">
      <span class="feature-icon">👨‍👩‍👧‍👦</span>
      <h3>Famiglia Coinvolta</h3>
      <p>Educo tutta la famiglia, non solo il cane.</p>
    </div>

    <div class="feature-card">
      <span class="feature-icon">📞</span>
      <h3>Supporto Continuo</h3>
      <p>Resto disponibile per dubbi e domande.</p>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials" id="testimonials">
  <div class="section-header">
    <div class="label">Testimonianze</div>
    <h2>Cosa dicono <em>i nostri membri</em></h2>
    <p>Storie reali di persone che hanno trasformato il rapporto con i loro cani.</p>
  </div>

  <div class="testimonials-grid">
    <div class="testimonial-card">
      <div class="testimonial-stars">★★★★★</div>
      <p class="testimonial-text">
        "Prima facevo fatica a portare Rocky a passeggio. Tirava, abbaiava
        ad altri cani... era un incubo. Dopo solo 3 settimane nel corso,
        le nostre passeggiate sono decisamente migliorate."
      </p>
      <div class="testimonial-author">
        <div class="author-avatar">👩</div>
        <div class="author-info">
          <h4>Maria R.</h4>
          <p>Proprietaria di Rocky, 2 anni</p>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-stars">★★★★★</div>
      <p class="testimonial-text">
        "Il corso mi ha aperto gli occhi. Ho capito che molti 'problemi'
        di Luna erano in realtà miei, nel modo in cui comunicavo con lei.
        Chiara è stata paziente e chiara. Consigliatissimo!"
      </p>
      <div class="testimonial-author">
        <div class="author-avatar">👨</div>
        <div class="author-info">
          <h4>Luca P.</h4>
          <p>Proprietario di Luna, 5 anni</p>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-stars">★★★★★</div>
      <p class="testimonial-text">
        "Avevo provato altri corsi online ma questo è diverso. Chiara non
        si limita a dare comandi, ti insegna davvero a capire il tuo cane.
        Grazie!"
      </p>
      <div class="testimonial-author">
        <div class="author-avatar">👩</div>
        <div class="author-info">
          <h4>Elena S.</h4>
          <p>Proprietaria di Max, 1 anno</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="cta" id="contact">
  <div class="cta-content">
    <h2>Se senti che è arrivato il momento <em>di capire meglio il tuo cane</em></h2>
    <p>
      Che tu abbia un cucciolo da educare o un cane adulto con cui migliorare
      la comunicazione, sono qui per aiutarti.
    </p>
    <a href="calendario.php" class="btn-primary">Prenota un Appuntamento</a>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-content">
    <div class="footer-about">
      <h3>Chiara Capotorto – <span>Dog Trainer</span></h3>
      <p class="footer-payoff">Comunicazione, osservazione e relazione uomo-cane</p>
      <div class="social-links">
        <a href="#" aria-label="Facebook">
          <img src="src/img/icons/facebook.svg" alt="Facebook" onerror="this.parentElement.innerHTML='📘'">
        </a>
        <a href="#" aria-label="Instagram">
          <img src="src/img/icons/instagram.svg" alt="Instagram" onerror="this.parentElement.innerHTML='📷'">
        </a>
      </div>

      <div class="footer-cta">
        <p>Pronto a capire davvero il tuo cane?</p>
        <a href="#contact" class="footer-cta-btn">Conosciamoci</a>
      </div>
    </div>

    <div class="footer-links">
      <h4>Navigazione</h4>
      <ul>
        <li><a href="#services">Servizi</a></li>
        <li><a href="#about">Chi Sono</a></li>
        <li><a href="#testimonials">Testimonianze</a></li>
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
    <p>© 2026 Chiara Capotorto. Tutti i diritti riservati.</p>
    <div class="footer-bottom-links">
      <a href="privacy.php">Privacy</a>
      <a href="cookie.php">Cookie</a>
      <a href="termini.php">Termini</a>
    </div>
  </div>
</footer>

<!-- JAVASCRIPT -->
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

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href !== '#') {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    });
  });
</script>

</body>
</html>
