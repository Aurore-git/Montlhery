
<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';



if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if
  (
    isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['postal']) && !empty($_POST['postal']) &&
    isset($_POST['city']) && !empty($_POST['city']) &&
    isset($_POST['objets']) && !empty($_POST['objets']) &&
    isset($_POST['message']) && !empty($_POST['message'])
  ){
    // We Clean the content
    $regex ="/^[a-zA-Z\s]+$/";
    $regexMail ="/^[a-zA-Z\d\._-]+@[a-zA-Z\d\._-]+\.[a-zA-Z\d\.]+$/";
    $regexPostal ="/^[\d]+$/";
    $regexMessage ="/^[a-zA-Z\s\d\._-]+$/";



    if(preg_match($regex, ($_POST['name'])) && strlen(($_POST['name'])) < 20){
        $name = strip_tags($_POST['name']);
    }else{
    $error1 = '<div class="alert-error mb-5">
                <span>Erreur! Prenom Invalide</span>
              </div>';
    };


    if(preg_match($regexMail, ($_POST['email'])) && strlen(($_POST['email'])) < 40){
      $email = strip_tags($_POST['email']);
    }else{
    $error2 = '<div class="alert-error mb-5">
                <span>Erreur! Email Invalide</span>
              </div>';
    };


    if(preg_match($regexPostal, ($_POST['postal'])) && strlen(($_POST['postal'])) < 10){
      $postal = strip_tags($_POST['postal']);
    }else{
    $error2 = '<div class="alert-error mb-5">
                <span>Erreur! Code Postal Invalide</span>
              </div>';
    };

    if(preg_match($regex, ($_POST['city'])) && strlen(($_POST['city'])) < 20 ){
      $city = strip_tags($_POST['city']);
    }else{
    $error3 = '<div class="alert-error mb-5">
                <span>Erreur! Nom de Ville Invalide</span>
              </div>';
    };

    if(preg_match($regexMessage, ($_POST['objets'])) && strlen(($_POST['objets'])) < 40) {
      $objets = strip_tags($_POST['objets']);
    }else{
    $error4 = '<div class="alert-error mb-5">
                <span>Erreur! Objets Invalide</span>
              </div>';
    };

    if(preg_match($regexMessage, ($_POST['message']))) {
      $message = htmlspecialchars($_POST['message']);
    }else{
    $error5 = '<div class="alert-error mb-5">
                <span>Erreur! Message Invalide</span>
              </div>';
    };

    echo($name ." , ". $email ." , ". $postal ." , ". $city ." , ". $objets ." , ". $message);

  }else{
    echo('Error isset not empty section');
  };
};


if
(
  isset($_POST['submit']) &&
  isset($name) &&
  isset($email) &&
  isset($postal) &&
  isset($city) &&
  isset($objets) &&
  isset($message)
){
  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mikailkalkanpro@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'MikyGameMail11'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('mikailkalkanpro@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('mikailkalkanpro@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h2>Prenom: $name </h2> <h3> Email: $email<br /> Ville : $postal, $city  <br /> <br />Objets : $objets <br /><br />  Message : </h3> <p>$message </p>";

    $mail->send();
    $alert = '<div class="alert-success mb-5">
                <span>Message Sent! Thank you for contacting us.</span>
              </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error mb-5">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>

