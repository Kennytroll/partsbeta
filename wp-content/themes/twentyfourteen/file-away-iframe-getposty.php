<?php
/**
	Template Name: File Away getposty
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

 <?php
   if( $_GET["part"] || $_GET["agey"] ) {
     $party2 = $_GET["part"];
     $urlly = home_url();
     echo do_shortcode("[kento_3dmv width='1000' height='600' source='../download/Kinetrol/$party2/Images/$party2-1a.obj' /]");
      exit();
   }
?> 

<form action = "<?php $_PHP_SELF ?>" method = "GET">
Part number: <input type = "text" name = "part" />
 <input type = "submit" />
      </form>

<?php while(have_posts()): the_post(); ?>
	
<div id="page-content" style=""><?php the_content(); endwhile; ?></div>
<?php wp_footer(); ?>
</body>
</html>