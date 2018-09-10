<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_print_styles', 'cake_styles' );
//add_action( 'wp_footer', 'cake_styles_footer' );
add_action( 'wp_enqueue_scripts', 'cake_script_footer' );



function cake_script_footer() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), null, true );
	if (is_front_page() || is_page(21)) {
		wp_enqueue_script( 'scripts_front_page', get_template_directory_uri() . '/assets/js/front_page_script.js', array('jquery'), null, true );
	}
}

function cake_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
}

//Позволяет темам или плагинам регистрировать поддержку новых возможностей в WordPress
add_theme_support( 'custom-background' );
add_theme_support( 'custom-logo' );

add_theme_support( 'post-thumbnails' );

add_image_size( 'spec_thumb_catalog', 246, 183, false);
add_image_size( 'spec_thumb_stuffing', 195, 187, false);



