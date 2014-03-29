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
	<div class='hidden-lg hidden-md hidden-sm col-xs-6  navset'>
	  <div class="col-xs-12 navitem">
	    <div class="center">
	      <ul>
		<li><?php $arr=get_option('stonesoup-contact-settings'); echo $arr['phone-number'] ?></li>
		<li><a href="mailto:info@dstrategies.org"><?php $arr=get_option('stonesoup-contact-settings'); echo $arr['email'] ?></a></li>
	      </ul>
	    </div>
	  </div>
	</div>

	<div class='col-lg-6 col-md-6 col-sm-6 hidden-xs navset'>
	  <div class='col-lg-4 col-md-3 col-sm-6 navitem'>
	    <div class="center">
	      <img class='img-responsive inline' style="vertical-align: middle" src="<?php echo get_template_directory_uri() ?>/images/phone-icon.png">
	    <?php $arr=get_option('stonesoup-contact-settings'); echo $arr['phone-number'] ?>
	    </div>
	  </div>
	  <div class='col-lg-4 col-md-3 hidden-sm navitem  '>
	    <div class="center">
	      <img class='img-responsive inline' style="vertical-align: middle" src='<?php echo get_template_directory_uri() ?>/images/poi-icon.png'>
		<?php $arr=get_option('stonesoup-contact-settings'); echo $arr['location'] ?></a>
	    </div>
	  </div>
	  <div class='col-lg-4 col-md-4 col-sm-6 navitem lastitem'>
	    <div class="center">
	      <a href="mailto:info@dstrategies.org">
		<img class='img-responsive inline' style="vertical-align: middle" src='<?php echo get_template_directory_uri() ?>/images/email-icon.png'>
		<?php $arr=get_option('stonesoup-contact-settings'); echo $arr['email'] ?></a>
	    </div>
	  </div>
	</div>

	<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 navset'>
	  <div class='col-lg-8 col-md-6 col-sm-6 hidden-xs '>
	  </div>
	  <div class='col-lg-2 col-md-3 col-sm-3 col-xs-6 navitem sm'>
	    <div class="center">
	      <a href="<?php $arr=get_option('stonesoup-contact-settings'); echo $arr['fb-url'] ?>"><img class='img-responsive inline' src='<?php echo get_template_directory_uri() ?>/images/fb-100-logo.png'></a>
	    </div>
	  </div>
	  <div class='col-lg-2 col-md-3 col-sm-3 col-xs-6 navitem sm sm-twitter lastitem'>
	    <div class="center">
	      <a href="<?php $arr = get_option('stonesoup-contact-settings'); echo $arr['twitter-url'] ?>"><img class='img-responsive inline' src='<?php echo get_template_directory_uri() ?>/images/Twitter_logo_blue.png'></a>

	    </div>
	  </div>
	</div>

      </div> <!-- end of header -->
    </div> <!--- Container -->

    <div class='container-fluid banner'>
      <div class='row'>
	<div class='bannercontent'>

	  <div class='col-md-8 col-sm-8 col-lg-8 col-xs-10'>
	    <div class='banner-image'>
	      <a href="<?php echo site_url() ?>"><img style="padding-bottom: 10px;" class='img-responsive' src='<?php echo get_template_directory_uri() ?>/images/full_banner.jpg'></a>
	    </div>
	  </div>

	  <div class='col-md-4 col-sm-4 col-lg-4 hidden-xs'>
	    
            <?php wp_nav_menu( array(
              'show_home' => '0',
	      'container' => false,
              'menu_class' => 'bannernav',
              'theme_location' => 'header_menu',
	    ) ); 
	    ?>

	  </div>
	  <div class='visible-xs col-xs-2'>
	    <div class='phonestripes-background phone-click'>
	      <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/threelines.png" style="width: 90%; margin: auto">
	    </div>
	  </div>

	</div> <!-- end of bannercontent -->

      </div> 
    </div> <!-- end of banner -->
    <div class='phonemenu'>
      <div class='row'>
	<div class='col-xs-1'>
	</div>

	<div class='col-xs-10'>
	  <div class='center'>
	    <?php wp_nav_menu( array(
              'show_home' => '0',
	      'container' => false,
              'menu_class' => 'phonemenu-nav',
              'theme_location' => 'header_menu',
	    ) ); 
	    ?>
	  </div> <!-- centering teh list -->
	</div>

	<div class='col-xs-1'>
	</div>

      </div> <!-- nav menu row -->
    </div>

