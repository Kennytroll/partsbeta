<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php twentyfourteen_post_thumbnail(); ?>
	<div class='parttablebase'>
	<header class="entry-header">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<div class="entry-meta">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
		</div>
		<?php
			endif;

			if ( is_single() ) :
				the_title( '<h1 class="entry-title imagethree">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>



		<!-- <div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() )
					twentyfourteen_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
			<?php
				endif;

				edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
			?>
		</div> --><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
<script type="text/javascript" src="<?php echo get_template_directory_uri () ?>/js/clone-form-td.js"></script> 
		<?php

/*		initial site location settings for filebase and post display*/
		$partPostCurrently =  get_the_title();
	//customer assembly file finding to determine custom company name if given
		$CustAssmLoc = "/download/CustomerAssemblies/";
		$littlezerg= "/download/";
               
       
		// determine if on local test ish or kusa production, set root urlish 
		/*$sitehome = "http://kusa-bu/";*/
		$sitehome = site_url();
	/*	$sitehome2 = site_url();
		echo $sitehome2;*/
		if ($sitehome === "http://localhost/wordpress2") {$sitehome = "http://localhost/"; $target_dir_filebase = 'C:\\xampp\htdocs\wordpress2\wp-content\uploads\\filebase\\';};
		if ($sitehome === "http://kusa-bu/wordpress") {$sitehome = "http://drawings/"; $target_dir_filebase = "D:\\Prorgam Files\\xampp\htdocs\wordpress\wp-content\uploads\\filebase\\";};


		$CurrentPostAssmTextFile = $sitehome.$CustAssmLoc.$partPostCurrently.".txt";  //find custasm file
		/*echo $CurrentPostAssmTextFile. "<br />";*/
 		$CustAssmData= file_get_contents($CurrentPostAssmTextFile);  // assign contents of file, if any, to variable
		/*echo $CustAssmData;*/


		if (strlen($CustAssmData) >= 4 ) {$company = $CustAssmData;}  // if data in text file use that for company name
		else {$company = "Kinetrol";}   // else use Kinetrol for company name as fallback

		/*echo $company;*/

		
	//rev text locator, assign newest active rev of current post to variable for getting correct filebase files etc
		$revsauce="";
		$revTextLoc="";
		$company2= urlencode($company);
		$revTextLoc= "{$sitehome}/download/{$company2}/{$partPostCurrently}/{$partPostCurrently}-rev.txt";
		$revsauce= file_get_contents($revTextLoc,NULL,NULL,-4,64);
		/*echo $revTextLoc;
		echo $revsauce;*/

		$filesfolder = "1A";

		if (strlen($revsauce)== 2){$filesfolder=$revsauce; }  // assign rev text content to revsauce variable, if n/a use 1A
			 else {$filesfolder="1A";}
		//echo $filesfolder;
			/* echo $revsauce;
			 echo $revTextLoc;*/
		$subpartsfolder = $filesfolder." Assembly";

	// image loader function
		function imageTest ($partTextFileName, $company2, $revster, $imgnum, $filebaseloc, $sitehome2 ) {
			if (file_exists($filebaseloc . "{$company2}\\$partTextFileName\Images\\$partTextFileName-$revster-pic$imgnum.jpg")) {
				return "$sitehome2/download/$company2/$partTextFileName/Images/$partTextFileName-$revster-pic$imgnum.jpg";
			} elseif (file_exists($filebaseloc . "{$company2}\\$partTextFileName\Images\\$partTextFileName-pic$imgnum.jpg")) {
				return "$sitehome2/download/$company2/$partTextFileName/Images/$partTextFileName-pic$imgnum.jpg";
			} else {  // return default blank placeholder images if no match using rev or no rev
					return "$sitehome2/download/Kinetrol/Images/placeholder-pic$imgnum.jpg";
			}		}

	//start of images container inside of post content html ?>
			<center style="padding-bottom:2px;"><div class="imagethree2" id="imagesbar">
		<a class="wp-colorbox-image cboxElement" href="<?php echo imageTest($partPostCurrently, $company, $filesfolder, 1, $target_dir_filebase, $sitehome);?>">
			<img src="<?php echo imageTest($partPostCurrently, $company, $filesfolder, 1, $target_dir_filebase, $sitehome);?>" width="30%" height="76" class="alignnone"></a> 
		<a class="wp-colorbox-image cboxElement" href="<?php echo imageTest($partPostCurrently, $company, $filesfolder, 2, $target_dir_filebase, $sitehome);?>">
			<img src="<?php echo imageTest($partPostCurrently, $company, $filesfolder, 2, $target_dir_filebase, $sitehome);?>" width="30%" height="76" class="alignnone"></a> 
		<a class="wp-colorbox-image cboxElement" href="<?php echo imageTest($partPostCurrently, $company, $filesfolder, 3, $target_dir_filebase, $sitehome);?>">
			<img src="<?php echo imageTest($partPostCurrently, $company, $filesfolder, 3, $target_dir_filebase, $sitehome);;?>" width="30%" height="76" class="alignnone"></a></div></center>
			<br /><center> 	 
	<?php

	 // checker for if a filebase ready folder for chosen part number, to only display filebase table if stuff to show 
		$baser1= wp_upload_dir();
		$filebaseDir = $baser1['basedir'] . "/Filebase/";
		/*$namecheck2 =  "C:\\xampp\htdocs\wordpress2\wp-content\uploads\\filebase\KINETROL\\077-100" ;*/
		$baser2 = $filebaseDir . "/" . $company . "/" . $partPostCurrently . "/" . $filesfolder ; // use custom rev ish from rev text? $filesfolder var has rev
		$filename = $baser2;
		$catzilla = get_the_category();

	  // to remove images bar if finding no images match, fix logic finder, discontinued jquery to footer maybe
	  		 $baserimg = $filebaseDir . "/" . $company . "/" . $partPostCurrently . "/" . "Images/" . $partPostCurrently . "-pic1.jpg";
	  		/*echo $baserimg;*/
			/*if (!file_exists($baserimg)) {  
			echo '<script type="text/javascript">';
		    echo "var listy = document.getElementById('imagesbar');";
		    echo 'var fishy = "No images to display";';
			echo 'listy.innerHTML = fishy;';
			echo 'listy.style.display = "none"';
			echo '</script>';
				}*/

	// load filebase table(s)	

	// build assoc array with all rev folders found by file_exists, echo div, id with each to hide in jquery  
		$revs_array = [];
		if (file_exists($filename)) {$revs_array[0]=$filesfolder; }
	//array with all rev'ish folders contained in the chosen parts filebase dir 
		$folders1 = array_diff(scandir($filebaseDir . "/" . $company . "/" . $partPostCurrently . "/", 1), array('..', '.','Thumbs.db','Images',"$partPostCurrently-rev.txt")); 


	if (file_exists($filename)) { // filebase load for part number of post if matches 
		   /* echo "The file $filename exists";*/
		   echo '<div class="imagethree" style="margin-top:-5px;">';
		   echo'<div class="revdropdown">Rev <select id="revchange" name="revchange">';
		   foreach ($folders1 as $rev) {
			echo "<option value=$rev>$rev</option>";
			};
		   echo '<option value=all>All</option>';
		   echo '</select></div>'; 

		    // pass variable to footer to be hidden by jquery later, to give footer logic help choosing active rev first 
		   echo "<div id=activeRevPassing>$filesfolder</div>"; 


		   echo '<div class="labely buttbar2">Drawing Files</div>';
		   /*print_r($folders1);*/
		      /* echo "<div id =$filesfolder>" .  do_shortcode("[wpfilebase tag=list path='$company/$partPostCurrently/$filesfolder/' tpl=main_dls pagenav=1 sort=file_size /]") . "</div>";
		       echo do_shortcode("[wpfilebase tag=list path='$company/$partPostCurrently/1A/' tpl=main_dls pagenav=1 sort=file_size /]");*/
		  echo'<div id="filebaseholder">';
		foreach ($folders1 as $rev) {
			echo "<div id =$rev>" .  do_shortcode("[wpfilebase tag=list path='$company/$partPostCurrently/$rev/' tpl=main_dls pagenav=1 sort=file_size /]") . "</div>";
			};
		echo'</div>';
		    echo "<center><div class='linkinpark' style='margin-left:100px;'>"; echo do_shortcode("[wp_colorbox_media url='#SUBASSM' type='vimeo' hyperlink='Subassm files']"); echo '</div>';
		    echo "<div class='linkinpark'>"; echo do_shortcode("[wp_colorbox_media url='#3DView' type='inline' hyperlink='3D Part View']"); echo '</div>';
		    echo "<div class='linkinpark'>"; echo do_shortcode("[wp_colorbox_media url='#PDFView' type='inline' hyperlink='Schematic PDF' class='colorish']"); echo '</div></div></div></center>';
		}

		//handlers for post creation and other addnews, only loading if viewing post category utility
 		elseif ($catzilla[0] ->name == "Utility") {
 			/*echo do_shortcode("[capture-form-to-post]");*/  // old post creator plugin, maybe replaced by custom which allows multiple
 		
 		//handlers for form 1 - new post creation 
 		if (isset($_POST['submit_button'])) { //only load code if form submitted

 			/*echo "post submitted";*/
 		   $titles = isset($_POST['titles']) ? $_POST['titles'] : "";
     	   $categories = isset($_POST['categories']) ? $_POST['categories'] : "";
    	   $content = isset($_POST['content']) ? $_POST['content'] : "";

 	       /*if ($categories === "")  $categories = 'Kinetrol' ;*/

       		
            /*var_dump($_POST['categories']);*/


 	       //create array for WP posting

	          $posts_array = array();

	          for ($i = 0; $i < count($titles); $i++) {
	              $posts_array[$i]['title']= $titles[$i];

	             if ($categories[$i] == NULL) {
	             $posts_array[$i]['category'] = [24];} 
	             else { $posts_array[$i]['category'] = $categories[$i];} ; 


	             // set all categories if something set 

	               /*if ($categories[$i] === "") {$posts_array[$i]['category'] = [24];}  
	               else { $posts_array[$i]['category'] =  $categories[$i]; };


*/						                
	              
	              $posts_array[$i]['content'] = $content[$i];
	          }

	         /* echo "posts_array: " ; print_r($posts_array);*/
	        /*  echo "cateories array: "; print_r($categories);*/


	       //create posts loop and custassm file
			   for ($i = 0; $i < count($posts_array); $i++) {

				global $user_ID;
				$new_post = array(
				'post_title' => $posts_array[$i]['title'],
				'post_content' =>  $posts_array[$i]['content'],
				'post_status' => 'publish',
				'post_date' => date('Y-m-d H:i:s'),
				'post_author' => $user_ID,
				'post_type' => 'post',
				'post_category' => $posts_array[$i]['category']
				);

				//needs default cat 24, kinetrol. if not for custasm content then for wp cat

				// handlers for customer assembly text file creation, with company name inside text to determine folder dir 
					//post name set as text file name
				$partnumber = $new_post['post_title'];	
				$partTextFileName = $partnumber . ".txt";  //set output customer assm name and filetype
					//set contents of text file which has cateogory if matched in array
				$custAssmText = "";
				if (in_array(24, $new_post['post_category'] )) {
   				 $custAssmText = 'Kinetrol'; } 
   				elseif (in_array(27, $new_post['post_category'] )) {
   				 $custAssmText = 'Kenneth Elliot'; }
   				
		  
					//set directory to save text file   				 
				$uploaddir = wp_upload_dir();
				$customerAssmDir = $uploaddir['basedir'] . "/Filebase/CustomerAssemblies/"; 

				$customerAssmFullNamePath =  $customerAssmDir . $partTextFileName;  // set name and path for customer assm file to create
				$homefry = esc_url( home_url( '/' ) ); // to make a clickable link to go to the created post from infopane

				// create cust assm, display status message 
				file_put_contents($customerAssmFullNamePath, $custAssmText);
				echo '<div id="infopane">';
				echo "Created ". $customerAssmFullNamePath . "<br />" ;  // append file:///  and ish to href to make text file readable by clicking in browser
				echo " Created Post: <a href='". $homefry . $partnumber . "' target='_blank'>" . $partnumber . "</a><br />";
				/*echo "Press Refresh Database button on left to update changes";*/
				echo '</div>';


			

				

				// create post using made array
					$post_id = wp_insert_post($new_post);  


					/*print_r($new_post);*/

				}  // close post creator looper

				/*print_r($categories);*/

 	   } // close form 1 handler 




		//file upload form post handler 
		//grab post data from form 
			$company2 = isset($_POST['compname']) ? $_POST['compname'] : "";
			$partname = isset($_POST['post_title']) ? $_POST['post_title'] : "";
			$revForNewUploads = isset($_POST['revvy']) ? $_POST['revvy'] : "";

			print_r($_POST['uploads']);



		// make rev letter folder name and company name uppercase for pretty pictures
			$revForNewUploads = strtoupper($revForNewUploads);
			$company2 = strtoupper($company2);

		// determine upload directory 
				if (esc_url( home_url( '/' ) )=="http://localhost/") {
					$target_dir = 'C:\\xampp\htdocs\wordpress2\wp-content\uploads\\filebase\\';
				} elseif (esc_url( home_url( '/' ) )=="http://drawings/")  {
					/*echo "kusa server";*/
					$target_dir = 'D:\\Prorgam Files\xampp\htdocs\wordpress\wp-content\uploads\\filebase\\';
				}else {
					echo "dir handler broken"; }

		//set upload dir
			$dirnado = $target_dir . $company2 . '\\'. $partname . '\\' . "$revForNewUploads\\"; // dir to put new uploaded drawings
			$RevDoc = $target_dir . $company2 . '\\'. $partname . '\\' . $partname . "-rev.txt"; // what to name rev text
			$RevLoc = $target_dir . $company2 . '\\'. $partname . '\\' ;  // where to put rev text 
			/*echo 'dirnado= ' . $dirnado . '<br />';*/

		//check if upload folder exists, create if not 
			$needdir = 0;
			if (is_dir($dirnado)) {
			   /* echo "yes dir exists";*/  //skips elseif step if is dir already
			} elseif (isset($_FILES["uploads"]["name"])) { /*echo 'no dir'; */ $needdir = 1; }

			if ($needdir === 1) {
			 mkdir($dirnado, 0777, true);  // make confirmation box in javascript to ask if want to create maybe
			}

		//initial settings for file upload logic 
			$uploadOk = 1;

		//loop to set each of the uploaded box to values for processing/checking
			foreach ($_FILES["uploads"]["error"] as $key => $error) {
			    if ($error == UPLOAD_ERR_OK) {
			     $tmpy_name = $_FILES["uploads"]["tmp_name"][$key];  //dir location of orig tmp file
			        $nameyy = $_FILES["uploads"]["name"][$key];  // root file name of upload
			    $upFileError = $_FILES["uploads"]["error"][$key];
			   /*  echo 'tmp-name: ' . $tmpy_name . '<br />';
			     echo 'namey: ' . $nameyy . '<br />';
			*/
				
		//determine file extension of upload 
			$file_extension2 = explode('.', $nameyy);  // split string into array split by . for ext
			$file_extension2 = end($file_extension2);  // end gets last array always 
			$file_extension2 = strtolower($file_extension2);  // convert to lower case 
			/*echo $file_extension2;*/

		//set allowed file types
			$permitted = array('dwg','pdf','slddrw','sldprt','step','jpg');

		//check if uploaded file type is allowed
			if(in_array($file_extension2, $permitted)) {
			        if($upFileError === 0) {
			        	// rename based on form inputs 
			            $upFileNewName =  $partname . '-' . $revForNewUploads . "." . $file_extension2; 
			            $yesPLS = 1;
         		 /*  echo "yes! " . $upFileNewName . '<br />';*/
            		 } //close rename if statement
           		  else {
               		 $uploadOk = 0;}
			}; //close permitted file type check




		// Check file size (50mb max)
			if ($_FILES["uploads"]["size"][$key] > 50000000) {
			    echo "Sorry, file " . $_FILES["uploads"]["name"][$key] . "is too large.";
			    $uploadOk = 0;
				}


		// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
			} else {
		    if (move_uploaded_file($tmpy_name, $dirnado . $upFileNewName)) {
		        echo "<div style='font-size:12px;margin-top:-40px;padding:10px;line-height:15px;'>The file ". $dirnado . $upFileNewName . " has been uploaded." . "</div><br />";
		        } else {
		        echo "Sorry, there was an error uploading your file.";}
			   }// close if upload_err_ok upload thread
		}; };  // close foreach looper for file upload

		// if upload form checkbox for make post active is checked, save a -rev.txt file
		if (isset($_POST['makeactive'])) {
		file_put_contents($RevDoc, $revForNewUploads);   
		echo "<div style='font-size:12px;margin-top:-30px;padding:10px;line-height:15px;'>Active rev set: {$revForNewUploads}. Refresh Database to see changes.</div> <br />";
		}

		//active rev changer form
			if (isset($_POST['submit3'])) {
       		  if (file_exists ($RevLoc)) {  // check if folder exists before writing
		       	$newRevPls = $_POST['newRevPls'];
				file_put_contents($RevDoc, $newRevPls ); 
				echo "<div style='font-size:12px;margin-top:-30px;padding:10px;line-height:15px;'>Active rev set for {$partname}: {$newRevPls}</div> <br />";
		        }
		       else {
		       	echo "<div style='font-size:12px;margin-top:-65px;padding:27px;line-height:15px;'>Folder not found at {$RevLoc}, please re-enter part information and try again.</div>";
		       }
			}


		}  // close utility post handler 

 else { // if no match to file exists logic above for current post 
    echo "No drawings uploaded to $partPostCurrently/$filesfolder folder on filebase yet!"; }

// $texty  =  company name from form
// $partnumber  = drawing number from form

/*$fileish = isset($_FILES['fileToUpload']) ? $_FILES['fileToUpload'] : "";*/

// file details processing
/*$upFileName = $fileish['name'];
$upFileTmpLoc = $fileish['tmp_name'];
$upFileSize = $fileish['size'];
$upFileError = $fileish['error'];*/

	?>
	<div style="display: none;"> <?php // subassembly part list and 3dviewer lightbox divs, hidden until click button ?>
		<div id="SUBASSM" style="padding: 15px; background: #fff;width:640px;max-width:640px"> 
		<h5>Assembly Part Files</h5><?php echo do_shortcode("[wpfilebase tag=browser path='$company/$partPostCurrently/$filesfolder/$subpartsfolder' /]");?>
		<br /></div>
		<div id="3DView" style="padding: 15px; background: #fff;"> <center><div style="margin:0px auto;"><?php echo do_shortcode("[kento_3dmv width='1000' height='600' source='../download/KINETROL/$partPostCurrently/Images/$partPostCurrently-$filesfolder.obj' /]");?> </div>
		</div>
		<div id="PDFView" style="padding: 5px; background: #fff;"><center><div style="margin:0px auto;"><?php echo do_shortcode("[pdfviewer width='100%' height='720px' beta='false']http://kusa-bu/download/$company2/$partPostCurrently/$filesfolder/$partPostCurrently-$filesfolder.PDF[/pdfviewer]");?></div>
		</div>
{$sitehome}
http://kusa-bu/
	<br /><br />

		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
		<?php wp_link_pages( array(
	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
	) );
?>
	</div><!-- .entry-content -->
	<?php endif; ?>
	<?php

   session_start();
   $_SESSION['activerev'] = $filesfolder;

?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->




