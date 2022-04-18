
<?php

/**
 * 
 * Template name: theme customizer settings
 * Add theme features
 * 
 */

 // WP_Customize Control


 function fn_customizer_settings($wp_customizer){

    //add  customizer settings
    //Include new section
    $wp_customizer->add_section('header', array(
        'title'=> __('Header Settings', 'wp_theme'),
        'priority'=> 70
    ));

    //add  capability to the customiser setting
    $wp_customizer->add_setting('header_image', array(
        'capability'=> 'edit_theme_options'
    ));

    //add controls to the customiser settings
    $wp_customizer->add_control(new  WP_Customize_Image_Control($wp_customizer, 'header_image', array(
        'label'=> __('Header Image', 'wp_theme'),
        'section'=> 'header'
    )));

     //adding header text
     $wp_customizer->add_setting('header_text_field', array(
        'capability'=> 'edit_theme_options',
        'default'=> 'Simplicity',
    ));

    //adding text control
    $wp_customizer->add_control('header_text_control', array(
        'label'=> __('Header Text', 'wp_theme'),
        'description'=> 'Change header text',
        'section'=> 'header',
        'settings'=> 'header_text_field'
    ));

    //adding header description field
    $wp_customizer->add_setting('header_desc_field', array(
        'capability'=> 'edit_theme_options',
        'default'=> 'The power of Wordpress',
    ));

    //adding text control
    $wp_customizer->add_control('header_description_control', array(
        'label'=> __('Header description', 'wp_theme'),
        'description'=> 'Change header description',
        'section'=> 'header',
        'settings'=> 'header_desc_field'
    ));
 }

 add_action('customize_register', 'fn_customizer_settings')



 ?>