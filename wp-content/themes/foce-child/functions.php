<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

// Ajout fichier style sass
    wp_enqueue_style('style-scss', get_stylesheet_directory_uri() . '/sass/style.css',  array(), filemtime(get_stylesheet_directory() . '/sass/style.css'));

// Déclarer un autre fichier JS
	wp_enqueue_script( 'js-foce-child', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ), 
    '3.4.1',true);
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}