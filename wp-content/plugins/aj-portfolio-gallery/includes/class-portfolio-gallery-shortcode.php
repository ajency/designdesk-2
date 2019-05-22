<?php
// Shortcode


add_shortcode("portfolio_gallery", "aj_portfolio_gallery");

function aj_portfolio_gallery($atts) {
  global $lightbox;
	$html = '';
	$post__in = array();
  $args = array();
  $pids = '';

	if( $atts && isset($atts['post']) ){
		$post__in = explode(',', $atts['post']);
    $pids = $atts['post'];
  }

  if(!isset($atts['lightbox']) ){
    $lightbox = false;
  } else {
    $lightbox = true;
  }

  $paged = get_query_var('paged') ? : 1;
  
  $args = array(
    'post_type' => 'portfolio_gallery',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'paged' => $paged
  );
  
  if($post__in){
    $args['post__in'] = $post__in;    
  }

	$aj_query = new WP_Query($args);
  
  ob_start();
  
  if($aj_query->have_posts()){
    
    echo '<div class="container aj-content">';
        echo '<div class="row aj-row">';
            while ( $aj_query->have_posts() ) {
                $aj_query->the_post();
                include plugin_dir_path(dirname(__FILE__)) . '/templates/grid-column-html.php';
            }
        echo '</div>';

        if($aj_query->max_num_pages > $paged){
          echo '<div id="aj-loadmore" class="loading-done" data-p_in="'. $pids .'"></div>';
        }
        
    echo '</div>';  
    
    wp_reset_query();
  }
  
  $html = ob_get_clean(); 
  
  if ( ! wp_style_is( 'prettyphoto-css', 'enqueued' )) {
      wp_enqueue_style('prettyphoto-css');
  }
  if ( ! wp_script_is( 'prettyphoto-js', 'enqueued' )) {
      wp_enqueue_script('prettyphoto-js');
  }
  
	return $html;

}
// end of shortcode


// Load More

add_action('wp_ajax_aj_load_more', 'aj_load_more');
add_action('wp_ajax_nopriv_aj_load_more', 'aj_load_more');

function aj_load_more(){ 
  $paged = isset($_POST['page_no']) ? $_POST['page_no'] : 1;
  $post__in = isset($_POST['attr']) ? $_POST['attr'] : array();
  $html;
  $last = false;
  
  $args = array(
    'post_type' => 'portfolio_gallery',
    'post_status' => 'publish',
    'posts_per_page' => 12,
    'paged' => $paged
  );
  
  if($post__in){
    $args['post__in'] = $post__in;    
  }

	$aj_query = new WP_Query($args);
  
  ob_start();
  
  if( $aj_query->have_posts() ){
    
      while ( $aj_query->have_posts() ) {
          $aj_query->the_post();
          
          include plugin_dir_path(dirname(__FILE__)) . '/templates/grid-column-html.php';

      }
      $last = $aj_query->max_num_pages > $paged ? false : true;      
      wp_reset_query();      
      
      $html = ob_get_clean();
      
  } else {
    $last = true;
    $html = '';
  }
  
  echo json_encode(array( 'html' => $html, 'last' => $last ));
  
  wp_die();
}

// End of Load More


// get post album
add_action('wp_ajax_get_gallery_album', 'get_gallery_album');
add_action('wp_ajax_nopriv_get_gallery_album', 'get_gallery_album');

function get_gallery_album(){
  $postID = $_POST['pid'];
  $album = array();
    
  $title = get_the_title($postID);
  $shortdesc = has_excerpt($postID) ? get_the_excerpt($postID) : '';
  $content = get_the_content($postID);
  $album['location'] = get_post_meta($postID, 'aj_location', true);
  $album['area'] = get_post_meta($postID, 'aj_area', true);
  
  $album['images'][] = array(
    'src' => get_the_post_thumbnail_url($postID),
    'thumb' => get_the_post_thumbnail_url($postID, 'thumbnail'),
    'subHtml' => "<h4>".$title."</h4>".$shortdesc,
  );
  
  $aj_albums_ids = get_post_meta( $postID, 'aj_albums_ids', true );  

  if($aj_albums_ids){
    $thumb_ids = explode(',', $aj_albums_ids);
    foreach ($thumb_ids as $ids){
        $album['images'][] = array(
          'src' => wp_get_attachment_url($ids),
          'thumb' => wp_get_attachment_thumb_url($ids),
          'subHtml' => "",
        );
    }
  } 
  
  echo json_encode($album);
          
  wp_die();
}