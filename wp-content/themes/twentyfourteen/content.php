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

	<header class="entry-header">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<div class="entry-meta">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
		</div>
		<?php
			endif;

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
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
		if ($sitehome === "http://localhost/wordpress2") {$sitehome = "http://localhost/";};
		if ($sitehome === "http://kusa-bu/wordpress") {$sitehome = "http://drawings/";};


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


//create name handler variable / if rev doc exists use conac that value to end of name / then just use var-pic1.jpg in each slot to show
 $namehand = get_the_title();
   // add rev number if has one from -rev.txt 
 if (strlen($revsauce)== 2){$namehand .= "-$revsauce"; } 
	/*echo $namehand;*/


// determine upload directory 
	$titty = get_the_title();

if (esc_url( home_url( '/' ) )=="http://localhost/") {
	$target_dir_img = 'C:\\xampp\htdocs\wordpress2\wp-content\uploads\\filebase\\';
} elseif (esc_url( home_url( '/' ) )=="http://drawings/")  {
	/*echo "kusa server";*/
	$target_dir_img = "D:\\Prorgam Files\\xampp\htdocs\wordpress\wp-content\uploads\\filebase\\$company\\$titty\Images\\";
}else {
	echo "dir handler broken";
	
}
/*echo $target_dir_img;*/



function imgUrlGrab ($numb, $comp, $namey) {
	global $company;
	global $filesfolder;
	global $target_dir_img;
		$revvish = "1A";

if (esc_url( home_url( '/' ) )=="http://localhost/") {
	$target_dir_imgf = 'C:\\xampp\htdocs\wordpress2\wp-content\uploads\\filebase\\';
} elseif (esc_url( home_url( '/' ) )=="http://drawings/")  {
	/*echo "kusa server";*/
	$target_dir_imgf = "D:\\Prorgam Files\\xampp\htdocs\wordpress\wp-content\uploads\\filebase\\{$comp}\\{$namey}\Images\\";
}else {
	echo "dir handler broken";
	
}

	// if file exists with rev letter ish , return that, else return below 
$defaulty = esc_url( home_url( '/' ) ) . "download/{$comp}/" . get_the_title() . "/Images/" . $namey . "-pic{$numb}.JPG";

if (file_exists(esc_url( home_url( '/' ) ) . "download/{$comp}/" . get_the_title() . "/Images/" . $namey . "-pic{$numb}.JPG")) {
	return $defaulty;
}else if  (file_exists(esc_url( home_url( '/' ) ) . "download/{$comp}/" . get_the_title() . "/Images/" . $namey . "-{$revvish}" . "-pic{$numb}.JPG")) {
	$defaulty = esc_url( home_url( '/' ) ) . "download/{$comp}/" . get_the_title() . "/Images/" . $namey . "-{$revvish}" . "-pic{$numb}.JPG";
	return $defaulty;
}else {
	$defaulty = esc_url( home_url( '/' ) ) . "download/{$comp}/" . get_the_title() . "/Images/" . $namey . "-pic{$numb}.JPG";
	
};

if (file_exists($target_dir_imgf . $namey . "-pic{$numb}.jpg")) {
	$defaulty = esc_url( home_url( '/' ) ) . "download/{$comp}/" . get_the_title() . "/Images/" . $namey . "-pic{$numb}.JPG";
	return $defaulty;
}
elseif (file_exists($target_dir_imgf . $namey . "-1A-pic{$numb}.jpg")) {
		$defaulty = esc_url( home_url( '/' ) ) . "download/{$comp}/" . get_the_title() . "/Images/" . $namey . "-1A" . "-pic{$numb}.JPG";
	return $defaulty;
}
 else {
 		$defaulty = esc_url( home_url( '/' ) ) . "download/{$comp}/" . get_the_title() . "/Images/" . $namey . "-pic{$numb}.JPG";
	return $defaulty;
	
};

  // file exists checker not working, fix return placeholder image pointing to new dir if not found 
 //esc_url( home_url( '/' ) ) . "download/{$comp}/z-ref/-pic{$numb}.JPG"
};

/*echo imgUrlGrab(1,$company,get_the_title()) . '<br />';
echo $company . '<br />';*/


/*$imgfolder = esc_url( home_url( '/' ) ) . "download/$company/" . get_the_title() . "/Images/";

$oneimage = esc_url( home_url( '/' ) ) . "download/$company/" . get_the_title() . "/Images/" . "$namehand-pic1.JPG";

$oneimagefallback = esc_url( home_url( '/' ) ) . "download/$company/" . get_the_title() . "/Images/" . get_the_title() . "-pic1.JPG";
$oneimage2 = $target_dir_img . "$namehand-pic1.JPG";*/

// oneimage link works, add if checker to if exists use it, if not use original img link without rev 

/*if ( file_exists($oneimage2) ) {
	$onepic = $oneimage;
}
else if ( !file_exists($oneimage) && file_exists($oneimagefallback) ) {
   		$onepic = $oneimagefallback;
}
else if ( !file_exists($oneimage) && !file_exists($oneimagefallback) ) {
            // make a base dir somewhere with 1 2 3 placeholder images
	echo "yarn";
}
*/

// make handler vars for imgs 2 and 3 using above logic 

 ?>



		<?php 

/*	$namecheck = $sitehome.$littlezerg.$company2.$slash.$partPostCurrently.$slash."1A";
	echo "<br />" . $namecheck . "<br />";
    echo $revsauce; */
/*
 $testyyy =  esc_url( home_url( '/' ) . 'download/' . $company.'/'. get_the_title() . '/' . "1A" ;*/

/* echo $testyyy;*/

    $namecheck2 =  "C:\\xampp\htdocs\wordpress2\wp-content\uploads\\filebase\KINETROL\\077-100" ;
   /* echo $namecheck2;*/

   //add in if logic that changes path c:\\ whatever if on local testy vs kusa path



$baser1= wp_upload_dir();
$bassss = $baser1['basedir'] . "/Filebase/";


/*   	echo $baser . "<br />";*/
   	$baser2 = $bassss . "/" . $company . "/" . $partPostCurrently . "/" . "1A" ;

   	/*echo $baser2;*/
    $baserimg = $bassss . "/" . $company . "/" . $partPostCurrently . "/" . "Images/" . $partPostCurrently . "-pic1.jpg";
  
/*echo $baserimg;*/

if (!file_exists($baserimg)) {
	echo '<script type="text/javascript">';
    echo "var listy = document.getElementById('imagesbar');";
    echo 'var fishy = "No images to display";';
	echo 'listy.innerHTML = fishy;';
	echo 'listy.style.display = "none"';
	echo '</script>';
	
}

$filename = $baser2;
$catzilla = get_the_category();


/*echo $baser2;*/

?>
		<center style="padding-bottom:11px;"><div class="imagethree" id="imagesbar">
<a class="wp-colorbox-image cboxElement" href="<?php echo imgUrlGrab(1, $company, $namehand);?>"><img src="<?php echo imgUrlGrab(1, $company, $namehand);?>" width="30%" height="76" class="alignnone"></a> <a class="wp-colorbox-image cboxElement" href="<?php echo imgUrlGrab(2, $company, $namehand);?>"><img src="<?php echo imgUrlGrab(2, $company, $namehand, $namehand);?>" width="30%" height="76" class="alignnone"></a> <a class="wp-colorbox-image cboxElement" href="<?php echo imgUrlGrab(3, $company, $namehand);?>"><img src="<?php echo imgUrlGrab(3, $company, $namehand);?>" width="30%" height="76" class="alignnone"></a></div></center>
		<br /><center> 	 
<?php
/* echo imgUrlGrab(1, $company, $namehand) . "<br />";
 echo $onepic . "<br />";
 echo $company;*/

if (file_exists($filename)) {
   /* echo "The file $filename exists";*/
       echo do_shortcode("[wpfilebase tag=list path='$company/$partPostCurrently/$filesfolder/' tpl=main_dls pagenav=1 sort=file_size /]");
    echo "<div class='linkinpark'>"; echo do_shortcode("[wp_colorbox_media url='#catefish' type='inline' hyperlink='Subassembly files']"); echo '</div>';
    echo "<div class='linkinpark'>"; echo do_shortcode("[wp_colorbox_media url='#dogfish' type='inline' hyperlink='3D Part View']"); echo '</div>';
}
 elseif ($catzilla[0] ->name == "Utility") {
 	//handlers and post formish var creator for create post and text file, category of post = utility
 	echo do_shortcode("[capture-form-to-post]");
	
if (isset($_POST["post_title"])) {
    $partnumber = $_POST["post_title"];    
}else{  
   $partnumber = "" ;
}

if (isset($_POST["post_category_name"])) {
 $texty =  $_POST["post_category_name"];
} else {
  $texty = "";
}
  


$partnumber2 = $partnumber . ".txt";

$uploaddir = wp_upload_dir();
$uploaddir2 = $uploaddir['basedir'] . "/Filebase/CustomerAssemblies/";

$combodir =  $uploaddir2 . $partnumber2;
$homefry = esc_url( home_url( '/' ) ); 

if (isset($_POST['submit1'])) {
file_put_contents($combodir, $texty);
echo '<div id="infopane">';
echo "Created ". $combodir . "<br />" ;
echo " Created Post: <a href='". $homefry . $partnumber . "' target='_blank'>" . $partnumber . "</a><br />";


echo "Press Refresh Database button on left to update changes";
echo '</div>';
}
 	/*print_r(get_the_content());*/
 }

 else {
    echo "No drawings uploaded to $partPostCurrently folder on filebase yet!";
    echo $catzilla[0] ->name;
}

// $texty  =  company name from form
// $partnumber  = drawing number from form

// post file upload handler start 
//file upload form post handler 

//grab post data from form 
$company2 = isset($_POST['compname']) ? $_POST['compname'] : "";
$partname = isset($_POST['post_title']) ? $_POST['post_title'] : "";
$revvy = isset($_POST['revvy']) ? $_POST['revvy'] : "";
/*$fileish = isset($_FILES['fileToUpload']) ? $_FILES['fileToUpload'] : "";*/

print_r($_POST['uploads']);

// file details processing
/*$upFileName = $fileish['name'];
$upFileTmpLoc = $fileish['tmp_name'];
$upFileSize = $fileish['size'];
$upFileError = $fileish['error'];*/

//set allowed file types
$permitted = array('dwg','pdf','slddrw','sldprt','step','jpg');

// determine upload directory 

if (esc_url( home_url( '/' ) )=="http://localhost/") {
	$target_dir = 'C:\\xampp\htdocs\wordpress2\wp-content\uploads\\filebase\\';
} elseif (esc_url( home_url( '/' ) )=="http://drawings/")  {
	/*echo "kusa server";*/
	$target_dir = 'D:\\Prorgam Files\xampp\htdocs\wordpress\wp-content\uploads\\filebase\\';
}else {
	echo "dir handler broken";

	
}
// make rev letter folder name and company name uppercase for pretty pictures
$revvy = strtoupper($revvy);
$company2 = strtoupper($company2);
//set upload dir
$dirnado = $target_dir . $company2 . '\\'. $partname . '\\' . "$revvy/";
$dirnadoRevDoc = $target_dir . $company2 . '\\'. $partname . '\\' . $partname . "-rev.txt";
$dirnadoRevLoc = $target_dir . $company2 . '\\'. $partname . '\\' ;
/*echo 'dirnado= ' . $dirnado . '<br />';
*/
//check if upload folder exists, create if not 
$needdir = 0;
if (is_dir($dirnado)) {
   /* echo "yes dir exists";*/
}
elseif (isset($_FILES["uploads"]["name"])) { /*echo 'no dir'; */ $needdir = 1; }

if ($needdir === 1) {
 mkdir($dirnado, 0777, true);  // make confirmation box in javascript to ask if want to create maybe
}




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

//check if uploaded file is allowed
if(in_array($file_extension2, $permitted)) {
        if($upFileError === 0) {
            $upFileNewName =  $partname . '-' . $revvy . "." . $file_extension2; // rename based on form inputs 
            $yesPLS = 1;
          /*  echo "yes! " . $upFileNewName . '<br />';*/
             } //close rename if statement
             else {
                $uploadOk = 0;
             }
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
        echo "Sorry, there was an error uploading your file.";
    }
}


    };// close if upload_err_ok upload thread
};  // close foreach looper
 
if (isset($_POST['makeactive'])) {
file_put_contents($dirnadoRevDoc, $revvy);   
echo "<div style='font-size:12px;margin-top:-30px;padding:10px;line-height:15px;'>Active rev set: {$revvy}. Refresh Database to see changes.</div> <br />";
}

if (isset($_POST['submit3'])) {

        if (file_exists ($dirnadoRevLoc)) {  // check if folder exists before writing

        	$newRevPls = $_POST['newRevPls'];
	file_put_contents($dirnadoRevDoc, $newRevPls ); 
	echo "<div style='font-size:12px;margin-top:-30px;padding:10px;line-height:15px;'>Active rev set: {$newRevPls}. Refresh Database to see changes.</div> <br />";

        }

       else {
       	echo "<div style='font-size:12px;margin-top:-65px;padding:27px;line-height:15px;'>Folder not found at {$dirnadoRevLoc}, please re-enter part information and try again.</div>";
       }

	
}


// rev changer handler 

// needs if dir exists check for par numb entered
// if dir exists / write rev doc / else print error 

/*if (isset($_POST['submit3'])) {
	echo "submit3";
}
else {
	echo "nopeyy";
}*/


				?>
		 <div style="display: none;">
<div id="catefish" style="padding: 15px; background: #fff;">
<h5>Assembly Part Files</h5><?php echo do_shortcode("[wpfilebase tag=browser path='$company/$partPostCurrently/$filesfolder/$subpartsfolder' /]");?>
<br /></div>
<div id="dogfish" style="padding: 15px; background: #fff;"> <center><div style="margin:0px auto;"><?php echo do_shortcode("[kento_3dmv width='1000' height='600' source='../download/KINETROL/$partPostCurrently/Images/$partPostCurrently-$filesfolder.obj' /]");?> </div>
</div>
</div>


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

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->




