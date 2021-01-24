<?php

//Menus de navegacion
function fullmkt_menus(){
	register_nav_menus(array(
		'menu-principal' => __('Menu Principal', 'fullmkt')
	));
}
add_action('init', 'fullmkt_menus');

//Scripts y Styles
function fullmkt_scripts_styles(){
	wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css', array(), "8.0.1");

	wp_enqueue_style( 'slicknavCSS', get_template_directory_uri().'/css/slicknav.min.css', array(), "1.0.10");

	wp_enqueue_style( 'animateCSS', get_template_directory_uri().'/css/animate.min.css', array(), "4.1.1");

	wp_enqueue_style( 'bootstrapCSS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css', array(), "3.4.1");
	//hoja de estilos principal
	wp_enqueue_style( 'googleFont', "https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,800&display=swap", array(), "1.0.0");

	wp_enqueue_style( 'style', get_stylesheet_uri(), array('normalize','googleFont','slicknavCSS','animateCSS','bootstrapCSS'), "1.0.0");

	wp_enqueue_script('slicknavJS', get_template_directory_uri().'/js/jquery.slicknav.min.js', array('jquery'), "1.0.10",true);

	wp_enqueue_script('slicknavJS', get_template_directory_uri().'/js/jquery.slicknav.min.js', array('jquery'), "1.0.10",true);

	wp_enqueue_script('bootstrapJS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', array('jquery'), "3.4.1",true);

	wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery','slicknavJS','bootstrapJS'), "1.0.10",true);
}
add_action('wp_enqueue_scripts','fullmkt_scripts_styles');

