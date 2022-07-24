<?php
//if($_POST['kapcha'] != 'finding'){
//    header('location: form.php');
//    exit;
//}

$to = "mendelevdima1975@gmail.com";
$from = trim($_POST['email']);

$message = htmlspecialchars($_POST['message']);
$message = urldecode($message);

$message = trim($message);
$headers = "From: $from" . "\r\n" .
"Reply-To: $from" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo 'Письмо отправлено';
    
}

?>

