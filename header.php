<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PVD
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="grids">
	<div class="grid"></div>
	<div class="grid"></div>
	<div class="grid"></div>
	<div class="grid"></div>
	<div class="grid"></div>
</div>
<div id="page" class="site container-fluid no-padd">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pvd' ); ?></a>
	<div class="infoline">
		<div class="container">
			<div class="row no-gutters">
				<div class="phone info">
					<span class="icon">
						<img src="<?php echo esc_url( get_template_directory_uri(  ).'/icons/001-call.svg' ) ?>">
					</span>
					<span class="text">
						+98 21 46026828
					</span>
				</div>
				<div class="info email">
					<span class="icon">
						<img src="<?php echo esc_url( get_template_directory_uri(  ).'/icons/002-email.svg' ) ?>">
					</span>
					<span class="text">
						kpfvt.co@gmail.com
					</span>
				</div>
				<div class="info time">
				<span class="icon">
						<img src="<?php echo esc_url( get_template_directory_uri(  ).'/icons/003-clock.svg' ) ?>">
					</span>
					<span class="text">
						Mon-Fri 08-18
					</span>
				</div>
			</div>
		</div>
	</div>
	<?php 
		$main_cats = get_terms(
			[
				'taxonomy' => 'product_cat',
				'hide_empty' => false,
				'parent' => 0
			]
		);
	?>
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row no-gutters">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6">
					<nav id="site-navigation" class="main-navigation">
						<div class="row no-gutters">
							<div class="product-menu">
								<span class="product-menu-icon">
									<?php echo __('محصولات','pvd'); ?>
								</span>
								<div class="row no-gutters op-menu">
									<div class="col-12 col-md-2 col-lg-4 product-menu-sec">
										<?php foreach($main_cats as $main_cat): 
											$name = $main_cat -> name;	
										?>
											<div term="<?php echo esc_attr( $main_cat->term_id ) ?>" class="product-main-item">
												<a href="<?php echo get_term_link($main_cat->term_id); ?>">
													<span  class="product-main-cat-name">
														<?php echo $name; ?>
													</span>
												</a>
											</div>
										<?php endforeach; ?>
									</div>
									<div class="col-12 col-md-2 col-lg-4 product-menu-sec">
									<?php foreach($main_cats as $main_cat): 
											$sub_cats = get_terms(
												[
													'taxonomy' => 'product_cat',
													'hide_empty' => false,
													'parent' => $main_cat->term_id
												]
											);
										?>
										<div  parent-cat="<?php echo esc_attr( $main_cat->term_id ) ?>" class="sub-cat-cont">
											<?php foreach($sub_cats as $sub_cat): ?>
												<div self-cat="<?php echo esc_attr( $sub_cat->term_id ) ?>" class="product-sub-item">
													<a href="<?php echo get_term_link($sub_cat->term_id); ?>">
														<span class="product-sub-cat-name">
															<?php echo $sub_cat->name; ?>
														</span>
													</a>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endforeach; ?>
									</div>
									<div class="col-12 col-md-2 col-lg-4">
										<?php foreach($main_cats as $main_cat): 
												$sub_cats = get_terms(
													[
														'taxonomy' => 'product_cat',
														'hide_empty' => false,
														'parent' => $main_cat->term_id
													]
												);
										?>
												<?php foreach($sub_cats as $sub_cat): 
														$products = get_posts( [
															'numberposts'      => -1,
															'tax_query'         => [
																[
																	'taxonomy' => 'product_cat',
																	'field' => 'term_id',
																	'terms' => $sub_cat->term_id
																]
															],
															'orderby'          => 'date',
															'order'            => 'DESC',
															'post_type'        => 'product'
														]);
												?>
													<div parent-sub-cat="<?php echo esc_attr( $sub_cat->term_id ) ?>" class="product-cat-cont">
														<?php foreach($products as $product): ?>
															<div p-id="<?php echo $product->ID ?>" class="product-item">
																<a href="<?php echo get_permalink( $product->ID ); ?>">
																	<span class="product-sub-cat-name">
																		<?php echo $product->post_title; ?>
																	</span>
																</a>
															</div>
														<?php endforeach; ?>
													</div>
												<?php endforeach; ?>
										<?php endforeach; ?>
									</div>

								</div>
							</div>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
							?>
						</div>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6">
					<div class="site-branding">
						<?php
							the_custom_logo();
						?>
					</div><!-- .site-branding -->
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
