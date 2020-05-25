<header class="banner">
  <div class="container-fluid header-grupoym">
    <div class="container">
      <div class="row">      
        <div class="col-xl-4 col-lg-4">
            <h1>GRUPOYM</h1>  
        </div>
        <div class="col-xl-8 col-lg-8">
          <nav class="">
          <!-- Comentado por Ender Bastidas para eliminar titulo en el home
              <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            
            <nav class="nav-primary">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
              endif;
              ?>
            </nav> 
            -->
            <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>-->
            
            <div class="collapse navbar-collapse" id="navbarNav">
              <?php
              wp_nav_menu([
              'menu'            => 'primary_navigation',             
              'theme_location'  => 'primary_navigation',
              'container'       => 'ul',
              'container_id'    => 'menu-principal',
              'container_class' => 'navbar-nav',
              'menu_id'         => false,
              'menu_class'      => 'nav navbar-nav ml-auto',
              'depth'           => 2,
              'fallback_cb'     => 'bs4navwalker::fallback',
              'walker'          => new bs4navwalker()
            ]);
            ?>
          </nav>
        </div>            
      </div>
    </div>
    
  </div>
</header>
