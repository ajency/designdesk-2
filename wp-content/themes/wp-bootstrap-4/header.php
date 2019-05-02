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

	<?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg">

				<div id="logo">
					<a href="#" class="image-logo">
						<img src="wp-content/themes/wp-bootstrap-4/assets/images/design_desk_logo_white_new.png" class="alt-logo" alt="">
					</a>
				</div>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu-wrap" aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="nav navbar-nav ml-auto navbar-right">
						<li class="nav-item active">
							<a class="nav-link" href="#"> Home </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"> Expertise </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"> Gallery </a>
						</li>					
						<li class="nav-item">
							<a class="nav-link" href="#"> Contact </a>
						</li>
					</ul>
				</div>
			</nav> 
		</div>
	</header>

	

	<div id="content" class="site-content">
