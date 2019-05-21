<?php
  //The name of my button is submit
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
  } else {
  echo("$email is not a valid email address");
  }
  if(isset($_POST['submit'])){
    $to = 'taystytreats41@gmail.com';
    $from = $_POST['email'];
    $subject = 'CAKE ORDER!';
    $subject2 = 'ORDER RECEIVED!';
    $headers2 = "From: ". $_POST['email'];
    $headers = "From: ". $to;
    $message = "First Name: " . $_POST['firstn'] . "\n";
    $message .= "Last Name: " . $_POST['lastn'] . "\n";
    $message .= "Phone: "  . $_POST['phone'] . "\n";
    $message .= "Email: "  . $_POST['email'] . "\n";
    $message .= "Event Date: " . $_POST['eventDate'] . "\n";
    $message .= "Event Type: " . $_POST['EventType'] . "\n";
    $message .= "Servings: " . $_POST['servings'] . "\n";
    $message .= "Flavor: " . $_POST['flavor'] . "\n";
    $message .= "Frosting: " . $_POST['frosting'] . "\n";
    $message .= "Filling: " . $_POST['filling'] . "\n";
    $message .= "Delivery Option : " . $_POST['options'] . "\n";
    $message .= "Other Notes: " . $_POST['other'] . "\n";
    $message .= "How did you hear about us: " . $_POST['hear'] . "\n";
    $message .= "Terms and Agreement Signature: " . $_POST['Signature'] . "\n";
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $message;
    mail($to, $subject, $message, $headers);
    mail($from,$subject2,$message2,$headers2);
    header("Location: http://taystytreats.com/conformation.htm");
  }
 ?>
