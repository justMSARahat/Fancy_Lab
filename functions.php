<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fancy Lab
 */

 function fancy_lab_style(){
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/include/js/bootstrap.min.js', array('jquery'), '4.3.1',true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/include/css/bootstrap.min.css', array() ,'4.3.1','all' );
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri() , array() , filemtime( get_template_directory(). '/style.css' ) ,'all' );
 }
 add_action( 'wp_enqueue_scripts','fancy_lab_style' );