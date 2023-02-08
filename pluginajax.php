<?php
/*
Plugin Name: Fitness Survey Plugin
Plugin URI: https://online.sportnaklinika.si/
description: A custom plugin which we can use to do survey on people for fitness
Version: 1.0.0
Author: optibull.si
Author URI: https://online.sportnaklinika.si
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
    wp_enqueue_script( 'script-js', plugins_url( '/script.js', __FILE__ ),array('jquery'));

    // Pass ajax_url to script.js
    wp_localize_script( 'script-js', 'plugin_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}



// smtp details 

function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    // $phpmailer->Username = '6e380d75012caa';
    // $phpmailer->Password = '3a6c7363c5dc8f';
  }
  
  add_action('phpmailer_init', 'mailtrap');


  global $wp_session;
  $wp_session['loggedIn'] = 15;
  
//   echo $wp_session['loggedIn'];

if (!session_id()) {
    session_start();
}

if ( isset( $_POST['wp-submit'] ) ){
    $_SESSION['username']= 'tanvir';
}




//function for send mail
add_action( 'wp_ajax_send_mail_to_client', 'send_mail_to_client' );
add_action( 'wp_ajax_nopriv_send_mail_to_client', 'send_mail_to_client' );
function send_mail_to_client() {

    $formdata = [];
    wp_parse_str($_POST['formData'], $formdata); 


    // print_r($formdata) ; 



    // set session for calculation
    // function set_session_in_wordpress() {
        // Start the session if it hasn't already been started
        if ( ! session_id() ) {
            session_start();
        }
        $_SESSION = array(); 
        // Set the session variable
        $_SESSION['p_gender'] =  $formdata['p_gender'];
        $_SESSION['p_height'] =  $formdata['p_height'];
        $_SESSION['p_weight'] =  $formdata['p_weight'];
        $_SESSION['p_age']    =  $formdata['p_age'];
    
        // Return the session value
        // return $_SESSION;
    // }
 
    $bmr_men =  ($formdata['p_weight']*10) + ($formdata['p_height']*6.25) - (5*$formdata['p_age'])+5;

    // $response = array(
    //     'bmr_men' => $bmr_men,
    //     'array_2' => array('a', 'b', 'c'),
        
    // );

    return wp_send_json_success($bmr_men);

print_r($response) ; 

$to = 'anmtanvir872@gmail.com' ; 

$subject = 'Subject';
// $body = $formdata['temp_desc'];
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From:' . "testing@gmail.com";


    //Message
    $message = "";

    foreach ($formdata as $index => $field) {
        $message .= '<strong>' . $index . '</strong> :' . $field . '<br/>';
    }


    // wp_send_json('111');

$test = wp_mail( $to , $subject, $message, $headers );

 if($test){
    echo 'send' ; 
 }else{
    echo 'not send' ; 
 }




     
}





