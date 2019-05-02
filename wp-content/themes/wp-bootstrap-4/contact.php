<?php
/*
 * Template Name: Contact us
 */

get_header(); ?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<div class="contact_us">
	<div class="header_image">
		<div class="header">
			<h2 class="title">Contact Us</h2>
			<p class="subtitle"> We would love to hear from you </p>
		</div>
	</div>
	<div class="contact_us_content">
		<div class="container">
			<div class="row mt-4">
				<div class="col-lg-5 col-md-12 icon_block_1">
					<i class="fas fa-phone fa-5x"></i>
					<h3 class="num_header">Phone</h3>
					<p class="num">+49 123456789</p>
				</div> 
				<div class="col-lg-5 col-md-12 icon_block_2">
					<i class="far fa-envelope fa-5x"></i>
					<h3 class="email_header">E-mail</h3>
					<p class="email">hello@dd-europe.com</p>
				</div>
			</div>
			<div class="contact_form">
				<h2 class="form_header"> Drop an email to know more about<br> what we can do for your next big event.</h2>
						<?php echo do_shortcode("[formidable id=2]"); ?>

			</div>
		</div>
	</div>
</div>
	

<?php
get_footer();
