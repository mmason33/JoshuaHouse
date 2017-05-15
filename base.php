<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div id="pagepiling">
      <div class="section"><?php get_template_part('includes/hero'); ?></div>
    	<div class="section" style="background:url('/wp-content/uploads/2017/05/pexels-photo-276245.jpeg') no-repeat center center;background-size:cover;">Some section</div>
    	<div class="section" style="background:url('/wp-content/uploads/2017/05/pexels-photo-198697-1.jpeg') no-repeat center center;background-size:cover;">Some section</div>
    	<div class="section" style="background:url('/wp-content/uploads/2017/05/pexels-photo-404857.jpeg') no-repeat center center;background-size:cover;">Some section</div>
    	<div class="section" style="background:url('/wp-content/uploads/2017/05/pexels-photo-408951.jpeg') no-repeat center center;background-size:cover;">Some section</div>
    </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
