<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PVD
 */

get_header();
?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container">

			<?php if ( have_posts() ) : ?>

				<header class="archive-page-header">
					<?php
						the_archive_title('<h1 class="archve-title">','</h1>');
					?>
				</header><!-- .page-header -->
				<div class="row no-gutters">
			<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content-arch', get_post_type() );

				endwhile;
				?>
			</div>

			<?php
				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
