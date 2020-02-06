<?php
/* Template Name: HomePage */

get_header();
?>
	<?php 
 	$posts_first = get_posts( [
		'numberposts'      => -1,
		'tax_query'         => [
			[
				'taxonomy' => 'product_cat',
				'field' => 'term_id',
				'terms' => 4
			]
		],
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
						<div class="col-12 col-sm-12 col-md-10 col-lg-10">
							<div class="plist-bg">
								<div class="bg-white"></div>
								<div class="bg-orange"></div>
							</div>
							<div class="row no-gutters">
								<div class="col-sm-12 col-md-6 col-lg-6 cat-image">
									<img src="<?php echo get_template_directory_uri(  ).'/icons/WEB3-5.png'; ?>" alt="">
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="product-list">
										<div class="product-list-inner">
											<div class="plist-header">
												<div class="plist-title">
													<h6>
														<?php echo __('دسته بندی محصولات شرکت','pvd'); ?>
													</h6>
													<h2 class="main-title">
														<?php echo __('در حوزه پوشش‌دهی خلا','pvd'); ?>
													</h2>
												</div>
											</div>
											<div class="product-list-self">
												<?php foreach($posts_first as $post): ?>
													<a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
														<?php echo esc_html($post -> post_title); ?>
													</a>
												<?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- first-cat -->




			<div class="row no-gutters second-cat">
				<div class="col-12">
					<div class="row no-gutters">
						<div class="col-12 col-sm-12 col-md-10 col-lg-10">
							<div class="plist-bg">
								<div class="bg-white"></div>
								<div class="bg-orange"></div>
							</div>
							<div class="row no-gutters">
								<div class="col-sm-12 col-md-6 col-lg-6 cat-image">
									<img src="<?php echo get_template_directory_uri(  ).'/icons/PVD/WEB3-6.png'; ?>" alt="">
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="product-list">
										<div class="product-list-inner">
											<div class="plist-header">
												<div class="plist-title">
													<h6>
														<?php echo __('دسته بندی محصولات شرکت','pvd'); ?>
													</h6>
													<h2 class="main-title">
														<?php echo __('در حوزه فرآوری مواد پیشرفته','pvd'); ?>
													</h2>
												</div>
											</div>
											<div class="product-list-self">
												<?php foreach($posts_second as $post): ?>
													<a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
														<?php echo esc_html($post -> post_title); ?>
													</a>
												<?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- second-cat-->
			<div class="intro" style=" background-image:url(<?php echo get_template_directory_uri(  ).'/icons/box-2.svg'; ?>) ">
				<div class="container">
					<div class="row no-gutters">
						<div class="col-12 col-sm-12 col-md-12 col-lg-6">
							<h2>
								<?php _e('شرکت خلا‌پوشان فلز','pvd'); ?>
							</h2>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6">
								<p>
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
								</p>
						</div>
					</div>
				</div>
			</div>
			<div class="services">
				<div class="container">
					<div class="row no-gutters">
						<div class="title">
							<h5>‫شرکت خلا پوشان فلز همواره آماده‌ی پاسخ‌گویی به سوالات شماست</h5>
							<h2>در صورتی که نیاز به راهنمایی دارید با شماره‌های شرکت تماس گرته و با مخصصین ما مشورت نمایید</h2>
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
									<?php _e('پروژه‌ی حدید دارید؟با ما در ارتباطب باشید.','pvd'); ?>
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
