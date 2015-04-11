<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package spencer
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'> 
<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php include_once("build/svg/svg-symbols.svg"); ?>
<div id="page" class="hfeed site">
    
    <header class="phone-numbers">
      <p>250-508-9155</p>
      <a href="/spencer/contact/" class="quote">Get A Free Quote</a>
    </header>
    
	<header id="masthead" class="site-header" role="banner">
      <div class="container">		
		<div class="site-branding">
		  <svg class="icon logo">
            <use xlink:href="#logo"></use>
          </svg>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->
        
		<nav id="site-navigation" class="main-navigation" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
          
        </nav>
        
        <!-- Mobile Navigation -->
        
        <a href="#" class="nav-trigger">
          <span class="menu-icon"></span>
        </a>
        
        <div class="mobile-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'primary-menu' ) ); ?>
        </div>
        
      </div>
	</header><!-- #masthead -->
    
    
    
	<div id="content" class="site-content">
