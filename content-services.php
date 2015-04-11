<?php /* 

  Template Name: Serivces

*/ get_header(); ?>


    <div class="services-block">
        <h1>Our <?php the_title(); ?></h1>

        <div class="services-block">
          <?php 
            $args = array( 'post_type' => 'service');
            $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post();
          
            echo '<div class="block">';
  
                echo '<h3>';
                  the_title();
                echo '</h3>';

                
                  the_content();  
                

            echo '</div>';

            endwhile;
          ?>
        </div>
      </div>    
    

<?php get_footer(); ?>

