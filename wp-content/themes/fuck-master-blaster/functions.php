<?php


function homepage_files(){

	wp_enqueue_style('octohome-nav', '//fonts.googleapis.com/css?family=Great+Vibes');


	

 	wp_enqueue_style('main_styles', get_stylesheet_uri()); // load css
					//(name, location that points to the file)

	wp_enqueue_style('octohome-nav', '//fonts.googleapis.com/css?family=Great+Vibes');
	wp_enqueue_style('main_styles', get_stylesheet_uri()); // load css
					//(name, location that points to the file)
	wp_enqueue_script('main-js', get_theme_file_uri('/assets/main.js'), NULL,'1.0', true);
	   
               //name, get the url parameter path for this file, other, version, do you want it loaded at the bottom


	//wp_enqueue_script('main_script' get_stylesheet_uri()); // load js
}


// first argument loads css files, second argument 

add_action('wp_enqueue_scripts','homepage_files');
			// passes arguments(name matters = loads file, name of function we want to run)


			

function bootstrap_scripts_enqueue() {
	    // all styles
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('custom-css',get_template_directory_uri().'/css/custom.css');
	    // all scripts
	wp_enqueue_script( 'jquery-3-js', get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
}
add_action( 'wp_enqueue_scripts', 'bootstrap_scripts_enqueue',80 );

?>

