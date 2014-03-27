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
	  <div class='col-lg-3 col-md-3 col-sm-3 navitem'>
	    <img class='img-responsive inline' src="<?php echo get_template_directory_uri() ?>/images/phone-icon.png">
	    650-996-0998
	  </div>
	  <div class='col-lg-4 col-md-4 col-sm-4 navitem'>
	    <a href="mailto:info@dstrategies.org"><img class='img-responsive inline' src='<?php echo get_template_directory_uri() ?>/images/email-icon.png'>
	    info@dstrategies.org</a>
	  </div>
	  <div class='col-lg-3 col-md-3 col-sm-3 navitem lastitem'>
	    <img class='img-responsive inline' src='<?php echo get_template_directory_uri() ?>/images/poi-icon.png'>
	    Oakland, CA
	  </div>

	  <div class='col-lg-2 col-md-2 col-sm-2 '>
	  </div>
	</div>

	<div class='col-lg-6 col-md-6 col-sm-6 navset'>
	  <div class='col-lg-10 col-md-10 col-sm-10 '>
	  </div>
	  <div class='col-lg-1 col-md-1 col-sm-1 navitem sm'>
	    <img class='img-responsive inline' src='<?php echo get_template_directory_uri() ?>/images/fb-100-logo.png'>
	  </div>
	  <div class='col-lg-1 col-md-1 col-sm-1 navitem sm sm-twitter'>
	    <img class='img-responsive inline' src='<?php echo get_template_directory_uri() ?>/images/Twitter_logo_blue.png'>

	  </div>
	</div>

      </div> <!-- end of header -->
    </div> <!--- Container -->

    <div class='container-fluid banner'>
      <div class='row'>
	<div class='bannercontent'>
	  <div class='col-md-8 col-sm-8 col-lg-8'>
	    <a href="<?php echo site_url() ?>"><img class='img-responsive' src='<?php echo get_template_directory_uri() ?>/images/full_banner.jpg'></a>
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
    