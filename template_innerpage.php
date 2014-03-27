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
} else { ?>
  <p><?php _e('Sorry, no posts matched your criteria.', 'stone-soup'); ?></p>

  <?php 
} ?>


?>

<?php get_footer(); ?>
