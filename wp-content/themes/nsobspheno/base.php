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
    <div class="wrap container-fluid fullHeight" role="document">
      <div class="content row fullHeight">

        <!-- menu inspiration : https://www.codeply.com/go/GQ1Mz8RqZB -->
        <!-- <div class="col-md-3 col-xs-1 p-l-0 p-r-0 collapse in show" id="sidebar" aria-expanded="true"> -->
        <div class="col-md-3 col-xs-1 p-l-0 p-r-0 collapse in show" id="sidebar" aria-expanded="true">
            <div class="list-group panel fullHeight">

                <?php
                // get menu items
                if (has_nav_menu('primary_navigation')) :
                  $itemsMenu = wp_get_nav_menu_items( 'Principal' );
                  //var_dump($itemsMenu);
                endif;

                // TODO
                // Refact with a loop
                ?>

                <!-- Item 1 -->
                <a href="<?php echo $itemsMenu[0]->url ?>" class="list-group-item collapsed" data-parent="#sidebar">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;
                  <i class="fa fa-home"></i>
                </a>

                <!-- Item 2 -->
                <a href="<?php echo $itemsMenu[1]->url ?>" class="list-group-item collapsed" data-parent="#sidebar">
                  <i class="fa fa-angle-right" aria-hidden="true">&nbsp;<?php echo $itemsMenu[1]->title ?></i>
                </a>

                <!-- Item 3 -->
                <a href="#menu3" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
                  <i class="fa fa-angle-right" aria-hidden="true">&nbsp;<?php echo $itemsMenu[2]->title ?></i>
                </a>
                <div class="collapse" id="menu3">
                    <a href="<?php echo $itemsMenu[3]->url ?>" class="list-group-item child" data-parent="#menu3"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;<?php echo $itemsMenu[3]->title ?></a>
                    <a href="<?php echo $itemsMenu[4]->url ?>" class="list-group-item child" data-parent="#menu3"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;<?php echo $itemsMenu[4]->title ?></a>
                    <a href="<?php echo $itemsMenu[5]->url ?>" class="list-group-item child" data-parent="#menu3"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;<?php echo $itemsMenu[5]->title ?></a>
                </div>

                 <!-- Item 4 -->
                <a href="#menu4" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
                  <i class="fa fa-angle-right" aria-hidden="true">&nbsp;<?php echo $itemsMenu[6]->title ?></i>
                </a>
                <div class="collapse" id="menu4">
                    <a href="<?php echo $itemsMenu[7]->url ?>" class="list-group-item child" data-parent="#menu4"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;<?php echo $itemsMenu[7]->title ?></a>
                    <a href="<?php echo $itemsMenu[8]->url ?>" class="list-group-item child" data-parent="#menu4"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;<?php echo $itemsMenu[8]->title ?></a>
                    <a href="<?php echo $itemsMenu[9]->url ?>" class="list-group-item child" data-parent="#menu4"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;<?php echo $itemsMenu[9]->title ?></a>
                </div>

                <!-- Item 5 -->
                <a href="#menu5" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
                  <i class="fa fa-angle-right" aria-hidden="true">&nbsp;<?php echo $itemsMenu[10]->title ?></i>
                </a>
                <div class="collapse" id="menu5">
                    <a href="<?php echo $itemsMenu[11]->url ?>" class="list-group-item child" data-parent="#menu5"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;<?php echo $itemsMenu[11]->title ?></a>
                    <a href="<?php echo $itemsMenu[12]->url ?>" class="list-group-item child" data-parent="#menu5"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;<?php echo $itemsMenu[12]->title ?></a>
                    <a href="<?php echo $itemsMenu[13]->url ?>" class="list-group-item child" data-parent="#menu5"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;<?php echo $itemsMenu[13]->title ?></a>
                </div>

                <!-- Item 6 -->
                <a href="<?php echo $itemsMenu[14]->url ?>" class="list-group-item collapsed" data-parent="#sidebar">
                  <i class="fa fa-angle-right" aria-hidden="true">&nbsp;<?php echo $itemsMenu[14]->title ?></i>
                </a>

            </div>
        </div>
        <!-- fin menu -->


        <!-- <main class="">
            <a href="#sidebar" data-toggle="collapse"><i class="fa fa-navicon fa-lg"></i></a>
            <hr>
            <div class="page-header">
                <h1>Bootstrap 4 Sidebar Menu</h1>
            </div>
            <p class="lead">A responsive, multi-level vertical accordion.</p>
        </main> -->

        <main class="col-md-9 col-xs-11 p-l-2 p-t-2" id="main-container">
          <a href="#sidebar" data-toggle="collapse" class='btnToggleMenu'><i class="fa fa-navicon fa-lg"></i></a>
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
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
