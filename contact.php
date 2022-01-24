<?php

    if( isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = "Portfolio Client";
        $mailTo = "admin@javiermelendrez.com";
        $headers = "From: ".$email;
        $text = "You have received an email from ".$name.". \n\n".$message;

        mail($mailTo, $subject, $text, $headers);
        header("Location: index.php?mailsend");
    }
?>