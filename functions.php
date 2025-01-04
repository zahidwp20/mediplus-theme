<?php

function mediplus_setup_theme() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails', array( 'post', 'sliders', 'team', 'testimonials', 'portfolio' ) );
	load_theme_textdomain( 'mediplus', get_template_directory() . '/languages' );
	register_nav_menus( array(
		'main-menu' => esc_html__( 'Primary Menu', 'mediplus' )
	) );
}

add_action( 'after_setup_theme', 'mediplus_setup_theme' );

function mediplus_theme_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '5.13.0', 'all' );
	wp_enqueue_style( 'icofont', get_template_directory_uri() . '/assets/css/icofont.css', array(), 1.0, 'all' );
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), 1.0, 'all' );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/assets/css/owl-carousel.css', array(), 1.0, 'all' );
	wp_enqueue_style( 'datepicker-css', get_template_directory_uri() . '/assets/css/datepicker.css', array(), 1.0, 'all' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.min.css', array(), 1.0, 'all' );
	wp_enqueue_style( 'magnific-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), 1.0, 'all' );
	wp_enqueue_style( 'https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap' );
	wp_enqueue_style( 'mediplus-style', get_template_directory_uri() . '/assets/css/style.css', array(), 1.0, 'all' );
	wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/assets/css/normalize.css', array(), 1.0, 'all' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array(), 1.0, 'all' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	wp_enqueue_style( 'mediplus-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), 1.0, 'all' );


	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-migrate-js', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.0.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'jquery-ui-js', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/assets/js/easing.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'colors-js', get_template_directory_uri() . '/assets/js/colors.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-datepicker-js', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'slicknav-js', get_template_directory_uri() . '/assets/js/slicknav.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'scrollUp-js', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'niceselect-js', get_template_directory_uri() . '/assets/js/niceselect.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'tilt-js', get_template_directory_uri() . '/assets/js/tilt.jquery.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl-carousel.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'steller-js', get_template_directory_uri() . '/assets/js/steller.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'magnific-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js');
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'mediplus_theme_scripts' );



