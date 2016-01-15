<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>




	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Drawing Not Found', 'twentyfourteen' ); ?></h1>
			</header>

			<div class="page-content">
				<div class="linkinpark" style="width:400px;padding-top:-10px;margin-top:-10px;">
				<p><?php _e( '', 'twentyfourteen' ); ?></p>

				Maybe try a search?<br/><?php get_search_form(); ?><hr><br /> 
						  
			
<center><?php echo do_shortcode("[wp_colorbox_media url='#formy' type='inline' hyperlink='Email a Drawing Request']");?></center>

			  
<div style="display: none;">
 <div id="formy" style="padding: 15px; background: #FFF;">
<FORM Action="http://kusa-bu/wordpress/mailer.php" METHOD="POST" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="imagethree"><center><strong>Drawing Request</strong></center><hr>
	
	Requested by (email address): <INPUT id="email" name="email" value="" style="background-color:#FFEDC5;"><br />
	Part Requested: <INPUT id="drawing" name="drawing" value="" style="background-color:#FFEDC5;margin-top:10px;">
	<Br><Br>Comments:&#xa0;
	<TEXTAREA id="comments" name="comments" value="" style="padding-bottom:220px;background-color:#FFEDC5;" >
	</TEXTAREA>
	<BR>
	<INPUT type="submit" value="Drawing Request (Email)"> 
</FORM> </div></div></div>



</div>
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->
<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();

