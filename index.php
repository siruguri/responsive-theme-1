<?php get_header(); ?>

<!-- home page body here -->
<div class='container'>
  <div class='row home-content'>
    <div class="col-xs-12">
      <p>
	<?php
	if (have_posts()) {
	  while(have_posts()) {
	    the_post();
	    
	    the_content();
	  }
	}
	?>
<!--	We build websites, databases and social media strategies that are easy and cheap for nonprofits, social sector organizations, and small businesses to implement, use and maintain.
-->

      </p>
    </div>
  </div> <!-- end of main-content -->
</div> <!-- end of main-content container -->

<?php get_footer(); ?>

