<?php

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

function replace_content($content)
{
	$content = str_replace('&nbsp;', ' ', $content);
	return $content;
}

add_filter('the_content','replace_content');
add_filter('the_excerpt', 'replace_content');

add_action( 'after_setup_theme', 'mainMenu' );
add_theme_support( 'post-thumbnails' );

function mainMenu() {
	register_nav_menu( 'main', 'Основное меню' );
	register_nav_menu( 'footer', 'Меню в футере' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );
function my_scripts(){
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'owl-slide', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js', array(), '2.3.4', true );
	wp_enqueue_script( 'more', get_template_directory_uri() . '/js/more-nav.js', array(), true, true );
}

add_action( 'wp_enqueue_scripts', 'style_theme' );

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl-carousel/owl.theme.default.css' );
	wp_enqueue_style( 'owl-slide', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.css' );
}

