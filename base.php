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
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
