<?php
/*
* Theme Functions Hridoy-roy
* @package Foodpanda
print_r(get_template_directory_uri());
//print_r(get_template_directory_uri());
get_stylesheet_uri() // direct style.css link;
*/

function foodpanda_enqueue_secript(){
    wp_enqueue_style('style',get_stylesheet_uri(),'',filemtime( get_template_directory().'/style.css' ),'all' );

    wp_enqueue_script('main-js',get_template_directory_uri().'/assets/main.js','',filemtime( get_template_directory() . '/assets/main.js'), true );

//    wp_register_style('style',get_stylesheet_uri(),'',filemtime( get_template_directory().'/style.css' ),'all' );
//    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts','foodpanda_enqueue_secript');

?>