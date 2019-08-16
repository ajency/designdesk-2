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
				<div class="breadcrumbs-wrapper position-relative">
      				<div class="breadcrumbs-inside">
  						<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span> 
  						<span><a class="mr-1" href="<?php echo get_site_url(); ?>/exhibiting-advice">exhibiting advice</a><span class="sep-icon"><i class="fa fa-angle-right"></i></span> <?php the_title(); ?></span>
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
					<span class="entry-tags"><?php the_tags( null, ''); ?></span>
					<hr>

					<h4 class="recent-post-title text-center"> You also might be interested in</h4>

					<div class="row recent_posts">
						<?php 
							// the query
							$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3,'post__not_in' => array( get_the_ID() )
)); ?>
								<?php if ( $wpb_all_query->have_posts() ) : ?>
									<!-- the loop -->
									<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
										<div class="col-lg-4 col-md-12 col-sm-12 mb-4">
											<div class="recent-post_featured-img">
												<a href="<?php the_permalink(); ?>">
													<?php
													if ( has_post_thumbnail() ) :
													the_post_thumbnail( '' );
													endif;
													?>
												</a>
											</div>
											<div class="recent-post-bg">
												<div class="recent-post_header my-4">
													<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
													<span class="entry-date"><?php echo get_the_date(); ?></span>
												</div>
												<p><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
					</div>
					<hr>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php
//get_sidebar();
get_footer();

?>
