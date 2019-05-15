<?php
/*
 * Template Name: webpace
 */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
 ?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>
	<div class="w_gallery">
		<div class="container">
			<?php the_content(); ?>
		</div>
    </div>

<?php
	}
} 
get_footer();
