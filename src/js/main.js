/* ═══════════════════════════════════════════════════════════════
   DOG COMMUNICATION CLUB - Main JavaScript
   ═══════════════════════════════════════════════════════════════ */

// ─── DOM Ready ───
document.addEventListener('DOMContentLoaded', function() {
  initMobileMenu();
  initFaq();
  initPricingToggle();
  initModal();
  initContactForm();
  initSmoothScroll();
});

// ─── Mobile Menu ───
function initMobileMenu() {
  const menuToggle = document.getElementById('menuToggle');
  const header = document.getElementById('header');

  if (menuToggle && header) {
    menuToggle.addEventListener('click', function() {
      header.classList.toggle('header--menu-open');
    });

    // Close menu when clicking on a link
    const navLinks = document.querySelectorAll('.header__nav-link');
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        header.classList.remove('header--menu-open');
      });
    });
  }
}

// ─── FAQ Accordion ───
function initFaq() {
  const faqItems = document.querySelectorAll('.faq__item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq__question');
    if (question) {
      question.addEventListener('click', function() {
        // Close all other items
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            otherItem.classList.remove('open');
          }
        });
        // Toggle current item
        item.classList.toggle('open');
      });
    }
  });
}

// Legacy function for onclick attribute
function toggleFaq(btn) {
  const item = btn.parentElement;
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq__item, .faq-item').forEach(i => i.classList.remove('open'));
  if (!isOpen) item.classList.add('open');
}

// ─── Pricing Toggle ───
let isAnnual = false;
let isLaunchMode = false; // Flag per modalità lancio (7 giorni)

// Prezzi normali
const prices = {
  chihuahua: { monthly: '39', annual: '447' },
  border: { monthly: '89', annual: '1067' },
  alano: { monthly: '127', annual: '1447' }
};

// Prezzi scontati lancio (solo annuale)
const launchPrices = {
  chihuahua: { annual: '419' },
  border: { annual: '959' },
  alano: { annual: '1369' }
};

// ═══════════════════════════════════════════════════════════════
// CONFIGURAZIONE LANCIO
// Imposta la data di inizio lancio (il lancio dura 7 giorni)
// Formato: 'YYYY-MM-DD' oppure null per disabilitare
// ═══════════════════════════════════════════════════════════════
const LAUNCH_START_DATE = null; // Es: '2024-02-01'
const LAUNCH_DURATION_DAYS = 7;

function checkLaunchPeriod() {
  if (!LAUNCH_START_DATE) return false;

  const launchStart = new Date(LAUNCH_START_DATE);
  const launchEnd = new Date(launchStart);
  launchEnd.setDate(launchEnd.getDate() + LAUNCH_DURATION_DAYS);

  const now = new Date();
  return now >= launchStart && now <= launchEnd;
}

function initPricingToggle() {
  const toggleWrap = document.querySelector('.toggle-wrap');
  if (toggleWrap) {
    toggleWrap.addEventListener('click', switchBilling);
  }

  // Controlla se siamo nel periodo di lancio
  isLaunchMode = checkLaunchPeriod();

  // Aggiorna il tag annuale se in modalità lancio
  updateAnnualTag();
}

function updateAnnualTag() {
  const annualTag = document.getElementById('annualTag');
  if (annualTag) {
    if (isLaunchMode) {
      annualTag.textContent = '🎉 Offerta Lancio!';
      annualTag.classList.add('launch-active');
    } else {
      annualTag.textContent = 'Risparmia fino al 10%';
      annualTag.classList.remove('launch-active');
    }
  }
}

function switchBilling() {
  isAnnual = !isAnnual;

  const toggleTrack = document.getElementById('toggleTrack');
  const toggleThumb = document.getElementById('toggleThumb');
  const annualTag = document.getElementById('annualTag');

  if (toggleTrack) toggleTrack.classList.toggle('active', isAnnual);
  if (toggleThumb) toggleThumb.classList.toggle('active', isAnnual);
  if (annualTag) annualTag.classList.toggle('visible', isAnnual);

  // Update prices
  updatePrice('priceChihuahua', 'chihuahua');
  updatePrice('priceBorder', 'border');
  updatePrice('priceAlano', 'alano');

  // Update periods
  updatePeriod('periodChihuahua', false);
  updatePeriod('periodBorder', false);
  updatePeriod('periodAlano', true);
}

function updatePrice(elementId, priceKey) {
  const element = document.getElementById(elementId);
  if (element && prices[priceKey]) {
    if (isAnnual) {
      if (isLaunchMode && launchPrices[priceKey]) {
        // Modalità lancio: prezzo barrato + prezzo scontato
        const originalPrice = prices[priceKey].annual;
        const launchPrice = launchPrices[priceKey].annual;
        element.innerHTML = '<span class="price-original"><sup>€</sup>' + originalPrice + '</span><sup>€</sup>' + launchPrice;
      } else {
        // Prezzo annuale normale
        element.innerHTML = '<sup>€</sup>' + prices[priceKey].annual;
      }
    } else {
      // Prezzo mensile (mai scontato)
      element.innerHTML = '<sup>€</sup>' + prices[priceKey].monthly;
    }
  }
}

function updatePeriod(elementId, hasMaxNote) {
  const element = document.getElementById(elementId);
  if (element) {
    if (hasMaxNote) {
      element.textContent = isAnnual ? "all'anno · max 20 persone" : 'al mese · max 20 persone';
    } else {
      element.textContent = isAnnual ? "all'anno" : 'al mese';
    }
  }
}

// ─── Debug: Toggle Launch Mode ───
function toggleLaunchMode() {
  isLaunchMode = !isLaunchMode;
  console.log('Launch Mode:', isLaunchMode ? 'ON' : 'OFF');

  updateAnnualTag();

  // Se siamo in annuale, aggiorna i prezzi
  if (isAnnual) {
    updatePrice('priceChihuahua', 'chihuahua');
    updatePrice('priceBorder', 'border');
    updatePrice('priceAlano', 'alano');
  }

  // Aggiorna il tasto debug
  const debugBtn = document.getElementById('debugLaunchBtn');
  if (debugBtn) {
    debugBtn.textContent = isLaunchMode ? '🚀 Lancio: ON' : '🚀 Lancio: OFF';
    debugBtn.style.background = isLaunchMode ? '#5F7A4A' : '#7E5A45';
  }
}

// ─── Modal ───
function initModal() {
  const modal = document.getElementById('candidatura-modal');
  const closeBtn = modal?.querySelector('.modal__close');

  if (closeBtn) {
    closeBtn.addEventListener('click', closeModal);
  }

  // Close on backdrop click
  if (modal) {
    modal.addEventListener('click', function(e) {
      if (e.target === modal) {
        closeModal();
      }
    });
  }

  // Close on ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeModal();
    }
  });
}

function openModal() {
  const modal = document.getElementById('candidatura-modal');
  if (modal) {
    modal.classList.add('active');
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  }
}

function closeModal() {
  const modal = document.getElementById('candidatura-modal');
  if (modal) {
    modal.classList.remove('active');
    modal.style.display = 'none';
    document.body.style.overflow = '';
  }
}

// ─── Contact Form ───
function initContactForm() {
  const form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', handleContactSubmit);
  }
}

async function handleContactSubmit(e) {
  e.preventDefault();

  const btn = document.getElementById('contactBtn');
  const btnText = document.getElementById('btnText');
  const btnLoading = document.getElementById('btnLoading');
  const successMsg = document.getElementById('contactSuccess');
  const errorMsg = document.getElementById('contactError');
  const form = document.getElementById('contactForm');

  // Reset messages
  if (successMsg) successMsg.style.display = 'none';
  if (errorMsg) errorMsg.style.display = 'none';

  // Show loading state
  if (btn) btn.disabled = true;
  if (btnText) btnText.style.display = 'none';
  if (btnLoading) btnLoading.style.display = 'inline';

  const formData = new FormData(form);

  // ═══════════════════════════════════════════════════════════════
  // CONFIGURAZIONE FORM
  // Sostituisci 'YOUR_FORM_ID' con il tuo ID Formspree
  // oppure usa Web3Forms o altro servizio
  // ═══════════════════════════════════════════════════════════════
  const FORMSPREE_ENDPOINT = 'https://formspree.io/f/YOUR_FORM_ID';

  try {
    const response = await fetch(FORMSPREE_ENDPOINT, {
      method: 'POST',
      body: formData,
      headers: { 'Accept': 'application/json' }
    });

    if (response.ok) {
      if (successMsg) successMsg.style.display = 'block';
      if (form) form.reset();
    } else {
      throw new Error('Submission failed');
    }
  } catch (error) {
    if (errorMsg) errorMsg.style.display = 'block';
  } finally {
    if (btn) btn.disabled = false;
    if (btnText) btnText.style.display = 'inline';
    if (btnLoading) btnLoading.style.display = 'none';
  }
}

// ─── Smooth Scroll ───
function initSmoothScroll() {
  const links = document.querySelectorAll('a[href^="#"]');

  links.forEach(link => {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href && href !== '#') {
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    });
  });
}

function scrollToSection(sectionId) {
  const section = document.getElementById(sectionId);
  if (section) {
    section.scrollIntoView({ behavior: 'smooth' });
  }
}

// ─── Header Scroll Effect ───
window.addEventListener('scroll', function() {
  const header = document.getElementById('header');
  if (header) {
    if (window.scrollY > 50) {
      header.classList.add('header--scrolled');
    } else {
      header.classList.remove('header--scrolled');
    }
  }
});
