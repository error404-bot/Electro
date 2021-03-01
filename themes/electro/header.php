<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Electro
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'electro' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="account-header grid-x">
			<div class="account-info cell large-5 large-offset-7">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'electro' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-primary',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
		<div class="logo-header grid-x align-middle">
			<div class="logo cell large-1 large-offset-1">
				<?php the_custom_logo(); ?>
			</div>
			<div class="search cell large-4 large-offset-2">
				<?php echo get_search_form(); ?>
			</div>
			<div class="cart cell large-1 large-offset-2">
				<a href="http://electro.local/cart/">
					<div class="cart-icon pink">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/shopping-cart.png">
						<div class="cart-count">
							<?php echo WC()->cart->get_cart_contents_count() ?>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="category-header grid-x align-center">
			<div class="categories cell large-6">
			<nav id="category-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="secondary-menu" aria-expanded="false"><?php esc_html_e( 'Secondary Menu', 'electro' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-secondary',
								'menu_id'        => 'secondary-menu',
								'link_after' => '     |',
							)
						);
						?>
				</nav><!-- #category-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->
