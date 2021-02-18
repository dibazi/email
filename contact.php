<?php

if(isset($_POST['submit'])){

    
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailfrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "info@senga-service.com";
    $header = "From: ".$emailfrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo,$subject, $txt, $header);
    header("Location: http://localhost:5500/");
}

