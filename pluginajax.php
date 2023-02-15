<?php
/*
Plugin Name: Fitness Survey Plugin
Plugin URI: https://online.sportnaklinika.si/
description: A custom plugin which we can use to do survey on people for fitness
Version: 1.0.0
Author: optibull.si
Author URI: https://online.sportnaklinika.si
*/



// Create the database table on plugin activation
register_activation_hook(__FILE__, 'create_five_fields_table');
function create_five_fields_table() {
  global $wpdb;

  $table_name = $wpdb->prefix . 'five_fields';

  $charset_collate = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE $table_name (
    id mediumint(9) NOT NULL AUTO_INCREMENT,
    field_one varchar(255) NOT NULL,
    field_two varchar(255) NOT NULL,
    field_three varchar(255) NOT NULL,
    field_four varchar(255) NOT NULL,
    field_five varchar(255) NOT NULL,
    PRIMARY KEY (id)
  ) $charset_collate;";

  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta($sql);
}



// Add menu
function fitness_menu() {
    add_menu_page("Fitness Survey", "Fitness Survey","manage_options", "fitness-survey", "fitness_survey",plugins_url('/pluginajax/img/icon.png'));
}

add_action("admin_menu", "fitness_menu");// Add menu

add_action("admin_menu", "fitness_menu");

function fitness_survey(){ 
    
    // include "template.php";       
    include "store_coupon.php";       
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

        if ( ! session_id() ) {
            session_start();
        }
        $_SESSION = array(); 
        // Set the session variable
        $_SESSION['p_gender'] =  $formdata['p_gender'];
        $_SESSION['p_height'] =  $formdata['p_height'];
        $_SESSION['p_weight'] =  $formdata['p_weight'];
        $_SESSION['p_age']    =  $formdata['p_age'];
        // $_SESSION['start_time'] = time();

        if (!isset($_SESSION['start_time'])) {
            $_SESSION['start_time'] = time();
          }

          $current_time = time();

          if ($current_time - $_SESSION['start_time'] > 30) {
            session_unset();
            session_destroy();
          }

          $today = new DateTime();
          $after_two_months = $today->add(new DateInterval('P2M'));
          $bmr_time = $after_two_months->format('jS F');

    $lose_weight = $formdata['weight_loss'] ; 
    $bmr_men =  ($formdata['p_weight']*10) + ($formdata['p_height']*6.25) - (5*$formdata['p_age'])+5;
    
    $data = array(
      'bmr_men' => $bmr_men,
      'lose_weight' => $lose_weight,
      'bmr_time' => $bmr_time,
    ) ; 

    return wp_send_json_success($data);

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


$test = wp_mail( $to , $subject, $message, $headers );

 if($test){
    echo 'send' ; 
 }else{
    echo 'not send' ; 
 }

}








//function for send mail
add_action( 'wp_ajax_store_data_coupon', 'store_data_coupon' );
add_action( 'wp_ajax_nopriv_store_data_coupon', 'store_data_coupon' );
function store_data_coupon() {

    $formdata = [];
    wp_parse_str($_POST['formData'], $formdata); 

    //   print_r($formdata) ;
      
      
      global $wpdb;

      $table_name = $wpdb->prefix . 'five_fields';



      $field_one = sanitize_text_field($formdata['field_one']);
      $field_two = sanitize_text_field($formdata['field_two']);
      $field_three = sanitize_text_field($formdata['field_three']);
      $field_four = sanitize_text_field($formdata['field_four']);
      $field_five = sanitize_text_field($formdata['field_five']);


      $results = $wpdb->get_results("SELECT * FROM $table_name");

      if(!empty($results)){    
        $data = array(
            'field_one' =>   sanitize_text_field($formdata['field_one']),
            'field_two' =>   sanitize_text_field($formdata['field_two']),
            'field_three' => sanitize_text_field($formdata['field_three']),
            'field_four' =>  sanitize_text_field($formdata['field_four']),
            'field_five' =>  sanitize_text_field($formdata['field_five']),
          );

          $where = array(
            'id' => 1,
          );
          
          $wpdb->update($table_name, $data, $where);

      }else{
       
        $wpdb->insert($table_name, array(
            'field_one' => $field_one,
            'field_two' => $field_two,
            'field_three' => $field_three,
            'field_four' => $field_four,
            'field_five' => $field_five,
          ));
          
      }


     



      


    // return wp_send_json_success($bmr_men);




}




