<?php
/* Template Name: HomePage */

get_header();
?>
	<?php 
 	$posts = get_posts( [
		'numberposts'      => -1,
		'category'         => 4,
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
								<div calss="bg-white"></div>
								<div class="bg-orange"></div>
							</div>
							<div class="row no-gutters">
								<div class="col-sm-12 col-md-6 col-ls-6 cat-image">
									<img src="<?php echo get_template_directory_uri(  ).'/icons/WEB3-5.png'; ?>" alt="">
								</div>
								<div class="col-sm-12 col-md-6 col-ls-6">
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
										</div>
									</div>
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
