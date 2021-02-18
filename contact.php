<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $emailfrom = $_POST['email'];
    $message = $_POST['message'];

    $maitTo = "info@senga-service.com";
    $header = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($maitTo, $txt, $header);
    header("Location: index.php?mailsend");
}

?>