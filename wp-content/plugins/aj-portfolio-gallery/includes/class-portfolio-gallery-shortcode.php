<?php
// Shortcode
add_shortcode("portfolio_gallery", "aj_portfolio_gallery");

function aj_portfolio_gallery($atts) {
  
	$html = '';
	$post__in = array();
  $args = array();
  $pids = '';

	if( $atts && isset($atts['post']) ){
		$post__in = explode(',', $atts['post']);
    $pids = $atts['post'];
	}

  $paged = get_query_var('paged') ? : 1;
  
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