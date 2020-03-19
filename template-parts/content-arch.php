<?php
/**
 * Template part for displaying archives
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PVD
 */

?>


	<div id="post-<?php the_ID(); ?>" class="entry-content col-12 col-md-6 col-lg-4">
        <div class="product-img">
            <img src = "<?php echo  get_the_post_thumbnail_url( ); ?>" alt="<?php echo get_the_title(); ?>" />
        </div>
        <a href="<?php echo esc_url(get_permalink( )); ?>" >
            <h3>
                <?php the_title(); ?>
            </h3>
        </a>
	</div><!-- #post-<?php the_ID(); ?> -->


