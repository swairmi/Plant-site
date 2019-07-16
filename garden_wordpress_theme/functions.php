<?php
function wpt_theme_styles() {

	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Cardo|Permanent+Marker' );


	if( is_page_template( 'services.php') ){
		wp_enqueue_style( 'services_css', get_stylesheet_directory_uri() . '/services.css' );
	}

	if( is_page_template( 'ourstory.php') ){
		wp_enqueue_style( 'ourstory_css', get_stylesheet_directory_uri() . '/stylesheet_OURSTORY.css' );
	}


}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

function wpt_theme_js() {
	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery.min.js', '', '', false );
	wp_enqueue_script( 'TweenMax_js', get_template_directory_uri() . '/js/TweenMax.min.js', '', '', false );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', '', '', false );

	wp_enqueue_script( 'ScrollMagic_js', get_template_directory_uri() . '/js/ScrollMagic.min.js', '', '', false );
		wp_enqueue_script( 'app_js', get_template_directory_uri() . '/js/app.js', '', '', false );
		wp_enqueue_script( 'particles_js', get_template_directory_uri() . '/js/particles.min.js', '', '', true );
	wp_enqueue_script( 'three_js', get_template_directory_uri() . '/js/three.min.js', '', '', true );


	if( is_page_template( 'services.php') ){
		wp_enqueue_script( 'services_app_js', get_template_directory_uri() . '/services_app.js' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles', 'wpt_theme_js' );
?>


