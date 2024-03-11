<?php 
if(isset($_POST['submit'])){
    $to = "info@zoom-driving.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $message = "$name contacted you from the website:"\n\n$_POST['Message']";

    $headers = "From: $from";
    mail($to,$message,$headers);
    //echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
?>
