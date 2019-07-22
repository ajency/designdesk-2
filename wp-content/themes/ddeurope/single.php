<?php
/*
	* Template file to display single posts
*/

get_header(); 

?>

<div class="single-post">
	<div class="header_image position-relative">
		<div class="header">
			<div class="container">
				<h2 class="title"><?php the_title(); ?></h2>
				<div class="breadcrumbs-wrapper">
      				<div class="breadcrumbs-inside">
  						<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span> 
  						<span><a class="mr-1" href="<?php echo get_site_url(); ?>/blog">blog</a><span class="sep-icon"><i class="fa fa-angle-right"></i></span> <?php the_title(); ?></span>
  					</div>
  				</div>
			</div>
		</div>
	</div>

	<div class="single_post_page">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<?php			
				while ( have_posts() ) :
				  the_post();
				?>
				
					<div class="blog_featured_img">
						<?php
						if ( has_post_thumbnail() ) :
						the_post_thumbnail( 'medium-large' );
						endif;
						?>
					</div>
					<header class="entry-header">
						<h2 class="entry-title"><?php the_title(); ?></h2>
						<span class="entry-date px-1"><?php echo get_the_date(); ?></span>
						<span class="category"><?php the_category(' , '); ?> </span>
					</header>
					<div class="entry-content"><?php the_content(); ?></div>  

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php
//get_sidebar();
get_footer();

?>
