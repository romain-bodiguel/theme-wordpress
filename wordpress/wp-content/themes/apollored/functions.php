<?php
/**
 * Functions and definitions
 */

function charger_styles() {
    // wp_enqueue_style( string $handle, string $src = '', string[] $deps = array());
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/style.css', ['theme-reset']);
    wp_enqueue_style('theme-reset', get_template_directory_uri() . '/css/reset.css');

    // Fonctionne aussi dans l'autre sens, si on charge reset.css en premier, et on enlève la dépendance ["theme-reset"] par conséquent
    // wp_enqueue_style('theme-reset', get_template_directory_uri() . "/css/reset.css");
    // wp_enqueue_style('theme-style', get_template_directory_uri() . "/css/style.css");
}

add_action( 'after_setup_theme', 'charger_styles' );