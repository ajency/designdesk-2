<?php
/*
 * Template Name: Blank Page
 */

get_header(); 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<div class="page_content">
	<div class="header_image position-relative">
		<div class="header">
			<div class="container">
				<h2 class="title"><?php the_title(''); ?></h2>
				<div class="breadcrumbs-wrapper">
      				<div class="breadcrumbs-inside">
  						<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span> 
  						<span><?php the_title(''); ?></span>
  					</div>
  				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<?php the_content(); ?>
	</div>
</div>

 
<?php
	}
} 
get_footer();
?>