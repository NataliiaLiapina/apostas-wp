<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apostas
 */

?>

	<footer class="footer" <?php if( get_field('background_footer') ): ?> style="background: url('<?php the_field('background_footer'); ?>') no-repeat center center; background-size: cover" <?php endif; ?>>
		<div class="container">
			<?php if( get_field('content_footer') ): ?>
			<div class="footer_content">
				<?php the_field('content_footer'); ?>
			</div>
			<?php endif; ?>
			<?php if( get_field('copyright') ): ?>
			<div class="footer_bottom">
				<?php the_field('copyright'); ?>
			</div>
			<?php endif; ?>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
