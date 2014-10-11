<?php
/*
Template Name: Single-Column (Default)
*/
?>

<?php get_header(); ?>

<?php
	if (have_posts()) :
   		while (have_posts()) :
      		the_post();
   		endwhile;
	endif;
?>



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
			<?php the_content(); ?>

		</div>
	</div>
</section>




<?php get_footer(); ?>