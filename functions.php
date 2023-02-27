<?php
register_nav_menus(array(
    'menu' => 'principal'
)); // Enregistrement du menu 


function style() {
    wp_enqueue_style('stylecss', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'style'); // Hook du fichier CSS

function add_google_fonts() {
wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' ); // Hook du lien google pour la font Kanit

function scripts() {
    wp_enqueue_script( 'burger', get_template_directory_uri() . '/themes/tp wordpress/burger.js', '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'scripts' ); // Hook fichier JS

add_theme_support( 'post-thumbnails' ); // afficher image à la une 

/**
 * Désactiver jQuery Migrate dans WordPress.
 *
 * @author Guy Dumais.
 * @link https://guydumais.digital//fr/blog/desactiver-jquery-migrate-dans-wordpress/
 */
add_filter( 'wp_default_scripts', $af = static function( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }    
}, PHP_INT_MAX );
unset( $af ); 