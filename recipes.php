<?php
/*
Template Name: Recipes List
*/
?>

<?php get_header(); ?>



<?php get_template_part( 'partials/primary-navigation' ); ?>
<?php get_template_part( 'partials/masthead' ); ?>



<section id="slogan">
	<div class="row">
		<div class="large-12 small-12 columns text-center" id="slogan-container"><h2>
			<?php if (!get_the_excerpt()) { ?>
				<!-- No Excerpt Set -->
				<?php } else { ?>
  					<?php the_excerpt(); ?>
			<?php } ?>
		</h2></div>
    </div>
</section>


<section id="content">
	<div class="row">
		<div class="large-12 small-12 columns">
			<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4 clearing-thumbs" data-clearing>
			<?php $loop = new WP_Query( array( 'post_type' => 'recipe', 'posts_per_page' => -1 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<li> <?php 
 if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
   echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
   the_post_thumbnail('thumbnail', array( 'class' => 'th' ));
   echo '</a>';
 }
 ?><h4><?php the_title(); ?></h4></li>

			<?php endwhile; wp_reset_query(); ?>
		</ul>
		</div>
	</div>
</section>

<section id="widget">
	<div class="row">
		<div class="large-12 small-12 columns text-center">
			<!-- Widget Area -->
		</div>
	</div>
</section>



<?php get_footer(); ?>