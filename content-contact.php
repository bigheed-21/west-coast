<?php get_header();

/* Template Name: Contact  */


?>

  <div class="contact-block">
    <h1><?php the_title(); ?></h1>
  
  
  <div class="container">
    <div class="address">
      <h5>By Mail:</h5>
      <p>#304 - 866 Goldstream Avenue <br> Victoria, BC <br> V9B 0J3</p>
    </div>

    <div class="company-contacts">

        <div class="contact-info"> 
          <h3>Company Contacts</h3>
          <div class="employee-block"> 
            <h4>Spencer West</h4>
            <div class="meta">
              <h5>250-508-9155</h5>
              <h5>spencer@wccranes.com</h5>
            </div>
          </div>
           
          <div class="employee-block"> 
            <h4>Steve West</h4>
            <div class="meta">
              <h5>250-508-9156</h5>
              <h5>steve@wccranes.com</h5>
            </div>
          </div>
          
        </div>

    </div>  
  </div>
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
    </div>
  <?php endif; ?>
  
</div>

<?php get_footer(); ?>