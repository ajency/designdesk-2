<?php
/*
 * Template Name: Gallery
 */

get_header(); 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<div class="gallery">
	<div class="header_image">
		<div class="header">
			<div class="container">
				<h2 class="title">Gallery</h2>
				<div class="breadcrumbs-wrapper">
      				<div class="breadcrumbs-inside">
  						<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span> <span>Gallery</span>
  					</div>
  				</div>
			</div>
		</div>
	</div>
	<div class="gallery_content">
		<div class="container">
			<?php echo do_shortcode("[gmedia id=2]"); ?>
		</div>
	</div>
</div>


<?php
	}
} 
get_footer();
