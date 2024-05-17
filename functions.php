<?php
/**
 * Theme Functions
 * 
 * @package PortoflioTheme
 */


function portfolioTheme_enqueue_scripts(){

    wp_register_style('stylesheetMain', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all');
    wp_register_script('index-js' , get_template_directory_uri().'/assets/index.js', [] , filemtime(get_template_directory().'/assets/index.js'), true);

    wp_enqueue_style('stylesheetMain');
    wp_enqueue_script('index-js');
}

add_action('wp_enqueue_scripts', 'portfolioTheme_enqueue_scripts');


?>