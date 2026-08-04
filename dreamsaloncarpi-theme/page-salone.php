<?php
/**
 * Template Name: Salone e Gallery
 */
get_header();

// Recupera i campi ACF, se vuoti usa le immagini di default
$team_image = get_field('team_image') ?: get_template_directory_uri() . '/img/salon_team.png';
$gallery_1 = get_field('gallery_1') ?: get_template_directory_uri() . '/img/gallery_color.png';
$gallery_2 = get_field('gallery_2') ?: get_template_directory_uri() . '/img/gallery_cut.png';
$gallery_3 = get_field('gallery_3') ?: get_template_directory_uri() . '/img/gallery_styling.png';
$gallery_4 = get_field('gallery_4') ?: get_template_directory_uri() . '/img/gallery_treatment.png';
?>

    <!-- PAGE HEADER -->
    <section style="background:var(--midnight); padding: 80px 0 60px; color:var(--white); text-align:center;">
      <div class="container">
        <h1 style="font-size:clamp(32px, 4vw, 48px); margin-bottom:16px;">Il nostro Salone</h1>
        <p style="color:rgba(255,255,255,0.7); max-width:600px; margin:0 auto; font-size:17px;">
          Uno spazio di relax e cura personale. Conosci il team e guarda i nostri risultati migliori.
        </p>
      </div>
    </section>

    <!-- TEAM & SALON -->
    <section class="team-section" id="salone">
      <div class="container">
        <div class="team-layout">
          <div class="team-photo-wrap" data-aos>
            <div class="team-photo">
              <picture>
                <img src="<?php echo esc_url($team_image); ?>" alt="Cristina e il team di Dream Salon Parrucchieri Carpi" loading="lazy">
              </picture>
            </div>
            <div class="team-accent">
              <strong>+10</strong>
              <span>anni a Carpi</span>
            </div>
          </div>

          <div class="team-content" data-aos data-delay="200">
            <span class="eyebrow">Il Salone &amp; le persone</span>
            <h2>Cristina e il suo team</h2>
            <p>Dream Salon nasce a Carpi con un'idea semplice: prendersi cura delle persone, non solo dei capelli.
              Cristina guida un team di professioniste che ogni giorno mettono ascolto, esperienza e passione in ogni
              appuntamento.</p>
            <p>Che tu voglia un piccolo cambiamento o una trasformazione più importante, qui trovi persone pronte a
              consigliarti con onestà e senza spingerti verso soluzioni che non fanno per te.</p>
            <div class="team-members">
              <div class="team-member">
                <span class="team-member-name">Cristina</span>
                <span class="team-member-role">Titolare &amp; Stylist</span>
              </div>
              <div class="team-member">
                <span class="team-member-name">Team</span>
                <span class="team-member-role">Dream Salon</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- GALLERY -->
    <section class="gallery-section" id="gallery">
      <div class="container">
        <div class="section-header" data-aos>
          <span class="eyebrow">I nostri lavori</span>
          <h2>Gallery</h2>
          <p>Un assaggio di tagli, colorazioni e styling realizzati nel salone. Ogni lavoro racchiude una storia e un sorriso.</p>
        </div>
        <div class="gallery-grid">
          <div class="gallery-item" data-aos data-delay="100">
            <picture>
              <img src="<?php echo esc_url($gallery_1); ?>" alt="Lavoro 1" loading="lazy">
            </picture>
          </div>
          <div class="gallery-item" data-aos data-delay="150">
            <picture>
              <img src="<?php echo esc_url($gallery_2); ?>" alt="Lavoro 2" loading="lazy">
            </picture>
          </div>
          <div class="gallery-item" data-aos data-delay="200">
            <picture>
              <img src="<?php echo esc_url($gallery_3); ?>" alt="Lavoro 3" loading="lazy">
            </picture>
          </div>
          <div class="gallery-item" data-aos data-delay="250">
            <picture>
              <img src="<?php echo esc_url($gallery_4); ?>" alt="Lavoro 4" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
