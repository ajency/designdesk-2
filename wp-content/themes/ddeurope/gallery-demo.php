<?php
/*
 * Template Name: Gallery Demo
 */

get_header(); 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

?>

<?php

	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<div class="gallery">
	<div class="header_image">
		<div class="header">
			<div class="container">
				<h2 class="title">Gallery</h2>
				<div class="breadcrumbs-wrapper">
					<div class="breadcrumbs-inside">
						<a href="<?php echo get_site_url(); ?>/">Home</a> <span class="sep-icon"><i class="fa fa-angle-right"></i></span> <span>Gallery</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gallery_content">
		<div class="container">
			<div class="row">
				<div class="demo-gallery">
            		<div class="lightGallery grid-layout">
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ACG_ACHEMA_1.jpg" data-sub-html="<h4>ACG_ACHEMA</h4><p>Location: , Area: .</p>" rel="lightgallery[work]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/800x500/ACG_ACHEMA_1.jpg" alt="" /></a>

						<a class="item hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ACG_ACHEMA_2.jpg" data-sub-html="<h4>ACG_ACHEMA</h4><p>Location: , Area: .</p>" rel="lightgallery[work]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ACG_ACHEMA_2.jpg" alt=""/></a>

						<a class="item hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ACG_ACHEMA_3.jpg" data-sub-html="<h4>ACG_ACHEMA</h4><p>Location: , Area: .</p>" rel="lightgallery[work]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ACG_ACHEMA_3.jpg" alt=""/></a>
					</div>
					<div class="lightGallery grid-layout">
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ATEF_SIFER_2019_1.jpg" data-sub-html="<h4>ATEF_SIFER_2019</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/800x500/ATEF_SIFER_2019_1.jpg" alt="" /></a>

						<a class="hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ATEF_SIFER_2019_2.jpg" data-sub-html="<h4>ATEF_SIFER_2019</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ATEF_SIFER_2019_2.jpg" alt=""/></a>

						<a class="hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ATEF_SIFER_2019_3.jpg" data-sub-html="<h4>ATEF_SIFER_2019</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ATEF_SIFER_2019_3.jpg" alt=""/></a>
					</div>
					<div class="lightGallery grid-layout">
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/AYM_DOMOTEX_2017_1.jpg" data-sub-html="<h4>AAYM_DOMOTEX_2017</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/800x500/AYM_DOMOTEX_2017_1.jpg" alt="" /></a>

						<a class="hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/AYM_DOMOTEX_2018_2.jpg" data-sub-html="<h4>AYM_DOMOTEX_2018</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/AYM_DOMOTEX_2018_2.jpg" alt=""/></a>
					</div>
					<div class="lightGallery grid-layout">
		                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/BIRLA-CELLULOSE_ANEX_2018_1.jpg" data-sub-html="<h4>BIRLA-CELLULOSE_ANEX</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/800x500/BIRLA-CELLULOSE_ANEX_2018_1.jpg" alt="" /></a>

	                  	<a class="hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/BIRLA-CELLULOSE_ANEX_2018_2.jpg" data-sub-html="<h4>BIRLA-CELLULOSE_ANEX</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/BIRLA-CELLULOSE_ANEX_2018_2.jpg" alt=""/></a>
	                </div>
	                <div class="lightGallery grid-layout">
             			<a href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/GUJ_HT_1.jpg" data-sub-html="<h4>GUJ_HT</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/800x500/GUJ_HT_1.jpg" alt="" /></a>

	                  	<a class="hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/GUJ_HT_2.jpg" data-sub-html="<h4>GUJ_HT</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/GUJ_HT_2.jpg" alt=""/></a>

	                  	<a class="hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/GUJ_HT_3.jpg" data-sub-html="<h4>GUJ_HT</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/GUJ_HT_3.jpg" alt=""/></a>
	                </div>
					<div class="lightGallery grid-layout">
	                  	<a href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/RELIANCE_HEIMTEXTILE_2019_1.jpg" data-sub-html="<h4>ROTEX_IAA</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/800x500/RELIANCE_HEIMTEXTILE_2019_1.jpg" alt="" /></a>

	                  	<a class="hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/RELIANCE_HEIMTEXTILE_2019_2.jpg" data-sub-html="<h4>RELIANCE_HEIMTEXTILE</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/RELIANCE_HEIMTEXTILE_2019_2.jpg" alt=""/></a>
	                </div>
	                <div class="lightGallery grid-layout">
	                  	<a href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/SL_SOEX_INTERTABAC_2018_2.jpg" data-sub-html="<h4>SOEX_INTERTABAC</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/800x500/SL_SOEX_INTERTABAC_2018_2.jpg" alt="" /></a>

	              		<a class="hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/SOEX_INTERTABAC_2018_1.jpg" data-sub-html="<h4>SOEX_INTERTABAC</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/SOEX_INTERTABAC_2018_1.jpg" alt="" /></a>
	              	</div>
		            <div class="lightGallery grid-layout"> 
	                  	<a href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ACG_CPHI_2017_1.jpg" data-sub-html="<h4>ACG_CPHI</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/800x500/ACG_CPHI_2017_1.jpg" alt="" /></a>

	              		<a class="hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ACG_CPHI_2017_2.jpg" data-sub-html="<h4>ACG_CPHI</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/ACG_CPHI_2017_2.jpg" alt="" /></a>
	              	</div>
	              	<div class="lightGallery grid-layout">
	              		<a href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/BIRLA-CELLULOSEINDEX_2017_2.jpg" data-sub-html="<h4>BIRLA-CELLULOSE_INDEX</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/800x500/BIRLA-CELLULOSEINDEX_2017_2.jpg" alt="" /></a>

	              		<a class="hidden" href="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/BIRLA-CELLULOSE_INDEX2017_1.jpg" data-sub-html="<h4>BIRLA-CELLULOSE_INDEX</h4><p>Location: , Area: .</p>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920X1080/BIRLA-CELLULOSE_INDEX2017_1.jpg" alt="" /></a>
        			</div>	
			</div>
		</div>
	</div>
</div>


<?php
	}
} 
get_footer();
