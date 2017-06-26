<?php
include_once "requirelanguage.php";

if($_POST)
{
    $to_email       = "hola@latorregabriel.com, fernando@odmbranding.com"; //Recipient email, Replace with own email here
    $from_email     = 'noreply@latorregabriel.com'; //from mail, it is mandatory with some hosts and without it mail might endup in spam.
    
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        
        $output = json_encode(array( //create JSON data
            'type'=>'error', 
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    } 
    
    //Sanitize input data using PHP filter_var().
    $subject        = "Contact from Form";
    $user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);
    $phone_number   = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $company        = filter_var($_POST["company"], FILTER_SANITIZE_STRING);
    $message        = filter_var($_POST["msg"], FILTER_SANITIZE_STRING);
    
    //additional php validation
    if(strlen($user_name)<1){ // If length is less than 1 it will output JSON error.
        $output = json_encode(array('type'=>'error', 'text' => $output_nombre_corto));
        die($output);
    }
    if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
        $output = json_encode(array('type'=>'error', 'text' => $output_email_invalido . $user_email));
        die($output);
    }
    if(strlen($company)<1){ // If length is less than 1 it will output JSON error.
        $output = json_encode(array('type'=>'error', 'text' => $output_solonumeros));
        die($output);
    }
    if(strlen($phone_number)<1){ //check for valid numbers in phone number field
        $output = json_encode(array('type'=>'error', 'text' => $output_compania_invalida));
        die($output);
    }
    if(strlen($subject)<1){ //check empty subject
        $output = json_encode(array('type'=>'error', 'text' => $output_sujeto_requerido));
        die($output);
    }
    if(strlen($message)<1){ //check emtpy message
        $output = json_encode(array('type'=>'error', 'text' => $output_mensaje_corto));
        die($output);
    }
    
    //email body
    $message_body = $message."\r\n\r\n-".$user_name."\r\nEmail : ".$user_email."\r\nCompany : ".$company."\r\nPhone Number : ".$phone_number ;
    
    //proceed with PHP email.
    $headers = 'From: '. $from_email .'' . "\r\n" .
    'Reply-To: '.$user_email.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    $send_mail = mail($to_email, $subject, $message_body, $headers);
    //$send_mail = true; FOR LOCAL TEST
    
    if(!$send_mail)
    {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type'=>'error', 'text' => $output_mensaje_error));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .$output_mensaje_exito));
        die($output);
    }
}
?>