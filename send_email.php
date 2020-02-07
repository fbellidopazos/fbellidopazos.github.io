<?php 
if(isset($_POST['submit'])){

    $to = "fbellidopazos@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $subject = $_POST['subject'];
    
    $message = $full_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = ."You have sent Fernando Bellido Pazos the following:\n\n=============================================== ".$fullname . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
    header('Location: index.html'); 
    }
?>