<header class="banner">
  <div class="container-fluid">
    <center>
      <span>Les sentienlles du climat</span> <img src="<?= esc_url(home_url('/')); ?>wp-content/themes/nsobspheno/assets/images/logo-sentinelle.png" alt="logo"> <span>Observatoire phénologique</span>
    </center>



    <!-- <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> -->
    <!-- <nav class="nav-primary">
      <?php
      /*if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;*/
      ?>
    </nav> -->


        <div class="row">
            <div class="col-md-3 col-xs-1 p-l-0 p-r-0 collapse in" id="sidebar">
                <div class="list-group panel">
                    <a href="#menu1" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><i class="fa fa-dashboard"></i> <span class="hidden-sm-down">Item 1</span> </a>
                    <div class="collapse" id="menu1">
                        <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem 1 </a>
                        <div class="collapse" id="menu1sub1">
                            <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 1 a</a>
                            <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 2 b</a>
                            <a href="#menu1sub1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem 3 c </a>
                            <div class="collapse" id="menu1sub1sub1">
                                <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem 3 c.1</a>
                                <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem 3 c.2</a>
                            </div>
                            <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 4 d</a>
                            <a href="#menu1sub1sub2" class="list-group-item" data-toggle="collapse"  aria-expanded="false">Subitem 5 e </a>
                            <div class="collapse" id="menu1sub1sub2">
                                <a href="#" class="list-group-item" data-parent="#menu1sub1sub2">Subitem 5 e.1</a>
                                <a href="#" class="list-group-item" data-parent="#menu1sub1sub2">Subitem 5 e.2</a>
                            </div>
                        </div>
                        <a href="#" class="list-group-item" data-parent="#menu1">Subitem 2</a>
                        <a href="#" class="list-group-item" data-parent="#menu1">Subitem 3</a>
                    </div>
                    <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-film"></i> <span class="hidden-sm-down">Item 2</span></a>
                    <a href="#menu3" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><i class="fa fa-book"></i> <span class="hidden-sm-down">Item 3 </span></a>
                    <div class="collapse" id="menu3">
                        <a href="#" class="list-group-item" data-parent="#menu3">3.1</a>
                        <a href="#menu3sub2" class="list-group-item" data-toggle="collapse" aria-expanded="false">3.2 </a>
                        <div class="collapse" id="menu3sub2">
                            <a href="#" class="list-group-item" data-parent="#menu3sub2">3.2 a</a>
                            <a href="#" class="list-group-item" data-parent="#menu3sub2">3.2 b</a>
                            <a href="#" class="list-group-item" data-parent="#menu3sub2">3.2 c</a>
                        </div>
                        <a href="#" class="list-group-item" data-parent="#menu3">3.3</a>
                    </div>
                    <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-heart"></i> <span class="hidden-sm-down">Item 4</span></a>
                    <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-list"></i> <span class="hidden-sm-down">Item 5</span></a>
                    <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="hidden-sm-down">Link</span></a>
                    <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="hidden-sm-down">Link</span></a>
                    <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="hidden-sm-down">Link</span></a>
                    <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="hidden-sm-down">Link</span></a>
                    <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Link</span></a>
                    <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-bar-chart-o"></i> <span class="hidden-sm-down">Link</span></a>
                    <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-star"></i> <span class="hidden-sm-down">Link</span></a>
                </div>
            </div>

            <a href="#sidebar" data-toggle="collapse"><i class="fa fa-navicon fa-lg"></i></a>

        </div>


  </div>
</header>
