<header class="banner" role="banner">
  <div class="container">
  <div id="mainbanner">
    <img src="/assets/banner.png">
  </div>
    <nav class="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
    </nav>
  </div>
</header>

