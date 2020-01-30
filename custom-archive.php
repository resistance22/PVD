<?php
/* Template Name: product archives */

get_header();
?>
   <?php 
      if(have_posts()):
         while(have_posts(  )):
   ?>
	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pvd' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pvd' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
   <?php
      endwhile;
      endif;
   ?>

<?php
get_footer();
