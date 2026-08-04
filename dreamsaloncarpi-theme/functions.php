<?php
// Funzioni del tema Dream Salon
function dreamsalon_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'primary' => __('Menu Principale', 'dreamsalon'),
    ));
}
add_action('after_setup_theme', 'dreamsalon_setup');

// Caricamento CSS e JS
function dreamsalon_scripts() {
    wp_enqueue_style('dreamsalon-style', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_script('dreamsalon-main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'dreamsalon_scripts');

// Registrazione ACF in locale (nessun JSON da importare)
if( function_exists('acf_add_local_field_group') ):

    // Campi per la Home Page
    acf_add_local_field_group(array(
        'key' => 'group_home_images',
        'title' => 'Immagini Home Page',
        'fields' => array(
            array(
                'key' => 'field_hero_image',
                'label' => 'Immagine Hero (Sfondo/Principale)',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'front-page.php',
                ),
            ),
        ),
    ));

    // Campi per il Salone
    acf_add_local_field_group(array(
        'key' => 'group_salone_images',
        'title' => 'Immagini Salone e Gallery',
        'fields' => array(
            array(
                'key' => 'field_team_image',
                'label' => 'Immagine Team',
                'name' => 'team_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_gallery_1',
                'label' => 'Gallery Immagine 1',
                'name' => 'gallery_1',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_gallery_2',
                'label' => 'Gallery Immagine 2',
                'name' => 'gallery_2',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_gallery_3',
                'label' => 'Gallery Immagine 3',
                'name' => 'gallery_3',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_gallery_4',
                'label' => 'Gallery Immagine 4',
                'name' => 'gallery_4',
                'type' => 'image',
                'return_format' => 'url',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-salone.php',
                ),
            ),
        ),
    ));

endif;
