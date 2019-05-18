<?php
function enqueue_aj_scripts(){
    wp_register_style( 'aj-styles-css', plugin_dir_url( dirname(__FILE__) ) . 'public/css/aj-styles.css', false, '1.0.0' );
    wp_enqueue_style( 'aj-styles-css' );
	
    wp_register_script( 'jquery', plugin_dir_url( dirname(__FILE__) ). 'public/js/jquery.js' );    
    wp_register_script( 'waypoints-js', plugin_dir_url( dirname(__FILE__) ) . 'public/js/jquery.waypoints.min.js' ); 
    
    wp_register_script( 'aj-scripts', plugin_dir_url( dirname(__FILE__) ) . 'public/js/aj-scripts.js' ); 
    wp_localize_script( 'aj-scripts', 'ajAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
    
    if ( ! wp_script_is( 'jquery', 'enqueued' )) {
        wp_enqueue_script('jquery');
    }
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('waypoints-js');
    wp_enqueue_script('aj-scripts');
	
	 
}

add_action( 'wp_enqueue_scripts', 'enqueue_aj_scripts' );