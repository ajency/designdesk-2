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
		<h2 class="expertise_title"> OVERVIEW </h2>
		<p class="expertise_content">Incorporated in 2005, the team at DesignDesk has brought success to hundreds of our customers who use exhibitions as an integral part of their marketing plan.</p>
		<p class="expertise_content">Our consistency in output has been rewarded with repeat business from our Clients, which is the best testimony to our level of Quality & Service.</p>
		<p class="expertise_content">We have fully equipped facilities in Mumbai & Kolkata staffed by a 35 members plus team of professional designers, production experts & customer service personnel.</p>
		<p class="expertise_content">We handle exhibitions in any part of India directly & across the Globe through our strategic tie-ups with leading companies.</p>

		<section class="journey_timeline">
			<h2 class="section_title"> The Journey </h2>
		
		<div class="journey_timeline">

		    <div class="timeline-block timeline-block-right">
		      <div class="marker"></div>
			      <div class="timeline-content">
			         <h3>2005: The beginnings…</h3>
			         <p>MD DesignDesk Pvt Ltd is formed in Kolkata with an objective to provide 'end to end exhibiting solutions in a professional & organized manner'</p>
			         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2005.jpg">

			   </div>
		   </div>


		   <div class="timeline-block timeline-block-left">
		      <div class="marker"></div>
		      <div class="timeline-content">
		         <h3>2007: Starting to grow…</h3>
		         <p>Started serving Exhibitions across India & first overseas project in Germany!</p>
		          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2007.jpg">
		      </div>
		   </div>

		   <div class="timeline-block timeline-block-right">
		      <div class="marker"></div>
		      <div class="timeline-content">
		         <h3>2009: Bold steps…</h3>
		         <p>DesignDesk grows its operations & establishes office in Mumbai – the commercial capital & Exhibition hub of India!</p>
		         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2009.jpg">
		      </div>
		   </div>

		   <div class="timeline-block timeline-block-left">
		      <div class="marker"></div>
		      <div class="timeline-content">
		         <h3>2010: A fresh look…</h3>
		         <p>A new brand identity is created. Team strength nears 20 professionals!</p>
		         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2010.jpg">
		      </div>
		   </div>

		   <div class="timeline-block timeline-block-right">
		      <div class="marker"></div>
		      <div class="timeline-content">
		         <h3>2011: Strength to strength…</h3>
		         <p>Our largest & most organised production facility is established in Mumbai</p>
		      </div>
		   </div>

		   <div class="timeline-block timeline-block-left">
		      <div class="marker"></div>
		      <div class="timeline-content">
		         <h3>2014: Going global…</h3>
		         <p>DesignDesk participates at Euroshop 2014, Germany as Sponsor & Co exhibitor at the IFES Stand. Annual Project count crosses over 100 Stands across India & the World</p>
		      </div>
		   </div>

		   <div class="timeline-block timeline-block-right">
		      <div class="marker"></div>
		      <div class="timeline-content">
		         <h3>2015: Setting new goals…</h3>
		         <p>As we complete 10 years, we chalk out an ambitious Strategic Goal & Roadmap for 2018 !</p>
		      </div>
		   </div>
		</div>
	</section>
	</div>
</div>



<?php
get_footer();
