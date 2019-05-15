<?php
/*
 * Template Name: History
 */

get_header(); 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<div class="expertise">
	<div class="header_image">
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

	<div class="about_us">
		<div class="container">
			<div class="row mr-0 ml-0">
				<div class="about_us_content col-lg-12 col-md-12 col-sm-12 pr-0 pl-0">
					<div class="head_text">
						<h2 class="title alignleft">An Overview </h2>
					</div>
					<div class="text_column">
						<p>Incorporated in 2005, the team at DesignDesk has brought success to hundreds of our customers who use exhibitions as an integral part of their marketing plan.</p>

						<p>Our consistency in output has been rewarded with repeat business from our Clients, which is the best testimony to our level of Quality &amp; Service.</p>

						<p>We have fully equipped facilities in Mumbai &amp; Kolkata staffed by a 35 members plus team of professional designers, production experts &amp; customer service personnel.</p>

						<p>We handle exhibitions in any part of India directly &amp; across the Globe through our strategic tie-ups with leading companies.</p>
					</div>
				</div>
		<!-- 		<div class=" col-lg-4 col-md-4 col-sm-12 pr-0 pl-0">
					Testimonials
				</div> -->
			</div>

			<div class="journey">
				<h2 class="title"> The Journey </h2>
					<div class="timeline">
						<div class="timeline-block">
							<div class="idea">
								<i class="far fa-lightbulb"></i>
							</div>
							<div class="timeline-content">
								<h2>2005: The beginnings…</h2>
								<p>JMD DesignDesk Pvt Ltd is formed in Kolkata with an objective to provide 'end to end exhibiting solutions in a professional & organized manner' </p>
								<span class="timeline-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kolkata_designdesk1.jpg">
								</span>
							</div>
						</div>
						<div class="timeline-block">
							<div class="exhibit">
								<i class="fas fa-chart-line"></i>
							</div>
							<div class="timeline-content">
								<span class="timeline-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/designdesk_exhibition_design.jpg">
								</span>
								<h2>2007: Starting to grow…</h2>
								<p>Started serving Exhibitions across India & first overseas project in Germany! </p>
							</div>
						</div>

						<div class="timeline-block">
							<div class="wrap">
								<i class="fas fa-bolt"></i>
							</div>
							<div class="timeline-content">
								<h2>2009: Bold steps…</h2>
								<p> DesignDesk grows its operations & establishes office in Mumbai – the commercial capital & Exhibition hub of India! </p>
								<span class="timeline-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2009.jpg">
								</span>
							</div>
						</div>
						<div class="timeline-block">
							<div class="idea">
								<i class="fas fa-leaf"></i>
							</div>
							<div class="timeline-content">
								<span class="timeline-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2010.jpg">
								</span>
								<h2>2010: A fresh look…</h2>
								<p>A new brand identity is created. Team strength nears 20 professionals!</p>
							</div>
						</div>
						<div class="timeline-block">
							<div class="exhibit">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="timeline-content">
								<h2>2011: Strength to strength…</h2>
								<p> Our largest & most organised production facility is established in Mumbai </p>
								<span class="timeline-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2011.jpg">
								</span>
							</div>
						</div>
						<div class="timeline-block">
							<div class="wrap">
								<i class="fas fa-globe-europe"></i>
							</div>
							<div class="timeline-content">
								<span class="timeline-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2014.jpg">
								</span>
								<h2>2014: Going global…</h2>
								<p>DesignDesk participates at Euroshop 2014, Germany as Sponsor & Co exhibitor at the IFES Stand.</p>
								<p>Annual Project count crosses over 100 Stands across India & the World.</p>
							</div>
						</div>
						<div class="timeline-block">
							<div class="idea">
								<i class="fas fa-star"></i>
							</div>
							<div class="timeline-content">
								<span class="timeline-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/10years.png">
								</span>
								<h2>2015: Setting new goals…</h2>
								<p>As we complete 10 years, we chalk out an ambitious Strategic Goal & Roadmap for 2018 !</p>
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
