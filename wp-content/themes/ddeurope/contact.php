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
					<p class="email"><a href="mailto:hello@dd-europe.com">hello@dd-europe.com</a></p>
				</div>
			</div>
			<div class="address_block">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 address_1 mt-sm-2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/frankfrut-image.png">
						    <div class="addr_text">
						   		<div class="icon"><i class="fas fa-map-marker-alt"></i></div>
       							<h3 class="main-info">FRANKFURT</h3>
          						<p class="sub-info">Westend fair, Friedrich Ebert Anlage 36, <br>60325 Frankfurt</p>
          					</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 address_2 mt-sm-2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mumbai_image.jpg">
						    <div class="addr_text">
						    	<div class="icon"><i class="fas fa-map-marker-alt"></i></div>
						        <h3 class="main-info">MUMBAI</h3>
          						<p class="sub-info">702 Crescent Business, Kandivali (E), <br> 400101 Mumbai
          						</p>
          					</div>
					</div>
				</div>
			</div>
			<div class="contact_form">
				<h2 class="form_header"> Get In Touch </h2>
				<p class="form_subtext">Drop an email to know more about what we can do for your next big event.</p>
						<?php echo do_shortcode("[formidable id=1]"); ?>

			</div>
		</div>
	</div>
</div>
	

<?php
get_footer();
