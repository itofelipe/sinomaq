<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'script', get_template_directory_uri() . 'js/jquery.min.js', array( 'jquery' ) );
	wp_register_script( 'script', get_template_directory_uri() . 'js/bootstrap.min.js', array( 'jquery' ) );
	wp_register_script( 'script', get_template_directory_uri() . 'js/bootstrap-image-gallery.min.js', array( 'jquery' ) );
	wp_register_script( 'script', get_template_directory_uri() . 'js/script.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

?>