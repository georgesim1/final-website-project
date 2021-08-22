<?php 

register_nav_menus( array(
    'primary' => __( 'Principal Menu', 'soextreme' ),
) );

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );




function load_stylesheets ()
{

    wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_style('bootstrap');

    wp_register_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
    wp_enqueue_style('Font_Awesome');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 12345599, 'all');
    wp_enqueue_style ('style');

    wp_enqueue_script('jquery');

    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1/dist/umd/popper.min.js', array(), '', true );

    wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array(), '', true );

}


add_action('wp_enqueue_scripts', 'load_stylesheets');






?>