<?php

function enqueue_theme_styles() {
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/assets/css/theme-styles.css', array(), '', false);
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles' );

function enqueue_theme_scripts() { 
    wp_register_script( 'bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js' , '', '', true );
    wp_register_script( 'themescripts-js', get_template_directory_uri().'/assets/js/theme-scripts.js' , '', '', true );

    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('themescripts-js');      
}
add_action("wp_enqueue_scripts", "enqueue_theme_scripts");