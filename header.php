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
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row no-gutters">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6">
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
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
