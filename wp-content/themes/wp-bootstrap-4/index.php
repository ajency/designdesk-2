<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<?php if ( get_theme_mod( 'blog_display_cover_section', 1 ) ) : ?>
	<?php if( get_theme_mod( 'blog_cover_title' ) || get_theme_mod( 'blog_cover_lead' ) || get_theme_mod( 'blog_cover_btn_text' ) ) : ?>
		<section class="jumbotron bg-white text-center wp-bs-4-jumbotron border-bottom">
			<div class="container">

				<h1 class="jumbotron-heading"><?php echo wp_kses_post( get_theme_mod( 'blog_cover_title' ) ); ?></h1>
				<p class="lead text-muted"><?php echo wp_kses_post( get_theme_mod( 'blog_cover_lead' ) ); ?></p>
				<?php if( get_theme_mod( 'blog_cover_btn_text' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'blog_cover_btn_link' ) ); ?>" class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'blog_cover_btn_text' ) ); ?></a><?php endif; ?>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.jumbotron text-center -->
	<?php endif; ?>
<?php endif; ?>

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
		<div class="carousel-item active">
			<img src="wp-content/themes/wp-bootstrap-4/assets/images/firstbanner-1.jpg">
			<div class="carousel-caption">
				<p class="lead-1">You Have Reached The Experts For</p>
				<h2 class="display">Top notch exhibition stands!</h2>
			</div>
		</div>
		<div class="carousel-item">
			<img src="wp-content/themes/wp-bootstrap-4/assets/images/achema.jpg">
			<div class="carousel-caption">
				<h2 class="display-4">Modern design concepts</h2>
				<p class="lead">ACHEMA, Germany</p>
				<p class="leadsub">293 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="wp-content/themes/wp-bootstrap-4/assets/images/airbus.jpg">
			<div class="carousel-caption">
		    	<h2 class="display-4">Customized Approach</h2>
		  		<p class="lead">Defexpo, New Delhi</p>
		  		<p class="leadsub">272 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="wp-content/themes/wp-bootstrap-4/assets/images/reliance.jpg">
			<div class="carousel-caption">
			    <h2 class="display-4">Impeccable Quality</h2>
			    <p class="lead">Chinaplas, China</p>
			    <p class="leadsub">219 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="wp-content/themes/wp-bootstrap-4/assets/images/otm.jpg">
			<div class="carousel-caption">
		 	    <h2 class="display-4">Award Winning Creativity</h2>
		        <p class="lead">OTM, Mumbai</p>
		        <p class="leadsub">100 sqm</p>
		    </div>
		</div>
		<div class="carousel-item">
			<img src="wp-content/themes/wp-bootstrap-4/assets/images/birla-1.jpg">
			<div class="carousel-caption">
			    <h2 class="display-4">Worldwide Services</h2>
			    <p class="lead">Anex, Japan</p>
			    <p class="leadsub">72 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="wp-content/themes/wp-bootstrap-4/assets/images/Latest_Swaroski.jpg">
			<div class="carousel-caption">
		  		<h2 class="display-4">Attention To Details</h2>
		  		<p class="lead">IIJS, Mumbai</p>
		   		<p class="leadsub">72 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="wp-content/themes/wp-bootstrap-4/assets/images/Mitsubishi.jpg">
			<div class="carousel-caption">
				<h2 class="display-4">100% Reliable Services</h2>
			    <p class="lead">Elecrama, Bengaluru</p>
			    <p class="leadsub">120 sqm</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="wp-content/themes/wp-bootstrap-4/assets/images/RPG-Office.jpg">
			<div class="carousel-caption">
				<h2 class="display-4">Optimum Space Planning</h2>
				<p class="lead">Office Lobby Display, Mumbai</p>
			    <p class="leadsub">400 sq ft</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="wp-content/themes/wp-bootstrap-4/assets/images/Uber.jpg">
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


<!-- /.our why-choose-us -->
<div class="why_choose_us">
	<div class="container">
		<div class="left-side"></div>
		<div class="right-side">
		<div class="opacity">
			<h2 class="choose_us_title"> 4 Reasons to choose us </h2>
					<div class="item1">
						<p class="num"> 1 </p>
						<h6 class="item_heading"> Business focused Design</h6>
						<p class="item_text">We consider a Design successful only when it meets your marketing & brand objectives. Our customised Designs always keep your key requirements at the core.
						</p>
					</div>
					<div class="item2">
						<p class="num"> 2 </p>
						<h6 class="item_heading"> Responsive Service</h6>
						<p class="item_text">Our dedicated service managers work closely with you to deliver the perfect exhibit. You will know you are in safe hands & can focus on other aspects of your business.
						</p>
					</div>
					<div class="item3">
						<p class="num"> 3 </p>
						<h6 class="item_heading"> Immaculate Execution</h6>
						<p class="item_text">The quality of a booth is said to reflect the standard of the company & its products. We understand this & are reputed for some of the highest levels of Quality Stands.
						</p>
					</div>
					<div class="item4">
						<p class="num"> 4 </p>
						<h6 class="item_heading"> 100% Reliable Partner</h6>
						<p class="item_text">When you don’t want to take chances with your exhibition stand, you need a capable & experienced partner. We have been in the business since 2005 & trusted by some of the biggest brands.
						</p>
					</div>
			</div>
		</div>
	</div>
</div>
<!-- end -why-choose-us -->

<!-- Counter -->

<!-- end of Counter -->

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
          How will you design my exhibition stand? <i class="fas fa-angle-down rotate-icon"></i>
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
         What do you need to design my exhibition stand? <i class="fas fa-angle-down rotate-icon"></i>
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
          Will you only create the design - or handle the production & installation as well?<i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
        We are your one point solution provider & take the responsibility including Design, Installation & Dismantling. Once you have us on board, we will take care of everything leaving you to focus on your business & other exhibition planning!
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
         Which countries & cities can Design Desk help at? <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4"
      data-parent="#accordionEx">
      <div class="card-body">
        With over 125 projects every year, we are present at several key exhibitions across India & the World. Whatever is the location of your exhibition – do not hesitate to check with us!
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
        How do I get started? <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5"
      data-parent="#accordionEx">
      <div class="card-body">
      Just drop us an email on india@designdesk.in & we will get back to you within 24hours! Or call on +91 97699 14770
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>

</div>
<!-- Accordion wrapper -->


<!-- FAQ -->
			


<?php



get_footer();
?>