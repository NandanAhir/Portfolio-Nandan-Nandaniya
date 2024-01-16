

<?php

// $conn = mysqli_connect('localhost', 'root', '', 'portfolio');
// if(!$conn){
//     die('could not connect' . mysqli_connect_error());
// }
$conn = mysqli_connect('localhost', 'root', '', 'id21683033_portfolio');
if(!$conn){
    die('could not connect' . mysqli_connect_error());
}


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$entrydate = date('d-m-Y h:i:s a', time());
// print_r($entrydate);exit;

$store = "INSERT INTO contactform (name,email,subject,message,entrydatetime) VALUE('$name','$email','$subject','$message','$entrydate')";
// $store = "INSERT INTO csc (country_name, state_name, city_name) VALUE('$country_name','$state_name','$city_name')";

mysqli_query($conn, $store);

if(!empty($store)){
  // header('location: http://localhost/portfolio-nandan-nandaniya/#contact', true, 307);
  header('location: https://nandan-portfolio.000webhostapp.com/#contact', true, 307);

}

?>

















<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'nandannandaniya08@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // // /*
  // // $contact->smtp = array(
  // //   'host' => 'example.com',
  // //   'username' => 'example',
  // //   'password' => 'pass',
  // //   'port' => '587'
  // // );
  // // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>
