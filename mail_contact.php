<?php
$to = "info@adplconsultancy.com";
$subject = "Contact";
$name=$_REQUEST['fname']; 
$sender=$_REQUEST['email']; 
$phone=$_REQUEST['phone'];
$message= "Name: $name\n"; 
$message.= "Email: $sender\n"; 
$message.= "Phone: $phone\n";
$headers= "From: $sender"; 
mail($to,$subject,$message,$headers);
header('Location:contactus.php?msg=success');
?>
