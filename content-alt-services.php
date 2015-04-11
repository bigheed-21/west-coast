<?php 

/* Template Name: Alternative Services */

get_header(); ?>
      

            
      <?php
            $args = array(
              'post_type' => 'page',
              'post__in' => array( 30, 28 ) 
            );
            $page_query = new WP_Query( $args );
            
            if( $page_query->have_posts() ) :
                echo '<div class="pages-on-page">';

                  while( $page_query->have_posts() ) : $page_query->the_post();
                
                echo '<div class="page-on-page" id="page_id-' . $post->ID . '">';
                echo '<div class="container">';      
                  echo '<h1 class="custom-page-header">'; the_title(); echo '</h1>'; 
                   the_content();
                echo '</div>';
                echo '</div>';
            
                  endwhile;
                
                echo '</div>';
              
              else:

            endif;
            wp_reset_postdata();
      ?>
      
     
<?php get_footer(); ?>