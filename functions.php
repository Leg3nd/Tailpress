<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
//	wp_enqueue_script( 'flowbite', tailpress_asset( 'node_modules/flowbite/dist/flowbite.min.js' ), array(), $theme->get( 'Version' ), true);

}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Reusable Blocks accessible in backend
 * @link https://www.billerickson.net/reusable-blocks-accessible-in-wordpress-admin-area
 *
 */
function be_reusable_blocks_admin_menu() {
    add_menu_page( 'Reusable Blocks', 'Reusable Blocks', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
}
add_action( 'admin_menu', 'be_reusable_blocks_admin_menu' );

/**
 * Image sizes
 * 
 * This will add additional image sizes optimised at the appropriate size.
 */
add_image_size( 'card_small', 390, 220, array( 'center', 'center' ) ); // Crop from center out
add_image_size( 'card_medium', 598, 336, array( 'center', 'center' ) ); // Crop from center out
add_image_size( 'card_large', 693, 389, array( 'center', 'center' ) ); // Crop from center out
add_image_size( 'card_xl', 746, 419, array( 'center', 'center' ) ); // Crop from center out
add_image_size( 'carousel_medium', 834, 470, array( 'center', 'center' ) ); // Crop from center out
add_image_size( 'carousel_large', 916, 516, array( 'center', 'center' ) ); // Crop from center out
add_image_size( 'carousel_xl', 1440, 810, array( 'center', 'center' ) ); // Crop from center out
add_image_size( 'continent_large', 409, 613, array( 'center', 'center' ) ); // Crop from center out

/**
 * Custom classes
 * 
 * This will add a custom class to the category.
 */
add_filter('the_category','add_class_to_category',10,3);

function add_class_to_category( $thelist, $separator, $parents){
    $class_to_add = 'no-underline text-citybreakteal-500 hover:underline';
    return str_replace('<a href="', '<a class="' . $class_to_add . '" href="', $thelist);
}


/**
 * Font Awesome Kit Setup
 * 
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
	function fa_custom_setup_kit($kit_url = '') {
	  foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
		add_action(
		  $action,
		  function () use ( $kit_url ) {
			wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
		  }
		);
	  }
	}
  }
  fa_custom_setup_kit('https://kit.fontawesome.com/745215ea31.js');
  

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

// Function to update the anchor class in the primary menu. link_class is called in the header
function add_menu_link_class( $atts, $item, $args ) {
	if (property_exists($args, 'link_class')) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
	}
	add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );

/**
 * Register Blocks
 * @link https://www.billerickson.net/building-gutenberg-block-acf/#register-block
 *
 */
function be_register_blocks() {
	
	if( ! function_exists( 'acf_register_block_type' ) )
		return;

	acf_register_block_type( array(
		'name'			=> 'place',
		'title'			=> __( 'Place', 'place' ),
		'render_template'	=> 'template-parts/blocks/place/place.php',
		'category'		=> 'formatting',
		'icon'			=> 'location',
		'mode'			=> 'auto',
		'keywords'		=> array( 'place', 'location', 'activity' )
	));

}
add_action('acf/init', 'be_register_blocks' );