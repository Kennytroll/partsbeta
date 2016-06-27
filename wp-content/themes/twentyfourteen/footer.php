<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'https://bitnami.com/stack/wordpress/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'Bitnami WordPress Module' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

	<script type="text/javascript">


         jQuery(document).ready(function() {
                /*	jQuery(".header-main").hide();
                	alert("rawr");*/

                /*alert("sup3");*/
 if(window.location.href.indexOf("addnew") > -1) {
       jQuery('#imagesbar').hide();
    }

               if (jQuery(window).width() < 950) {
                          	 	 /*alert("smalla");*/
                          	 /* jQuery("#content-sidebar").appendTo(".entry-content").addClass("sideshifty").css("margin-top","-55px");*/
                         	/*  jQuery('.site-content').css("margin-right","12%");
                         	  jQuery('.widget').css("text-align","center");  */

                                                 	  jQuery('#content-sidebar').children().appendTo('div#primary-sidebar.primary-sidebar.widget-area aside#text-5.widget.widget_text');
                        jQuery('#text-4.widget.widget_text').hide();
                        jQuery('#text-5.widget.widget_text').children().addClass("sidebarlistaloo");
                        jQuery('.sidebarlistaloo h1.widget-title').css("margin","13px -10px");
                        jQuery('.recentviewed_post, .widget_recent_entries ul').css("line-height", "10px");
                        /*alert("do work");*/
                        jQuery('.site-content').css("margin-right", "9.05%");




                           }


       


            });  // close doucment ready funciton 



       
                         	
              





	</script>
</body>
</html>






