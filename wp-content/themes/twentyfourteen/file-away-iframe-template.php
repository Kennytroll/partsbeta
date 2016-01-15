<?php
/**
	Template Name: File Away iFrame
*/
	
?>
<html>
<head>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			
<div id="buttbar" class="buttbar" style="color:#333"><center><ul class="navlinky" id="navlinky">
	<li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a></li><li class="seppy" id="seppy"> </li>
	<li><a href="parts-list/">Parts List</a> </li> <li class="seppy" id="seppy"> </li>
		<li><a href="catalog/">Catalog</a> </li> <li class="seppy" id="seppy"> </li>
	<li><?php echo do_shortcode("[wp_colorbox_media url='#cont' type='inline' hyperlink='Request Drawing']");?> </li></ul> </center> </div>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div></div>
		
		</header><!-- #masthead -->
	<div id="main" class="site-main">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php if(is_page_template('file-away-iframe-template.php')) show_admin_bar(true); ?><?php wp_head(); ?>
<style>body {display:none;}</style>
<script>
jQuery(document).ready(function($){
	$("body").fadeIn(500);
	$drawer = $('tr.ssfa-drawers td[id^=folder-ssfa-dir-] a, tr.ssfa-drawers td[id^=name-ssfa-dir-] a');
	$drawer.on('click', function(){
		$("body").fadeOut(500);
	});
	$crumb = $('div[class^="ssfa-crumbs"] a');
	$crumb.on('click', function(){
		$("body").fadeOut(500);
	});
});
</script>
</head>
<body>

<?php while(have_posts()): the_post(); ?>
	<div style="background-color:#333;clear:both; float:right; width:140px; margin-right:60px;padding:5px;display:none;">testi<br /><?php echo do_shortcode("[wp_colorbox_media url='#charted' type='inline' hyperlink='Edit Table']");?></div>
<div id="page-content"><?php the_content(); endwhile; ?></div>
<div style="display:none;">
	<div id="charted" style="width:100%;"><iframe src="http://k208-jr-web3/wordpress/wp-admin/admin.php?page=wpdatatables-editor&table_id=2" style="width:100%;height:94%;"></iframe> </div></div>
<?php wp_footer(); ?>
</body>
</html>