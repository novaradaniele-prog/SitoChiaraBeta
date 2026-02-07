<!-- HEADER -->
<header id="header">
  <nav>
    <a href="/" class="logo">Chiara <span>Capotorto</span></a>

    <ul class="nav-menu">
      <li><a href="iscrizione_newsletter.php">Iscriviti alla Newsletter</a></li>
      <li><a href="calendario.php">Calendario</a></li>
      <li><a href="index.php#services">Scopri i Percorsi</a></li>
      <li><a href="index.php#contact" class="nav-cta">Conosciamoci</a></li>
    </ul>

    <button class="menu-toggle" id="menuToggle" onclick="toggleMenu()">
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
  </nav>
</header>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
  <a href="iscrizione_newsletter.php" onclick="toggleMenu()">Iscriviti alla Newsletter</a>
  <a href="calendario.php" onclick="toggleMenu()">Calendario</a>
  <a href="index.php#services" onclick="toggleMenu()">Scopri i Percorsi</a>
  <a href="index.php#contact" onclick="toggleMenu()">Conosciamoci</a>
</div>
