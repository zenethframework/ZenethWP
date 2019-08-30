<?php
/**
 * Sidebar Core File
 */

 if ( ! function_exists( 'zenethwp_widgets_init' ) ) {

 // Register Sidebars
 function zenethwp_widgets_init() {

 	$args = array(
 		'id'            => 'sidebar-1',
 		'name'          => __( 'Right Sidebar', 'zenethwp' ),
 		'before_title'  => '<h2 class="widget-title">',
 		'after_title'   => '</h2>',
 		'before_widget' => '<section id="%1$s" class="widget widget-container %2$s">',
 		'after_widget'  => '</section>',
 	);
 	register_sidebar( $args );

 	$args = array(
 		'id'            => 'sidebar-2',
 		'name'          => __( 'Left Sidebar', 'zenethwp' ),
 		'before_title'  => '<h2 class="widget-title">',
 		'after_title'   => '</h2>',
 		'before_widget' => '<section id="%1$s" class="widget widget-container %2$s">',
 		'after_widget'  => '</section>',
 	);
 	register_sidebar( $args );

 	$args = array(
 		'id'            => 'sidebar-3',
 		'name'          => __( 'Footer Widget 1', 'zenethwp' ),
 		'before_title'  => '<h2 class="widget-title">',
 		'after_title'   => '</h2>',
 		'before_widget' => '<section id="%1$s" class="widget footer-widget-container %2$s">',
 		'after_widget'  => '</section>',
 	);
 	register_sidebar( $args );

 	$args = array(
 		'id'            => 'sidebar-4',
 		'name'          => __( 'Footer Widget 2', 'zenethwp' ),
 		'before_title'  => '<h2 class="widget-title">',
 		'after_title'   => '</h2>',
 		'before_widget' => '<section id="%1$s" class="widget footer-widget-container %2$s">',
 		'after_widget'  => '</section>',
 	);
 	register_sidebar( $args );

 	$args = array(
 		'id'            => 'sidebar-5',
 		'name'          => __( 'Footer Widget 3', 'zenethwp' ),
 		'before_title'  => '<h2 class="widget-title">',
 		'after_title'   => '</h2>',
 		'before_widget' => '<section id="%1$s" class="widget footer-widget-container %2$s">',
 		'after_widget'  => '</section>',
 	);
 	register_sidebar( $args );

 }
 add_action( 'widgets_init', 'zenethwp_widgets_init' );

 }
