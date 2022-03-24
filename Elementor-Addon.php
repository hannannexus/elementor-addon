<?php 

/*
    Plugin Name: Elementor Addon One
    Description: Simple Addon for Elementor
    Plugin URI: hannan.me
    Version: 1.0
    Author: Hannan
    Author URI: hannan.me

*/


function elementor_widget_one_register( $widgets_manager ){
    
    require_once( __DIR__. '/widgets/widget-one.php');
    require_once( __DIR__. '/widgets/widget-two.php');

    $widgets_manager->register( new Elementor_Widget_one() ); 
    $widgets_manager->register( new Elementor_widget_two() ); 
}
add_action('elementor/widgets/register','elementor_widget_one_register');