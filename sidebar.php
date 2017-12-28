<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SweetWorld
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="col-3">
	<?php	the_custom_logo(); ?>
		<h1 class="my-4"><?php bloginfo( 'name' ); ?></h1>
	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) :
	?>
		<!--<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>-->
	<?php	endif; ?>
	<?php
	wp_nav_menu( array(
		'menu' => 'Menu_X_Categorias',
		'menu_id'        => 'secondary-menu',
		'container' 		 => 'div',
		'container_class' 		 => 'list-group',
		'items_wrap' => '%3$s', // removes ul
		'walker' => new Description_Walker // custom walker to replace li with div
	));
	?>
	<?php
	 dynamic_sidebar( 'sidebar-1' );
	 ?>
</aside><!-- #secondary -->
