<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package minimagazine
 */
 get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	
	<section id="mainContentWrapper" class="container">
		<section id="mainContent" class="eleven columns">
			<article class="singlePost">
				<?php 
					the_content(); 
					wp_link_pages();
				?>
				
			</article><!-- end .singlePost -->


		</section><!-- end #mainContent -->
		<?php get_sidebar(); ?>
	</section><!-- end #mainContentWrapper -->
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
