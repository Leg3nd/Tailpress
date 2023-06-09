<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Favicons and touch icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/resources/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/resources/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/resources/img/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/resources/img/site.webmanifest">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,600&family=Source+Sans+Pro&display=swap" rel="stylesheet">

	<!-- Osano Consent Management + Google Consent mode pre script -->
	<script>
	window.dataLayer = window.dataLayer ||[];
	function gtag(){dataLayer.push(arguments);}
	gtag('consent','default',{
		'ad_storage':'denied',
		'analytics_storage':'denied',
		'wait_for_update': 500
	});
	gtag("set", "ads_data_redaction", true);
	</script>

	<!-- Osano Consent Management -->
	<script src="https://cmp.osano.com/AzZmNoTfSneiZ72W/5ec4b600-0518-43be-b9ef-a61e163d89bc/osano.js"></script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T6VGQXS');</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6VGQXS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>
	<?php // if ( is_user_logged_in() ) { global $template; echo basename($template); } ?>

	<header>

		<div class="w-full fixed w-full z-20 top-0 p-4 bg-citybreakteal-500">
			<nav class="container">
				<!-- Flex Container -->
				<div class="flex items-center justify-between">
					<!-- Logo -->
					<div class="pt-2">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="Visit Citybreak homepage">
							<svg width="161" height="44" viewBox="0 0 161 44" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g filter="url(#filter0_d_382_657)">
								<path d="M12.5801 28.3867C10.623 28.3867 9.01172 27.959 7.74609 27.1035C6.48047 26.2363 5.5957 25.041 5.0918 23.5176C4.59961 21.9941 4.52344 20.2422 4.86328 18.2617C5.17969 16.2578 5.84766 14.4941 6.86719 12.9707C7.88672 11.4473 9.16992 10.2578 10.7168 9.40234C12.2754 8.53516 14.0098 8.10156 15.9199 8.10156C18.3223 8.10156 20.1797 8.74609 21.4922 10.0352C22.8164 11.3242 23.3789 13.0352 23.1797 15.168H18.75C18.7383 14.2188 18.4453 13.4277 17.8711 12.7949C17.3086 12.1621 16.4707 11.8398 15.3574 11.8281C14.4082 11.8281 13.5293 12.0859 12.7207 12.6016C11.9238 13.1055 11.25 13.832 10.6992 14.7812C10.1484 15.7305 9.76758 16.8672 9.55664 18.1914C9.33398 19.5273 9.33984 20.6758 9.57422 21.6367C9.80859 22.5977 10.2422 23.3359 10.875 23.8516C11.5078 24.3555 12.3047 24.6133 13.2656 24.625C13.9336 24.6133 14.5605 24.4785 15.1465 24.2207C15.7324 23.9512 16.248 23.5703 16.6934 23.0781C17.1504 22.5859 17.502 21.9883 17.748 21.2852H22.1777C21.8262 22.6797 21.2051 23.9102 20.3145 24.9766C19.4355 26.043 18.334 26.8809 17.0098 27.4902C15.6973 28.0879 14.2207 28.3867 12.5801 28.3867ZM23.4961 28L26.7656 8.34766H31.4062L28.1367 28H23.4961ZM29.7715 5.55273C29.0332 5.56445 28.4238 5.32422 27.9434 4.83203C27.4629 4.32812 27.2461 3.73633 27.293 3.05664C27.3633 2.35352 27.6797 1.75586 28.2422 1.26367C28.8047 0.771484 29.4551 0.525391 30.1934 0.525391C30.9316 0.525391 31.541 0.771484 32.0215 1.26367C32.502 1.75586 32.7188 2.35352 32.6719 3.05664C32.6016 3.73633 32.2852 4.32812 31.7227 4.83203C31.1602 5.32422 30.5098 5.56445 29.7715 5.55273ZM44.6074 8.34766L44.0098 11.9336H32.7246L33.3398 8.34766H44.6074ZM36.873 3.67188H41.5137L38.4375 22.0938C38.332 22.7031 38.3438 23.1777 38.4727 23.5176C38.6133 23.8457 38.8301 24.0684 39.123 24.1855C39.4277 24.3027 39.7793 24.3613 40.1777 24.3613C40.459 24.373 40.7227 24.3555 40.9688 24.3086C41.2148 24.2617 41.4082 24.2207 41.5488 24.1855L41.7598 27.8066C41.4785 27.9004 41.0977 27.9941 40.6172 28.0879C40.1367 28.1934 39.5742 28.252 38.9297 28.2637C37.7578 28.2988 36.7383 28.123 35.8711 27.7363C35.0156 27.3379 34.3828 26.7285 33.9727 25.9082C33.5742 25.0879 33.4863 24.0684 33.709 22.8496L36.873 3.67188ZM45.5391 35.3477C44.9062 35.3594 44.332 35.3125 43.8164 35.207C43.3008 35.1133 42.8965 35.002 42.6035 34.873L44.291 31.2695L44.3965 31.3047C45.3223 31.5977 46.1191 31.6211 46.7871 31.375C47.4668 31.1406 48.1113 30.4902 48.7207 29.4238L49.3359 28.3516L45.5566 8.34766H50.3203L52.3594 23.2188H52.5703L59.5664 8.34766H64.6816L53.168 30.373C52.6289 31.4277 51.9902 32.3242 51.252 33.0625C50.5137 33.8125 49.6758 34.3809 48.7383 34.7676C47.8008 35.1543 46.7344 35.3477 45.5391 35.3477ZM73.6641 28.3516C72.5508 28.3398 71.6484 28.1523 70.957 27.7891C70.2773 27.4141 69.7559 26.957 69.3926 26.418C69.041 25.8789 68.7832 25.3691 68.6191 24.8887H68.3203L67.8281 28H63.2754L67.6172 1.80859H72.2578L70.6406 11.5996H70.834C71.1504 11.1309 71.5664 10.627 72.082 10.0879C72.6094 9.53711 73.2773 9.06836 74.0859 8.68164C74.9062 8.29492 75.8906 8.10156 77.0391 8.10156C78.5508 8.10156 79.8516 8.48828 80.9414 9.26172C82.043 10.0352 82.8281 11.1719 83.2969 12.6719C83.7656 14.1719 83.8125 16.0176 83.4375 18.209C83.0859 20.3652 82.4297 22.1992 81.4688 23.7109C80.5195 25.2227 79.3652 26.3711 78.0059 27.1562C76.6582 27.9414 75.2109 28.3398 73.6641 28.3516ZM73.0312 24.5547C74.0508 24.5547 74.9473 24.2793 75.7207 23.7285C76.5059 23.1777 77.1504 22.4219 77.6543 21.4609C78.1699 20.5 78.5273 19.4102 78.7266 18.1914C78.9258 16.9727 78.9258 15.8887 78.7266 14.9395C78.5391 13.9902 78.1465 13.2461 77.5488 12.707C76.9512 12.168 76.1367 11.8984 75.1055 11.8984C74.1211 11.8984 73.2363 12.1621 72.4512 12.6895C71.6777 13.2051 71.0332 13.9316 70.5176 14.8691C70.0137 15.8066 69.6562 16.9141 69.4453 18.1914C69.2461 19.457 69.2461 20.5703 69.4453 21.5312C69.6445 22.4805 70.043 23.2246 70.6406 23.7637C71.25 24.291 72.0469 24.5547 73.0312 24.5547ZM84.3867 28L87.6562 8.34766H92.1562L91.5938 11.6523H91.8047C92.3555 10.5039 93.123 9.61914 94.1074 8.99805C95.0918 8.37695 96.1465 8.07227 97.2715 8.08398C97.5293 8.07227 97.8105 8.07813 98.1152 8.10156C98.4199 8.125 98.6895 8.16016 98.9238 8.20703L98.1855 12.4609C97.998 12.3906 97.6934 12.332 97.2715 12.2852C96.8613 12.2266 96.4629 12.2031 96.0762 12.2148C95.2324 12.2031 94.4473 12.3789 93.7207 12.7422C92.9941 13.1055 92.3848 13.6094 91.8926 14.2539C91.4004 14.8867 91.0781 15.625 90.9258 16.4688L89.0273 28H84.3867ZM105.516 28.3867C103.523 28.3867 101.859 27.9707 100.523 27.1387C99.1875 26.2949 98.2441 25.1113 97.6934 23.5879C97.1426 22.0527 97.0312 20.248 97.3594 18.1738C97.6992 16.1699 98.3555 14.418 99.3281 12.918C100.301 11.4062 101.525 10.2285 103.002 9.38477C104.49 8.5293 106.16 8.10156 108.012 8.10156C109.23 8.10156 110.361 8.30078 111.404 8.69922C112.459 9.09766 113.35 9.70703 114.076 10.5273C114.814 11.3359 115.33 12.3672 115.623 13.6211C115.928 14.875 115.939 16.3633 115.658 18.0859L115.43 19.457H99.3105L99.8379 16.3457H113.654L111.334 17.1895C111.521 16.0879 111.527 15.127 111.352 14.3066C111.188 13.4863 110.83 12.8477 110.279 12.3906C109.74 11.9336 108.979 11.7051 107.994 11.7051C106.986 11.7051 106.066 11.9453 105.234 12.4258C104.414 12.9062 103.734 13.5449 103.195 14.3418C102.656 15.1387 102.305 16.0234 102.141 16.9961L101.789 19.1582C101.59 20.3652 101.607 21.3906 101.842 22.2344C102.076 23.0664 102.521 23.6992 103.178 24.1328C103.834 24.5664 104.678 24.7832 105.709 24.7832C106.412 24.7832 107.062 24.6836 107.66 24.4844C108.258 24.2852 108.791 23.9922 109.26 23.6055C109.729 23.2188 110.109 22.7441 110.402 22.1816L114.674 22.7969C114.205 23.9336 113.537 24.9238 112.67 25.7676C111.814 26.5996 110.783 27.2441 109.576 27.7012C108.369 28.1582 107.016 28.3867 105.516 28.3867ZM122.145 28.4043C120.902 28.3926 119.818 28.1641 118.893 27.7188C117.979 27.2734 117.305 26.6113 116.871 25.7324C116.438 24.8418 116.32 23.7578 116.52 22.4805C116.707 21.3789 117.064 20.4648 117.592 19.7383C118.131 19.0117 118.793 18.4316 119.578 17.998C120.363 17.5645 121.213 17.2363 122.127 17.0137C123.053 16.791 124.002 16.627 124.975 16.5215C126.146 16.3926 127.096 16.2812 127.822 16.1875C128.549 16.082 129.094 15.9297 129.457 15.7305C129.832 15.5195 130.061 15.1914 130.143 14.7461V14.6582C130.295 13.709 130.137 12.9707 129.668 12.4434C129.211 11.916 128.443 11.6523 127.365 11.6523C126.252 11.6523 125.309 11.8984 124.535 12.3906C123.773 12.8828 123.211 13.4629 122.848 14.1309L118.682 13.5156C119.209 12.3203 119.93 11.3242 120.844 10.5273C121.77 9.71875 122.83 9.11523 124.025 8.7168C125.232 8.30664 126.521 8.10156 127.893 8.10156C128.83 8.10156 129.744 8.21289 130.635 8.43555C131.537 8.64648 132.334 9.00977 133.025 9.52539C133.729 10.041 134.244 10.7324 134.572 11.5996C134.9 12.4668 134.953 13.5508 134.73 14.8516L132.533 28H128.121L128.578 25.293H128.42C128.045 25.832 127.564 26.3418 126.979 26.8223C126.393 27.291 125.695 27.6719 124.887 27.9648C124.09 28.2461 123.176 28.3926 122.145 28.4043ZM123.885 24.9941C124.822 24.9941 125.66 24.8125 126.398 24.4492C127.137 24.0742 127.746 23.582 128.227 22.9727C128.707 22.3516 129.006 21.6777 129.123 20.9512L129.492 18.6484C129.328 18.7656 129.064 18.877 128.701 18.9824C128.35 19.0762 127.951 19.1641 127.506 19.2461C127.061 19.3164 126.621 19.3809 126.188 19.4395C125.766 19.498 125.402 19.5508 125.098 19.5977C124.395 19.6914 123.75 19.8496 123.164 20.0723C122.59 20.2832 122.109 20.5762 121.723 20.9512C121.348 21.3262 121.113 21.8125 121.02 22.4102C120.879 23.2539 121.078 23.8984 121.617 24.3438C122.168 24.7773 122.924 24.9941 123.885 24.9941ZM141.164 21.8477L142.061 16.2402H142.816L151.201 8.34766H156.633L146.35 18.0332H145.4L141.164 21.8477ZM135.926 28L140.285 1.80859H144.908L140.566 28H135.926ZM148.266 28L143.344 19.0703L147.018 15.8008L153.803 28H148.266Z" fill="white"/>
								</g>
								<defs>
								<filter id="filter0_d_382_657" x="0.353516" y="0.525391" width="160.279" height="42.8398" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
								<feOffset dy="4"/>
								<feGaussianBlur stdDeviation="2"/>
								<feComposite in2="hardAlpha" operator="out"/>
								<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
								<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_382_657"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_382_657" result="shape"/>
								</filter>
								</defs>
							</svg>
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
							'link_class'     => 'font-inter font-semibold italic text-white text-lg uppercase no-underline hover:underline',
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
								'link_before'    => '<em>',
								'link_after'     => '</em>',
								'link_class'     => 'font-inter text-lg text-citybreakteal-500 font-semibold italic uppercase no-underline hover:underline',
								'fallback_cb'     => false,
							)
						);
					?>				
				</div>

			</nav>
		</div>

	</header>

	<div id="content" class="site-content flex-grow dark:bg-citybreakteal-800 mt-92px">


		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
