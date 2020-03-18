<?php
/* Template Name: HomePage */

get_header();
?>
	<?php 
 	$posts_first = get_posts( [
		'numberposts'      => -1,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'post_type'        => 'product'
	 ]);
	?>
	<?php 
	$posts_second = get_posts( [
		'numberposts'      => -1,
		'tax_query'         => [
			[
				'taxonomy' => 'product_cat',
				'field' => 'term_id',
				'terms' => 5
			]
		],
		'orderby'          => 'date',
		'order'            => 'DESC',
		'post_type'        => 'product'
	]);
	?>
	
	

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="row no-gutters first-cat">
				<div class="col-12">
					<div class="row no-gutters">
						<div class="homepage-swiper">
    						<div class="swiper-wrapper">
								<?php foreach($posts_first as $post): ?>
									<div class="swiper-slide">
										<div class="slider-bg">
											<div class="white-bg"></div>
											<div class="orange-bg"></div>
										</div>
											<div class="row no-gutters">
												<div class="col-sm-12 col-md-6 col-lg-7">
													<a class="product-anchor" href="<?php echo esc_url( get_permalink( $post->ID) ); ?>">
														<div class="slider-product-title">
															<h3 class="english_name">
																<?php echo get_post_meta($post->ID, 'engish_name',True); ?>
															</h3>
															<h3 class="product-name"><?php echo esc_html($post -> post_title); ?></h3>
														</div>
													</a>
												</div>
												<div class="col-sm-12 col-md-6 col-lg-5">
													<div class="product-image"><img src="<?php echo get_the_post_thumbnail_url( $post->ID ) ?>" alt="<?php echo esc_html($post -> post_title); ?>"></div>
												</div>
											</div>
									</div>
								<?php endforeach; ?>
							</div>
							<!-- Add Pagination -->
							<div class="swiper-pagination swiper-pagination-black"></div>
							<!-- Add Arrows -->
							<div class="swiper-button-next swiper-button-black"></div>
							<div class="swiper-button-prev swiper-button-black"></div>
						</div>
					</div>
				</div>
			</div><!-- first-cat -->

			<div class="intro" style=" background-image:url(<?php echo get_template_directory_uri(  ).'/icons/box-2.svg'; ?>) ">
				<div class="container">
					<div class="row no-gutters">
						<div class="col-12 col-sm-12 col-md-12 col-lg-6">
							<h2>
								<?php _e('شرکت خلا‌پوشان فلز','pvd'); ?>
							</h2>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6">
							<?php 
								if ( have_posts() ) {
									while ( have_posts() ) {
										the_post(); 
										the_content();
									} // end while
								} // end if
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="services">
				<div class="container">
					<div class="row no-gutters">
						<div class="title">
							<h5> <?php _e('‫شرکت خلا پوشان فلز همواره آماده‌ی پاسخ‌گویی به سوالات شماست','pvd'); ?> </h5>
							<h2><?php _e('در صورتی که نیاز به راهنمایی دارید با شماره‌های شرکت تماس گرفته و با مخصصین ما مشورت نمایید','pvd'); ?></h2>
						</div>
						<div class="col-12">
							<div class="row no-gutters icons-cont">
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 icon-cont">
									<div class="icon-inner">
										<div class="service-icon">
											<div class="service-icon-inner">
												<img src="<?php  echo (get_template_directory_uri(  ).'/icons/006-home.svg'); ?>" />
											</div>
										</div>
										<p class="service-title">
											<?php _e('پروژه‌ها','pvd'); ?>
										</p>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 icon-cont">
									<div class="icon-inner">
										<div class="service-icon">
											<div class="service-icon-inner">
												<img src="<?php  echo (get_template_directory_uri(  ).'/icons/005-pen.svg'); ?>" />
											</div>
										</div>
										<p class="service-title">
											<?php _e('مشاوره رایگان','pvd'); ?>
										</p>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 icon-cont">
									<div class="icon-inner">
										<div class="service-icon">
											<div class="service-icon-inner">
												<img src="<?php  echo(get_template_directory_uri(  ).'/icons/004-winner.svg'); ?>" />
											</div>
										</div>
										<p class="service-title">
											<?php _e('گواهینامه‌ها','pvd'); ?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .services -->
		
			<div class="contact">
				<div class="background"></div>
				<div class="container">
					<div class="row no-gutters">
						<div class="col-12 col-sm-12 col-md-6 col-lg-5 map">
							
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-7">
							<div class="contact-form-cont">
								<h3 class="contact-form-title">
									<?php _e('با ما در ارتباط باشید.','pvd'); ?>
								</h3>
								<div class="form-cont">
									<form>
										<div class="col-12 field">
											<input placeholder="<?php _e('نام','pvd')?>" class="name" type="text">
										</div>
										<div class="col-12 field">
											<input placeholder="<?php _e('ایمیل','pvd')?>" class="email" type="email">
										</div>
										<div class="col-12 field">
											<input placeholder="<?php _e('موضوع','pvd')?>" class="subject" type="text">
										</div>
										<div class="col-12 field">
											<textarea rows="4" cols="50"></textarea>
										</div>
										<div class="col-12 btn">
											<input type="button" value="<?php _e('ارسال','pvd'); ?>" >
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
