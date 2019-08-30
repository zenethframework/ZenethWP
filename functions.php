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
require get_template_directory() . '/inc/Core/Sidebar.php';
require get_template_directory() . '/inc/Core/Theme-functions.php';
require get_template_directory() . '/inc/Core/Zeneth-WalkerNav.php';

/**
 * Customizer theme includes
 */
require get_template_directory() . '/inc/Api/Customizer/customizer.php';
