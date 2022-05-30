<?php 

function myportfolio_enqueue_style() {
    wp_enqueue_style("portfolio-style", get_stylesheet_uri(), array(), time());
}

add_action("wp_enqueue_scripts", "myportfolio_enqueue_style");





function myportfolio_enqueue_script() {
    wp_enqueue_script( "slider", get_stylesheet_directory_uri()."/js/jssor.slider-28.1.0.min.js");
    wp_enqueue_script( "slider-js", get_stylesheet_directory_uri()."/js/slider.js");
}

add_action("wp_enqueue_scripts", "myportfolio_enqueue_script");





function myportfolio_enqueue_scriptJS() {
    wp_enqueue_script( "main.js", get_stylesheet_directory_uri()."/js/main.js", array(), time(), true);
}

add_action("wp_enqueue_scripts", "myportfolio_enqueue_scriptJS");



function easv_register_menu() {
    register_nav_menu("main_menu", "Main menu");
} 

add_action("init", "easv_register_menu");




function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
?>