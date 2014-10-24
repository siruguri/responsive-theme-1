<!-- start of footer php code -->

<div class="container-fluid">
  <div class='row footer'>

    <div class='hidden-xs col-md-4 col-sm-4 col-lg-4'>
      <div class='footer-item'>
	<div class='footer-item-title'>
	  Social media
	</div>

	<div class='footer-item-section'>
	  <a href="http://www.twitter.com/digstrategies">Twitter</a>
	</div>
	<div class="footer-item-section">
	  <a href="http://www.facebook.com/digstrategies">Facebook</a>
	</div>
      </div>
    </div>

    <div class='hidden-xs col-md-4 col-sm-4 col-lg-4'>
      <div class='footer-item'>
	<div class='footer-item-title'>

	</div>
      </div>
    </div>
    
    <div class='col-xs-12  col-sm-4 col-md-4 col-lg-4'>
      <div class='footer-item'>
	<div class='footer-item-title'>
	  digital strategies
	</div>

	<div class="footer-item-section">
	  (c) Digital Strategies 2014
	</div>

      </div>
    </div>				
  </div> <!-- end of footer -->

</div> <!-- container for footer -->
<?php
  wp_enqueue_style('stonesoup-google-lato', 'https://fonts.googleapis.com/css?family=Lato:400,700', array(), null);
  wp_enqueue_style('stonesoup-google-habibi', 'https://fonts.googleapis.com/css?family=Habibi', array(), null);

  wp_enqueue_style('stonesoup-bootstrap', get_template_directory_uri() . "/css/bootstrap.css", array(), null);
  wp_enqueue_style('stone-soup-custom', get_template_directory_uri() . '/css/custom.css', array( 'stonesoup-bootstrap'), '20140327');
?>

<?php wp_footer(); ?>
