<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $to= 'contacto@dangellabs.com'; //change to ur mail address
    $subject=$_REQUEST['subject'];
    $message =$_REQUEST['message'];     
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= "From: dcantorin@dangellabs.com"; 

    mail($to, $subject, $message, $headers); 
    }
?>