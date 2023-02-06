<?php
/*
Plugin Name: Fitness Survey Plugin
Plugin URI: https://anmtanvir.com/fitness_survey
description: A custom plugin which we can use to do survey on people for fitness
Version: 1.0.0
Author: Tanvirul Karim
Author URI: https://anmtanvir.com/
*/

// Add menu
function fitness_menu() {
    add_menu_page("Fitness Survey", "Fitness Survey","manage_options", "fitness-survey", "fitness_survey",plugins_url('/pluginajax/img/icon.png'));
}

add_action("admin_menu", "fitness_menu");

function fitness_survey(){ 
    include "template.php";       
} 


function subscribe_link(){
    
    include "template.php";  

}
add_shortcode('subscribe', 'subscribe_link'); 


/* Include CSS and Script */
add_action('wp_enqueue_scripts','plugin_css_jsscripts');
function plugin_css_jsscripts() {
    // CSS
    wp_enqueue_style( 'style-css', plugins_url( '/style.css', __FILE__ ));

    // JavaScript
    wp_enqueue_script( 'script-js', plugins_url( '/script.js', __FILE__ ),array('javascript'));

    // Pass ajax_url to script.js
    wp_localize_script( 'script-js', 'plugin_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}




