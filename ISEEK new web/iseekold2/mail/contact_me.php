<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['subject']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
   
 $name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


 $email_from = 'vivekbavishi@gmail.com';//<== update the email address
$email_subject = "$subject";
$email_body = "You have received a new message from the user $name.\n".
    "Here is the message:\n $message".
	

	
// Create the email and send the message
$to = "vbavishi@purdue.edu"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.


$headers = "From: $email_from \r\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address \r\n";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>