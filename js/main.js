/* ================================================================
   DREAM SALON – main.js
   Utility globali + caricamento dinamico da Google Sheets CSV
   ================================================================ */

/* ----------------------------------------------------------------
   GOOGLE SHEETS CSV – URL pubblici (pubblicati come CSV via
   File → Condividi → Pubblica sul web in Google Sheets)
   ---------------------------------------------------------------- */
const SHEETS_SERVICES_CSV = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQL0T2wqqCKk8N3tU-hNUEjTc4dSPhknjAQr6nTGQZYglOhDNBo1ZLFSzrpt6UZDlwMxxf6P4_sZFkO/pub?gid=0&single=true&output=csv';
const SHEETS_STAFF_CSV    = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQL0T2wqqCKk8N3tU-hNUEjTc4dSPhknjAQr6nTGQZYglOhDNBo1ZLFSzrpt6UZDlwMxxf6P4_sZFkO/pub?gid=1407641594&single=true&output=csv';

/* ---- Header scroll ---- */
const header = document.getElementById('main-header');
window.addEventListener('scroll', () => {
  if (header) header.classList.toggle('scrolled', window.scrollY > 10);
}, { passive: true });

/* ---- Theme Toggle ---- */
const themeToggle = document.getElementById('theme-toggle');
const savedTheme = localStorage.getItem('theme') || 'light';
document.documentElement.setAttribute('data-theme', savedTheme);

if (themeToggle) {
  themeToggle.addEventListener('click', () => {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
  });
}

/* ---- Hamburger menu ---- */
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
if (hamburger && mobileMenu) {
  hamburger.addEventListener('click', () => {
    const isOpen = mobileMenu.classList.toggle('open');
    hamburger.classList.toggle('open', isOpen);
    hamburger.setAttribute('aria-expanded', String(isOpen));
  });
  mobileMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      mobileMenu.classList.remove('open');
      hamburger.classList.remove('open');
      hamburger.setAttribute('aria-expanded', 'false');
    });
  });
}

/* ---- Listino tabs ---- */
const tabs = document.querySelectorAll('.listino-tab');
const panels = document.querySelectorAll('.listino-panel');
if (tabs.length > 0) {
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = tab.dataset.tab;
      tabs.forEach(t => { t.classList.remove('active'); t.setAttribute('aria-selected', 'false'); });
      panels.forEach(p => p.classList.remove('active'));
      tab.classList.add('active');
      tab.setAttribute('aria-selected', 'true');
      const panel = document.getElementById('panel-' + target);
      if (panel) panel.classList.add('active');
    });
  });
}

/* ---- FAQ accordion ---- */
document.querySelectorAll('.faq-question').forEach(btn => {
  btn.addEventListener('click', () => {
    const isOpen = btn.classList.contains('open');
    document.querySelectorAll('.faq-question').forEach(b => {
      b.classList.remove('open');
      b.setAttribute('aria-expanded', 'false');
    });
    document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));
    if (!isOpen) {
      btn.classList.add('open');
      btn.setAttribute('aria-expanded', 'true');
      const answerId = btn.getAttribute('aria-controls');
      if (answerId) document.getElementById(answerId).classList.add('open');
    }
  });
});

/* ---- Gallery lightbox ---- */
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxClose = document.getElementById('lightbox-close');
if (lightbox && lightboxImg && lightboxClose) {
  document.querySelectorAll('.gallery-item[data-img]').forEach(item => {
    const openLightbox = () => {
      lightboxImg.src = item.dataset.img;
      lightboxImg.alt = item.querySelector('img') ? item.querySelector('img').alt : '';
      lightbox.classList.add('open');
      document.body.style.overflow = 'hidden';
    };
    item.addEventListener('click', openLightbox);
    item.addEventListener('keydown', e => { if (e.key === 'Enter' || e.key === ' ') openLightbox(); });
  });
  const closeLightbox = () => {
    lightbox.classList.remove('open');
    document.body.style.overflow = '';
  };
  lightboxClose.addEventListener('click', closeLightbox);
  lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLightbox(); });
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });
}

/* ---- Scroll Animations ---- */
const aosEls = document.querySelectorAll('[data-aos]');
if ('IntersectionObserver' in window) {
  const obs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('aos-visible');
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.10, rootMargin: '0px 0px -30px 0px' });
  aosEls.forEach(el => obs.observe(el));
} else {
  aosEls.forEach(el => el.classList.add('aos-visible'));
}

/* ---- Highlight today in hours ---- */
const DAY_NAMES_IT = ['domenica','lunedì','martedì','mercoledì','giovedì','venerdì','sabato'];
const todayName = DAY_NAMES_IT[new Date().getDay()];
document.querySelectorAll('.hours-row').forEach(row => {
  const label = row.querySelector('span:first-child');
  if (label && label.textContent.toLowerCase() === todayName) {
    row.classList.add('today');
  }
});

/* ================================================================
   CSV PARSER – Converte testo CSV in array di oggetti
   ================================================================ */
function parseCSV(text) {
  let p = '', row = [''], ret = [row], i = 0, r = 0, s = !0, l;
  for (l of text) {
    if ('"' === l) {
      if (s && l === p) row[i] += l;
      s = !s;
    } else if (',' === l && s) l = row[++i] = '';
    else if ('\n' === l && s) {
      if ('\r' === p) row[i] = row[i].slice(0, -1);
      row = ret[++r] = [l = '']; i = 0;
    } else row[i] += l;
    p = l;
  }
  if (ret.length < 2) return [];
  const headers = ret[0].map(h => h.trim());
  const result = [];
  for (let j = 1; j < ret.length; j++) {
    if (ret[j].length < headers.length) continue;
    const obj = {};
    for (let k = 0; k < headers.length; k++) {
      obj[headers[k]] = ret[j][k] ? ret[j][k].trim() : '';
    }
    result.push(obj);
  }
  return result;
}

/* ================================================================
   CARICAMENTO STAFF DA GOOGLE SHEETS
   Usato in salone.html – cerca il contenitore #staff-dynamic
   Colonne attese nel foglio: ID, Nome, Ruolo, Colore, Iniziali, FotoURL
   ================================================================ */
async function loadStaffFromSheets() {
  const container = document.getElementById('staff-dynamic');
  if (!container) return; // solo in salone.html

  try {
    const res = await fetch(SHEETS_STAFF_CSV);
    if (!res.ok) throw new Error('Fetch fallito: ' + res.status);
    const buffer = await res.arrayBuffer();
    const text = new TextDecoder('utf-8').decode(buffer);
    const rows = parseCSV(text).filter(r => r.ID);

    if (rows.length === 0) throw new Error('Foglio vuoto');

    container.innerHTML = rows.map(m => {
      const hasPhoto = m.FotoURL && m.FotoURL.trim() !== '';
      const avatarHtml = hasPhoto
        ? `<img src="${m.FotoURL}" alt="Foto di ${m.Nome}" class="team-avatar-img" loading="lazy">`
        : `<div class="team-avatar" style="background:${m.Colore}22; color:${m.Colore};">${m.Iniziali || m.Nome.charAt(0)}</div>`;
      return `
        <div class="team-member">
          ${avatarHtml}
          <span class="team-member-name">${m.Nome}</span>
          <span class="team-member-role">${m.Ruolo}</span>
        </div>`;
    }).join('');

  } catch (err) {
    console.warn('[Staff] Uso dati statici. Motivo:', err.message);
    // Lascia il markup statico esistente visibile (nessuna modifica al DOM)
    container.innerHTML = container.dataset.fallback || container.innerHTML;
  }
}

/* ================================================================
   CARICAMENTO SERVIZI DA GOOGLE SHEETS (per servizi.html)
   Cerca il contenitore #listino-dynamic
   Colonne attese nel foglio: ID, Nome, Descrizione, DurataMinuti,
                               Prezzo, PrezzoLabel, Categoria
   Categoria deve corrispondere ai tab: taglio | colore | eventi
   ================================================================ */
async function loadServicesFromSheets() {
  const listinoBody = document.getElementById('listino-dynamic');
  if (!listinoBody) return; // solo se il placeholder esiste

  const CATEGORIES = ['taglio', 'colore', 'eventi'];

  try {
    const res = await fetch(SHEETS_SERVICES_CSV);
    if (!res.ok) throw new Error('Fetch fallito: ' + res.status);
    const buffer = await res.arrayBuffer();
    const text = new TextDecoder('utf-8').decode(buffer);
    const rows = parseCSV(text).filter(r => r.ID);

    if (rows.length === 0) throw new Error('Foglio vuoto');

    // Raggruppa per categoria e aggiorna ogni tbody
    CATEGORIES.forEach(cat => {
      const tbody = document.getElementById('listino-body-' + cat);
      if (!tbody) return;
      const filtered = rows.filter(r => (r.Categoria || '').toLowerCase() === cat);
      if (filtered.length === 0) return;
      tbody.innerHTML = filtered.map(s =>
        `<tr>
          <td class="service-name">${s.Nome}</td>
          <td class="service-desc hide-sm">${s.Descrizione || ''}</td>
          <td class="service-price">${s.PrezzoLabel || (s.Prezzo ? 'da ' + s.Prezzo + '€' : '—')}</td>
        </tr>`
      ).join('');
    });

  } catch (err) {
    console.warn('[Servizi] Uso listino statico. Motivo:', err.message);
    // Il markup statico rimane intatto
  }
}

/* ================================================================
   INIZIALIZZAZIONE DINAMICA
   ================================================================ */
loadStaffFromSheets();
loadServicesFromSheets();
