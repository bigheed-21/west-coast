<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package spencer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
         <div class="hero">
          
           <h1>West Coast Cranes Inc is Vancouver Island's #1 overhead crane company.</h1>
        
           <a href="/spencer/services/" class="btn-cta alt">Our Services</a>
         </div>
        <!-- <div class="hero">
            
          </div> -->
          
          <? /* php if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider();  */ ?>
          <section class="about-us">
            <h4>About Us</h4>
            <p>West Coast Cranes Inc, Vancouver Islands' dedicated overhead crane company.</p>
            <br>
            <p>We offer highly trained service for all types of lifting equipment. With a combined 60,000 hours of crane experience and backed by all major industry suppliers, we deliver world class service to keep your crane running safely.</p>
          </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
