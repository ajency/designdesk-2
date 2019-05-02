<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

	</div></div><!-- #content -->

 	<!-- <footer id="colophon" class="site-footer text-center bg-white mt-4 text-muted">

		 <section class="footer-widgets text-left">
			<div class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-1-area mb-2">
								<?php dynamic_sidebar( 'footer-1' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-2-area mb-2">
								<?php dynamic_sidebar( 'footer-2' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-3-area mb-2">
								<?php dynamic_sidebar( 'footer-3' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-4-area mb-2">
								<?php dynamic_sidebar( 'footer-4' ); ?>
							</aside>
						</div>
					<?php endif; ?>
				</div> -->
				<!-- /.row -->
			<!-- </div>
		</section>

		<div class="container">
			<div class="site-info">
				<a href="<?php echo esc_url( 'https://bootstrap-wp.com/' ); ?>"><?php esc_html_e( 'Bootstrap 4 WordPress Theme', 'wp-bootstrap-4' ); ?></a>
				<span class="sep"> | </span>
				<?php
					
					printf( esc_html__( 'Theme Name: %1$s.', 'wp-bootstrap-4' ), 'WP Bootstrap 4' );
				?>
			</div>
		</div>  -->
		<!-- /.container -->
	</footer><!-- #colophon -->


<div class="pre-footer-area">
	<!-- Member of -->
	<div class="members-of text-center mt-4">
		<h6 class="text-center text-muted pt-2">Members of</h6>
		<a href="#">
		<img alt="" src="<?php echo get_template_directory_uri() . '/assets/images/IFES-logo.png'; ?>" />
		<a href="#">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/EDPA-logo.png'; ?>" alt="" /></a>
	</div>
	<!-- end of Member -->
</div>
    
<footer id="colophon" class="site-footer text-center">
	<section  class="footer-widgets address">
		<div class="container">
			<div class="row">
				<div class="col-1g-6 col-md-6 address_block1">
						<h3 class="main-info">Germany</h3>
					<p class="sub-info">Westend fair, Friedrich Ebert Anlage 36, <br>60325 Frankfurt</p>
					<p class="sub-info">+49 123456789</p>
				</div>
				<div class="col-1g-6 col-md-6 address_block1">
						<h3 class="main-info">India</h3>
					<p class="sub-info">702 Crescent Business, Kandivali (E), <br> 400101 Mumbai
					</p>
					<p class="sub-info">+49 123456789</p>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-widgets action_block">
		<span class="email_text"><i class="far fa-envelope"></i>  &nbsp hello@dd-europe.com</span>
		<span class="num_text"> <i class="fas fa-mobile-alt"></i>  &nbsp +49 123456789 </span>

		<h2 class="contact_title"> Get a quote</h2>
		<p class="contact_subtile">We look forward to hearing from you. Email us to learn more about what we can do for your next big event.</p>

		<?php echo do_shortcode("[formidable id=2]"); ?>
	</section>
</footer>



</div><!-- #page -->




<?php wp_footer(); ?>

</body>
</html>
