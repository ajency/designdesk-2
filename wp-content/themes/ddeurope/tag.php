<?php
/**
 * The main template file
 */

get_header(); 

?>
<div class="category-tag-page">
	<div class="header_image position-relative">
		<div class="header">
			<div class="container">
				<h2 class="title">Posts tagged "<?php single_tag_title(); ?>"</h2>
			</div>
		</div>
	</div>
		
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12">
				<?php if ( have_posts() ) : ?>

   			 	<?php			
    				while ( have_posts() ) :
  					the_post();
    			?>
	    			<div class="category-tag-header">
						<div class="blog_featured_img">
							<a href="<?php the_permalink(); ?>">
								<?php
								if ( has_post_thumbnail() ) :
								the_post_thumbnail('medium');
								endif;
								?>
							</a>
						</div>
						<h3 class="entry-title mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<span class="date"><?php echo get_the_date(); ?></span> 
					</div>
					<div class="category-tag-description">
		  				<?php echo wp_trim_words(get_the_content(), 40, '...'); ?><br/>
		  				<a href="<?php the_permalink(); ?>">Read More</a>
	  				</div>
    			<?php endwhile; ?>

  				<?php endif; ?>
  			</div>
  			<div class="col-lg-4 col-md-4 col-sm-12 post-sidebar">
  				<?php get_sidebar(); ?>
  			</div>
  		</div>
	</div>
</div>

<?php get_footer(); ?>