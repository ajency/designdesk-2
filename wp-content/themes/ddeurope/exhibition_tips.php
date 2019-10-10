<?php
/*
 * Template Name: Exhibition Tips
 */

get_header(); 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>
<?php the_content(); ?>
<div class="page_content">
	<div class="header_image position-relative">
		<div class="header">
			<div class="container">
				<h2 class="title">Tips for Exhibition Stands</h2>
				<div class="breadcrumbs-wrapper">
      				<div class="breadcrumbs-inside">
  						<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span> 
  						<span>Tips for Exhibition Stands</span>
  					</div>
  				</div>
			</div>
		</div>
	</div>
	<div class="exhibition_tips">
		<div class="container">
			<div class="head_text">
				<h2 class="title"> Expert Tips for Exhibition Stands with <br/><span>Big Products or Large Size Exhibits.</span> </h2>
				<h4>Are you going to exhibit heavy machinery or large size products at your next trade show ?</h4>
			</div>
			<div class="row experts_tips justify-content-center">
				<h4> Consider these tips from our experts: </h4>
				<ul>
					<li class="lists"><span>Start with layout planning</span> of your stand area i.e. decide the position of your exhibits within the stand as the 1st step. Work with your stand designer to finalize the layout plan & then commence the design of the stand elements </li>
					<li class="lists">Consider the <span>height of the products</span> while making this plan – taller products block the line of vision & are best placed against high backdrops or walls. Give the most prominent location to the most popular or attractive exhibits.</li>
					<li class="lists"><span> Use hanging signs </span> to build visibility while avoiding too many design elements built on the stand floor – this will leave your stand spacious & easy to move around. Work with your booth designer to find out the possibilities of rigging & ceiling suspensions above your stand location.</li>
					<li class="lists"><span> Proper overhead lighting </span> is essential – angular lights focused on exhibits may create shadows & dark spots. If hanging lights are not permitted at the venue, then a solution using overhead canopies or light poles may need to be worked out. </li>
					<li class="lists"><span> Flooring could be a critical element </span> when displaying heavy weight products -  if using a raised floor then it must be able to support the weight & also pass through any utilities like power or air cables. A detailed setup schedule is also critical for move-in & move-out of heavy exhibits to be in sync with stand building activities. </li>
				</ul>
			</div>
			<div class="portfolio-slider">
					<h4> Here are some large product stands produced by Design Desk: </h4>
					<!-- Slider ACG Interpack-->
					<?php echo do_shortcode('[portfolio_gallery post="1739" lightbox=true]'); ?>
					<div class="features">
						<strong>Key Features: </strong>
						<ul>
							<li class="lists"> Open & inviting outlook </li>
							<li class="lists"> High walls with creative design features </li>
							<li class="lists"> LED screen at central & prominent location </li>
							<li class="lists"> Large hanging sign complete with bright illumination </li>
							<li class="lists"> Heavy load flooring with power & air cables passing underneath </li>
						</ul>
					</div>
					<!-- Slider Achema 2018 -->
					<?php echo do_shortcode('[portfolio_gallery post="1739" lightbox=true]'); ?>
					<div class="features">
						<strong>Key Features: </strong>
						<ul>
							<li class="lists"> Dominating presence & private display strategy </li>
							<li class="lists"> Full height façade & walls to create a fortress like ambience </li>
							<li class="lists"> Integrated LED walls for dynamic content & messaging </li>
							<li class="lists"> Excellent illumination facility using overhead trussing </li>
							<li class="lists"> Heavy load flooring with power & air cables passing underneath </li>
						</ul>
					</div>

					<!-- Slider Reshmi from Portfolio-->
		 				<?php echo do_shortcode('[portfolio_gallery post="1739" lightbox=true]'); ?>
						<div class="features">
				 			<strong>Key Features: </strong>
							<ul>
								<li class="lists"> Open layout with light construction  </li>
								<li class="lists"> High walls with graphics serve as backdrop to exhibits </li>
								<li class="lists"> Centralized logo with lighting for easy identification of Brand </li>
								<li class="lists"> Suspended truss for illumination of products </li>
								<li class="lists"> Heavy load flooring with power & air cables passing underneath </li>
								<li class="lists"> Supporting information stands for each product  </li>
							</ul>
						</div>
			</div>
		</div>

		<div id="call-to-action" class="main-text pb-1 mt-4">
			<div class="main-text-subtext cta-text">
				<span>Benefit from our experience in the design & build-up of product oriented stands</span>
					<div class="popup_btn m-0 p-3">
		                <div class="container">
		                    <!-- Pop up button -->
		                    <div>
		                        <a href="" class="nectar-button  see-through" data-toggle="modal" data-target="#exampleModalCenter">Request a free design proposal now</a>
		                    </div>
		                    <!-- Modal -->
				            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				                <div class="modal-dialog modal-dialog-centered" role="document">
				                    <div class="modal-content">
				                        <div class="modal-header">
				                            <h5 class="modal-title text-primary" id="exampleModalLongTitle">Contact Us
				                            </h5>
				                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                                <span aria-hidden="true">&times;</span>
				                            </button>
				                        </div>
				                        <div class="modal-body">
				                            <?php echo do_shortcode("[formidable id=5]"); ?>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <!-- End of Modal -->	
		                </div>
		            </div>
	            </div>
	        </div>

	        <div class="about-dd container">
	            <div class="row">
	            	<div class="col-lg-5">
	            		<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/ddeurope_logo_bnw.png" alt="dd-europe" class="img-fluid">
	            	</div>
	            	<div class="col-lg-7 right">
	            		<p>Design Desk is a leading Stand Design & Build specialist. We like to think of ourselves not only as designers or contractors – but as Partners in our clients exhibiting success. With this belief & focus we have bought success at exhibitions in over 26 countries since our inception in 2005.</p>
	            		<div><a href="mailto:hello@dd-europe.com"><span class="email_text"><i class="far fa-envelope"></i>  &nbsp; hello@dd-europe.com</span></a>
	            		<a href="tel:+49 15145695340"><span class="num_text"> <i class="fas fa-mobile-alt"></i>  &nbsp; +49 15145695340 </span></a></div>
	            		<div class="btn px-0">
	            			<a href="https://designdesk.in/" target="_blank"> Know More </a>
	        			</div>
	            	</div>
	            </div>
	        </div>

	        <div class="lists-section container">
	        	<h5 class=""><strong> Also read: </strong></h5>
		        <ol>
		        	<li><a href="" target="_blank">Tips for Exhibition Stands with <span>Small or Medium sized Products</span></a></li>
		        	<li><a href="" target="_blank">Tips for Exhibition Stands with <span>Services or Information</span></a></li>
		        	<li><a href="" target="_blank">Tips for Exhibition Stands with <span>Theme or Concept based</span></a></li>
		        	<li><a href="" target="_blank">Tips for Exhibition Stands with <span>Theme or Concept based</span></a></li>
		    	</ol>
	    	</div>
	</div>
</div>


 
<?php
	}
} 
get_footer();

?>

