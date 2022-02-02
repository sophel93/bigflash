<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
		
	<?php get_template_part( 'template-parts/pagebuilder');
		get_template_part('template-parts/featured-posts');
		
		
		?>
<?php
//get_sidebar();
get_footer();
