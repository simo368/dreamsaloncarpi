<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,600&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header id="main-header">
    <div class="header-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-wrap" id="logo">
        <span class="logo-name">Dream Salon</span>
        <span class="logo-sub">Parrucchieri · Carpi</span>
      </a>

      <?php
      if (has_nav_menu('primary')) {
          wp_nav_menu(array(
              'theme_location' => 'primary',
              'container'      => 'nav',
              'container_class'=> 'main-nav',
              'menu_class'     => '',
              'fallback_cb'    => false,
          ));
      } else {
          echo '<nav class="main-nav"><a href="'.esc_url(home_url('/')).'" class="nav-link">Home</a></nav>';
      }
      ?>

      <div class="header-cta">
        <a href="tel:+390596440544" class="icon-btn" title="Chiama il salone" id="header-call-btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ui-icon"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        </a>
        <a href="https://wa.me/390596440544" class="icon-btn" title="WhatsApp" id="header-wa-btn" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ui-icon"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        </a>
        <a href="https://www.treatwell.it/salone/dream-salon-carpi/" class="btn btn-primary header-book-btn" id="header-book-btn" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ui-icon"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> Prenota su Treatwell
        </a>
        <button id="theme-toggle" class="theme-toggle" aria-label="Cambia tema">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ui-icon"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path></svg>
        </button>
        <button class="hamburger" id="hamburger" aria-label="Menu" aria-expanded="false">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>

    <div class="mobile-menu" id="mobile-menu">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-nav-link">Home</a>
      <a href="<?php echo esc_url(home_url('/servizi/')); ?>" class="mobile-nav-link">Servizi & Prezzi</a>
      <a href="<?php echo esc_url(home_url('/salone/')); ?>" class="mobile-nav-link">Salone & Gallery</a>
      <a href="<?php echo esc_url(home_url('/contatti/')); ?>" class="mobile-nav-link">Contatti</a>
      <a href="https://www.treatwell.it/salone/dream-salon-carpi/" class="btn btn-primary" id="mobile-menu-treatwell" target="_blank" rel="noopener">Prenota su Treatwell</a>
    </div>
  </header>
  <main>
