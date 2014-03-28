<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    /* Let the rest of the framework put its stuff in the head */
    wp_head();
    ?>
  </head>

  <body>
    <div class=' container-fluid'>
      <div class='row header'>
	<div class='col-lg-6 col-md-6 col-sm-6 navset'>
	  <div class='col-lg-4 col-md-3 col-sm-4 navitem'>
	    <div class="center">
	      <img class='img-responsive inline' src="<?php echo get_template_directory_uri() ?>/images/phone-icon.png">
	    650-996-0998
	    </div>
	  </div>
	  <div class='col-lg-4 col-md-4 col-sm-4 navitem'>
	    <div class="center">
	      <a href="mailto:info@dstrategies.org"><img class='img-responsive inline' src='<?php echo get_template_directory_uri() ?>/images/email-icon.png'>
		info@dstrategies.org</a>
	    </div>
	  </div>
	  <div class='col-lg-4 col-md-3 col-sm-4 navitem  lastitem'>
	    <div class="center">
	      <img class='img-responsive inline' src='<?php echo get_template_directory_uri() ?>/images/poi-icon.png'>
	      Oakland, CA
	    </div>
	  </div>
	</div>

	<div class='col-lg-6 col-md-6 col-sm-6 navset'>
	  <div class='col-lg-8 col-md-6 col-sm-6 '>
	  </div>
	  <div class='col-lg-2 col-md-3 col-sm-3 navitem sm'>
	    <div class="center">
	      <img class='img-responsive inline' src='<?php echo get_template_directory_uri() ?>/images/fb-100-logo.png'>
	    </div>
	  </div>
	  <div class='col-lg-2 col-md-3 col-sm-3 navitem sm sm-twitter lastitem'>
	    <div class="center">
	      <img class='img-responsive inline' src='<?php echo get_template_directory_uri() ?>/images/Twitter_logo_blue.png'>

	    </div>
	  </div>
	</div>

      </div> <!-- end of header -->
    </div> <!--- Container -->

    <div class='container-fluid banner'>
      <div class='row'>
	<div class='bannercontent'>
	  <div class='col-md-8 col-sm-8 col-lg-8'>
	    <a href="<?php echo site_url() ?>"><img style="padding-bottom: 10px;" class='img-responsive' src='<?php echo get_template_directory_uri() ?>/images/full_banner.jpg'></a>
	  </div>
	  <div class='col-md-4 col-sm-4 col-lg-4'>

            <?php wp_nav_menu( array(
              'show_home' => '0',
	      'container' => false,
              'menu_class' => 'bannernav',
              'theme_location' => 'header_menu',
	    ) ); 
	    ?>


	  </div>
	</div> <!-- end of bannercontent -->

      </div> <!-- end of banner -->
    </div>
    