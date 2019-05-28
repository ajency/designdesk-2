<?php

function enqueue_aj_admin_scripts(){
    wp_register_style( 'aj-admin-css', plugin_dir_url( __FILE__ ) . 'css/aj-admin.css', false, filemtime(get_theme_file_path(plugin_dir_url( __FILE__ ) . 'css/aj-admin.css')));
    wp_enqueue_style( 'aj-admin-css' );

    //wp_enqueue_script( 'my_script', plugin_dir_url( __FILE__ ) . 'my_script.js' );   
}

add_action( 'admin_enqueue_scripts', 'enqueue_aj_admin_scripts' );

function aj_dependency(){
    add_theme_support( 'post-thumbnails' );
}
add_action( 'init', 'aj_dependency' );

function aj_gallery_custom_init() {
    $args = array(
        'labels'      => array(
            'name'          => __('Portfolio Gallery'),
            'singular_name' => __('Portfolio Gallery'),
        ),
        'public'      => true,
        'has_archive' => false,
        'rewrite'     => array( 'slug' => 'portfolio_gallery' ),
        'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon' => 'dashicons-format-gallery',
        'register_meta_box_cb' => 'aj_add_meta_boxes',
    );

    register_post_type( 'portfolio_gallery', $args );
}
add_action( 'init', 'aj_gallery_custom_init' );

/**
 * Register meta box(es).
 */
function aj_add_meta_boxes() {
    add_meta_box( 'aj_location', __( 'Location', 'textdomain' ), 'aj_metabox_location');
    add_meta_box( 'aj_area', __( 'Area', 'textdomain' ), 'aj_metabox_area');
    add_meta_box( 'aj_albums_ids', __( 'Album IDs', 'textdomain' ), 'aj_metabox_albumsids');
}
 
/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function aj_metabox_location( $post ) {
   // wp_nonce_field( 'aj_location_nonce', 'aj_location_nonce' );
    $value = get_post_meta( $post->ID, 'aj_location', true );
    echo '<input type="text" name="aj_location" class="input-box" value="'. esc_attr($value) .'">';
}
function aj_metabox_area( $post ) {
    $value = get_post_meta( $post->ID, 'aj_area', true );
    echo '<input type="text" name="aj_area" class="input-box" value="'. esc_attr($value) .'">';
}
function aj_metabox_albumsids( $post ) {
    $value = get_post_meta( $post->ID, 'aj_albums_ids', true );
    echo '<p><i>add Media image IDs with comma(,) Sperated <i></p>';
    echo '<input type="text" name="aj_albums_ids" class="input-box" value="'. esc_attr($value) .'">';
}
 
/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function aj_save_meta_box( $post_id ) {
    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Sanitize user input.
    $location = sanitize_text_field( $_POST['aj_location'] );
    $area = sanitize_text_field( $_POST['aj_area'] );
    $album_ids = sanitize_text_field( $_POST['aj_albums_ids'] );

    // Update the meta field in the database.
    update_post_meta( $post_id, 'aj_location', $location );
    update_post_meta( $post_id, 'aj_area', $area );
    update_post_meta( $post_id, 'aj_albums_ids', $album_ids );
}

add_action( 'save_post', 'aj_save_meta_box' );
add_action( 'new_to_publish', 'aj_save_meta_box' );