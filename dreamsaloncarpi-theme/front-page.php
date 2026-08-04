<?php
/**
 * Template Name: Home Page
 */
get_header();

$hero_image = get_field('hero_image');
if( ! $hero_image ) {
    $hero_image = get_template_directory_uri() . '/img/salon_hero.png';
}
?>

    <section class="hero" id="home">
      <div class="hero-bg" aria-hidden="true"></div>
      <div class="hero-overlay" aria-hidden="true"></div>
      <span class="hero-sparkle" aria-hidden="true">✦</span>
      <span class="hero-sparkle" aria-hidden="true">✦</span>
      <span class="hero-sparkle" aria-hidden="true">✦</span>
      <span class="hero-sparkle" aria-hidden="true">✦</span>

      <div class="hero-inner container">
        <div class="hero-grid">
          <div class="hero-content">
            <div class="hero-badge">
              <span class="dot"></span>
              ✨ Il parrucchiere di fiducia a Carpi
            </div>
            <h1>
              Cura i tuoi capelli<br>
              con chi ti <em>ascolta davvero</em>
            </h1>
            <p class="hero-sub">
              In Via Cuneo 5, a Carpi, trovi Cristina e il suo team pronti ad accoglierti, ascoltarti e consigliarti il look perfetto per te – non per la moda del momento.
            </p>
            <div class="hero-cta">
              <a href="https://www.treatwell.it/salone/dream-salon-carpi/" class="btn btn-primary" id="hero-treatwell-btn" target="_blank" rel="noopener">Prenota su Treatwell</a>
              <a href="https://wa.me/390596440544" class="btn btn-outline" id="hero-wa-btn" target="_blank" rel="noopener">Scrivi su WhatsApp</a>
            </div>
            <div class="hero-trust">
              <div class="hero-trust-item">
                <strong>4,7/5</strong> <span>su Google</span>
              </div>
              <span class="hero-trust-sep">·</span>
              <div class="hero-trust-item">
                <strong>4,9/5</strong> <span>su Treatwell</span>
              </div>
              <span class="hero-trust-sep">·</span>
              <div class="hero-trust-item">
                <strong>+10 anni</strong> <span>di esperienza</span>
              </div>
            </div>
          </div>

          <!-- Right: visual -->
          <div class="hero-visual-wrap">
            <div class="hero-photo-card">
              <picture>
                <img src="<?php echo esc_url($hero_image); ?>" alt="Interno del Dream Salon" loading="lazy">
              </picture>
              <div class="hero-photo-overlay"></div>
              <div class="hero-photo-label">
                Dream Salon
                <span>Parrucchieri · Via Cuneo 5, Carpi</span>
              </div>
            </div>
            <div class="float-card rating" aria-hidden="true">
              <div>
                <small>4,7 · 45 recensioni Google</small>
              </div>
            </div>
            <div class="float-card visits" aria-hidden="true">
              <div>
                <strong>Clienti soddisfatti</strong>
                <small>+10 anni a Carpi</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PROOF STRIP -->
    <div class="proof-strip" role="region" aria-label="Riconoscimenti e valutazioni">
      <div class="proof-strip-inner container">
        <div class="proof-badge">
          <div class="proof-badge-text">
            <strong>4,7</strong> <small>Google · 45 recensioni</small>
          </div>
        </div>
        <div class="proof-badge">
          <div class="proof-badge-text">
            <strong>4,9</strong> <small>Treatwell · 37 recensioni</small>
          </div>
        </div>
        <div class="proof-badge">
          <div class="proof-badge-text">
            <strong>+10 anni</strong> <small>di attività a Carpi</small>
          </div>
        </div>
        <div class="proof-badge">
          <div class="proof-badge-text">
            <strong>Donna &amp; Uomo</strong> <small>Servizi per tutti</small>
          </div>
        </div>
      </div>
    </div>

    <!-- TESTIMONIALS -->
    <section class="testimonials-section" id="recensioni">
      <div class="container">
        <div class="section-header" data-aos>
          <span class="eyebrow">Cosa dicono di noi</span>
          <h2>Le parole dei nostri clienti</h2>
          <p>Ogni giorno riceviamo la fiducia di persone che tornano da noi. Ecco cosa raccontano.</p>
        </div>
        <div class="testimonials-grid">
          <div class="testimonial-card" data-aos data-delay="100">
            <p class="t-quote">"Cristina, insieme alle sue ragazze, ti accoglie sempre con il sorriso e una grande professionalità."</p>
            <div class="t-author">
              <div class="t-avatar">M</div>
              <div><span class="t-name">Milena Mantovani</span></div>
            </div>
          </div>
          <div class="testimonial-card" data-aos data-delay="200">
            <p class="t-quote">"Ambiente accogliente, personale gentile e preparato. Ti mettono subito a tuo agio."</p>
            <div class="t-author">
              <div class="t-avatar">V</div>
              <div><span class="t-name">Valentina R.</span></div>
            </div>
          </div>
          <div class="testimonial-card" data-aos data-delay="300">
            <p class="t-quote">"Un salone dove ti senti seguita passo dopo passo, dal taglio al colore, senza fretta."</p>
            <div class="t-author">
              <div class="t-avatar">L</div>
              <div><span class="t-name">Laura F.</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- WHY US -->
    <section class="pillars-section" id="perche-noi">
      <div class="container">
        <div class="section-header" data-aos>
          <span class="eyebrow">Perché scegliere Dream Salon</span>
          <h2>Quello che ci rende diversi</h2>
        </div>
        <div class="pillars-grid">
          <div class="pillar-card" data-aos data-delay="100">
            <div class="pillar-num">1</div>
            <h3>Accoglienza vera</h3>
            <p>Entri e ti senti subito a tuo agio. Non solo parole: è l'ambiente, il sorriso, l'attenzione ai dettagli che si sentono appena arrivi.</p>
          </div>
          <div class="pillar-card" data-aos data-delay="200">
            <div class="pillar-num">2</div>
            <h3>Ascolto prima di tutto</h3>
            <p>Prima di toccare un capello, ti chiediamo cosa vuoi davvero. I tuoi capelli, il tuo stile di vita, le tue aspettative: tutto conta.</p>
          </div>
          <div class="pillar-card" data-aos data-delay="300">
            <div class="pillar-num">3</div>
            <h3>Professionalità</h3>
            <p>Cristina e il suo team lavorano con anni di esperienza e formazione continua, per risultati che durano nel tempo e si vedono.</p>
          </div>
          <div class="pillar-card" data-aos data-delay="400">
            <div class="pillar-num">4</div>
            <h3>Su misura per te</h3>
            <p>Non esistono soluzioni standard qui. Ogni consulenza, ogni taglio, ogni colore è progettato intorno a te e solo a te.</p>
          </div>
        </div>
      </div>
    </section>

    <section style="background:var(--cream); text-align:center; padding: 60px 0;">
      <div class="container" data-aos>
        <h2 style="font-size:28px; margin-bottom:20px;">Prenota il tuo appuntamento</h2>
        <p style="color:var(--text-mid); margin-bottom:30px; max-width:600px; margin-left:auto; margin-right:auto;">
          Siamo pronti ad accoglierti in un ambiente rilassante ed elegante. Scegli il metodo più comodo per te.</p>
        <a href="https://www.treatwell.it/salone/dream-salon-carpi/" class="btn btn-primary" style="margin-right:10px;" target="_blank" rel="noopener">Prenota su Treatwell</a>
        <a href="https://wa.me/390596440544" class="btn btn-outline-dark" target="_blank" rel="noopener">Scrivi su WhatsApp</a>
      </div>
    </section>

<?php get_footer(); ?>
