<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Big_Flash
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>
			<div class="content-block">
				<div class="wrapper">
					<h1>Tulokset hakusanalle: </h1>
					<span class="search-query">"<?php echo get_search_query();?>"</span>
<ul class="search-results">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :?>
			<li>
				<?php the_post();?>
				
				<?php /**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content-search');?>
				</li>
			<?php endwhile;?>
			
			</ul>
			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		
		<?php get_search_form();?>
		</div>
		</div>
	</main><!-- #main -->

<?php
/*get_sidebar();*/
get_footer();
