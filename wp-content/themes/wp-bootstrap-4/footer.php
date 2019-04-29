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
    
<footer id="colophon" class="site-footer text-center mt-4">
	<section  class="footer-widgets address">
		<div class="container">
			<div class="row">
				<div class="col-1g-6 col-md-6 address_block1">
						<h3 class="main-info">Mumbai</h3>
					<p class="sub-info">702, Ruby Crescent, Ashok Nagar, Above Axis Bank,
					Kandivali (E), Mumbai 400 101</p>
					<p class="sub-info">+91 (22) 2885 0759 / 2885 2951</p>
					<p class="sub-info">+91 97699 14770</p>
				</div>
				<div class="col-1g-6 col-md-6 address_block1">
						<h3 class="main-info">Kolkata</h3>
					<p class="sub-info">54 J.L, Nehru Road, Floor 2, Kolkata,
					West Bengal 700 071
					</p>
					<p class="sub-info">+91 (33) 2282 5417 / 2282 8463</p>
					<p class="sub-info">+91 97699 14770</p>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-widgets action_block">
		<span class="email_text"><i class="far fa-envelope"></i>  &nbsp india@designdesk.in</span>
		<span class="num_text"> <i class="fas fa-mobile-alt"></i>  &nbsp +91 97699 14770 </span>

		<h2 class="contact_title"> Get a quote</h2>

		<?php echo do_shortcode('[formidable id=2]'); ?>

	</section>
</footer>



</div><!-- #page -->




<?php wp_footer(); ?>

</body>
</html>
