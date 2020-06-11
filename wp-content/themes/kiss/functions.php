<?php

add_action('wp_enqueue_scripts', function (){
	wp_enqueue_style('jquery-modal', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css');
	wp_enqueue_style('slick-theme', get_template_directory_uri().'/assets/css/slick-theme.css');
	wp_enqueue_style('slick', get_template_directory_uri().'/assets/css/slick.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css');
	wp_enqueue_style('css_slider', get_template_directory_uri().'/assets/css/css_slider.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
	wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css');
	wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css');

	wp_deregister_script( 'jquery' );
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js', [], null, true);
	wp_enqueue_script('jquery-modal', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js', [], null, true);
	wp_enqueue_script('slick-min', get_template_directory_uri().'/assets/js/slick.min.js', [], null, true);
	wp_enqueue_script('wow', get_template_directory_uri().'/assets/js/wow.min.js', [], null, true);
	wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', [], null, true);
});