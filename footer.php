<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SweetWorld
 */

?>

	</div><!-- #content -->
</div><!-- #page -->

<footer id="colophon" class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Copyright © %1$s %2$s by %3$s.', 'sweetworld' ), 'sweetworld', date('Y'), '<a href="http://underscores.me/">Jeffrey Cortés</a>' );
			?>
		</p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
