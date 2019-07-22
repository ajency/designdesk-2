<?php
/*
	* Template Name: Blog
*/

get_header(); 

?>

	<div class="blog">
		<div class="header_image position-relative">
			<div class="header">
				<div class="container">
					<h2 class="title">Blog</h2>
					<div class="breadcrumbs-wrapper">
						<div class="breadcrumbs-inside">
							<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span>
							<span>blog</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php 
		// the query
		$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>8)); ?>

		<?php if ( $wpb_all_query->have_posts() ) : ?>

		<!-- the loop -->
		<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
		
		<div class="blog_post">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="blog_featured_img">
								<?php
								if ( has_post_thumbnail() ) :
								the_post_thumbnail( '' );
								endif;
								?>
							</div>
							<div class="single_post">
								<header class="entry-header my-4">
									<h3 class="entry-title"><?php the_title(); ?></h3>
									<span class="entry-date px-1"><?php echo get_the_date(); ?></span>
									<span class="category"><?php the_category(' , '); ?> </span>
								</header>
								<div class="entry-content">
									<?php echo wp_trim_words(get_the_content(), 40, '...'); ?><br>
									<div class="single_post_link">
										<a href="<?php the_permalink(); ?>">Read More</a>
									</div>
								</div>
							</div>
						</article>
					</div>
					<div class="col-md-3 post-sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>

		<?php endwhile; ?>
		<!-- end of the loop -->

	</div>
	<?php wp_reset_postdata(); ?>

	<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

<?php
//get_sidebar();
get_footer();

?>
