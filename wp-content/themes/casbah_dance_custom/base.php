<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
<div id="bg-fill">

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div id="wrap" class="container clearfix" role="document">
    <div class="row">
      <div id="content" class="span12">

        <div class="row">
          <div id="main" class="<?php roots_main_class(); ?>" role="main">
            <?php include roots_template_path(); ?>
          </div>
          <?php if (roots_sidebar()) : ?>
          <aside id="sidebar" class="<?php roots_sidebar_class(); ?>" role="complementary">
            <?php get_template_part('templates/sidebar'); ?>
          </aside>
          <?php endif; ?>


        </div><!-- /.row -->

      </div><!-- /#content -->
    </div><!-- /.row -->
  </div><!-- /#wrap -->

  <?php get_template_part('templates/footer'); ?>

</div> <!-- /#bg-fill -->
</body>
</html>
