<?php

session_start();

require_once '../contact/phpmailer/PHPMailerAutoload.php';


$errors = [];

if(isset($_POST['name'], $_POST['email'], $_POST['message'])){ 
    
    $fields = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'message' => $_POST['message'],
    ];
    
    foreach($fields as $field => $data) {
        if(empty($data)){
            $errors[] = 'The '. $field . ' field is required.';
        } else if($field == 'email') {
            
      function isValidEmail($data) {
        return filter_var($data, FILTER_VALIDATE_EMAIL);
        }
           if (!isValidEmail($data)){
               
               $errors[] = "Email address not valid. Please re-enter";
               
           }  
           } else if ($field == 'message'){
               
               if(strpos($data, 'fuck') !== FALSE) {
                 $errors[] = "Language Timothy!";       
           }
            
        }
        
    }
    
    

    
    if(empty($errors)) {
        
        $m = new PHPMailer;
        
        $m->isSMTP();
        $m->SMTPAuth = true;
        
        
        
        $m->Host = 'smtp.gmail.com';
        $m->Username = '';
        $m->Password = '';
        $m->SMTPSecure = 'ssl';
        $m->Port = 465;
        
        $m->isHTML();
        
        $m->Subject = 'Contact form submitted';
        $m->Body = '<p><b>From:</b> ' . $fields['name'] . ' </p><p><b>Email</b>: '. $fields['email'] . '</p><p><b>Message:</b> '. $fields['message'] .'</p>'; 
    
        $m->FromName = 'Tristbo Contact Form';
        
        $m->AddAddress('tristanbowles@googlemail.com', 'Tristan Bowles');
   
        if($m->send()){
            header('Location:thanks.php');
            die();

        } else {     
            $errors[] = 'Sorry, could not send email.  Try again later.';
        }
    
    
    }
    
    
    
} else {
    $errors[] = 'something went wrong.';
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

header('Location: index.php');