<?php
/**
 * Fallback template
 */
get_header();
?>

<main class="container" style="padding: 100px 0;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
        endwhile;
    else :
        echo '<p>Nessun contenuto trovato.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
