<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_Flash
 */

?>

<div class="content-block">

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Ei tuloksia', 'big-flash' ); ?></h1>
	</header><!-- .page-header -->

		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'big-flash' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Hakuehdoillasi ei löytynyt tuloksia, kokeile toisia hakusanoja.', 'big-flash' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'Näyttää siltä, ettemme löydä etsimääsi. Kokeile hakua.', 'big-flash' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	<!-- .page-content -->
</section><!-- .no-results -->
	</div>