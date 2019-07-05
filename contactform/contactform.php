<?php
/*
  PHP contact form script
  Version: 1.1
  Copyrights BootstrapMade.com
*/

/***************** Configuration *****************/

  // Replace with your real receiving email address
  $contact_email_to = "roberto@digitable.com.mx";

  // Title prefixes
  $subject_title = "Digitable:";
  $name_title = "Nombre:";
  $email_title = "Email:";
  $message_title = "Mensaje:";

  // Error messages
  $contact_error_name = "El nombre es muy corto o vacío.";
  $contact_error_email = "Por favor ingresa una dirección de email válida.";
  $contact_error_subject = "El asunto es muy corto o vacío.";
  $contact_error_message = "El mensaje es muy corto. Por favor ingresa algo.";
  $contact_error_configuration = "¡El servicio de email de contacto no está configurado!";

/********** Do not edit from the below line ***********/

  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    die('Sorry Request must be Ajax POST');
  }

  if(isset($_POST)) {

    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    $lang = filter_var($_POST["lang"], FILTER_SANITIZE_STRING);

    switch($lang) {
      case 'EN':
      // Title prefixes
      $subject_title = "Digitable:";
      $name_title = "Name:";
      $email_title = "Email:";
      $message_title = "Message:";
      // Error messages
      $contact_error_name = "Name is too short or empty.";
      $contact_error_email = "Please enter a valid email.";
      $contact_error_subject = "Subject is too short or empty.";
      $contact_error_message = "Message is too short. Please enter something.";
      $contact_error_configuration = "The contact form receiving email address is not configured!";

      break;
    }



    if(!$contact_email_to || $contact_email_to == 'contact@example.com') {
      die($contact_error_configuration);
    }

    if(strlen($name)<3){
      die($contact_error_name);
    }

    if(!$email){
      die($contact_error_email);
    }

    if(strlen($subject)<3){
      die($contact_error_subject);
    }

    if(strlen($message)<3){
      die($contact_error_message);
    }

    if(!isset($contact_email_from)) {
      $contact_email_from = "contactform@" . @preg_replace('/^www\./','', $_SERVER['SERVER_NAME']);
    }

    $headers = 'From: ' . $name . ' <' . $contact_email_from . '>' . PHP_EOL;
    $headers .= 'Reply-To: ' . $email . PHP_EOL;
    $headers .= 'MIME-Version: 1.0' . PHP_EOL;
    $headers .= 'Content-Type: text/html; charset=UTF-8' . PHP_EOL;
    $headers .= 'X-Mailer: PHP/' . phpversion();

    $message_content = '<strong>' . $name_title . '</strong> ' . $name . '<br>';
    $message_content .= '<strong>' . $email_title . '</strong> ' . $email . '<br>';
    $message_content .= '<strong>' . $message_title . '</strong> ' . nl2br($message);

    $sendemail = mail($contact_email_to, $subject_title . ' ' . $subject, $message_content, $headers);

    if( $sendemail ) {
      echo 'OK';
    } else {
      echo 'Could not send mail! Please check your PHP mail configuration.';
    }
  }
?>
