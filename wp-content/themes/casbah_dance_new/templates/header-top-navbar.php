<div class="container">
  <header id="banner" class="navbar container navbar-top" role="banner">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <nav id="nav-main" class="nav-collapse" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) {
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
            }
          ?>
        </nav>
      </div>
    </div>
  </header>
  <div class="header-visual row-fluid">
    <div class="span3 hidden-phone">
      <div class="head-top-left"></div>
    </div>
    <div class="span5">
      <div class="head-top-center">
        <img class="responsive-hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-top-main-title.png" / >
      </div>
    </div>
    <div class="span4 visible-desktop">
      <div class="head-top-right"></div>
    </div>
  </div>
</div>
