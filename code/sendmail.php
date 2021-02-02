
<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';





if(isset($_POST['submit'])){
  $regex ="/^[a-zA-Z\s]+$/";
  $regexMail ="/^[a-zA-Z\d\._-]+@[a-zA-Z\d\._-]+\.[a-zA-Z\d\.]+$/";
  $regexPostal ="/^[\d]+$/";
  $regexMessage ="/^[a-zA-Z\s\d\._-]+$/";

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $postal = htmlspecialchars($_POST['postal']);
  $city = htmlspecialchars($_POST['city']);
  $objets = htmlspecialchars($_POST['objets']);
  $message = htmlspecialchars($_POST['message']);

  //  && && preg_match($regexPostal, $postal) && preg_match($regexMessage, $email & $message)
  if(preg_match($regex, $name))
  {
    $output ="<span style='color:green>Valide</span>";
    echo($name);
  }else{
    $output ="<span style='color:red>Erreur</span>";
    echo('Erreur');
  };

  if(preg_match($regexMail, $email))
  {
    $output ="<span style='color:green>Valide</span>";
    echo($email);
  }else{
    $output ="<span style='color:red>Erreur</span>";
    echo('Erreur');
  };


  if(preg_match($regexPostal, $postal))
  {
    $output ="<span style='color:green>Valide</span>";
    echo($postal);
  }else{
    $output ="<span style='color:red>Erreur</span>";
    echo('Erreur');
  };

  if(preg_match($regex, $city))
  {
    $output ="<span style='color:green>Valide</span>";
    echo($city);
  }else{
    $output ="<span style='color:red>Erreur</span>";
    echo('Erreur');
  };

  if(preg_match($regexMessage, $objets))
  {
    $output ="<span style='color:green>Valide</span>";
    echo($objets);
  }else{
    $output ="<span style='color:red>Erreur</span>";
    echo('Erreur');
  };
  
  if(preg_match($regexMessage, $message))
  {
    $output ="<span style='color:green>Valide</span>";
    echo($message);
  }else{
    $output ="<span style='color:red>Erreur</span>";
    echo('Erreur');
  };
  
  

  // try{
  //   $mail->isSMTP();
  //   $mail->Host = 'smtp.gmail.com';
  //   $mail->SMTPAuth = true;
  //   $mail->Username = 'mikailkalkanpro@gmail.com'; // Gmail address which you want to use as SMTP server
  //   $mail->Password = 'MikyGameMail11'; // Gmail address Password
  //   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  //   $mail->Port = '587';

  //   $mail->setFrom('mikailkalkanpro@gmail.com'); // Gmail address which you used as SMTP server
  //   $mail->addAddress('mikailkalkanpro@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

  //   $mail->isHTML(true);
  //   $mail->Subject = 'Message Received (Contact Page)';
  //   $mail->Body = "<h2>Prenom: $name </h2> <h3> Email: $email<br /> Ville : $postal, $city  <br /> <br />Objets : $objets <br /><br />  Message : </h3> <p>$message </p>";

  //   $mail->send();
  //   $alert = '<div class="alert-success mb-5">
  //               <span>Message Sent! Thank you for contacting us.</span>
  //             </div>';
  // } catch (Exception $e){
  //   $alert = '<div class="alert-error mb-5">
  //               <span>'.$e->getMessage().'</span>
  //             </div>';
  // }
}
?>

