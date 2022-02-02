<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big_Flash
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
		
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'big-flash' ); ?></a>

	<header id="masthead" class="site-header">
		
	

		<nav id="site-navigation" class="main-navigation">
		<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		
		if ( has_custom_logo() ) :
			echo '<a href="'	.	esc_url (home_url()) .	'"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
		endif;?>
		
			<button class="menu-toggle hamburger-menu" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars" style="transition: 0.3s;"></i></button>
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);?>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->
