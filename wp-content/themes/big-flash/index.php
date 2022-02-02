<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_Flash
 */

get_header();
?>
<div class="site-branding">
			
			<?php if ( get_field( 'hero_image', 'option' ) ) : ?>
				<img src="<?php the_field( 'hero_image', 'option' ); ?>" />
			<?php endif ?>
		</div><!-- .site-branding -->
			<div class="image-container">
				<?php if (have_rows('partner_logo', 'option')):
					while(have_rows('partner_logo', 'option')) : the_row();
						$logo_file = get_sub_field('partner_logo_file', 'option');
		?>
		<img src="<?php echo $logo_file;?>">
						
				<?php endwhile;
			endif;
				?>
			</div>
	

	

<?php
//get_sidebar();
get_footer();
