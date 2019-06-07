<?php
/**
 * The main template file
 */

get_header(); 

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
?>


<?php
    $default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>


<!-- Home Slider -->
<div class="home-carousel">
    <div class="carousel is-hidden">
        <div class="carousel-cell active">
            <img data-flickity-lazyload="<?php echo get_template_directory_uri(); ?>/assets/images/01-SOEX Dortmund Germany.jpg" class="carousel-cell-image" alt="Exhibition stand design at Germany">
        </div>
        <div class="carousel-cell">
            <img data-flickity-lazyload="<?php echo get_template_directory_uri(); ?>/assets/images/ACG Frankfurt Germany.jpg" class="carousel-cell-image" alt="Exhibition stand design at Germany">
        </div>
        <div class="carousel-cell">
            <img data-flickity-lazyload="<?php echo get_template_directory_uri(); ?>/assets/images/RKFL Hannover Germany.jpg" class="carousel-cell-image" alt="Exhibition stand design at Germany">
        </div>
        <div class="carousel-cell">
            <img data-flickity-lazyload="<?php echo get_template_directory_uri(); ?>/assets/images/ATEF Lille France.jpg" class="carousel-cell-image" alt="Exhibition stand design at France">
        </div>
        <div class="carousel-cell">
            <img data-flickity-lazyload="<?php echo get_template_directory_uri(); ?>/assets/images/ROTEX Hannover Germany.jpg" class="carousel-cell-image" alt="Exhibition stand design at Germany">
        </div>
    </div>
</div>
<!-- End of Slider -->



<!-- Welcome text -->
<div class="main-text">
    <div class="container">
        <div>
            <h1 class="main-text-header">LOOKING FOR A EXHIBITION STAND DESIGN & BUILD PARTNER IN EUROPE?<h1>
        </div>
        <div class="main-text-subtext">
            Design Desk specialises in Design & Build of world-class exhibition stands across Europe & the World. 
            With our offices in Germany & India, we bring together a winning combination of expertise, professionalism & cost effectiveness.
        </div>
    </div>
</div>
<!-- End of Text -->


<!-- Gallery -->
<div class="gallery_block">
    <div class="container">
        <div class="row">
            <?php echo do_shortcode('[portfolio_gallery post="343,408,366,496,353,478,367,363"]'); ?>
            <div class="view_gallery m-auto">
            <a class="nectar-button  see-through" data-color-override="false" href="<?php echo get_site_url(); ?>/exhibition-stands-gallery" target="_blank"> View More Projects </a>
        </div>
        </div>
    </div>
</div>

<!-- End of Gallery -->



<!-- /.our why-choose-us -->
<div class="why_choose_us">
    <div class="container d-flex">
        <div id="bg-image" class="left-side lazy"></div>
        <div class="right-side">
            <div class="opacity">
                <h2 class="choose_us_title"> 4 Reasons to choose us </h2>
                <div class="item">
                    <p class="num"><i class="fas fa-draw-polygon"></i> </p>
                    <h6 class="item_heading"> Business focused Design</h6>
                    <p class="item_text">Believe in creativity with a purpose? Supporting your marketing objectives is also at the core of our design approach!
                    </p>
                </div>
                <div class="item">
                    <p class="num"> <i class="fas fa-dice-d20"></i> </p>
                    <h6 class="item_heading"> Responsive Service</h6>
                    <p class="item_text"> Count on us as a proactive partner to deliver the perfect exhibit; leaving you room to focus on other aspects of your business.
                    </p>
                </div>
                <div class="item">
                    <p class="num"> <i class="fas fa-project-diagram"></i> </p>
                    <h6 class="item_heading"> Immaculate Execution</h6>
                    <p class="item_text"> Do you also believe that a high quality stand is an important reflection of your company & products? Welcome aboard!
                    </p>
                </div>
                <div class="item">
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




<!-- World Map -->
<div class="map">
    <div class="container">
        <h2 class="map-heading">GLOBAL OR LOCAL….LARGE OR SMALL</h2>
        <h6 class="map-sub-heading text-center">Your partner for Exhibitions across Europe & the World!</h6>
        <div class="row">
            <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <?php echo do_shortcode("[show-map id='1']"); ?>
                <div class="legends mt-2 mb-2">
                    <span><i class="fas fa-circle" id="icon_1"></i>&nbsp Offices</span> &nbsp
                    <span><i class="fas fa-circle" id="icon_2"></i>&nbsp Service Network</span>
                </div>
                <p class="text-center">Experienced in over 26 countries & growing – we can serve you in most corners of the world!</p>
                <p class="text-center">Ask now on <strong><a href="mailto:hello@dd-europe.com">hello@dd-europe.com</a></strong></p>
            </div>
            <div class="col-lg-2 col-md-2"></div>
        </div>
    </div>
</div>
<!--  World Map  -->



<!-- Auto Scroll --> 
<div class="clients-logo">
    <div class="container position-relative">
        <h2 class="section_title"> Trusted by Brands like </h2>
        <ul id="scroller">
            <li ><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/1-Swarovski-logo.png" alt="Swarovski"></li>

            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/2-ACG-01.png" alt="ACG"></li>

            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/3-RIL-logo-1.png" alt="RIL"></li>

            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/4-Aditya-Birla-Group.png" alt="Aditya Birla Group"></li>

            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/5-Mistubishi_Logo.png" alt="Mistubishi"></li>

            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/6-CISCO-logo-1.png" alt="Cisco"></li>

            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/7-ATEF-Logo-2019-01.png" alt="ATEF"></li>

            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/8-GEA-Final-Logo.png" alt="GEA"></li>

            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/9--Hitachi.png" alt="Hitachi"></li>

            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/10-BOROSIL-1.png" alt="Borosil"></li>

            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/11-ROTEX-01.png" alt="Rotex"></li>

            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/12-SPETS.png" alt="Spets"></li>
        </ul>
    </div>
</div>
<!-- Auto Scroll -->


<!-- cta -->
<div id="call-to-action" class="mb-4">
    <div class="container">
        <div class="cta-text"><span>Your Brand deserves a Great Stand! </span></div>
        <div><a class="nectar-button  see-through" data-color-override="false" href="<?php echo get_site_url(); ?>/contact-exhibition-stall-designs" target="_blank"> Get Started Now</a></div>
    </div>
</div>
<!-- end of cta -->



<!-- FAQ -->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
    <div class="container mb-4">
        <h2 class="section_title"> Frequently asked questions </h2>
            <div class="card">
                <div class="card-header" role="tab" id="headingOne1">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                    aria-controls="collapseOne1">
                        <h5 class="faq_title mb-0">
                          How will you design my exhibition stand? <i class="fas fa-angle-down rotate-icon angle"></i>
                        </h5>
                    </a>
                </div>
                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"  data-parent="#accordionEx">
                    <div class="card-body">
                        Your stand will be designed on a cutting edge 3d software at our design studio – you will get to see a life like visualization of your booth. The design team includes architects, interior designers, 3d visualizers & graphic artists – an eco system that produces amazing designs!
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="headingTwo2">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                    aria-expanded="false" aria-controls="collapseTwo2">
                        <h5 class="faq_title mb-0">
                        What do you need to design my exhibition stand? <i class="fas fa-angle-down rotate-icon angle"></i>
                        </h5>
                    </a>
                </div>
                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                data-parent="#accordionEx">
                    <div class="card-body">
                        We need the hall layout showing your stand space & your requirements list. If you have not developed a requirement list, our Relationship Managers are happy to share a Design Brief Form which will help you structure your requirements.
                    </div>
                </div>
            </div>
 
            <div class="card">
                <div class="card-header" role="tab" id="headingThree3">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                        <h5 class="faq_title mb-0">
                        Will you only create the design - or handle the production & installation as well?<i class="fas fa-angle-down rotate-icon angle"></i>
                        </h5>
                    </a>
                </div>
                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" 
                data-parent="#accordionEx">
                    <div class="card-body">
                        We are your one-point solution provider & take the responsibility including Design, Production, Installation & Dismantling. We also take care of important co-ordinations such as filling up of various forms & applications with organisers on your behalf. Once you have us on board, we will take care of everything leaving you to focus on your business & planning other aspects of your trade show!
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="headingFour4">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour4"
                     aria-expanded="false" aria-controls="collapseFour4">
                        <h5 class=" faq_title mb-0">
                        Which countries & cities can Design Desk help at? <i class="fas fa-angle-down rotate-icon angle"></i>
                        </h5>
                    </a>
                </div>
                <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4"
                data-parent="#accordionEx">
                    <div class="card-body">
                        With over 125 projects every year, we are present at several key exhibitions across Europe & the World. Whatever is the location of your exhibition – do not hesitate to check with us!
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="headingFive5">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive5"
                        aria-expanded="false" aria-controls="collapseFive5">
                        <h5 class="faq_title mb-0">
                        How do I get started? <i class="fas fa-angle-down rotate-icon angle"></i>
                        </h5>
                    </a>
                </div>
                <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5"
                  data-parent="#accordionEx">
                    <div class="card-body">
                        Just drop us an email with your requirements on hello@dd-europe.com & we will get back to you within 24hours! Or call on +49 123456789
                    </div>
                </div>
            </div>
    </div>
</div>

<!-- end of FAQ -->

<?php
        } 
    }

get_footer();
