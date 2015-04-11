<?php /* 

  Template Name: Sale

*/ get_header(); ?>


<div class="container">
  <h1 class="sale-header"><?php the_title(); ?></h1>
  <div class="sales-header">
    <h3>Free Delivery on 10+ Units</h3>
  </div>
  <section class="sales">
     <div class="center">
      <?php 

            $args = array( 'post_type' => 'sale');
            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            
            
            
            
            
            <?php $image = get_field('product_image'); ?>
            <div class="product-container">
              
              <div class="product-info">  
                 <h1><?php the_field('product_title'); ?></h1>
                  <p><?php the_date(); ?></p>
                  <p class="sale-description"><?php the_field('description'); ?></p>
                  
                  <?php $url = wp_get_attachment_url( $attachment_id ); 
                        $file = get_field('link_to_flyer');
                  ?>
                  
                  
                 <a href="<?php echo $file['url']; ?>" class="flyer-link" target="_blank">Download the Flyer</a>                 
              </div>
              
              </div>
            
          <?php endwhile; ?>
        </div>
    </section>

    
    





</div>







<?php get_footer(); ?>