<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.simplyscroll.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	
    <script type="text/javascript"  src="<?php echo get_template_directory_uri(); ?>/assets/js/front-page.js"></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="top-bar">
		<div class="container">
			<span class="top-left"> EXHIBITION STAND DESIGN & BUILD</span>
			<span class="top-right"><i class="fas fa-phone-square"> +49 123456789 </i> &nbsp <i class="fas fa-envelope-square"> hello@dd-europe.com </i>
			</span>
		</div>
	</div>

	<header id="masthead" class="site-header fixed-top">
		<div class="container">
			<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg">
				<div id="logo">
						<a href="<?php echo get_site_url(); ?>/" class="image-logo">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/design_desk_logo_white_new.png'; ?>" alt="" /></a>
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
								<a class="nav-link" href="#"> Portfolio </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> Video Gallery </a>
							</li>
							<li class="nav-item dropdown">
						         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         							About
       							 </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="#">Overview</a>
						          <a class="dropdown-item" href="#">Capabilities</a>
						          <a class="dropdown-item" href="#">Team</a>
						          <a class="dropdown-item" href="#">What's New</a>
						        </div>
						    </li>					
							<li class="nav-item">
								<a class="nav-link" href="#"> Blog </a>
							</li>
							<li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Careers 
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="#">Work at designdesk</a>
						          <a class="dropdown-item" href="#">life at designdesk</a>
						        </div>
						    </li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo get_site_url(); ?>/contact-us"> Contact </a>
							</li>
						</ul>
						    

					</div>

			</nav><!-- #site-navigation -->
		</div>
		<!-- Mobile Menu -->
		<div id="mobile-menu" class="responsive-menu">
			<form method="get" class="mobile-search-form" action="https://designdesk.in/"><input type="text" placeholder="Search" name="s" autocomplete="off"></form>
			<nav id="mobilemenu" class="mobilemenu clearfix">
				<div class="collapse-lg navbar-collapse  ml-auto" id="navbarSupportedContent">
						<ul class="nav navbar-nav navbar-right ">
							<li class="nav-item active">
								<a class="nav-link" href="#"> Portfolio </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> Video Gallery </a>
							</li>
							<li class="nav-item dropdown">
						         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         							About
       							 </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="#">Overview</a>
						          <a class="dropdown-item" href="#">Capabilities</a>
						          <a class="dropdown-item" href="#">Team</a>
						          <a class="dropdown-item" href="#">What's New</a>
						        </div>
						    </li>					
							<li class="nav-item">
								<a class="nav-link" href="#"> Blog </a>
							</li>
							<li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Careers 
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="#">Work at designdesk</a>
						          <a class="dropdown-item" href="#">life at designdesk</a>
						        </div>
						    </li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo get_site_url(); ?>/contact-us"> Contact </a>
							</li>
						</ul>
						    

					</div>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content" onclick="closeNav()">
