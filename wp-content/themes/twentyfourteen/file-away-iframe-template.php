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

			
<div id="buttbar" class="buttbar" style="color:#3F3"><center><ul class="navlinky" id="navlinky">
	<li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a></li><li class="seppy" id="seppy"> </li>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>parts-list/">Parts List</a> </li> <li class="seppy" id="seppy"> </li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/">Catalog</a> </li> <li class="seppy" id="seppy"> </li>
	<li><?php echo do_shortcode("[wp_colorbox_media url='#cont' type='inline' hyperlink='Request Drawing']");?> </li><li class="seppy" id="seppy"> </li>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>addnew/">Add New Part</a></li>

		
	test-post-generator
</ul> </center> </div>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div></div>
		<div style="display: none;">
<div id="cont" style="padding: 15px; background: #FFF;">
<FORM Action="<?php echo esc_url( home_url( '/' ) ); ?>mailer.php" METHOD="POST" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="imagethree"><center><strong>Drawing Request</strong></center><hr>
	
	Requested by (email address): <INPUT id="email" name="email" value="" style="background-color:#FFEDC5;"><br />
	Part Requested: <INPUT id="drawing" name="drawing" value="" style="background-color:#FFEDC5;margin-top:10px;">
	<Br><Br>Comments:&#xa0;
	<TEXTAREA id="comments" name="comments" value="" style="padding-bottom:220px;background-color:#FFEDC5;" >
	</TEXTAREA>
	<BR>
	<INPUT type="submit" value="Drawing Request (Email)"> 
</FORM> </div></div>

<div id="adder" style="padding: 15px; background: #FFF;">
	<?php echo do_shortcode("[capture-form-to-post]"); ?>
<FORM Action="<?php echo esc_url( home_url( '/' ) ); ?>genny.php" METHOD="POST" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="imagethree"><center><strong>Part Page Generator</strong></center><hr>
	
	Part Number (Do not include Rev): <INPUT id="post_title" name="post_title" value="" style="background-color:#FFEDC5;"><br />
	Company name (Leave blank for Kinetrol): <INPUT id="compname" name="compname" value="" style="background-color:#FFEDC5;margin-top:10px;">
	<Br><Br>Comments:&#xa0;
	<TEXTAREA id="post_content" name="post_content" value="" style="padding-bottom:220px;background-color:#FFEDC5;" >
	</TEXTAREA>
	<BR>
	<INPUT type="submit" value="Add Page"> 
</FORM> </div>
</div>


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