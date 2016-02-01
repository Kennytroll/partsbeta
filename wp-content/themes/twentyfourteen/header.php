<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<div id="buttbar" class="buttbar" style="color:#333"><center><ul class="navlinky" id="navlinky">    <!-- list of nav bar links -->
	<li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a></li><li class="seppy" id="seppy"> </li>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>parts-list/">Parts List</a> </li> <li class="seppy" id="seppy"> </li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/">Catalog</a> </li> <li class="seppy" id="seppy"> </li>
	<li><?php echo do_shortcode("[wp_colorbox_media url='#cont' type='inline' hyperlink='Request Drawing']");?> </li> <li class="seppy" id="seppy"> </li>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>addnew/">Add New Part</a> </li>
</ul></center>
			<!-- <div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div> -->

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
		<div style="display: none;">
<div id="cont" style="padding: 15px; background: #FFF;">
<FORM Action="http://localhost/wordpress/mailer.php" METHOD="POST" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="imagethree"><center><strong>Drawing Request</strong></center><hr>
	
	Requested by (email address): <INPUT id="email" name="email" value="" style="background-color:#FFEDC5;"><br />
	Part Requested: <INPUT id="drawing" name="drawing" value="" style="background-color:#FFEDC5;margin-top:10px;">
	<Br><Br>Comments:&#xa0;
	<TEXTAREA id="comments" name="comments" value="" style="padding-bottom:220px;background-color:#FFEDC5;" >
	</TEXTAREA>
	<BR>
	<INPUT type="submit" value="Drawing Request (Email)"> 
</FORM> </div>

	<!-- 	<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div> -->
	</header><!-- #masthead -->
	<div id="main" class="site-main">
