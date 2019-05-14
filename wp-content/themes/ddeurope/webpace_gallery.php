<?php
/*
 * Template Name: webpace
 */

get_header(); ?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>
	<div class="w_gallery">
		<div class="container">
			<?php echo do_shortcode("[web_pace_portfolio id='2']"); ?>
		</div>
    </div>

<?php
get_footer();
