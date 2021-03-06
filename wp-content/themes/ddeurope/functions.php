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
    wp_register_script( 'frontpage-js', get_template_directory_uri().'/assets/js/front-page.js' , '', '', true );


    wp_register_script( 'themescripts-js', get_template_directory_uri().'/assets/js/theme-scripts.js' , '', '', true );

   // wp_enqueue_script('jquery-js');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('simplyscroll-js');
    wp_enqueue_script('flickity-js'); 
    wp_enqueue_script('frontpage-js');


    wp_enqueue_script('themescripts-js');     
}
add_action("wp_enqueue_scripts", "enqueue_theme_scripts");


 /* REGISTER  SIDEBAR
================================================== */
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

 /* Custom login page logo
================================================== */
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('wp-content/themes/ddeurope/assets/images/ddeurop_New_Logo.png');
            height:65px;
            width:320px;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'DesignDesk';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
