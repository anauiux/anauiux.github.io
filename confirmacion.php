<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$formcontent="
    Nombre: $name \n
    E-mail: $email \n
    Subject: $subject \n
    Message: $message
";

$recipient = "aritazul@gmail.com";

$subject =  "Consulta $subject "

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>
