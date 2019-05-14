<?php
/*
 * Template Name: About us
 */

get_header(); ?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<div class="about_us">
	<div class="header_image position-relative">
		<div class="header">
			<div class="container">
				<h2 class="title">About Us</h2>
				<div class="breadcrumbs-wrapper">
      				<div class="breadcrumbs-inside">
  						<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span> <span>About Us</span>
  					</div>
  				</div>
			</div>
		</div>
	</div>
	<div class="about_us_content">
		<div class="container">
			<div class="head_text">
				<h2 class="title"> Incorporated in 2005, <span>Design Desk</span> specializes in the Design & Build of World Class Exhibition Stands. </h2>
			</div>
			<div class="row company_facts">
				<div class="left-content col-lg-6 col-md-12 col-sm-12 ">
					<h4 class="heading">COMPANY FACTS</h4>
						<p><strong>Year of Incorporation:</strong> 2005</p>
						<p><strong>Staff Strength:</strong> 45 </p>
						<p><strong>Branch Office:</strong> Frankfurt, Germany </p>
						<p><strong>Head Office:</strong> Mumbai, India</p>
						<p><strong>Members:</strong>
							<ul>
								<li class="links">Indo German Chamber of Commerce <a href="https://indien.ahk.de/" target="_blank">(IGCC)</a></li>
								<li class="links">International Federation of Exhibition & event Services <a href="https://www.ifesnet.com/" target="_blank">(IFES)</a></li>
								<li class="links">Experiential Designers & producers Association <a href="https://www.edpa.com/" target="_blank">(EDPA)</a></li>
							</ul>
						</p>
				</div>
				<div class="right-content col-lg-6 col-md-12 col-sm-12 right-side">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/architecture-attraction-buildings-1174136.jpg">
					<p class="text-center mt-2">With experience in over 26 countries, we are your trusted stand design & build partner</p>
				</div>
			</div>
			<div class="row logo_significance">
				<div class="left col-lg-6 col-md-12 col-sm-12 text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_bnw.png">
				</div>
				<div class="right col-lg-6 col-md-12 col-sm-12">
					<h4 class="heading">Our Logo is much more than a symbol!</h4>
					<p>The 3 inward directing arrows represent the 3 departments at Design Desk – Design, Project Supervision & Client Servicing.</p>

					<p>The outward arrows reflect their efforts towards outstanding designs & layouts, impeccable quality & on time delivery and personalized assistance & attention </p>
				</div>
			</div>
			<div class="action_block">
				<button class="talk_to_us">Talk to us</button>
			</div>
		</div>
	</div>
</div>


<?php
get_footer();
