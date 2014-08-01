<?php
/*
Template Name: Inner Pages
*/


get_header();
?>
<div class='container'>
  <div class='row innerpage-content'>

    <?php

    if (have_posts()) {
      while(have_posts()) {
	the_post();
	
	the_content();
      }
    }
    ?>
  </div>
</div>

<?php get_footer(); ?>
