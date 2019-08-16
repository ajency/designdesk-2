<?php
/*
* Template Name: Blog
*/

get_header(); 

global $wp_query;

?>

	<div class="blog">
		<div class="header_image position-relative">
			<div class="header">
				<div class="container">
					<h2 class="title"> Exhibiting Advice </h2>
					<div class="breadcrumbs-wrapper">
						<div class="breadcrumbs-inside">
							<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span>
							<span>Exhibiting Advice</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<?php 
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		// the query
		$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=> 3 , 'paged' => $paged)); ?>

		<?php if ( $wpb_all_query->have_posts() ) : ?>

		<!-- the loop -->
		<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
		
		<div class="blog_post">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-8 col-sm-12">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="blog_featured_img">
								<a href="<?php the_permalink(); ?>">
									<?php
									if ( has_post_thumbnail() ) :
									the_post_thumbnail( array('auto',400) );
									endif;
									?>
								</a>
							</div>
							<div class="single_post">
								<div class="post-date float-left">
									<span class="day"><?php echo get_the_date('d'); ?></span> 
									<span class="month"><?php echo get_the_date('M'); ?></span>
								</div>
								<div class="post-inner">
									<header class="entry-header mb-4">
										<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<span class="category"><?php the_category(' , '); ?> </span>
									</header>
									<div class="entry-content">
										<?php echo wp_trim_words(get_the_content(), 40, '...'); ?><br>
										<div class="single_post_link">
											<a href="<?php the_permalink(); ?>">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
					<div class="col-lg-3 col-md-4 post-sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>

		<?php endwhile; ?>
		<!-- end of the loop -->
		<div class="container pagination_nav">
			<?php

				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wpb_all_query->max_num_pages
				) );
			?>
		</div>
	</div>
	<?php wp_reset_postdata(); ?>

	<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

<?php
get_footer();

?>
