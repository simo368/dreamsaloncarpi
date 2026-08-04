<?php
/**
 * Template Name: Servizi e Prezzi
 */
get_header();
?>

    <!-- PAGE HEADER -->
    <section style="background:var(--midnight); padding: 80px 0 60px; color:var(--white); text-align:center;">
      <div class="container">
        <h1 style="font-size:clamp(32px, 4vw, 48px); margin-bottom:16px;">I Nostri Servizi</h1>
        <p style="color:rgba(255,255,255,0.7); max-width:600px; margin:0 auto; font-size:17px;">
          Taglio, colore e cura su misura. Esplora la nostra offerta e il listino prezzi trasparente.
        </p>
      </div>
    </section>

    <!-- SERVICES -->
    <section class="services-section" id="servizi">
      <div class="container">
        <div class="section-header" data-aos>
          <span class="eyebrow">Cosa facciamo per te</span>
          <h2>Pensati sulle tue esigenze</h2>
          <p>Non sulle tendenze del momento, ma su ciò che fa stare davvero bene i tuoi capelli – e te.</p>
        </div>
        <div class="services-grid">
          <div class="service-card" data-aos data-delay="100">
            <h3>Taglio donna &amp; uomo</h3>
            <p>Un taglio pensato per il tuo viso e il tuo stile di vita. Prima ti ascoltiamo, poi tagliamo: mai il contrario.</p>
            <a href="<?php echo esc_url(home_url('/contatti/')); ?>" class="service-cta">Scopri →</a>
          </div>
          <div class="service-card" data-aos data-delay="150">
            <h3>Colore &amp; schiariture</h3>
            <p>Tecniche di colorazione su misura per un risultato naturale, luminoso e capelli sempre sani e forti.</p>
            <a href="<?php echo esc_url(home_url('/contatti/')); ?>" class="service-cta">Scopri →</a>
          </div>
          <div class="service-card" data-aos data-delay="200">
            <h3>Trattamenti ristrutturanti</h3>
            <p>Percorsi di cura personalizzati per capelli più forti, morbidi e luminosi, seduta dopo seduta.</p>
            <a href="<?php echo esc_url(home_url('/contatti/')); ?>" class="service-cta">Scopri →</a>
          </div>
          <div class="service-card" data-aos data-delay="250">
            <h3>Piega &amp; styling</h3>
            <p>La piega giusta per ogni occasione: dal quotidiano raffinato agli eventi speciali, con la giusta attenzione.</p>
            <a href="<?php echo esc_url(home_url('/contatti/')); ?>" class="service-cta">Scopri →</a>
          </div>
          <div class="service-card" data-aos data-delay="300">
            <h3>Acconciature evento</h3>
            <p>Look curati per matrimoni, feste e grandi occasioni. Con prova prima del giorno speciale, ovviamente.</p>
            <a href="<?php echo esc_url(home_url('/contatti/')); ?>" class="service-cta">Scopri →</a>
          </div>
          <div class="service-card" data-aos data-delay="350">
            <h3>Consulenza personalizzata</h3>
            <p>Prima ti ascoltiamo, poi consigliamo. Ogni proposta parte da te, dal tuo viso e dalla tua vita – non da uno standard.</p>
            <a href="<?php echo esc_url(home_url('/contatti/')); ?>" class="service-cta">Consulenza →</a>
          </div>
        </div>
      </div>
    </section>

    <!-- PRICE LIST -->
    <section class="listino-section" id="prezzi">
      <div class="container">
        <div class="section-header" data-aos>
          <span class="eyebrow">Il nostro Listino</span>
          <h2>Trasparenza sui prezzi</h2>
          <p>Qualità sul risultato, chiarezza sul preventivo: sai già cosa ti aspetta prima di sederti sulla poltrona.</p>
        </div>

        <div class="listino-tabs" role="tablist">
          <button class="listino-tab active" data-tab="taglio" role="tab" aria-selected="true" id="tab-taglio">Taglio & Piega</button>
          <button class="listino-tab" data-tab="colore" role="tab" aria-selected="false" id="tab-colore">Colore</button>
          <button class="listino-tab" data-tab="eventi" role="tab" aria-selected="false" id="tab-eventi">Eventi & Sposa</button>
        </div>

        <div class="listino-panel active" id="panel-taglio" role="tabpanel" aria-labelledby="tab-taglio" data-aos>
          <div class="listino-wrap">
            <table class="listino">
              <thead>
                <tr>
                  <th>Servizio</th>
                  <th class="hide-sm">Descrizione</th>
                  <th>Prezzo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="service-name">Taglio donna</td>
                  <td class="service-desc hide-sm">Consulenza, lavaggio, taglio e piega inclusa</td>
                  <td class="service-price">da 28€</td>
                </tr>
                <tr>
                  <td class="service-name">Taglio uomo</td>
                  <td class="service-desc hide-sm">Taglio classico o moderno, rifinitura</td>
                  <td class="service-price">da 18€</td>
                </tr>
                <tr>
                  <td class="service-name">Piega</td>
                  <td class="service-desc hide-sm">Piega con spazzola o ferro, a seconda dello stile</td>
                  <td class="service-price">da 15€</td>
                </tr>
                <tr>
                  <td class="service-name">Taglio bambino</td>
                  <td class="service-desc hide-sm">Taglio per bambini fino a 12 anni</td>
                  <td class="service-price">da 14€</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="listino-panel" id="panel-colore" role="tabpanel" aria-labelledby="tab-colore" data-aos>
          <div class="listino-wrap">
            <table class="listino">
              <thead>
                <tr>
                  <th>Servizio</th>
                  <th class="hide-sm">Descrizione</th>
                  <th>Prezzo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="service-name">Colore uniforme</td>
                  <td class="service-desc hide-sm">Colorazione completa con prodotti premium</td>
                  <td class="service-price">da 35€</td>
                </tr>
                <tr>
                  <td class="service-name">Schiariture / Meches</td>
                  <td class="service-desc hide-sm">Tecniche personalizzate per effetto naturale</td>
                  <td class="service-price">da 55€</td>
                </tr>
                <tr>
                  <td class="service-name">Balayage</td>
                  <td class="service-desc hide-sm">Sfumatura mano libera per un risultato solare</td>
                  <td class="service-price">da 70€</td>
                </tr>
                <tr>
                  <td class="service-name">Trattamento ristrutturante</td>
                  <td class="service-desc hide-sm">Percorso di cura per capelli più forti e luminosi</td>
                  <td class="service-price">da 20€</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="listino-panel" id="panel-eventi" role="tabpanel" aria-labelledby="tab-eventi" data-aos>
          <div class="listino-wrap">
            <table class="listino">
              <thead>
                <tr>
                  <th>Servizio</th>
                  <th class="hide-sm">Descrizione</th>
                  <th>Prezzo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="service-name">Acconciatura evento</td>
                  <td class="service-desc hide-sm">Styling per matrimoni, feste, occasioni speciali</td>
                  <td class="service-price">da 45€</td>
                </tr>
                <tr>
                  <td class="service-name">Prova acconciatura</td>
                  <td class="service-desc hide-sm">Prova completa prima del grande giorno</td>
                  <td class="service-price">da 35€</td>
                </tr>
                <tr>
                  <td class="service-name">Sposa completo</td>
                  <td class="service-desc hide-sm">Acconciatura + prova + giorno del matrimonio</td>
                  <td class="service-price">su preventivo</td>
                </tr>
                <tr>
                  <td class="service-name">Servizio a domicilio</td>
                  <td class="service-desc hide-sm">Disponibilità a domicilio su richiesta</td>
                  <td class="service-price">su richiesta</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <p class="listino-note">
          I prezzi sono indicativi e di partenza. Il preventivo finale dipende da lunghezza, densità e tecnica scelta.<br>
          <strong>Ti diamo sempre un preventivo chiaro prima di iniziare, senza sorprese.</strong>
        </p>

      </div>
    </section>

<?php get_footer(); ?>
