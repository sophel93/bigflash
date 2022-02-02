<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big_Flash
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<?php echo do_shortcode(get_field('footer_newsletter_form', 'option'));?>
		<?php if( have_rows('footer_social_item', 'option') ): ?>
 
 <ul>

	 <?php while( have_rows('footer_social_item', 'option') ): the_row(); ?>

		 <li>
			 <a href="<?php the_sub_field('social_item_url', 'options')?> "><?php the_sub_field('social_item_icon', 'option'); ?></a>
		</li>

	 <?php endwhile; ?>

 </ul>

<?php endif; ?>
		</div><!-- .site-info -->
		<div class="site-info">
		<?php $content = the_field( 'footer_content_container', 'option' ); 
			
			?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
