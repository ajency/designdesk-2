<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" />

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
  	<div id="page" class="site">

	<header id="masthead" class="site-header fixed-top">
		<div class="top-bar">
			<div class="container">
				<span class="top-left"> EXHIBITION STAND DESIGN & BUILD</span>
				<span class="top-right"><a href="mailto:hello@dd-europe.com"><i class="fas fa-envelope-square"></i>&nbsp <span>hello@dd-europe.com</span> </a> &nbsp <i class="fas fa-phone-square"></i>&nbsp <span> +49 123456789 </span>  
				</span>
			</div>
		</div>
		<div class="container">
			<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg">
				<div id="logo">
        			<a href="<?php echo get_site_url(); ?>/" class="image-logo">
            			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/design_desk_logo_white_new.png" class="alt-logo" alt="<?php wp_title(); ?>">
          			</a>
        		</div>

				<div id="togglerBtn" class="toggler" onclick="openNav()">
		        	<div class="top-line"></div>
		            <div class="mid-line"></div>
		            <div class="bot-line"></div>
        		</div> <!-- Toggler End-->
				<div class="collapse-lg navbar-collapse  ml-auto" id="navbarSupportedContent">
					<ul class="nav navbar-nav navbar-right ">
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo get_site_url(); ?>/"> Home </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_site_url(); ?>/exhibition-stands-gallery">  Gallery </a>
						</li>
						<!-- <li class="nav-item dropdown">
                			<a class="nav-link dropdown-toggle" href="<?php echo get_site_url(); ?>/about-us" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
			                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                	<a class="dropdown-item" href="#">Overview</a>
			                	<a class="dropdown-item" href="#">Capabilities</a>
			                	<a class="dropdown-item" href="#">Team</a>
			                	<a class="dropdown-item" href="#">What's New</a>
			                </div>
              			</li>	 -->				
						<li class="nav-item">
               				<a class="nav-link" href="<?php echo get_site_url(); ?>/exhibition-stand-designers-builders-europe"> Expertise </a>
						</li>
					<!-- <li class="nav-item dropdown">
                			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Careers 
                			</a>
			                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			                    <a class="dropdown-item" href="#">Work at designdesk</a>
			                    <a class="dropdown-item" href="#">life at designdesk</a>
			                </div>
						</li>  -->
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_site_url(); ?>/contact-exhibition-stall-designs"> Contact </a>
						</li>
					</ul>						  
				</div>
			</nav><!-- #site-navigation -->
		</div>
		<!-- Mobile Menu -->
		<div id="mobile-menu" class="responsive-menu">
		<!-- 	<form method="get" class="mobile-search-form" action="https://designdesk.in/"><input type="text" placeholder="Search" name="s" autocomplete="off"></form> -->
			<nav id="mobilemenu" class="mobilemenu clearfix">
				<div class="collapse-lg navbar-collapse  ml-auto" id="navbarSupportedContent">
						<ul class="nav navbar-nav navbar-right ">
							<li class="nav-item active">
								<a class="nav-link" href="<?php echo get_site_url(); ?>/"> Home </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo get_site_url(); ?>/exhibition-stands-gallery">  Gallery </a>
							</li>
						<!-- 	<li class="nav-item dropdown">
						         <a class="nav-link dropdown-toggle" href="<?php echo get_site_url(); ?>/about-us" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         							About
       							 </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="#">Overview</a>
						          <a class="dropdown-item" href="#">Capabilities</a>
						          <a class="dropdown-item" href="#">Team</a>
						          <a class="dropdown-item" href="#">What's New</a>
						        </div>
						    </li>	 -->				
							<li class="nav-item">
								<a class="nav-link" href="<?php echo get_site_url(); ?>/exhibition-stand-designers-builders-europe"> Expertise </a>
							</li>
						<!-- 	<li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Careers 
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="#">Work at designdesk</a>
						          <a class="dropdown-item" href="#">life at designdesk</a>
						        </div>
						    </li> -->
							<li class="nav-item">
								<a class="nav-link" href="<?php echo get_site_url(); ?>/contact-exhibition-stall-designs"> Contact </a>
							</li>
						</ul>
						    

					</div>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content" onclick="closeNav()">
