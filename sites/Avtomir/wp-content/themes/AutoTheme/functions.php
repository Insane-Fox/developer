<?php

add_action( 'wp_enqueue_scripts', 'autotheme_scripts' );

function autotheme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0.0', true );
}