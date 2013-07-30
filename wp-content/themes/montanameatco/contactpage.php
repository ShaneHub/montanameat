<?php

/* Template Name:  ContactPage

*/

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="entry-title">
					<?php the_title(); ?>
                </h1>
                <div id="contact-block">
                	<?php the_content(); ?>
                </div>
				<?php // comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
            
            <div id="map-frame">
            	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?sll=45.67914089999996,-111.03553589999999&amp;sspn=0.00572679764340314,0.014977216695805795&amp;t=m&amp;q=104+E+Main+St,+Bozeman,+Mt&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=104+E+Main+St,+Bozeman,+Gallatin,+Montana+59715&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?sll=45.67914089999996,-111.03553589999999&amp;sspn=0.00572679764340314,0.014977216695805795&amp;t=m&amp;q=104+E+Main+St,+Bozeman,+Mt&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=104+E+Main+St,+Bozeman,+Gallatin,+Montana+59715&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
            </div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>