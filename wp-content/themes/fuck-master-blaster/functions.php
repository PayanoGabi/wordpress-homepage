<?php


function homepage_files(){
	
	wp_enqueue_script('octohome-bs', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script('octohome-bs', '//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js');
	wp_enqueue_script('octohome-bs', '../../dist/js/bootstrap.min.js');
	wp_enqueue_script('octohome-bs', '//code.jquery.com/jquery-1.12.4.min.js');
	wp_enqueue_script('octohome-morebs', '//oss.maxcdn.com/respond/1.4.2/respond.min.js');
	wp_enqueue_style('octohome-nav', '//fonts.googleapis.com/css?family=Great+Vibes');
	wp_enqueue_style('octohome-nav', '//fonts.googleapis.com/css?family=Great+Vibes');
	wp_enqueue_style('main_styles', get_stylesheet_uri()); // load css
					//(name, location that points to the file)

	wp_enqueue_script('main-js', get_theme_file_uri('/assets/main.js'), NULL,'1.0', true);


	//wp_enqueue_script('main_script' get_stylesheet_uri()); // load js
}


// first argument loads css files, second argument 

add_action('wp_enqueue_scripts','homepage_files');
			// passes arguments(name matters = loads file, name of function we want to run)

?>