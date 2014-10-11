<footer>
	<?php wp_footer(); ?>

  <div class="row"

  <!-- Desktop Navigation -->
    <?php

      $menu_to_count = wp_nav_menu(array(
          'echo'        => false,
          'theme_location'  => 'footer-menu'
        ));

      $menu_items = substr_count($menu_to_count,'class="menu-item ');

      $defaults = array(
          'theme_location'    => 'footer-menu',
          'menu'              => 'small-12 medium-12 large-12 columns',
          'container'         => 'div',
          'container_class'   => '',
          'container_id'      => 'footer-menu',
          'menu_class'        => '',
          'menu_id'           => '',
          'echo'              => true,
          'fallback_cb'       => '',
          'before'            => '',
          'after'             => '',
          'link_before'       => '',
          'link_after'        => '',
          'items_wrap'        => '<ul id="%1$s" class="%2$s inline-list">%3$s</ul>',
          'depth'             => 1,
          'walker'            => ''
        );

      wp_nav_menu( $defaults );

    ?>
	</div>

</footer>
      
      

      
        
        
</div> <!-- END OF #wrapper -->
</script>
</body>
</html>