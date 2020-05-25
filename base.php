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
    <div class="wrap container-fluid" role="document">
      <div class="content row">
        <?php if(is_page('home')){ ?>
          <main class="main p-0">
          <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
        <?php }else{ ?>
          <main class="container"> <!-- Se elimino la clase "main p-0" del main para las secciones internas solo el home tendra esa clase-->
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php } ?>
        <?php if (Setup\display_sidebar()) : ?>
          <!-- Se comento el aside para eliminarlo de las secciones -->
          <!--
          <aside class="sidebar">
            <?php/* include Wrapper\sidebar_path(); */?>
          </aside>
        -->          
        <!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
