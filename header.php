<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:image" content="https://www.stevenpulido.com/wp-content/uploads/2017/06/facebook_screen.png">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>


	<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>


        <ul class="social nav navbar-nav col-sm-4 col-md-3 col-lg-3">
          <li>
            <a target="_blank" href="https://www.facebook.com/spolido1"><img src="<?php bloginfo('url')?>/wp-content/uploads/2017/06/facebook-letter-logo.svg" /></a>
          </li>
          <li>
            <a target="_blank" href="https://www.linkedin.com/in/spolido/"><img src="<?php bloginfo('url')?>/wp-content/uploads/2017/06/linkedin-logo.svg" /></a>
          </li>
          <li>
            <a href=""><img src="<?php bloginfo('url')?>/wp-content/uploads/2017/06/dribbble-logo.svg" /></a>
          </li>
          <li>
            <a href=""><img src="<?php bloginfo('url')?>/wp-content/uploads/2017/06/behance-logo.svg" /></a>
          </li>
        </ul>

          <div class="site-branding col-sm-3 col-md-5 col-lg-6">
            <h1 class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo( 'url' ); ?>/wp-content/uploads/2017/06/logo.svg"/></a></h1>
            <p class="site-description lead"><?php bloginfo( 'description' ); ?></p>
          </div>
          
          <!-- The WordPress Menu goes here -->
          <?php wp_nav_menu(
            array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_id'      => 'navbar',
              'container_class'   => 'navbar-collapse collapse navbar-right',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'menu_id'           => 'main-menu',
              'walker'            => new wp_bootstrap_navwalker()
            )
          ); ?>
      </div>
    </nav>

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-12">

