<?php
/**
 * Template Name: Contatti
 */
get_header();
?>

    <section class="contact-hero" id="contatti">
      <div class="container">
        <div class="section-header" style="padding-top: 80px;">
          <span class="eyebrow">Siamo qui per te</span>
          <h1>Contatti &amp; Prenotazioni</h1>
          <p>Scegli il modo più comodo per prenotare o metterti in contatto con noi.</p>
        </div>

        <div class="contact-cta-grid" data-aos>
          <!-- Treatwell -->
          <a href="https://www.treatwell.it/salone/dream-salon-carpi/" class="contact-cta-card treatwell-card" id="treatwell-main-btn" target="_blank" rel="noopener">
            <div class="contact-cta-body">
              <strong>Prenota su Treatwell</strong>
              <span>Scegli servizio, giorno e ora online. Confermato subito.</span>
            </div>
            <div class="contact-cta-arrow">→</div>
          </a>

          <!-- WhatsApp -->
          <a href="https://wa.me/390596440544" class="contact-cta-card whatsapp-card" id="whatsapp-main-btn" target="_blank" rel="noopener">
            <div class="contact-cta-body">
              <strong>Prenota via WhatsApp</strong>
              <span>Scrivi un messaggio, ti rispondiamo il prima possibile.</span>
            </div>
            <div class="contact-cta-arrow">→</div>
          </a>

          <!-- Telefono -->
          <a href="tel:+390596440544" class="contact-cta-card phone-card" id="phone-main-btn">
            <div class="contact-cta-body">
              <strong>Chiama il salone</strong>
              <span>059 640544 · Lun–Ven 9–19, Sab 9–17</span>
            </div>
            <div class="contact-cta-arrow">→</div>
          </a>
        </div>
      </div>
    </section>

    <!-- INFO SALONE -->
    <section class="contact-info-section">
      <div class="container">
        <div class="contact-info-grid">

          <!-- Orari -->
          <div class="contact-info-card" data-aos>
            <h3>Orari di apertura</h3>
            <ul class="hours-list">
              <div class="hours-row"><span>Lunedì</span><span>09:00 – 19:00</span></div>
              <div class="hours-row"><span>Martedì</span><span>09:00 – 19:00</span></div>
              <div class="hours-row"><span>Mercoledì</span><span>09:00 – 19:00</span></div>
              <div class="hours-row"><span>Giovedì</span><span>09:00 – 19:00</span></div>
              <div class="hours-row"><span>Venerdì</span><span>09:00 – 19:00</span></div>
              <div class="hours-row"><span>Sabato</span><span>09:00 – 17:00</span></div>
              <div class="hours-row closed"><span>Domenica</span><span>Chiuso</span></div>
            </ul>
          </div>

          <!-- Indirizzo -->
          <div class="contact-info-card" data-aos data-delay="100">
            <h3>Dove siamo</h3>
            <p><strong>Via Cuneo, 5</strong><br>41012 Carpi (MO)</p>
            <a href="https://www.google.com/maps?q=Via+Cuneo+5+Carpi+MO" class="btn btn-outline-dark" id="maps-btn" target="_blank" rel="noopener" style="margin-top:16px; display:inline-block;"> Apri in Google Maps </a>
            <div class="map-embed" style="margin-top:20px; border-radius:12px; overflow:hidden;">
              <iframe title="Dream Salon Carpi – mappa" width="100%" height="200" style="border:0; display:block;" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Via+Cuneo+5+Carpi+MO&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
          </div>

          <!-- Contatti diretti -->
          <div class="contact-info-card" data-aos data-delay="200">
            <div class="contact-links">
              <a href="tel:+390596440544" class="contact-link-row" id="contact-tel-btn">
                <span>059 640544</span>
              </a>
              <a href="https://wa.me/390596440544" class="contact-link-row" id="contact-wa-btn" target="_blank" rel="noopener">
                <span>WhatsApp</span>
              </a>
              <a href="https://www.instagram.com/" class="contact-link-row" id="contact-ig-btn" target="_blank" rel="noopener">
                <span>Instagram</span>
              </a>
              <a href="https://www.treatwell.it/salone/dream-salon-carpi/" class="contact-link-row" id="contact-tw-btn" target="_blank" rel="noopener">
                <span>Treatwell – Prenota online</span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section" id="faq">
      <div class="container">
        <div class="section-header" data-aos>
          <span class="eyebrow">Domande frequenti</span>
          <h2>Tutto quello che vuoi sapere</h2>
        </div>
        <div class="faq-list">
          <div class="faq-item" data-aos data-delay="100">
            <button class="faq-question" aria-expanded="false" id="faq-q1" aria-controls="faq-a1">
              Come posso prenotare un appuntamento?
              <span class="faq-arrow" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-a1" role="region" aria-labelledby="faq-q1">
              <p>Puoi prenotare direttamente su Treatwell, oppure scriverci su WhatsApp o chiamarci al 059 640544.</p>
            </div>
          </div>
          <div class="faq-item" data-aos data-delay="150">
            <button class="faq-question" aria-expanded="false" id="faq-q2" aria-controls="faq-a2">
              Devo pagare un acconto per prenotare?
              <span class="faq-arrow" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-a2" role="region" aria-labelledby="faq-q2">
              <p>Per la maggior parte dei servizi non è richiesto alcun acconto. Per acconciature evento o servizi sposa potremmo chiederti una piccola caparra.</p>
            </div>
          </div>
          <div class="faq-item" data-aos data-delay="200">
            <button class="faq-question" aria-expanded="false" id="faq-q3" aria-controls="faq-a3">
              Posso disdire o spostare un appuntamento?
              <span class="faq-arrow" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-a3" role="region" aria-labelledby="faq-q3">
              <p>Certo, ti chiediamo solo di avvisarci con almeno qualche ora di anticipo. Una semplice chiamata o WhatsApp è più che sufficiente.</p>
            </div>
          </div>
          <div class="faq-item" data-aos data-delay="250">
            <button class="faq-question" aria-expanded="false" id="faq-q4" aria-controls="faq-a4">
              Dove si trova il salone? C'è parcheggio?
              <span class="faq-arrow" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-a4" role="region" aria-labelledby="faq-q4">
              <p>Siamo in <strong>Via Cuneo 5, Carpi (MO)</strong>. Nelle vicinanze trovi parcheggio in strada.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
