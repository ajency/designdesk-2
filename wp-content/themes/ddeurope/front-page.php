<?php
/**
 * The main template file
 */

get_header(); ?>

<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
	</ol>
    <div class="carousel-inner" role="listbox">
		<!--div class="carousel-item active">
			<img src="<?php //echo get_template_directory_uri(); ?>/assets/images/firstbanner-1.jpg">
			<div class="carousel-caption">
				<p class="lead-1">You Have Reached The Experts For</p>
				<h2 class="display">Top notch exhibition stands!</h2>
			</div>
		</div -->
		<div class="carousel-item active">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/achema.jpg">
			<div class="carousel-caption">
				<h2 class="display-4">Modern design concepts</h2>
				<p class="lead">ACHEMA, Germany</p>
				<p class="leadsub">293 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/airbus.jpg">
			<div class="carousel-caption">
		    	<h2 class="display-4">Customized Approach</h2>
		  		<p class="lead">Defexpo, New Delhi</p>
		  		<p class="leadsub">272 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reliance.jpg">
			<div class="carousel-caption">
			    <h2 class="display-4">Impeccable Quality</h2>
			    <p class="lead">Chinaplas, China</p>
			    <p class="leadsub">219 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/otm.jpg">
			<div class="carousel-caption">
		 	    <h2 class="display-4">Award Winning Creativity</h2>
		        <p class="lead">OTM, Mumbai</p>
		        <p class="leadsub">100 sqm</p>
		    </div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/birla-1.jpg">
			<div class="carousel-caption">
			    <h2 class="display-4">Worldwide Services</h2>
			    <p class="lead">Anex, Japan</p>
			    <p class="leadsub">72 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Latest_Swaroski.jpg">
			<div class="carousel-caption">
		  		<h2 class="display-4">Attention To Details</h2>
		  		<p class="lead">IIJS, Mumbai</p>
		   		<p class="leadsub">72 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Mitsubishi.jpg">
			<div class="carousel-caption">
				<h2 class="display-4">100% Reliable Services</h2>
			    <p class="lead">Elecrama, Bengaluru</p>
			    <p class="leadsub">120 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/RPG-Office.jpg">
			<div class="carousel-caption">
				<h2 class="display-4">Optimum Space Planning</h2>
				<p class="lead">Office Lobby Display, Mumbai</p>
			    <p class="leadsub">400 sq ft</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Uber.jpg">
			<div class="carousel-caption">
		 		<h2 class="display-4">Hassle Free Working</h2>
				<p class="lead">Office Revamp, Pune</p>
			    <p class="leadsub">400 sq ft</p>
			</div>
		</div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
    </a>
</div>

<!-- Welcome text -->
<div class="main-text">
	<div class="container">
		<div class="main-text-header">
			LOOKING FOR A STAND DESIGN & BUILD PARTNER IN EUROPE? 
		</div>
		<div class="main-text-subtext">
			Design Desk specialises in Design & Build of world-class exhibition stands across Europe & the World. 
			With our offices in Germany & India, we bring together a winning combination of expertise, professionalism & cost effectiveness.
		</div>
	</div>
</div>
<!-- End of Text -->

<div class="gallery">
<!-- 	<?php echo do_shortcode("[gm album=8]"); ?>
 -->	<?php echo do_shortcode("[gm album=1]"); ?>
</div
			
<div class="our_approach">
	<div class="container">
		<h2 class="section_title"> Our Approach</h2>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 main_block">
					<i class="fas fa-assistive-listening-systems fa-5x" id="icons-appr"></i>
					<div class="block_head, ing"> We Listen </div>
					<p class="block_subheading"> Dedicated & highly responsive <br> client service</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 main_block">
					<i class="fas fa-cogs fa-5x" id="icons-appr"></i>
					<div class="block_heading"> We Design </div>
					<p class="block_subheading"> A winning combination of expertise & <br>experience deisgn layout</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 main_block">
					<i class="fas fa-handshake fa-5x" id="icons-appr"></i>
					<div class="block_heading"> We Deliver </div>
					<p class="block_subheading"> Reputed for best quality and <br> service project execution</p>
				</div>
			</div>
	</div>
</div> 



<!-- /.our why-choose-us -->
<div class="why_choose_us">
	<div class="container">
		<div class="left-side"></div>
		<div class="right-side">
		<div class="opacity">
			<h2 class="choose_us_title"> 4 Reasons to choose us </h2>
			<div class="item1">
				<p class="num"><i class="fas fa-draw-polygon"></i> </p>
				<h6 class="item_heading"> Business focused Design</h6>
				<p class="item_text">Believe in creativity with a purpose? Supporting your marketing objectives is also at the core of our design approach!
				</p>
			</div>
			<div class="item2">
				<p class="num"> <i class="fas fa-dice-d20"></i> </p>
				<h6 class="item_heading"> Responsive Service</h6>
				<p class="item_text"> Count on us as a proactive partner to deliver the perfect exhibit; leaving you room to focus on other aspects of your business.
				</p>
			</div>
			<div class="item3">
				<p class="num"> <i class="fas fa-project-diagram"></i> </p>
				<h6 class="item_heading"> Immaculate Execution</h6>
				<p class="item_text"> Do you also believe that a high quality stand is an important reflection of your company & products? Welcome aboard!
				</p>
			</div>
			<div class="item4">
				<p class="num"> <i class="fas fa-thumbs-up"></i> </p>
				<h6 class="item_heading"> 100% Reliable Partner</h6>
				<p class="item_text"> In the time-bound scenario of exhibitions, most important is a competent & dependable partner to guarantee your success!
				</p>
			</div>
			</div>
		</div>
	</div>
</div>
<!-- end -why-choose-us -->

<!-- Counter -->
<div class="counter_in_home">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-3 col-md-12">
				<div class="counter">
		    		<h2 class="timer count-title count-number" data-to="14" data-speed="1200"></h2>
		    		<div class="count-separator"><span class="bottom-line"></span></div>
		       		<p class="count-text ">YEARS IN BUSINESS</p>
		    	</div>
		    </div>
	        <div class="col-lg-3 col-md-12">
	            <div class="counter">
	    		    <h2 class="timer count-title count-number" data-to="1200" data-speed="1200"></h2>
		    		<div class="count-separator"><span class="bottom-line"></span></div> <p class="count-text ">PROJECTS DELIVERED</p>
	    		</div>
	        </div>
	         <div class="col-lg-3 col-md-12">
	            <div class="counter">
	    			<h2 class="timer count-title count-number" data-to="45" data-speed="1200"></h2>
		    		<div class="count-separator"><span class="bottom-line"></span></div>
		    		<p class="count-text ">MEMBER TEAM</p>
	    		</div>
	    	</div>
	        <div class="col-lg-3 col-md-12">
	            <div class="counter">
	    			<h2 class="timer count-title count-number" data-to="26" data-speed="1200"></h2>
	   	    		<div class="count-separator"><span class="bottom-line"></span></div>
					<p class="count-text ">COUNTRIES COVERED</p>
	    		</div>
	        </div>
	    </div>
	</div>
</div>

<!-- end of Counter -->

<!-- Auto Scroll --> 


<div class="clients-logo">
	<div class="container position-relative">
		<h2 class="section_title"> Trusted by Brands like </h2>
		<ul id="scroller">
			<li ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/swarovski.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/acg.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reliance.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/aditya-birla-group.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Mitsubishi_Electric.png"></li>

			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cisco.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/raychem-rpg.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/siyaram.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/uber.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/airbus.png"></li>

			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gea.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/decor.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portico.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gmmco.png"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hitachi.png"></li>
		</ul>
	</div>
</div>
<!-- Auto Scroll -->

<!-- cta -->
<div id="call-to-action" class="mb-4">
	<div class="container">
		<span>Expert Execution. Personalized Attention. </span>
		<a class="nectar-button  see-through" data-color-override="false" href="#"> Get In Touch</a>
	</div>
</div>
<!-- end of cta -->



<!-- FAQ -->

<!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
<div class="container">
	<h2 class="section_title"> Frequently asked questions </h2>
  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <h5 class="faq_title mb-0">
          How will you design my exhibition stand? <i id="angle" class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
      <div class="card-body">
        Your stand will be designed on a cutting edge 3d software at our design studio – you will get to see a life like visualization of your booth. The design team includes architects, interior designers, 3d visualizers & graphic artists – an eco system that produces amazing designs!
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
        <h5 class="faq_title mb-0">
         What do you need to design my exhibition stand? <i id="angle" class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
      <div class="card-body">
        We need the hall layout showing your stand space & your requirements list. If you have not developed a requirement list, our Relationship Managers are happy to share a Design Brief Form which will help you structure your requirements.
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree3">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="faq_title mb-0">
          Will you only create the design - or handle the production & installation as well?<i id="angle" class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
        We are your one-point solution provider & take the responsibility including Design, Production, Installation & Dismantling. We also take care of important co-ordinations such as filling up of various forms & applications with organisers on your behalf. Once you have us on board, we will take care of everything leaving you to focus on your business & planning other aspects of your trade show!
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFour4">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour4"
        aria-expanded="false" aria-controls="collapseFour4">
        <h5 class=" faq_title mb-0">
         Which countries & cities can Design Desk help at? <i id="angle" class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4"
      data-parent="#accordionEx">
      <div class="card-body">
        With over 125 projects every year, we are present at several key exhibitions across Europe & the World. Whatever is the location of your exhibition – do not hesitate to check with us!
      </div>
    </div>

  </div>
  <!-- Accordion card -->


  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFive5">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive5"
        aria-expanded="false" aria-controls="collapseFive5">
        <h5 class="faq_title mb-0">
        How do I get started? <i id="angle" class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5"
      data-parent="#accordionEx">
      <div class="card-body">
      Just drop us an email with your requirements on hello@dd-europe.com & we will get back to you within 24hours! Or call on +49 123456789
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>

</div>
<!-- Accordion wrapper -->
<!-- end of FAQ -->

<?php
get_footer();
