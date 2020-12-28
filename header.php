<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div  id="wrapper" class="page-wrapper hfeed">
<header  class="header" id="header">
<div class="header__logo" id="branding">
<div id="site-title">
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
</div>
</div>
<nav class="header__nav" >
  <div class="hamburger-container">
    <ul class="hamburger">
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <ul class="nav__menu" id="menu">
    <?php wp_nav_menu( array('theme_location' => 'main-menu')); ?>
  </ul>
</nav>
</header>
<div id="container">