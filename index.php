<?php
/*
Template Name: Content with Conditional Sidebar
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
		<?php
			// Check for children of the current page //
			$children = get_pages('child_of='.$post->ID);
				if( count( $children ) != 0 ):
			// Display sidebar menu if chidren exist //
		?>
		<div class="large-4 small-12 columns" id="left-sidebar">
			<ul class="side-nav">
  				<?php
  					global $id;
  					wp_list_pages("title_li=&child_of=$id&show_date=modified&date_format=$date_format");
  					?>
			</ul>
		</div>


		<div class="large-8	 small-12 columns" id="main-content">
			<?php the_content(); ?>

		</div>
		<?php else: // Display full-width content //?>

		<div class="large-12 small-12 columns" id="main-content">
			<?php the_content(); ?>
		</div>

		<?php endif; ?>

	</div>
</section>




<?php get_footer(); ?>