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



		<div class="entry-meta">
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
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content"><?php
		$zergzerg = "/download/CustomerAssemblies/";
		$littlezerg= "/download/";
        $party =  get_the_title(); /* add code to pull rev to plug into spot where 1a is currently */
       
        //get file contents of download/$party/ 

		$filesfolder = "1A";



		
		$sitehome = site_url();
		
$bundaloo2 = $sitehome.$zergzerg.$party.".txt";
		//echo $bundaloo2. "<br />";
    $company = "Kinetrol";
    $applesauce="";
 $revsauce="";

$applesauce= file_get_contents($bundaloo2);  



//get len , then len -3 for rev 
// echo file_get_contents($bundaloo2,NULL,NULL,-4,64); echo "fudge";

if (strlen($applesauce)==15) {$company = $applesauce;}
else {$company = "Kinetrol";}

//echo "uhhh ".$company;

$slash="";
$slash="/";


$bigrichard="";
$company2= urlencode($company);
$bigrichard= $sitehome.$littlezerg.$company2.$slash.$party.$slash.$party."-rev.txt";
$revsauce= file_get_contents($bigrichard,NULL,NULL,-4,64);
//echo $bigrichard;
//echo $revsauce;


if (strlen($revsauce)== 2){$filesfolder=$revsauce; } 
	 else {$filesfolder="1A";}
//echo $filesfolder;
$subpartsfolder = $filesfolder." Assembly";
 ?>


		<center style="padding-bottom:11px;"><div class="imagethree">
<a class="wp-colorbox-image cboxElement" href="<?php bloginfo('url'); ?>/download/<?php echo $company.'/'. get_the_title() . '/' . 'Images' . '/'. get_the_title();?>-pic1.JPG"><img src="<?php bloginfo('url'); ?>/download/<?php echo $company.'/'. get_the_title() . '/' . 'Images' . '/'. get_the_title();?>-pic1.JPG" width="30%" height="76" class="alignnone"></a> <a class="wp-colorbox-image cboxElement" href="<?php bloginfo('url'); ?>/download/<?php echo $company.'/'. get_the_title() . '/' . 'images' . '/'. get_the_title();?>-pic2.JPG"><img src="<?php bloginfo('url'); ?>/download/<?php echo $company.'/'. get_the_title() . '/' . 'images' . '/'. get_the_title();?>-pic2.JPG" width="30%" height="76" class="alignnone"></a> <a class="wp-colorbox-image cboxElement" href="<?php bloginfo('url'); ?>/download/<?php echo $company.'/'. get_the_title() . '/' . 'images' . '/'. get_the_title();?>-pic3.JPG"><img src="<?php bloginfo('url'); ?>/download/<?php echo $company.'/'. get_the_title() . '/' . 'images' . '/'. get_the_title();?>-pic3.JPG" width="30%" height="76" class="alignnone"></a></div></center>
		<br /><center>
		<?php 

		




           // get from parent category  // do short code using 
                                    // location for generate table to get url to pull from

		// get full url,  parse first x digits to get company name?///

              // full url then ../.// back syntax / get string lenght  / from full vs cut version to know legnth of company name directory

		echo do_shortcode("[wpfilebase tag=list path='$company/$party/$filesfolder/' tpl=main_dls pagenav=1 /]"); ?>
	<div class="linkinpark"> <?php echo do_shortcode("[wp_colorbox_media url='#catefish' type='inline' hyperlink='Subassembly files']");?></div> 
	<div class="linkinpark"> <?php echo do_shortcode("[wp_colorbox_media url='#dogfish' type='inline' hyperlink='3D Part View']");?> </div>















		 




		<br />
		 <div style="display: none;">
<div id="catefish" style="padding: 15px; background: #fff;">
<h5>Assembly Part Files</h5><?php echo do_shortcode("[wpfilebase tag=browser path='$company/$party/$filesfolder/$subpartsfolder' /]");?>
<br /></div>
<div id="dogfish" style="padding: 15px; background: #fff;"> <center><div style="margin:0px auto;"><?php echo do_shortcode("[kento_3dmv width='1000' height='600' source='../download/KINETROL/$party/Images/$party-$filesfolder.obj' /]");?> </div>
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




