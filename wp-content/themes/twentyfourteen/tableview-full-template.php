<?php
/**
	Template Name: tableview Full
*/
	
?>
<html>
<head>



<link rel='stylesheet' id='jquery-dataTables-css'  href='<?php echo  plugins_url(); ?>/wp-filebase/extras/jquery/dataTables/css/jquery.dataTables.css?ver=3.1.01' type='text/css' media='all' />

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
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>addnew/">Add New Part</a></li>
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
<div id="uploadform" style="float:left;"><form method="post" action="" enctype="multipart/form-data"><input type="file" name="newsheet[]"><input type="submit" name="submit2"></form>Choose a new downloaded Google docs .html file</div>
<?php
// if isset post value for uploaded ish $_POST[newsheet] use it, else default test.html file

// need to drop/rename uploaded file to a directory (in twentyfourteen maybe) and get load url destination from there


if (esc_url( home_url( '/' ) )=="http://localhost/") {
	$target_dir = 'C:\\xampp\htdocs\wordpress2\wp-content\themes\twentyfourteen\\spreadsheets\\';
} elseif (esc_url( home_url( '/' ) )=="http://drawings/")  {
	/*echo "kusa server";*/
	$target_dir = 'D:\\Prorgam Files\xampp\htdocs\wordpress\themes\twentyfourteen\spreadsheets\\';
}else {
	echo "dir handler broken";
	
}


foreach ($_FILES["newsheet"]["error"] as $key => $error) {
   
     $tmpy_name = $_FILES["newsheet"]["tmp_name"][$key];  //dir location of orig tmp file
        $nameyy = $_FILES["newsheet"]["name"][$key];  // root file name of upload
    $upFileError = $_FILES["newsheet"]["error"][$key];
}
$upFileNewName = $nameyy . date("m.d.y.g.i"). '.html';

if (move_uploaded_file($tmpy_name, $target_dir . $upFileNewName)) {
        echo "<div style='font-size:12px;padding:10px;line-height:15px;'>The file ". $dirnado . $upFileNewName . " has been uploaded." . "</div><br />";
        } else {
        echo "Using Original Spreadsheet - LOG_v06 - re-sort test (as of 4-3-2016).";
    }



if (isset($tmpy_name)) {
	$fullsheetloc = get_template_directory_uri() . "/spreadsheets//" . $upFileNewName;
} else {
	$fullsheetloc = get_template_directory_uri() ."/test.html";
}                                                  //echo out theme directory ?
 

?>
<div id='statuser'> <?php if (isset($tmpy_name)) {
	echo 'Using Custom spreadsheet File';
}  ?> <div id='sheetloccy' style="opacity:0"><?php echo $fullsheetloc; ?></div></div>



<div id="spacer" style="float:left; width:100%; clear:both; height:30px;"> </div>

<table id="importzone">
	
</table>	


<?php 
// paste list seprate them by comma or something at the end of each row by typing in manually, use that as the split
//$output = listelements();
// $array = explode("<li>", $output);

//First element will be empty, so remove it
  //unset($array[0]);

// Now remove "</li>" at end of input
  //array_walk($array, create_function('&$val', '$val = str_replace("</li>", "", $val)'));

// $array should now contain your elements
?>
<script type='text/javascript' src='<?php echo  plugins_url(); ?>/wp-filebase/extras/jquery/dataTables/js/jquery.dataTables.min.js'></script>

<script type="text/javascript">
         jQuery(function(){
         	var stuffloader = jQuery('#sheetloccy').text();
         	stuffloader = 'http://drawings/wordpress/wp-content/themes/twentyfourteen/test.html';
         	/*alert(stuffloader);*/
         	
      jQuery("#importzone").load(stuffloader , function() {
 
}); 
      
    });

 setTimeout(function(){
 	jQuery('.column-headers-background').remove();
	jQuery('.row-headers-background').remove();
	jQuery('tbody tr:nth-of-type(1)').remove();
	jQuery('tbody tr:nth-of-type(1)').remove();
	jQuery('table.waffle > thead > tr').remove();
	jQuery( 'table.waffle tbody tr:nth-of-type(1)' ).appendTo( jQuery('table.waffle thead') );
	jQuery('table.waffle thead tr').clone().insertAfter(jQuery('table.waffle thead')).wrap('<tfoot></tfoot>');
 	jQuery('th.freezebar-cell').parent().remove();
 	jQuery('td.freezebar-cell').remove();
 	jQuery('td.s25').remove();
 	jQuery('td.s15').remove();
 	jQuery('td.s17').remove();
 	jQuery('td.s27').remove();
 	jQuery('.softmerge-inner').addClass('overfidge');
 	jQuery('table.waffle tbody tr td:nth-of-type(1):empty').parent().remove();
 	jQuery('table.waffle tbody tr td:nth-of-type(1)').each(function(index, el) {
 		var namecontent = jQuery(this).text();
 		 jQuery(this).wrapInner('<a href="/' + namecontent +'" class="remove-thing"></a>');
 	});
 	



}, 2000);


      setTimeout(function(){jQuery('table.waffle').DataTable(
           {

           
             "columnDefs": [
                                                  
                   {
                       "targets": [0],
                       "visible" : true
                   
                   },
                    {
                       "targets": [0],
                       "visible" : true
                   
                   }
                             
                        ]
           }
           
           
           
           );}, 3000);





// look in tr, if first td has empty content then remove tr 


 //remove softmerge class and sub div ish in collapsed td in thead / append from softmerge-inner to base td, delete div after 



/* setTimeout(function(){jQuery('#wutwut').DataTable(
           {
             "columnDefs": [
                                                  
                   {
                       "targets": [0],
                       "visible" : true
                   
                   },
                    {
                       "targets": [0],
                       "visible" : true
                   
                   }
                             
                        ]
           }
           
           
           
           );}, 3000);
*/

// try moving meta and style attachment ish outside of importzone table area, also try deleting more columns and rows with frozen whatever

</script>

<script type="text/javascript">
jQuery(document).ready(function() { 


	/*alert('wut');*/

	         



	/*jQuery('div#posts').hide();*/
	var postnumbs = jQuery("ul#postlist").children().length;
	
	jQuery("div#postnumber").text(postnumbs);

	
    
jQuery('a.togglebutty').bind('click', function(e) {
	/*alert('wtf');*/
	e.preventDefault();

	var column = tabledog.column( jQuery(this).attr('datacol') );

	if( column.visible()) {
		column.visible( ! column.visible() );
	}else { column.visible(  true );};

	/*column.visible( ! column.visible() );*/
   
});  // close toggler if handler 



var togcheck = jQuery('.togcheck');



       // get $(this)  data-col number to know which column to turn off



jQuery(".togcheck").click(function() {
	var column = tabledog.column( jQuery(this).attr('datacol') );
	 if(jQuery(this).prop('checked')) {
            // checkbox is checked -> do something
            /*alert('checkoslavakia');*/
            column.visible(  true );
        } else {
            // checkbox is not checked -> do something different
            /*alert('no feck check');*/
            column.visible(  false );
        }
});








/*jQuery('#bundaroo_filter').append("wuttttttttttttttttttt");*/

/*alert(jQuery('li.togglebutty').length);*/

	
/*	jQuery('span#clickshow').click(function() {

                     jQuery('div#posts').show();
	});*/
	



    });  // closing document ready function





</script>
<?php wp_footer(); ?>
</body>
</html>