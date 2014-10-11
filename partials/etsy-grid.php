<div class="row">
	<h3><a href="https://www.etsy.com/shop/SpreadTheLoveDC?ref=ss_profile" target="_BLANK">Spread the Love:  Shop our Etsy Page</a></h3>

		<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-5">

			<?php

				$etsy = array(
						'/img/etsy/Jord.jpg',
						'/img/etsy/Rach.jpg',
						'/img/etsy/sticker.jpg',
						'/img/etsy/sticker4.jpg',
						'/img/etsy/sticker5.jpg'

					);
			?>
  			<li><img src="<?php echo get_template_directory_uri() . $etsy[0];?>" class="th"></li>
  			<li><img src="<?php echo get_template_directory_uri() . $etsy[1];?>" class="th"></li>
  			<li><img src="<?php echo get_template_directory_uri() . $etsy[2];?>" class="th"></li>
  			<li><img src="<?php echo get_template_directory_uri() . $etsy[3];?>" class="th"></li>
  			<li><img src="<?php echo get_template_directory_uri() . $etsy[4];?>" class="th"></li>
</ul>
</div>