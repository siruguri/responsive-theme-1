<?php
/*
Template Name: Inner Pages
*/


get_header();
?>

<div class='container'>
  <div class='row innerpage-content'>

    <?php
    // Start the Loop.
    while ( have_posts() ) {
      the_post();
    ?>
      <div class="post-summary">
	<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" 
	  <span class="post-title"><?php the_title(); ?></span>
	</a>
	<?php 
	the_content();

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
	  comments_template();
	}
	?>
      </div>
    <?php
    }
      
    ?>
  </div>
</div>

<?php get_footer(); ?>
