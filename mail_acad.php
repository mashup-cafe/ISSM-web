<?php
if(isset($_POST['submit'])){
    $to = "mohamedazhar93@gmail.com "; // this is your Email address
    $name = $_POST['txt_name']; // this is the sender's Email address
    $address = $_POST['txt_addr'];
    $email = $_POST['txt_email'];
    $score = $_POST['txt_score'];

    $subject = "Academics Query";
    $message = "Name: ".$name .
    "\n Address:"  .$address.
    "\n email :" .$email.
    "\n Score:" .$score;

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
