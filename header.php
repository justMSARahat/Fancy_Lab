<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy Lab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header>
			<section class="search">
				<div class="container">
					Search
				</div>
			</section>
			<section class="top-bar">
				<div class="container">
					<div class="row">
						<div class="brand col-3">Logo</div>
						<div class="sec-ondcolumn col-9">
							<div class="acount">Account</div>
							<nav class="main-menu">
								<?php
									wp_nav_menu(
										array(
											'theme_location'		=> 'fancy_lab_main_menu'
										)
									);
								?>
							</nav>
						</div>
					</div>
				</div>
			</section>
		</header>