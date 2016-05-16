<?php
/**
	Template Name: Statuscheck Full
*/
	
?>
<html>
<head>



<link rel='stylesheet' id='jquery-dataTables-css'  href='http://localhost/wordpress2/wp-content/plugins/wp-filebase/extras/jquery/dataTables/css/jquery.dataTables.css?ver=3.1.01' type='text/css' media='all' />

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
		margin-top:32px;
	float:left;
	width:98%;
	font-size: 14px;
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
<?php 

//add an input box for user to paste in csv of a column to be used as the list generator


// set up directory pointer to check if file exists - $target_dir
if (esc_url( home_url( '/' ) )=="http://localhost/") {
	$target_dir = 'C:\\xampp\htdocs\wordpress2\wp-content\uploads\\filebase\\';
} elseif (esc_url( home_url( '/' ) )=="http://drawings/")  {
	/*echo "kusa server";*/
	$target_dir = "D:\\Prorgam Files\\xampp\htdocs\wordpress\wp-content\uploads\\filebase\\";
}else {
	echo "dir handler broken";
	
}

// company name handler
$compname = "Kinetrol";

//add pulling of custmer assembly text infos to get non kenny company names

 function revPull ($partnum) { 
 	 global $compname, $target_dir;

   $revdoc = $target_dir . "{$compname}/{$partnum}/{$partnum}-rev.txt";

if (file_exists($revdoc)){
	return file_get_contents($revdoc);
}
else { return "1A"; }

 				};


function custassemfile($partnum) {
	// take partnumber name as var  and do check if customerassembly file exists based on name
 global $target_dir;
$CA = $target_dir . "CustomerAssemblies/{$partnum}.txt";
if (file_exists($CA)){
	return "Yes";
}
else { return "No"; } 

				};

function custassemcontents($partnum){
	global $target_dir;
	$CA = $target_dir . "CustomerAssemblies/{$partnum}.txt";
	return file_get_contents($CA);
};

function basedrawingfiles($partnum){
	global $target_dir;
	global $compname;
	 $rev = revpull($partnum);
	 $namewithrev = "{$partnum}-{$rev}"; 
	 $basedir = $target_dir . "{$compname}/{$partnum}/{$rev}/";
	 /*return $basedir;*/

	 if (file_exists("{$basedir}{$namewithrev}.DWG" )){
	$maindrawings['dwg'] = "Yes";
	}
	else { $maindrawings['dwg'] = "No"; } ;

	if (file_exists("{$basedir}{$namewithrev}.STEP" )){
	$maindrawings['step'] = "Yes";
	}
	else { $maindrawings['step'] = "No"; } ;

	if (file_exists("{$basedir}{$namewithrev}.PDF" )){
	$maindrawings['pdf'] = "Yes";
	}
	else { $maindrawings['pdf'] = "No"; } ;

	if (file_exists("{$basedir}{$namewithrev}.SLDDRW" )){
	$maindrawings['slddrw'] = "Yes";
	}
	else { $maindrawings['slddrw'] = "No"; } ;

	if (file_exists("{$basedir}{$namewithrev}.SLDPRT" )){
	$maindrawings['sldprt'] = "Yes";
	}
	else { $maindrawings['sldprt'] = "No"; } ;

           return $maindrawings;

// need to assign function to variable: $drawzilla = basedrawingfiles("107DAS1UGA"); to be able to pull array values  echo $drawzilla['step'];
			};

//sql query to pull all posts except for ones with category utility and put into an array var to cycle thru? or just use wp_query?

?>
</head>

<body>

<?php while(have_posts()): the_post(); ?>
	
<div id="page-content"><?php the_content(); endwhile; ?></div>

<?php  
       /*var_dump($postfish);*/
       //107DAS1UGA should have 2A
      /* echo $doggy;
        echo revPull("107DAS1UGA");
        echo "wut" . "<br />";*/
        /*echo custassemfile("107DAS1UGA"). "<br />";*/
      /*  $drawzilla = basedrawingfiles("107DAS1UGA");
        echo "zippy: ". get_template_directory() . "/js/ <br />";
       /* echo basedrawingfiles("107DAS1UGA");*/
        /*echo $drawzilla['step']. "<Br />";*/




   
         /*echo do_shortcode("[wpfilebase tag=list path='CustomerAssemblies' tpl=statuschecker pagenav=1 sort=file_name /]");*/
 ?>
<div id="tolightbox" style="display:none;">
<div id="posts">
<?php

// The Query
$the_query = new WP_Query(  array( 'posts_per_page' => 1450,  'category__not_in' => array( 42 ) ) );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul id="postlist" style="padding-top:69px;list-style:none">';
	echo '<strong>Active Posts:</strong>';
	echo '<hr>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
		$namezor = get_the_title();
		$array1[] = $namezor;
		// to add each query pull to a defined array variable to store all
	}
	echo '</ul>';
} else {
	// no posts found ec
	echo 'no postys';
}
/* Restore original Post Data */
wp_reset_postdata();

?>
<?php 
 function postcheck ($partnum) {
 	global $array1;
 	 if (in_array("$partnum", $array1)) {  
    return "Yes";
} else { return "No";}
 };


$sheetlist = "007-004U005014M,007-004XF0B034A,007-040AP0300C,007-040HP0300C,007-040MP0300C,007-044AP0300C,007-044HP0300C,007-044MP0300C,007-050AP0000C,007-050HP0000C,007-050MP0000C,007-054AP0000C,007-054HP0000C,007-054MP0000C,0M0-100,017-020,017-100,027-020,027-100,037-004U005004M,037-004U005004M,037-020,037-100,037-104U005004M,037-120,037-124U005004M,037-400MP1300C,055-100-2119,057-004U005004M,057-020,057-040AP0300C,057-044AP0300C,057-050AP0000C,057-054AP0000C,057-100,057-100-2119,057-104U005004M,057-120,057-124U005004M,057-400AP1300c,057-400MP1300C,057-420AP1300C,057DA00G0,057DAAPLGFV,057DAS1U00,057GB,057SR00G0,057SR0UG0,077-004U001000M,077-004U001000M,077-004U005004M,077-004U005004M,077-020,077-040AP0300C,077-040MP0300C,077-044AP0300C,077-044MP0300C,077-050AP0000C,077-050MP0000C,077-054AP0000C,077-054MP0000C,077-100,077-100-2119,077-104U005004M,077-120,077-124U005004M,077-400AP1300C,077-400AP300C,077-400MP1300C,077-420AP1300C,077-DA000100,077-DA0U0100,077DA00G0,077DA0U01,077DAAPLGFV,077DAAPU00,077DAS1S00,077DAS1U00,077DAS1UGA,077DAS2S0BN,077DAS2UGV,077DAS3U0A,077FMC12BOSS,077GB,077SR00G0,077SR0UG0,077SRS1XGV,087-020,087-100,087-104U005004M,087-120,087-124U005004M,087-400AP1300C,087-400MP1300C,087-420AP1300C,087DA00G0,087DAAPT0GA,087DAS1U00,087DAS1UGA,087DAS1UGAV,087DAS2UGAV,087GB,087SR00G0,087SR0UG0,087SRS1UGA,097-020,097-100,097-104U005004M,097-120,097-124U005004M,097-400AP0300C,097-400AP1300C,097-400MP1300C,097-420AP1300C,097DA00G0,097DA0U02,097DA0UGN,097DAS1000,097DAS10G0,097DAS1S00,097DAS1UGAV,097DAS1X0B0,097DAS20GM,097DAS3U0A,097GB,097SR00G0,097SR0UG0,097SRS3T02,107-020,107-100,107-104U005004M,107-120,107-124U005004M,107-400MP1300C,107-400MP1300C,107-420MP1300C,107-DAS4UGIV,107DA00G0,107DA00G00,107DA0U03,107DAMP0GV,107DAMPLGFV,107DAMPT00A,107DAMPTUGA,107DAMPTUGV,107DAS1000,107DAS10GV,107DAS1S00,107DAS1U00,107DAS1UGA,107DAS1UGAV,107DAS1UGV,107DAS1X0F,107DAS3U0A,107DASUGAIV,107GB,107SR00G0,107SR0UG0,107SRS1UGA,124-104U005004 + ASCO 8551,127-020,127-100,127-104U005004M,127-120,127-124U005004M,127-400MP0300C,127-400MP1300C,127-400MP1300C,127-420MP1300C,127DA00G0,127DAAB00G,127DAMPTUGA,127DAMPU00,127DAS1U00,127DAS1UGA,127DAS1X000,127DAS2S0BN,127DAS2UGAV,127DAS2UGV,127DAS3U0A,127FMC12BOSS,127GB,127SR00G0,127SR0UG0,127SR0UGN,127SRS1XG,129-100,147-020,147-100,147-104U005004M,147-120,147-124U005004M,147-400MP1300C,147-400MP1300C,147-420MP1300C,147-DAS1X0B0,147-DAS4UGAIV,147-DAS4UGIV,1471249U005004M,147DA00G0,147DAAB00G,147DAABBG0G,147DAABS500V,147DAABS5LGAV,147DAMP0GV,147DAMPTUGA,147DAMPU00,147DAMPX0P0,147DAS1000,147DAS10GV,147DAS1S00,147DAS1SGV,147DAS1U00,147DAS1UG0,147DAS1UGA,147DAS200,147DAS2S0BN,147DAS2UGAV,147DAS2UGV,147DAS30000,147DAS300ACV4,147DAS300ACV6,147DAS3U00,147DAS3U0A,147DAS3U0ACV4,147DAS3U0ACV5,147DAS4UGAV,147FMC12BOSS,147GB,147SR00G0,147SR0UG0,147SR0UGN,147SRELLG0,147SRMPTUGAV,147SRS1U00,147SRS1UGA,147SRS1UGV,147SRS3TG0,147SRS4UGAV,149-100,157-020-5900,157-100,157-104U005004M,157-400MP1300C,157-400MP1300C,157-420MP1300C,15712459U005004M,157DA00G0,157DAABS500V,157DAMPTUGA,157DAS1SGV,157DAS1UG0,157DAS1UGV,157DAS2U00,157DAS3U0A,157DASM0GV,157GB,157SR00G0,157SR0UG0,157SRS1UGA,167-020,167-100,167-104U005014M,167-120,167-124U005014M,167-400HP13E0C,167-400MP1300C,167-420HP13E0C,167DA00G0,167DA00G00,167DAHPU0P0,167DAS1S00,167DAS3000,167DAS30GV,167DAS3SGV,167DAS3U00,167DAS3UGA,167DAS3X0B0,167DAS4U07,167DAS4UGAV,167DAS4UGV,167DAS4XGA,167GB,167SR00G0,167SR0UG0,167SRELLG0,167SRHPTUGAV,167SRS1U00,167SRS3UGAV,167SRS4UGAV,187-020,187-100,187-104U005014M,187-120,187-124U005014M,187-400HP13E0C,187-400MP1300C,187-420HP13E0C,187DA00G0,187DA00G00,187DAHPTUGV,187DAS1X0F,187DAS3000,187DAS30GV,187DAS3SGV,187DAS3U00,187DAS3UGA,187DAS40G0,187DAS4U00,187DAS4UGAV,187DAS4UGV,187GB,187SR00G0,187SR0TG12,187SR0UG0,187SRELLG0,187SRHPTUGAV,187SRS1U00,187SRS4UGAV,207-020,207-100,207-104U005014M,207-120,207-124U005014M,207-400HP13E0C,207-400MP1300C,207-420HP13E0C,207DA00G0,207DAS40G0,207DAS4UGAV,207GB,207SR00G0,207SRS5T08,307-020,307-100,307-104U005014M,307-120,307-124U005014M,307-400HP13E0C ,307-400MP1300C,307-420HP13E0C,307DA00G0,307GB,307SR00G0,3222BVLLXLP1,ASP1607,ASP1608,ASP1609,ASP329,ASP389,ASP400,ASP638,C5N111,C5N121,C5N131,C5N141,C5N151,C5N161,C5N211,C5N212,C5N213,C5N221,C5N222,C5N223,C5N231,C5N232,C5N233,C5N241,C5N242,C5N243,C5N251,C5N252,C5N253,C5N261,C5N262,C5N263,C5N311,C5N313,C5N321,C5N331,C5N341,C5N351,C5N351LW,C5N353LW,C5N361,C7B211,C7B212,C7B213,C7B222,C7B223,C7B232,C7B233,C7B242,C7B243,C7B251,C7B252,C7B253,C7B262,C7B263,C7B311,C7B313,C7B351LW,C7B353,C7B353LW,C7BSC0165,CPU-4303,FCV-3-316,FCV-5-316,KC5NSC0166,KCSNSC0166,MKSS05-15MNTPLT,MKSS147DAPS2POS,MKSS167DAPS2POS,MKSS16MNTPLT,MKSS16MPASCO8344,MKSS187DAPS2POS,MKSS18MNTPLT,MKSS20MNTPLT,MKSSAPOVRD,MKSSREGMNTPLT,MKSSXLSVRSAC7,P31FB92EGMN,R3013,S7B212,SCM-28,ST809129,V025B253,V050B211,V050B213,V050B311,V050B351LW,V050B353LW,V075B211,V075B213,V075B311,V075B351LW,V075B353LW,V100B211,V100B213,V100B311,V100B351LW,V100B353LW";
$listarray = explode(",", $sheetlist);

 ?>
<ul id="fromchart" style="display:none;">
<li id="007-004U005014M">007-004U005014M</li>
<li id="007-004U005014M">007-004U005014M</li>
<li id="007-004XF0B034A">007-004XF0B034A</li>
<li id="007-040AP0300C">007-040AP0300C</li>
<li id="007-040HP0300C">007-040HP0300C</li>
<li id="007-040MP0300C">007-040MP0300C</li>
<li id="007-044AP0300C">007-044AP0300C</li>
<li id="007-044HP0300C">007-044HP0300C</li>
<li id="007-044MP0300C">007-044MP0300C</li>
<li id="007-050AP0000C">007-050AP0000C</li>
<li id="007-050HP0000C">007-050HP0000C</li>
<li id="007-050MP0000C">007-050MP0000C</li>
<li id="007-054AP0000C">007-054AP0000C</li>
<li id="007-054HP0000C">007-054HP0000C</li>
<li id="007-054MP0000C">007-054MP0000C</li>
<li id="017-020">017-020</li>
<li id="017-100">017-100</li>
<li id="027-020">027-020</li>
<li id="027-100">027-100</li>
<li id="037-004U005004M">037-004U005004M</li>
<li id="037-004U005004M">037-004U005004M</li>
<li id="037-020">037-020</li>
<li id="037-100">037-100</li>
<li id="037-104U005004M">037-104U005004M</li>
<li id="037-120">037-120</li>
<li id="037-124U005004M">037-124U005004M</li>
<li id="037-400MP1300C">037-400MP1300C</li>
<li id="055-100-2119">055-100-2119</li>
<li id="057-004U005004M">057-004U005004M</li>
<li id="057-004U005004M">057-004U005004M</li>
<li id="057-020">057-020</li>
<li id="057-040AP0300C">057-040AP0300C</li>
<li id="057-044AP0300C">057-044AP0300C</li>
<li id="057-050AP0000C">057-050AP0000C</li>
<li id="057-054AP0000C">057-054AP0000C</li>
<li id="057-100">057-100</li>
<li id="057-100-2119">057-100-2119</li>
<li id="057-104U005004M">057-104U005004M</li>
<li id="057-120">057-120</li>
<li id="057-124U005004M">057-124U005004M</li>
<li id="057-400AP1300c">057-400AP1300c</li>
<li id="057-400MP1300C">057-400MP1300C</li>
<li id="057-420AP1300C">057-420AP1300C</li>
<li id="057DA00G0">057DA00G0</li>
<li id="057DAAPLGFV">057DAAPLGFV</li>
<li id="057DAS1U00">057DAS1U00</li>
<li id="057GB">057GB</li>
<li id="057SR00G0">057SR00G0</li>
<li id="057SR0UG0">057SR0UG0</li>
<li id="077-004U001000M">077-004U001000M</li>
<li id="077-004U001000M">077-004U001000M</li>
<li id="077-004U005004M">077-004U005004M</li>
<li id="077-004U005004M">077-004U005004M</li>
<li id="077-020">077-020</li>
<li id="077-040AP0300C">077-040AP0300C</li>
<li id="077-040MP0300C">077-040MP0300C</li>
<li id="077-044AP0300C">077-044AP0300C</li>
<li id="077-044MP0300C">077-044MP0300C</li>
<li id="077-050AP0000C">077-050AP0000C</li>
<li id="077-050MP0000C">077-050MP0000C</li>
<li id="077-054AP0000C">077-054AP0000C</li>
<li id="077-054MP0000C">077-054MP0000C</li>
<li id="077-100">077-100</li>
<li id="077-100-2119">077-100-2119</li>
<li id="077-104U005004M">077-104U005004M</li>
<li id="077-120">077-120</li>
<li id="077-124U005004M">077-124U005004M</li>
<li id="077-400AP1300C">077-400AP1300C</li>
<li id="077-400AP300C">077-400AP300C</li>
<li id="077-400MP1300C">077-400MP1300C</li>
<li id="077-420AP1300C">077-420AP1300C</li>
<li id="077-DA000100">077-DA000100</li>
<li id="077-DA0U0100">077-DA0U0100</li>
<li id="077DA00G0">077DA00G0</li>
<li id="077DA0U01">077DA0U01</li>
<li id="077DAAPLGFV">077DAAPLGFV</li>
<li id="077DAAPU00">077DAAPU00</li>
<li id="077DAS1S00">077DAS1S00</li>
<li id="077DAS1U00">077DAS1U00</li>
<li id="077DAS1UGA">077DAS1UGA</li>
<li id="077DAS2S0BN">077DAS2S0BN</li>
<li id="077DAS2UGV">077DAS2UGV</li>
<li id="077DAS3U0A">077DAS3U0A</li>
<li id="077FMC12BOSS">077FMC12BOSS</li>
<li id="077GB">077GB</li>
<li id="077SR00G0">077SR00G0</li>
<li id="077SR0UG0">077SR0UG0</li>
<li id="077SRS1XGV">077SRS1XGV</li>
<li id="087-020">087-020</li>
<li id="087-100">087-100</li>
<li id="087-104U005004M">087-104U005004M</li>
<li id="087-120">087-120</li>
<li id="087-124U005004M">087-124U005004M</li>
<li id="087-400AP1300C">087-400AP1300C</li>
<li id="087-400MP1300C">087-400MP1300C</li>
<li id="087-420AP1300C">087-420AP1300C</li>
<li id="087DA00G0">087DA00G0</li>
<li id="087DAAPT0GA">087DAAPT0GA</li>
<li id="087DAS1U00">087DAS1U00</li>
<li id="087DAS1UGA">087DAS1UGA</li>
<li id="087DAS1UGAV">087DAS1UGAV</li>
<li id="087DAS2UGAV">087DAS2UGAV</li>
<li id="087GB">087GB</li>
<li id="087SR00G0">087SR00G0</li>
<li id="087SR0UG0">087SR0UG0</li>
<li id="087SRS1UGA">087SRS1UGA</li>
<li id="097-020">097-020</li>
<li id="097-100">097-100</li>
<li id="097-104U005004M">097-104U005004M</li>
<li id="097-120">097-120</li>
<li id="097-124U005004M">097-124U005004M</li>
<li id="097-400AP0300C">097-400AP0300C</li>
<li id="097-400AP1300C">097-400AP1300C</li>
<li id="097-400MP1300C">097-400MP1300C</li>
<li id="097-420AP1300C">097-420AP1300C</li>
<li id="097DA00G0">097DA00G0</li>
<li id="097DA0U02">097DA0U02</li>
<li id="097DA0UGN">097DA0UGN</li>
<li id="097DAS1000">097DAS1000</li>
<li id="097DAS10G0">097DAS10G0</li>
<li id="097DAS1S00">097DAS1S00</li>
<li id="097DAS1UGAV">097DAS1UGAV</li>
<li id="097DAS1X0B0">097DAS1X0B0</li>
<li id="097DAS20GM">097DAS20GM</li>
<li id="097DAS3U0A">097DAS3U0A</li>
<li id="097GB">097GB</li>
<li id="097SR00G0">097SR00G0</li>
<li id="097SR0UG0">097SR0UG0</li>
<li id="097SRS3T02">097SRS3T02</li>
<li id="0M0-100">0M0-100</li>
<li id="107-020">107-020</li>
<li id="107-100">107-100</li>
<li id="107-104U005004M">107-104U005004M</li>
<li id="107-120">107-120</li>
<li id="107-124U005004M">107-124U005004M</li>
<li id="107-400MP1300C">107-400MP1300C</li>
<li id="107-400MP1300C">107-400MP1300C</li>
<li id="107-420MP1300C">107-420MP1300C</li>
<li id="107-DAS4UGIV">107-DAS4UGIV</li>
<li id="107DA00G0">107DA00G0</li>
<li id="107DA00G00">107DA00G00</li>
<li id="107DA0U03">107DA0U03</li>
<li id="107DAMP0GV">107DAMP0GV</li>
<li id="107DAMPLGFV">107DAMPLGFV</li>
<li id="107DAMPT00A">107DAMPT00A</li>
<li id="107DAMPTUGA">107DAMPTUGA</li>
<li id="107DAMPTUGV">107DAMPTUGV</li>
<li id="107DAS1000">107DAS1000</li>
<li id="107DAS10GV">107DAS10GV</li>
<li id="107DAS1S00">107DAS1S00</li>
<li id="107DAS1U00">107DAS1U00</li>
<li id="107DAS1UGA">107DAS1UGA</li>
<li id="107DAS1UGAV">107DAS1UGAV</li>
<li id="107DAS1UGV">107DAS1UGV</li>
<li id="107DAS1X0F">107DAS1X0F</li>
<li id="107DAS3U0A">107DAS3U0A</li>
<li id="107DASUGAIV">107DASUGAIV</li>
<li id="107GB">107GB</li>
<li id="107SR00G0">107SR00G0</li>
<li id="107SR0UG0">107SR0UG0</li>
<li id="107SRS1UGA">107SRS1UGA</li>
<li id="124-104U005004 + ASCO 8551">124-104U005004 + ASCO 8551</li>
<li id="127-020">127-020</li>
<li id="127-100">127-100</li>
<li id="127-104U005004M">127-104U005004M</li>
<li id="127-120">127-120</li>
<li id="127-124U005004M">127-124U005004M</li>
<li id="127-400MP0300C">127-400MP0300C</li>
<li id="127-400MP1300C">127-400MP1300C</li>
<li id="127-400MP1300C">127-400MP1300C</li>
<li id="127-420MP1300C">127-420MP1300C</li>
<li id="127DA00G0">127DA00G0</li>
<li id="127DAAB00G">127DAAB00G</li>
<li id="127DAMPTUGA">127DAMPTUGA</li>
<li id="127DAMPU00">127DAMPU00</li>
<li id="127DAS1U00">127DAS1U00</li>
<li id="127DAS1UGA">127DAS1UGA</li>
<li id="127DAS1X000">127DAS1X000</li>
<li id="127DAS2S0BN">127DAS2S0BN</li>
<li id="127DAS2UGAV">127DAS2UGAV</li>
<li id="127DAS2UGV">127DAS2UGV</li>
<li id="127DAS3U0A">127DAS3U0A</li>
<li id="127FMC12BOSS">127FMC12BOSS</li>
<li id="127GB">127GB</li>
<li id="127SR00G0">127SR00G0</li>
<li id="127SR0UG0">127SR0UG0</li>
<li id="127SR0UGN">127SR0UGN</li>
<li id="127SRS1XG">127SRS1XG</li>
<li id="129-100">129-100</li>
<li id="147-020">147-020</li>
<li id="147-100">147-100</li>
<li id="147-104U005004M">147-104U005004M</li>
<li id="147-120">147-120</li>
<li id="147-124U005004M">147-124U005004M</li>
<li id="147-400MP1300C">147-400MP1300C</li>
<li id="147-400MP1300C">147-400MP1300C</li>
<li id="147-420MP1300C">147-420MP1300C</li>
<li id="147-DAS1X0B0">147-DAS1X0B0</li>
<li id="147-DAS4UGAIV">147-DAS4UGAIV</li>
<li id="147-DAS4UGIV">147-DAS4UGIV</li>
<li id="1471249U005004M">1471249U005004M</li>
<li id="147DA00G0">147DA00G0</li>
<li id="147DAAB00G">147DAAB00G</li>
<li id="147DAABBG0G">147DAABBG0G</li>
<li id="147DAABS500V">147DAABS500V</li>
<li id="147DAABS5LGAV">147DAABS5LGAV</li>
<li id="147DAMP0GV">147DAMP0GV</li>
<li id="147DAMPTUGA">147DAMPTUGA</li>
<li id="147DAMPU00">147DAMPU00</li>
<li id="147DAMPX0P0">147DAMPX0P0</li>
<li id="147DAS1000">147DAS1000</li>
<li id="147DAS10GV">147DAS10GV</li>
<li id="147DAS1S00">147DAS1S00</li>
<li id="147DAS1SGV">147DAS1SGV</li>
<li id="147DAS1U00">147DAS1U00</li>
<li id="147DAS1UG0">147DAS1UG0</li>
<li id="147DAS1UGA">147DAS1UGA</li>
<li id="147DAS200">147DAS200</li>
<li id="147DAS2S0BN">147DAS2S0BN</li>
<li id="147DAS2UGAV">147DAS2UGAV</li>
<li id="147DAS2UGV">147DAS2UGV</li>
<li id="147DAS30000">147DAS30000</li>
<li id="147DAS300ACV4">147DAS300ACV4</li>
<li id="147DAS300ACV6">147DAS300ACV6</li>
<li id="147DAS3U00">147DAS3U00</li>
<li id="147DAS3U0A">147DAS3U0A</li>
<li id="147DAS3U0ACV4">147DAS3U0ACV4</li>
<li id="147DAS3U0ACV5">147DAS3U0ACV5</li>
<li id="147DAS4UGAV">147DAS4UGAV</li>
<li id="147FMC12BOSS">147FMC12BOSS</li>
<li id="147GB">147GB</li>
<li id="147SR00G0">147SR00G0</li>
<li id="147SR0UG0">147SR0UG0</li>
<li id="147SR0UGN">147SR0UGN</li>
<li id="147SRELLG0">147SRELLG0</li>
<li id="147SRMPTUGAV">147SRMPTUGAV</li>
<li id="147SRS1U00">147SRS1U00</li>
<li id="147SRS1UGA">147SRS1UGA</li>
<li id="147SRS1UGV">147SRS1UGV</li>
<li id="147SRS3TG0">147SRS3TG0</li>
<li id="147SRS4UGAV">147SRS4UGAV</li>
<li id="149-100">149-100</li>
<li id="157-020-5900">157-020-5900</li>
<li id="157-100">157-100</li>
<li id="157-104U005004M">157-104U005004M</li>
<li id="157-400MP1300C">157-400MP1300C</li>
<li id="157-400MP1300C">157-400MP1300C</li>
<li id="157-420MP1300C">157-420MP1300C</li>
<li id="15712459U005004M">15712459U005004M</li>
<li id="157DA00G0">157DA00G0</li>
<li id="157DAABS500V">157DAABS500V</li>
<li id="157DAMPTUGA">157DAMPTUGA</li>
<li id="157DAS1SGV">157DAS1SGV</li>
<li id="157DAS1UG0">157DAS1UG0</li>
<li id="157DAS1UGV">157DAS1UGV</li>
<li id="157DAS2U00">157DAS2U00</li>
<li id="157DAS3U0A">157DAS3U0A</li>
<li id="157DASM0GV">157DASM0GV</li>
<li id="157GB">157GB</li>
<li id="157SR00G0">157SR00G0</li>
<li id="157SR0UG0">157SR0UG0</li>
<li id="157SRS1UGA">157SRS1UGA</li>
<li id="167-020">167-020</li>
<li id="167-100">167-100</li>
<li id="167-104U005014M">167-104U005014M</li>
<li id="167-120">167-120</li>
<li id="167-124U005014M">167-124U005014M</li>
<li id="167-400HP13E0C">167-400HP13E0C</li>
<li id="167-400MP1300C">167-400MP1300C</li>
<li id="167-420HP13E0C">167-420HP13E0C</li>
<li id="167DA00G0">167DA00G0</li>
<li id="167DA00G00">167DA00G00</li>
<li id="167DAHPU0P0">167DAHPU0P0</li>
<li id="167DAS1S00">167DAS1S00</li>
<li id="167DAS3000">167DAS3000</li>
<li id="167DAS30GV">167DAS30GV</li>
<li id="167DAS3SGV">167DAS3SGV</li>
<li id="167DAS3U00">167DAS3U00</li>
<li id="167DAS3UGA">167DAS3UGA</li>
<li id="167DAS3X0B0">167DAS3X0B0</li>
<li id="167DAS4U07">167DAS4U07</li>
<li id="167DAS4UGAV">167DAS4UGAV</li>
<li id="167DAS4UGV">167DAS4UGV</li>
<li id="167DAS4XGA">167DAS4XGA</li>
<li id="167GB">167GB</li>
<li id="167SR00G0">167SR00G0</li>
<li id="167SR0UG0">167SR0UG0</li>
<li id="167SRELLG0">167SRELLG0</li>
<li id="167SRHPTUGAV">167SRHPTUGAV</li>
<li id="167SRS1U00">167SRS1U00</li>
<li id="167SRS3UGAV">167SRS3UGAV</li>
<li id="167SRS4UGAV">167SRS4UGAV</li>
<li id="187-020">187-020</li>
<li id="187-100">187-100</li>
<li id="187-104U005014M">187-104U005014M</li>
<li id="187-120">187-120</li>
<li id="187-124U005014M">187-124U005014M</li>
<li id="187-400HP13E0C">187-400HP13E0C</li>
<li id="187-400MP1300C">187-400MP1300C</li>
<li id="187-420HP13E0C">187-420HP13E0C</li>
<li id="187DA00G0">187DA00G0</li>
<li id="187DA00G00">187DA00G00</li>
<li id="187DAHPTUGV">187DAHPTUGV</li>
<li id="187DAS1X0F">187DAS1X0F</li>
<li id="187DAS3000">187DAS3000</li>
<li id="187DAS30GV">187DAS30GV</li>
<li id="187DAS3SGV">187DAS3SGV</li>
<li id="187DAS3U00">187DAS3U00</li>
<li id="187DAS3UGA">187DAS3UGA</li>
<li id="187DAS40G0">187DAS40G0</li>
<li id="187DAS4U00">187DAS4U00</li>
<li id="187DAS4UGAV">187DAS4UGAV</li>
<li id="187DAS4UGV">187DAS4UGV</li>
<li id="187GB">187GB</li>
<li id="187SR00G0">187SR00G0</li>
<li id="187SR0TG12">187SR0TG12</li>
<li id="187SR0UG0">187SR0UG0</li>
<li id="187SRELLG0">187SRELLG0</li>
<li id="187SRHPTUGAV">187SRHPTUGAV</li>
<li id="187SRS1U00">187SRS1U00</li>
<li id="187SRS4UGAV">187SRS4UGAV</li>
<li id="207-020">207-020</li>
<li id="207-100">207-100</li>
<li id="207-104U005014M">207-104U005014M</li>
<li id="207-120">207-120</li>
<li id="207-124U005014M">207-124U005014M</li>
<li id="207-400HP13E0C">207-400HP13E0C</li>
<li id="207-400MP1300C">207-400MP1300C</li>
<li id="207-420HP13E0C">207-420HP13E0C</li>
<li id="207DA00G0">207DA00G0</li>
<li id="207DAS40G0">207DAS40G0</li>
<li id="207DAS4UGAV">207DAS4UGAV</li>
<li id="207GB">207GB</li>
<li id="207SR00G0">207SR00G0</li>
<li id="207SRS5T08">207SRS5T08</li>
<li id="307-020">307-020</li>
<li id="307-100">307-100</li>
<li id="307-104U005014M">307-104U005014M</li>
<li id="307-120">307-120</li>
<li id="307-124U005014M">307-124U005014M</li>
<li id="307-400HP13E0C ">307-400HP13E0C </li>
<li id="307-400MP1300C">307-400MP1300C</li>
<li id="307-420HP13E0C">307-420HP13E0C</li>
<li id="307DA00G0">307DA00G0</li>
<li id="307GB">307GB</li>
<li id="307SR00G0">307SR00G0</li>
<li id="3222BVLLXLP1">3222BVLLXLP1</li>
<li id="ASP1607">ASP1607</li>
<li id="ASP1608">ASP1608</li>
<li id="ASP1609">ASP1609</li>
<li id="ASP329">ASP329</li>
<li id="ASP389">ASP389</li>
<li id="ASP400">ASP400</li>
<li id="ASP638">ASP638</li>
<li id="C5N111">C5N111</li>
<li id="C5N121">C5N121</li>
<li id="C5N131">C5N131</li>
<li id="C5N141">C5N141</li>
<li id="C5N151">C5N151</li>
<li id="C5N161">C5N161</li>
<li id="C5N211">C5N211</li>
<li id="C5N212">C5N212</li>
<li id="C5N213">C5N213</li>
<li id="C5N221">C5N221</li>
<li id="C5N222">C5N222</li>
<li id="C5N223">C5N223</li>
<li id="C5N231">C5N231</li>
<li id="C5N232">C5N232</li>
<li id="C5N233">C5N233</li>
<li id="C5N241">C5N241</li>
<li id="C5N242">C5N242</li>
<li id="C5N243">C5N243</li>
<li id="C5N251">C5N251</li>
<li id="C5N252">C5N252</li>
<li id="C5N253">C5N253</li>
<li id="C5N261">C5N261</li>
<li id="C5N262">C5N262</li>
<li id="C5N263">C5N263</li>
<li id="C5N311">C5N311</li>
<li id="C5N313">C5N313</li>
<li id="C5N321">C5N321</li>
<li id="C5N331">C5N331</li>
<li id="C5N341">C5N341</li>
<li id="C5N351">C5N351</li>
<li id="C5N351LW">C5N351LW</li>
<li id="C5N353LW">C5N353LW</li>
<li id="C5N361">C5N361</li>
<li id="C7B211">C7B211</li>
<li id="C7B212">C7B212</li>
<li id="C7B213">C7B213</li>
<li id="C7B222">C7B222</li>
<li id="C7B223">C7B223</li>
<li id="C7B232">C7B232</li>
<li id="C7B233">C7B233</li>
<li id="C7B242">C7B242</li>
<li id="C7B243">C7B243</li>
<li id="C7B251">C7B251</li>
<li id="C7B252">C7B252</li>
<li id="C7B253">C7B253</li>
<li id="C7B262">C7B262</li>
<li id="C7B263">C7B263</li>
<li id="C7B311">C7B311</li>
<li id="C7B313">C7B313</li>
<li id="C7B351LW">C7B351LW</li>
<li id="C7B353">C7B353</li>
<li id="C7B353LW">C7B353LW</li>
<li id="C7BSC0165">C7BSC0165</li>
<li id="CPU-4303">CPU-4303</li>
<li id="FCV-3-316">FCV-3-316</li>
<li id="FCV-5-316">FCV-5-316</li>
<li id="KC5NSC0166">KC5NSC0166</li>
<li id="KCSNSC0166">KCSNSC0166</li>
<li id="MKSS05-15MNTPLT">MKSS05-15MNTPLT</li>
<li id="MKSS147DAPS2POS">MKSS147DAPS2POS</li>
<li id="MKSS167DAPS2POS">MKSS167DAPS2POS</li>
<li id="MKSS16MNTPLT ">MKSS16MNTPLT </li>
<li id="MKSS16MPASCO8344">MKSS16MPASCO8344</li>
<li id="MKSS187DAPS2POS">MKSS187DAPS2POS</li>
<li id="MKSS18MNTPLT">MKSS18MNTPLT</li>
<li id="MKSS20MNTPLT">MKSS20MNTPLT</li>
<li id="MKSSAPOVRD">MKSSAPOVRD</li>
<li id="MKSSREGMNTPLT">MKSSREGMNTPLT</li>
<li id="MKSSXLSVRSAC7">MKSSXLSVRSAC7</li>
<li id="P31FB92EGMN">P31FB92EGMN</li>
<li id="R3013">R3013</li>
<li id="S7B212">S7B212</li>
<li id="SCM-28">SCM-28</li>
<li id="ST809129">ST809129</li>
<li id="V025B253">V025B253</li>
<li id="V050B211">V050B211</li>
<li id="V050B213">V050B213</li>
<li id="V050B311">V050B311</li>
<li id="V050B351LW">V050B351LW</li>
<li id="V050B353LW">V050B353LW</li>
<li id="V075B211">V075B211</li>
<li id="V075B213">V075B213</li>
<li id="V075B311">V075B311</li>
<li id="V075B351LW">V075B351LW</li>
<li id="V075B353LW">V075B353LW</li>
<li id="V100B211">V100B211</li>
<li id="V100B213">V100B213</li>
<li id="V100B311">V100B311</li>
<li id="V100B351LW">V100B351LW</li>
<li id="V100B353LW">V100B353LW</li>
</ul>
</div></div>
<div id="postdeets">Active part posts:  <div id="postnumber"> </div><?php echo do_shortcode("[wp_colorbox_media url='#posts' type='inline' hyperlink='(Show List)']");?></div>
<!-- hide div containing table of main content of status check and show div with ul postlist clone/appended/showed
 -->

<hr><div id="bundhandler">
 <div id="statustable">
 	<div id="togglecols"> Toggle Column:<div id="togglecolslist" style="padding-left:13px;">
 		<a class="togglebutty" datacol="1" href="#">CA File</a> |
		<a class="togglebutty" datacol="2" href="#">CA Contents</a> |
		<a class="togglebutty" datacol="3" href="#">WP Posted</a> |
		<a class="togglebutty" datacol="4" href="#">Active Rev</a> |
		<a class="togglebutty" datacol="5" href="#">PDF Drawing</a> |
		<a class="togglebutty" datacol="6" href="#">STEP Drawing</a> |
		<a class="togglebutty" datacol="7" href="#">SLDPRT Drawing</a> |
		<a class="togglebutty" datacol="8" href="#">SLDDRW Drawing</a> |
		<a class="togglebutty" datacol="9" href="#">DWG Drawing</a>
</ul>      

					</div></div>
      
<?php
/*echo postcheck('077-100');*/
/*var_dump($listarray);*/
?>
<table id="bundaroo">
	<thead><td>Part #:</td>
		   <td>CA File</td>
		   <td>CA Contents</td>
		   <td>WP Posted</td>
		   <td>Active Rev</td>
		   <td>PDF Drawing</td>
		   <td>STEP Drawing</td>
		   <td>SLDDRW Drawing</td>
		   <td>SLDPRT Drawing</td>
		   <td>DWG Drawing</td>
		</thead>
<?php
foreach ($listarray as $key => $value) {
	$drawzilla = basedrawingfiles($value);
    echo "<tr>
    	  <td>$value</td>
    	  <td>". custassemfile($value) . "</td>
    	  <td>". custassemcontents($value) . "</td>
    	  <td>". postcheck($value) . "</td>
    	  <td>". revPull($value) . "</td>
    	  <td>". $drawzilla['pdf'] . "</td>
    	  <td>". $drawzilla['step'] . "</td>
    	  <td>". $drawzilla['slddrw'] . "</td>
    	  <td>". $drawzilla['sldprt'] . "</td>
    	  <td>". $drawzilla['dwg'] . "</td>
    	  


    	  </tr>";
}

?>



</table>



 </div>
</div>

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
<script type='text/javascript' src='http://localhost/wordpress2/wp-content/plugins/wp-filebase/extras/jquery/dataTables/js/jquery.dataTables.min.js'></script>

<script type="text/javascript">
jQuery(document).ready(function() {

	/*jQuery('div#posts').hide();*/
	var postnumbs = jQuery("ul#postlist").children().length;
	
	jQuery("div#postnumber").text(postnumbs);

	var tabledog = jQuery("table#bundaroo").DataTable();
    
jQuery('a.togglebutty').bind('click', function(e) {
	/*alert('wtf');*/
	e.preventDefault();

	var column = tabledog.column( jQuery(this).attr('datacol') );

	if( column.visible()) {
		column.visible( ! column.visible() );
	}else { column.visible(  true );};

	/*column.visible( ! column.visible() );*/
   
});  // close toggler if handler 


jQuery('#bundaroo td:contains("Yes")').addClass('yes');
jQuery('#bundaroo td:contains("No")').addClass('no');
jQuery('#bundaroo thead td').addClass('catfished');




/*alert(jQuery('li.togglebutty').length);*/

	
/*	jQuery('span#clickshow').click(function() {

                     jQuery('div#posts').show();
	});*/
	



    });  // closing document ready function





</script>
<?php wp_footer(); ?>
</body>
</html>