<?php get_header(); ?>


<!-- Desktop Navigation -->
		<?php

			$menu_to_count = wp_nav_menu(array(
					'echo'				=> false,
					'theme_location'	=> 'hp-menu'
				));

			$menu_items = substr_count($menu_to_count,'class="menu-item ');

			$defaults = array(
					'theme_location'	=> 'hp-menu',
					'menu'            	=> '',
					'container'       	=> 'nav',
					'container_class' 	=> 'show-for-medium-up',
					'container_id'    	=> 'hp-menu',
					'menu_class'      	=> '',
					'menu_id'         	=> '',
					'echo'            	=> true,
					'fallback_cb'     	=> 'wp_page_menu',
					'before'          	=> '',
					'after'           	=> '',
					'link_before'     	=> '',
					'link_after'      	=> '',
					'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           	=> 1,
					'walker'          	=> ''
				);

			wp_nav_menu( $defaults );

		?>

	

<nav class="top-bar hide-for-medium-up" data-topbar>
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


<section id="hp-masthead">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="hp-logo">
    		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="blur" />
    		<div class="hp-title">
       			<h1>...with love</h1>
       			<h5><?php bloginfo('description'); ?></h5>
   			</div>
   		</div>
   	</div>
</div>

</section>







	
<section id="hp-featured-content" class="shadow-border">
	<div class="row">
		<div class="large-4 medium-12 small-12 columns">
			<?php get_template_part( 'widgets/widget', 'hp-events-box' ); ?>
		</div>

		<div class="large-8 medium-12 small-12 columns">
			<div class="flex-video">
			<?php get_template_part( 'widgets/widget', 'hp-video-box' ); ?>
			</div>
		</div>
</section>


	
<section id="hp-cta-area">
			<?php get_template_part( 'partials/etsy-grid' ); ?>
</section>



<?php get_footer(); ?>