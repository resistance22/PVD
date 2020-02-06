<?php
/* Template Name: product archives */

get_header();
?>
   <?php 
      if(have_posts()):
			while(have_posts(  )):
				the_post();
   ?>
	<div class="custom-archive-title-cont">
		<div class="container">
			<h1 class="custom-archive-title">
				<?php the_title(); ?>
			</h1>
		</div>
	</div>


	<div class="entry-content">
		<?php
		the_content();

		?>
	</div><!-- .entry-content -->
   <?php
      endwhile;
      endif;
   ?>

<?php
get_footer();
