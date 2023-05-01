<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,600&family=Source+Sans+Pro&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>
	<?php // if ( is_user_logged_in() ) { global $template; echo basename($template); } ?>

	<header>

		<div class="w-full p-4 bg-citybreakteal-500">
			<nav class="container">
				<!-- Flex Container -->
				<div class="flex items-center justify-between">
					<!-- Logo -->
					<div class="pt-2">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri(); ?>/resources/img/citybreak.svg" alt="Citybreak" />
							</a>
					</div>

					<!-- Menu items -->
					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden md:flex space-x-6',
							'menu_class'      => 'flex',
							'theme_location'  => 'primary',
							'li_class'        => 'm-4',
							'link_class'     => 'font-inter text-white text-lg uppercase no-underline hover:underline',
							'fallback_cb'     => false,
						)
					);
					?>
					
					<!-- Hamburger menu -->
					<button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
						<span class="hamburger-top"></span>
						<span class="hamburger-middle"></span>
						<span class="hamburger-bottom"></span>
					</button>
				</div>
				<!-- Mobile menu -->
				<div class="md:hidden">
					<?php
						wp_nav_menu(
							array(
								'container_id'    => 'menu',
								'container_class' => 'flex-col items-center self-end hidden py-8 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md',
								'menu_class'      => '',
								'theme_location'  => 'primary',
								'li_class'        => '',
								'link_class'     => 'font-inter text-lg text-citybreakteal-500 uppercase no-underline hover:underline',
								'fallback_cb'     => false,
							)
						);
					?>				
				</div>

			</nav>
		</div>

	</header>

	<div id="content" class="site-content flex-grow">


		<?php do_action( 'tailpress_content_start' ); ?>

		<main>

