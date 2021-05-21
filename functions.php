<?php
add_action( 'wp_enqueue_scripts', 'activebox_styles' );

function activebox_styles() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() ); // наш main .css файл (из корня)
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . "/assets/css/normalize.css" );
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . "/assets/css/slick.css" );
	wp_enqueue_style( 'media-style', get_template_directory_uri() . "/assets/css/media.css" );
}

add_action( 'wp_enqueue_scripts', 'activebox_scripts' );

function activebox_scripts(){
	wp_deregister_script( 'jquery' ); // удаляет ранее зарегистрированный скрипт
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, null);
	wp_enqueue_script( 'jquery' ); // инициализация нового скрипта

	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
}
