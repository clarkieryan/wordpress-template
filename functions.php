<?php
/*
*
* Functions.php - Loads all of the theme functions
*
*/

//Register the scripts needed 
add_action('init', 'registerScript');
function registerScript(){
	//Set up JS Imports
	wp_register_script( 'defaultJS', plugins_url('/js/app.js', __FILE__), array('jquery'), '1.0' );
	//Set up CSS imports
	wp_register_style( 'defaultCSS', plugins_url('style.css', __FILE__), false, '1.0', 'all');
}

//Run the registered scripts
add_action('wp_enqueue_scripts', 'enqueue_style');

function enqueueStyle(){
	//If  showModal checked then import modal code
	wp_enqueue_script('defaultJS');
	wp_enqueue_style('defaultCSS' );
}


?>