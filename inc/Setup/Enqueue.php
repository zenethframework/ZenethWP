<?php
/**
 * Main stylesheets & Scripts Enqueue File.
 *
 * @package ZenethWP
 * @author Zeneth Team
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 */
function zenethwp_scripts()
{
  /**
   * Enqueue Stylesheets
   */
 	wp_enqueue_style( 'zenethwp-style', get_stylesheet_uri() );
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all' );
  wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css', array(), '4.0.0', 'all' );

  /**
   * Enqueue Scripts
   */
 	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
 }
 add_action( 'wp_enqueue_scripts', 'zenethwp_scripts' );
