<?php
/**
 * ZenethWP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ZenethWP
 */

/**
 * Setup theme includes.
 */
require get_template_directory() . '/inc/Setup/Setup.php';
require get_template_directory() . '/inc/Setup/Menus.php';
require get_template_directory() . '/inc/Setup/Enqueue.php';

/**
 * Custom theme includes
 */
require get_template_directory() . '/inc/Custom/Custom-header.php';
require get_template_directory() . '/inc/Custom/Custom-comments.php';

/**
 * Core theme includes
 */
require get_template_directory() . '/inc/Core/Zeneth-WalkerNav.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/Plugins/jetpack.php';
}
