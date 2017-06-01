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
<<<<<<< HEAD
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div id="pagepiling">
    	<div class="section" style="background:url('/wp-content/uploads/2017/05/pexels-photo-276245.jpeg') no-repeat center center;background-size:cover;">Some section</div>
    	<div class="section" style="background:url('/wp-content/uploads/2017/05/pexels-photo-198697-1.jpeg') no-repeat center center;background-size:cover;">Some section</div>
    	<div class="section" style="background:url('/wp-content/uploads/2017/05/pexels-photo-404857.jpeg') no-repeat center center;background-size:cover;">Some section</div>
    	<div class="section" style="background:url('/wp-content/uploads/2017/05/pexels-photo-408951.jpeg') no-repeat center center;background-size:cover;">Some section</div>
    </div>
=======
    <?php do_action('get_header'); ?>
    <?php get_template_part('templates/header'); ?>
    <?php if(!is_page(11)): ?>
          <div id="pagepiling">
    <?php endif; ?>
    <?php  get_template_part('includes/hero'); ?>
          <?php include Wrapper\template_path(); ?>
        <?php if (Setup\display_sidebar()) : ?>
            <?php include Wrapper\sidebar_path(); ?>
        <?php endif; ?>
    <?php if(!is_page(11)): ?>
      </div>
    <?php endif; ?>
>>>>>>> cd9de5b3fe03c4e48e45adcf21185471c4fd20e2
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
