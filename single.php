<?php
/**
 * The template for displaying all single posts.
 *
 * @package Green Lake
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
			while ( have_posts() )
			{
				the_post();
				get_template_part( 'content', 'single' );
				the_post_navigation();
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			}
	  	?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
