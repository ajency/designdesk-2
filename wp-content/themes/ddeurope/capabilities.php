<?php
/*
 * Template Name: capabilities
 */

get_header(); 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<div class="capabilities">
	<div class="header_image">
		<div class="header">
			<div class="container">
				<h2 class="title">capabilities</h2>
				<div class="breadcrumbs-wrapper">
      				<div class="breadcrumbs-inside">
  						<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span> <span>capabilities</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="capability_content">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="icon_block">
						<i class="far fa-lightbulb" id="icon-cap"></i>
						<p class="text">INNOVATIVE DESIGN</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="icon_block">
						<i class="fas fa-comments" id="icon-cap"></i>
						<p class="text">PERSONALISED ATTENTION</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="icon_block">
						<i class="fas fa-cube" id="icon-cap"></i>
						<p class="text">MODERN PRODUCTION</p>
					</div>
				</div>
		 	</div>
			<hr>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<p><strong>Design Expertise</strong></p>
						<p>Our design team comprises of 3d &amp; 2d designers specializing in Exhibition design. They bring combined experience of over 50 years in Design.</p>
						<p>For every Design we listen to you with intensity and understand your requirement without jumping into specifics. What are you exhibiting? For whom? With what objectives? These are the questions whose answers we translate into design.</p>

					<hr class="line">
					<p><strong>Personalized Client Service</strong></p>	
						<p>We deliver our customer experience through dedicated team members who liaise with the Client to ensure that every detail is taken care promptly.</p>
						<p>A Client Service person is designated as a single point of contact to understand &amp; attend to Client requirements. This ensures ease of handling, personal attention to details and the convenience of not having to brief people repeatedly.</p>
						<p>We offer the expertise of a premier exhibition company with a level of personalised attention that distinguishes us.</p>		
					
					<hr class="line">							
					<p><strong>Modern & efficient production facilities</strong></p>
						<p>With over 20,000 square feet of production facility that is well equipped with the latest in fabrication equipment, we have the capacity and the infrastructure to handle large volumes of exhibition builds. We have successfully handled multiple builds without any bottlenecking.</p>
						<p>The company has a policy of in-house fabrication and our stands are built at our production premises. This ensures Quality of the build as well as its timely delivery, the two key aspects of our Service. We are also adequately stocked with furniture &amp; electricals to cater to our build requirements.</p>
						<p>Every year we execute over 125 exhibition stands across India &amp; the world.</p>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<h5 class="grid-title"> OUR INFRASTUCTURE </h5>
					<div class="grid">
						<div class="grid_block1 position-relative">
						  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/DD_Office1.jpg">
						  	<div class="item-overlay">
						  		<p class="text"> Office</p>
						  	</div>
						</div>
						<div class="grid_block1 position-relative">
						  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/DD_Office-2-1.jpg">
						  	<div class="item-overlay">
						  		<p class="text"> Office</p>
						  	</div>
						</div>
						<div class="grid_block1 position-relative">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/DD_Office-3-1.jpg">
							<div class="item-overlay">
								<p class="text"> Office</p>
							</div>	 
						</div>
					</div>	
					<div class="grid mt-2">
						<div class="grid_block2 position-relative">
						  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/DesignDesk_Factory-3-1.jpg">
						  	<div class="item-overlay">
						  		<p class="text"> DD-Factory </p>
						  	</div>
						</div>
						<div class="grid_block2 position-relative">
						  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/DesignDesk_Factory-2.jpg">
						  	<div class="item-overlay">
						  		<p class="text"> DD-Factory </p>
						  	</div>
						</div>
						<div class="grid_block2 position-relative">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/DesignDesk_Factory-4.jpg">
							<div class="item-overlay">
								<p class="text"> DD-Factory </p>
							</div>	 
						</div>	
					</div>
					<div class="grid mt-2">
						<div class="grid_block3 position-relative">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/DesignDesk_Factory-1-1-1.jpg">
						    <div class="item-overlay">
						    	<p class="text"> DD-Factory </p>
						    </div>
						</div>
					</div>	 
				</div>
			</div>
			<hr>
			<div class="hb-callout-box">
				<h3 class="text">Innovative Designs, Immaculate Execution!</h3>
				<a href="<?php echo get_site_url(); ?>/contact-us"> </i>Lets Work Together!</a>
			</div>
		</div>
	</div>
</div>


<?php
	}
} 
get_footer();
