<?php
/*
Template Name: Inner Pages
*/


get_header();
?>
<div class='container'>
  <div class='row innerpage-content'>

    <?php
    $post = the_post();
    $content = apply_filters('the_content', $post->post_content); 
    echo $content; 
    ?>
  </div>
</div>

<?php get_footer(); ?>
