<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	
    	<img id="paperbottom" src="<?php echo esc_url(bloginfo('template_url')); ?>/images/butcherpaperBOTTOM.png" />
    </div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<div id="footercol-1">
            	<p><span class="bolder">Montana Meat Company</span><br />
            		104 E. Main Street<br />
                	Bozeman, MT 59715<br /><br />
                	415-580-1812
            	</p>
            </div>
            <div id="footercol-2">
            	<p><span class="bolder">Useful Links</span><br />
                <a href="<?php echo home_url(); ?>/retail-locations">Retail Locations</a><br />
               	<a href="<?php echo home_url(); ?>/restaurants">Restaurants</a><br />
               	<a href="<?php echo home_url(); ?>/careers">Careers</a><br />
            	</p>
            </div>
            <div id="facebookicon"><a href="facebook.com"><img src="<?php echo esc_url(bloginfo('template_url')); ?>/images/facebookicon.png" /></a>
            </div>
            <img id="footerlogo" src="<?php echo esc_url(bloginfo('template_url')); ?>/images/logo.png" />
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
   </div><!-- #blackboard -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>