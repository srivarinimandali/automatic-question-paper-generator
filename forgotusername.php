<?php
session_start();
include_once 'database.php';
//encrypt email id

if(isset($_POST['submit']))
{
    $mail = $_POST['mailid'];
	//encrypt the mail
	$ciphering = "AES-128-CTR";
   $options = 0;
   $encryption_iv = '1234567891011121';
   $encryption_key = "GNITS";
   $encry_m = openssl_encrypt($mail, $ciphering,$encryption_key, $options, $encryption_iv); 
   $encry_mail=base64_encode($encry_m);
    $result = mysqli_query($conn,"SELECT * FROM validstaff where mail='$encry_mail'");
    $row = mysqli_fetch_assoc($result);
	$mail=$row['mail'];
	$username=$row['username'];
	$password=$row['password'];
	        //decrypting the password
			$decry=base64_decode($password);
			$ciphering = "AES-128-CTR";
            $options = 0;
			$decryption_iv = '1234567891011121'; 
            $decryption_key = "GNITS";
			$decrypt_pass=openssl_decrypt ($decry, $ciphering,$decryption_key, $options, $decryption_iv);
			//decrypting the emailid
			$decry_m=base64_decode($mail);
			$decrypt_mail=openssl_decrypt ($decry_m, $ciphering,$decryption_key, $options, $decryption_iv);
			
        $subject = "Username and Password From Team AQP";
        $body = "Hi $username,\n\nUsername and Password to access your account are provided below :\n\nUsername : $username\nPassword : $decrypt_pass\n\nWith Best Regards,\nTeam AQP";
        $headers = "From: ADMIN AQP";

    if (mail($decrypt_mail, $subject, $body, $headers)) {
          echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("Email Sent!","Your Login details has been sent to your registered mail id ","success");';
echo '},1000);</script>';
        } 
			
				else{
					echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("Invalid User!","Enter the registered Email id. ","warning");';
echo '},1000);</script>';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style type="text/css">
body {
  background-image: url('forgotpass.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  font-size:20px;
}
.b {
 border-radius: 20px;
	border: 1px solid #a81914 ;
	background-color:#a81914;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
.b:hover {
  opacity: 0.8;
}
#link {
  color: black;
}
</style>
</head>
<body>
<center><img src="logoi1.png"  width="450" height="150"><br><br><br>
<h2>&emsp;&emsp;<font color="black" >Forgot Username</h2><br>&emsp;&emsp;
Can't remember username?
<br>
Enter your registered Email ID and we'll help you out.<br><br>
<form action='' method='post'>
<table cellspacing="5" align='center'>
<tr><td>&emsp;&emsp;&emsp;<input type='email' name='mailid' placeholder=' Email ID ' style='height: 35px; width: 300px ;' autocomplete="off"/>
&emsp;&emsp;<input type='submit' class="b" name='submit' value='Send'/></td></tr>
<tr><td>&emsp;&emsp;&emsp;<a id="link" href="login.php">Back to Login </a>
</table>
</form>
</body>
</html>