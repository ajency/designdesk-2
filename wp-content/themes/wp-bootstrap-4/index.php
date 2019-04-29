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


			


<?php



get_footer();
?>