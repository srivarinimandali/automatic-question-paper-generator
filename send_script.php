<?php 
if (isset($_POST['send_message_btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];
  // Content-Type helps email client to parse file as HTML 
  // therefore retaining styles
  $headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Srivarini <srivarini.mandali@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1>" . $subject . "</h1>
  	<p>".$msg."</p>
  </body>
  </html>";
   
   ini_set("SMTP","localhost");
   ini_set("smtp_port","25");
   ini_set("sendmail_from","srivarini.mandali@gmail.com");
   ini_set("sendmail_path", "C:\wamp\bin\sendmail.exe -t");
  if (mail('mlavanya3052@gmail,com', $subject, $message, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
}
?>