<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SweetWorld
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css"  media="screen,projection"/>
	<!--.js-->
   <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery"></script>
   <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.bundle.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav id="site-navigation" class="navbar navbar-expand-lg navbar-dark bg-dark ">--fixed-top
	<div class="container">
		<a class="navbar-brand" href="#">Start Bootstrap</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class' 		 => 'navbar-nav ml-auto',
				'container_class' => 'collapse navbar-collapse'
			) );
		?>
	</div>
</nav><!-- #site-navigation -->

<div id="page" class="container">

	<!--<a class="my-4" href="#content"><?php esc_html_e( 'Skip to content', 'sweetworld' ); ?></a>-->

	<div id="content" class="row">
