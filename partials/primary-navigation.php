<!-- Responsive Navigation -->
<div class="fixed">
<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
          <?php //wp_nav_menu(array('menu' => 'top-bar-r')); ?>

    <!-- Left Nav Section -->
          <?php wp_nav_menu(array('menu' => 'top-bar-l')); ?>
  </section>
</nav>
</div>