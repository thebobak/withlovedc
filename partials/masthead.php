<header id="masthead">
	<div id="hero-image">
		<?php

			// Inserts the Featured Image or a Default Picture //

			$default_image = '/img/default-masthead.jpg';



			if ( has_post_thumbnail() ) {
				the_post_thumbnail('full');
				}
			else { ?>
				<img src="<?php echo get_template_directory_uri() . $default_image;?>">
		<?php	}
		?>
	<h1><?php the_title(); ?></h1>

	</div>
</header>