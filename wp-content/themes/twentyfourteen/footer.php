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

                 /* class="dataTable no-footer"*/  //make inline style width  182px 

                /*alert("sup3");*/

                //remove top blank line in filebase search sidebar ish 
                jQuery('.dataTables_scrollBody th').toggle();
         
                //get active rev desired to show first, passed from content.php and rev.txt content logic
                var activerev = "";
                activerev = jQuery('#activeRevPassing').text();
                 jQuery('#activeRevPassing').remove();
                /*alert(activerev);*/

                //hide image bar if on addnew page
         if(window.location.href.indexOf("addnew") > -1) {
               jQuery('#imagesbar').hide();
            }

            //#filebaseholder, hide all revs divs by default, then show only rev text chosen first to start 
            jQuery('#filebaseholder').children().hide();
             jQuery("#filebaseholder div#" + activerev).show();

            //rev change dropdown div hide logic
             jQuery('.revdropdown select[name="revchange"]').change(function () {
      /*  if (jQuery('#contact select[name="select-question"]').val() == 'question') {
            jQuery('#comments').show();
        } else {
            jQuery('#comments').hide();
        }*/
         jQuery('#filebaseholder').children().hide();
         var chosendropdown = "";
         chosendropdown =   jQuery('.revdropdown select[name="revchange"]').val();
           jQuery("#filebaseholder div#" + chosendropdown).show();

           if( jQuery('.revdropdown select[name="revchange"]').val() == 'all'){
               jQuery('#filebaseholder').children().show();
           }

           /* alert('changey');*/
            });



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
                        jQuery('.linkinpark:eq(0)').css("margin-left", "10px");




                           }


       jQuery('div.dataTables_scrollBody').css('overflow-x','hidden');
      


            });  // close doucment ready funciton 



       
                         	
              





	</script>
</body>
</html>






