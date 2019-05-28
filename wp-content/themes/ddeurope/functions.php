<?php

function enqueue_theme_styles() {
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/assets/css/theme-styles.css', array(), '', false);
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), '', false);
    wp_enqueue_style('font-family', 'https://fonts.googleapis.com/css?family=Montserrat', array(), '', false);
    wp_enqueue_style('flickity', get_template_directory_uri() . '/assets/css/flickity.min.css', array(), '', false);
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles' );

function enqueue_theme_scripts() { 
    //wp_register_script( 'jquery-js', get_template_directory_uri().'/assets/js/jquery.js' , '', '', true );
    wp_register_script( 'bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js' , '', '', true );
    wp_register_script( 'simplyscroll-js', get_template_directory_uri().'/assets/js/jquery.simplyscroll.js' , '', '', true );
    wp_register_script( 'flickity-js', get_template_directory_uri().'/assets/js/flickity.pkgd.min.js', array(), '', true);
    wp_register_script( 'lazysizes-js', get_template_directory_uri().'/assets/js/lazysizes.min.js', array(), '', true);
    wp_register_script( 'frontpage-js', get_template_directory_uri().'/assets/js/front-page.js' , '', '', true );


    wp_register_script( 'themescripts-js', get_template_directory_uri().'/assets/js/theme-scripts.js' , '', '', true );

   // wp_enqueue_script('jquery-js');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('simplyscroll-js');
    wp_enqueue_script('flickity-js'); 
    wp_enqueue_script('lazysizes-js');
    wp_enqueue_script('frontpage-js');


    wp_enqueue_script('themescripts-js');     
}
add_action("wp_enqueue_scripts", "enqueue_theme_scripts");

