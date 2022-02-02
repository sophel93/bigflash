<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Big_Flash
 */

get_header();
?>

	<main id="primary" class="site-main single">
		
		<?php
		while ( have_posts() ) :?>
			
				<?php the_post(); ?>
			

			<?php get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<i class="fas fa-chevron-left" style="margin-right: 1em"></i> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-title">%title</span> <i class="fas fa-chevron-right"style="margin-left: 1em"></i> ',
				)
			);

		endwhile; // End of the loop.
		?>
		
	</main><!-- #main -->

<?php
get_footer();
