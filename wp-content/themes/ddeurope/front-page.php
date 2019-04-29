<?php
/**
 * The main template file
 */

get_header(); ?>

<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<?php if ( get_theme_mod( 'blog_display_cover_section', 1 ) ) : ?>
	<?php if( get_theme_mod( 'blog_cover_title' ) || get_theme_mod( 'blog_cover_lead' ) || get_theme_mod( 'blog_cover_btn_text' ) ) : ?>
		<section class="jumbotron bg-white text-center wp-bs-4-jumbotron border-bottom">
			<div class="container">

				<h1 class="jumbotron-heading"><?php echo wp_kses_post( get_theme_mod( 'blog_cover_title' ) ); ?></h1>
				<p class="lead text-muted"><?php echo wp_kses_post( get_theme_mod( 'blog_cover_lead' ) ); ?></p>
				<?php if( get_theme_mod( 'blog_cover_btn_text' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'blog_cover_btn_link' ) ); ?>" class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'blog_cover_btn_text' ) ); ?></a><?php endif; ?>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.jumbotron text-center -->
	<?php endif; ?>
<?php endif; ?>

<!-- /.our approach -->
		<div class="our_approach">
		<div class="container">
			<h2 class="section_title">Our Approach</h2>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 approach_block">
						<img src="wp-content/themes/wp-bootstrap-4/assets/images/approach_img1.png" alt="">
						<h2 class="listen-text">We Listen</h2>
							<p class="info_one"> Dedicated &</p>
							<p class="info_two">highly responsive</p>
							<p class="info_three"> Client Service</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 approach_block">
						<img src="wp-content/themes/wp-bootstrap-4/assets/images/approach_img2.png" alt="">
						<h2 class="design-text">We Design</h2>
							<p class="info_one"> A winning combination of</p>
							<p class="info_two">expertise & experience</p>
							<p class="info_three"> Design & Layout</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 approach_block">
						<img src="wp-content/themes/wp-bootstrap-4/assets/images/approach_img3.png" alt="">
						<h2 class="deliver-text">We Deliver</h2>
							<p class="info_one"> Reputed for best</p>
							<p class="info_two"> quality & service</p>
							<p class="info_three"> Project Execution</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /.our approach -->

		<!-- /.our why-choose-us -->
		<div class="why_choose_us">
			<div class="left-side"></div>
					<div class="right-side">
					<div class="opacity">
					 <h2 class="choose_us_title"> 4 Reasons to choose us </h2>
						<div class="choose_reason item1">
							<h6 class="item_heading">Business focused Design</h6>
							<p class="item_text">We consider a Design successful only when it meets your marketing & brand objectives.<br>
								<a href="#">Read more</a>
							</p>
						</div>
						<div class="choose_reason item2">
							<h6 class="item_heading">Responsive Service</h6>
							<p class="item_text">Our dedicated service managers work closely with you to deliver the perfect exhibit. <br>
								<a href="#">Read more</a>
							</p>
						</div>
						<div class="choose_reason item3">
							<h6 class="item_heading">Immaculate Execution</h6>
							<p class="item_text">The quality of a booth is said to reflect the standard of the company & its products. <br>
								<a href="#">Read more</a><br>
							</p>
						</div>
						<div class="choose_reason item4">
							<h6 class="item_heading">100% Reliable Partner</h6>
							<p class="item_text">When you don’t want to take chances with your exhibition stand, you need a capable & experienced partner.
								<a href="#">Read more</a><br>
							</p>
						</div>
					</div>
				</div>
				</div>

	<!-- /.container -->

<?php
get_footer();
