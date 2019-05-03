<?php
/*
 * Template Name: About us
 */

get_header(); ?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<div class="expertise">
	<div class="expertise_header">
		<h2 class="header_title"> Expertise</h2>
	</div>
	<div class="container">
		<h2 class="expertise_title">  </h2> 
		<p class="expertise_content">Incorporated in 2005, the team at DesignDesk has brought success to hundreds of our customers who use exhibitions as an integral part of their marketing plan.</p>
		<p class="expertise_content">Our consistency in output has been rewarded with repeat business from our Clients, which is the best testimony to our level of Quality & Service.</p>
		<p class="expertise_content">We have fully equipped facilities in Mumbai & Kolkata staffed by a 35 members plus team of professional designers, production experts & customer service personnel.</p>
		<p class="expertise_content">We handle exhibitions in any part of India directly & across the Globe through our strategic tie-ups with leading companies.</p>
		<section class="journey">
			<h2 class="section_title"> The Journey </h2>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 journey_block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kolkata.jpg">
						<div class="text_block">
							<div class="icon1"><i class="far fa-lightbulb"></i></div>
							<h2 class="title">2005: The beginnings…</h2>
							<p>MD DesignDesk Pvt Ltd is formed in Kolkata with an objective to provide 'end to end exhibiting solutions in a professional & organized manner'</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 journey_block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/growing.jpg">
						<div class="text_block">
							<div class="icon2"><i class="fas fa-chart-line"></i></div>
								<h2 class="title">2007: Starting to grow…</h2>
								<p>Started serving Exhibitions across India & first overseas project in Germany!</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 journey_block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mumbai_image.jpg">
						<div class="text_block">
							<div class="icon3"><i class="fas fa-bolt"></i></div>
							<h2 class="title">2009: Bold steps…</h2>
							<p>DesignDesk grows its operations & establishes office in Mumbai – the commercial capital & Exhibition hub of India!</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 journey_block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/newlogo.jpg">
						<div class="text_block">
							<div class="icon4"><i class="fas fa-leaf"></i></div>
							<h2 class="title">2010: A fresh look…</h2>
							<p>A new brand identity is created. Team strength nears 20 professionals!</p>
						</div>
					</div>
						<div class="col-lg-6 col-md-12 col-sm-12 journey_block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2011.jpg">
						<div class="text_block">
						<div class="icon5"><i class="fas fa-map-marker-alt"></i></div>
							<h2 class="title">2011: Strength to strength…</h2>
							<p>Our largest & most organised production facility is established in Mumbai</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 journey_block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2014.jpg">
						<div class="text_block">
							<div class="icon6"><i class="fas fa-globe-americas"></i></div>
							<h2 class="title">2014: Going global…</h2>
							<p>DesignDesk participates at Euroshop 2014, Germany as Sponsor & Co exhibitor at the IFES Stand.<br>
							Annual Project count crosses over 100 Stands across India & the World</p>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 journey_block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png">
						<div class="text_block">
						<div class="icon7"><i class="fas fa-star"></i></div>
							<h2 class="title">2015: Setting new goals…</h2>
							<p>As we complete 10 years, we chalk out an ambitious Strategic Goal & Roadmap for 2018 !</p>
						</div>
					</div>
				</div>
		</section>
	</div>
</div>

<?php
get_footer();
