<?php 
/* Template Name: Standard Page Template */ 

include(dirname(__FILE__) . '/template-parts/header.php'); 
?>
  <div class="content-page">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div id="index"></div>

<?php 
include(dirname(__FILE__) . '/template-parts/footer.php'); 
?>