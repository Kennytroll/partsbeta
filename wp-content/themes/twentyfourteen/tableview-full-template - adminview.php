<?php
/**
	Template Name: tableview adminview
*/
	
?>
<html>
<head>



<link rel='stylesheet' id='jquery-dataTables-css'  href='<?php echo  plugins_url(); ?>/wp-filebase/extras/jquery/dataTables/css/jquery.dataTables.css?ver=3.1.01' type='text/css' media='all' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
       <style>
#postdeets, #postnumber{
   float:left;
   margin-right: 6px;
}
table#bundaroo {
	/*width: 85%;
	margin-left:20px;*/
	float:left;
	font-size: 14px;
	/*width: 99%;*/
}

#bundhandler{
	/*width: 96%;*/
}
.yes {
	background: rgba(12, 244, 21, 0.29) url("images/yes.png") no-repeat center center;
	/*font-size: 0px;*/
}

.no {
	background: rgba(244, 12, 21, 0.29) url("images/no.png") no-repeat center center;
}

.catfished {
	font-size:11px;
	font-weight: 900;
}

#postdeets {
	margin-top:20px;
	float:left;
}

#togglecols {
	margin-top: 14px;
float: left;
width: 98%;
font-size: 13px;
color: #000;
margin-bottom: 8px;
}
                
        </style>



	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			
<div id="buttbar" class="buttbar" style="color:#3F3"><center><ul class="navlinky" id="navlinky">
	<li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a></li><li class="seppy" id="seppy"> </li>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>parts-list/">Parts List</a> </li> <li class="seppy" id="seppy"> </li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/">Catalog</a> </li> <li class="seppy" id="seppy"> </li>
	<li><?php echo do_shortcode("[wp_colorbox_media url='#cont' type='inline' hyperlink='Request Drawing']");?> </li><li class="seppy" id="seppy"> </li>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>addnew/">Add New</a></li><li class="seppy" id="seppy"> </li><li><a href="http://drawings/admin/">Admin</a></li>
	</ul> </center> </div>
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

<div id="spacer" style="float:left; width:100%; clear:both; height:60px;"> </div>
<div style="width:80%;padding-left:20px"><center>
<table class="table table-bordered">
		<thead><tr><th class="small text-muted" colspan="2" ><center>Post and Check Utilities</center></th></tr></thead>
	<thead><tr><th>Name</th><th>Description</th></tr></thead>

	<tbody>
		<tr><td><a href='http://drawings/addnew/'>Add New</a></td><td>Posting tools: Post creator, Drawing uploader, Active Rev Changer tool</td></tr>
		<tr><td><a href='http://drawings/statuscheck/'>Status Check</a></td><td>Live updating list of active WP posts and drawing files in filebase directory</td></tr>
		<tr><td><a href='http://k208-jr-web3/datatabletest/examples/advanced/multiItem.html'>Partslist with Editor</a></td><td>Editable Datatables parts list stored in mySQL database on KUSA (temporary URL) </td></tr>
		
		</table>
		
<table class="table table-bordered" style="margin-top:69px;">
			<thead><tr><th class="small text-muted" colspan="2"><center>Back-end Plugin Admin Panels</center></th></tr></thead>
			<thead><tr><th class="small">Name</th><th>Description</th></tr></thead>
		<tr><td><a href="http://kusa-bu/phpmyadmin/">phpMyAdmin</a></td><td>MySQL management page for data backups and raw entry</td></tr>
		<tr><td><a href="http://kusa-bu/wordpress/wp-admin/admin.php?page=wpfilebase_manage">Filebase</a></td><td>Folder syncing and Category view management</td></tr>
		<tr><td><a href="http://kusa-bu/wordpress/wp-admin/admin.php?page=Products_Spider_Catalog">Spider Catalog</a></td><td>Data managment page for <a href='http://drawings/catalog/'>Catalog Page</a></td></tr>
		<tr><td><a href="http://kusa-bu/wordpress/wp-admin/edit.php">WP Admin Post Page</a></td><td>Default Wp Admin page for editing Posts</td></tr>
</center>
</div>

<script type='text/javascript' src='<?php echo  plugins_url(); ?>/wp-filebase/extras/jquery/dataTables/js/jquery.dataTables.min.js'></script>

<script type="text/javascript">
    

</script>

<script type="text/javascript">
jQuery(document).ready(function() { 


/*jQuery('div#posts').hide();*/
	var postnumbs = jQuery("ul#postlist").children().length;
	
	jQuery("div#postnumber").text(postnumbs);

	
    
jQuery('a.togglebutty').bind('click', function(e) {
	
	e.preventDefault();

	var column = tabledog.column( jQuery(this).attr('datacol') );

	if( column.visible()) {
		column.visible( ! column.visible() );
	}else { column.visible(  true );};

   
});  // close toggler if handler 


	
/*	jQuery('span#clickshow').click(function() {

                     jQuery('div#posts').show();
	});*/
	

    });  // closing document ready function


</script>
<?php wp_footer(); ?>
</body>
</html>