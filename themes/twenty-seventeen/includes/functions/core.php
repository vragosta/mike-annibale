<?php
/**
 * This file contains the necessary theme configuration functions.
 *
 * @package Mike Annibale - Twenty Sixteen
 * @since 0.1.0
 */

namespace MikeAnnibale\Functions\Core;

/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @since 0.1.0
 * @uses add_action()
 * @return void
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme', $n( 'mikeannibale_setup' ) );
}

/**
 * Declare theme support.
 *
 * @since 0.1.0
 * @uses add_theme_support(), set_post_thumbnail_size(), add_image_size(), and add_post_type_support(), show_admin_bar()
 * @return void
 */
function mikeannibale_setup() {

	# Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	# Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );

	/**
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	# Add excerpt support to...
	add_post_type_support( 'page', 'excerpt' );

	# If set to 'false', the admin bar will not display on front end.
	show_admin_bar( false );
}
