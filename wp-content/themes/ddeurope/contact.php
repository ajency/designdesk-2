<?php
/*
 * Template Name: Contact us
 */

get_header(); 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<div class="contact_us">
	<div class="header_image">
		<div class="header">
			<div class="container">
				<h2 class="title">Let's Connect</h2>
				<div class="breadcrumbs-wrapper">
      				<div class="breadcrumbs-inside">
  						<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span> <span>Contact Us</span>
  					</div>
  				</div>
			</div>
		</div>
	</div>


	<div class="contact_us_content">
		<div class="container">
			<div class="row mr-0 ml-0">
				<div class="contact_form col-lg-8 col-md-8 col-sm-12 pr-0 pl-0">
					<div class="form_header">
						<h2 class="form_title alignleft"> Leave A Message </h2>
						<p class="form_subtitle">Drop an email to know more about what we can do for your next big event.</p>
					</div>
					<?php echo do_shortcode("[formidable id=1]"); ?>
				</div>
				<div class=" col-lg-4 col-md-4 col-sm-12 pr-0 pl-0">
					<hr class="seperator">
					<div class="aside_header">
						<h2 class="aside_title alignleft"> Contact Us </h2>
						<p class="aside_subtitle">Here's how you can reach us...</p>
					</div>
					<div class="row mt-4 mb-2">
						<div class="icon_block"> 
							<span><i class="far fa-envelope"></i> &nbsp E-mail: <a href="mailto:hello@dd-europe.com">hello@dd-europe.com</a></span>
						</div>
						<div class="icon_block">
							<span><i class="fas fa-phone"></i> &nbsp Phone: <a href="tel:+49 123456789"> +49 123456789</a></span>
						</div> 
					</div>
					<div class="address_block">
						<div class="row">
							<div class="address_1 text-center mt-1 align-items-center">
								<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/frankfrut-image.png">						<div class="addr_text1">
		       							<h3 class="main-info">GERMANY</h3>
		          						<p class="sub-info">Westend fair, Friedrich Ebert <br> Anlage 36,60325 Frankfurt</p>
		          					</div>
							</div>
							<div class="address_2 text-center mt-1">
								<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/mumbai_image.jpg">								    <div class="addr_text2">
								        <h3 class="main-info">INDIA</h3>
		          						<p class="sub-info">702 Crescent Business,<br> Kandivali (E),  400101 Mumbai
		          						</p>
		          					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	

<?php
	}
} 
get_footer();
