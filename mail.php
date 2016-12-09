<?php
$to = "info@adplconsultancy.com";
$subject = "Enquiry";
$name=$_REQUEST['fname']; 
$sender=$_REQUEST['email']; 
$services=$_REQUEST['services']; 
$know=$_REQUEST['know'];
$phone=$_REQUEST['phone'];
$query=$_REQUEST['query'];
$message = "Name: $name\n"; 
$message.= "Email: $sender\n"; 
$message.= "Services: $services\n"; 
$message.= "How did you came to know about us : $know\n"; 
$message.= "Phone: $phone\n"; 
$message.= "Query: $query\n"; 
$headers= "From: $sender";
mail($to,$subject,$message,$headers);
echo "<script>location.href='index.html?msg=success'</script>";
?>
