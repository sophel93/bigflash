<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Big_Flash
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Hups, hakemaasi sivua ei löytynyt.', 'big-flash' ); ?></h1>
			</header><!-- .page-header -->
			<?php get_template_part('template-parts/featured-posts');?>
			
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
