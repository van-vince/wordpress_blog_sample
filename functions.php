
<?php

 /**
 * 
 * Template name: functios.php
 * Add theme features
 * 
 */

 // add customizer.php file
 require_once('templates/helpers/customizer.php');

 // link theme styles
 function fn_theme_scripts(){

  //link style files
    wp_enqueue_style('fontawsome', get_template_directory_uri(). '/vendor/css/all.min.css'); 

    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('media_responsive', get_template_directory_uri(). '/assets/css/media.css');

    //link scripts files
    wp_enqueue_script('jquery-file', get_template_directory_uri().'/vendor/js/jquery.js');

    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js');
 }

 add_action('wp_enqueue_scripts','fn_theme_scripts');



 // include theme supports
 function fn_theme_support(){
   add_theme_support('title-tag');
   add_theme_support( 'post-thumbnails' );
   add_theme_support('html5', array('search-form'));
   add_theme_support('custom-logo');
 }
 add_action('after_setup_theme','fn_theme_support');



 // Registering nav manu
 function fn_nav_menus(){
    register_nav_menus(array(
      'primary-menu' => __('Primary Menu', 'text_domain'),
      'footer-menu' => __('Footer Menu', 'text_domain'),
    ));
 }
 add_action('init', 'fn_nav_menus');


 function add_link_atts($atts){
    $atts['class'] = 'link text-light';
    return $atts;
 }
 add_filter('nav_menu_link_attributes','add_link_atts');


   //trim excerpt to a short lenght
 function fn_custom_excerpt_lenght($lenght){
      return 15;
 }
 add_filter('excerpt_lenght', 'fn_custom_excerpt_lenght');




?>

