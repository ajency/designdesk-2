<?php
/*
 * Template Name: Blog
 */

get_header(); 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<div class="blog">
	<div class="header_image position-relative">
		<div class="header">
			<div class="container">
				<h2 class="title">Blog</h2>
				<div class="breadcrumbs-wrapper">
      				<div class="breadcrumbs-inside">
  						<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span> 
  						<span>Blog</span>
  					</div>
  				</div>
			</div>
		</div>
	</div>
</div>

 
<?php
	}
} 
get_footer();
