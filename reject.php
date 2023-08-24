<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
.b {
 border-radius: 20px;
	border: 1px solid ;
	background-color: #02266e;
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
</style>
<body>
<form action="viewrstaff.php">                
	<button name="home" class="b">Back</button>
</form>
<?php
    include('functions.php');
    $empid = $_GET['empid'];
    $query = "select * from `empdetails` where `empid` = '$empid'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            
            $mailid = $row['mailid'];
            $password = $row['password'];
            $name = $row['name'];
        }
    $query = "DELETE FROM `empdetails` WHERE `empdetails`.`empid` = '$empid'";
        if(performQuery($query)){
			$ciphering = "AES-128-CTR";
            $options = 0;
			$decryption_iv = '1234567891011121'; 
            $decryption_key = "GNITS";
			//decrypting the emailid
			$decry_m=base64_decode($mailid);
			$decrypt_mail=openssl_decrypt ($decry_m, $ciphering,$decryption_key, $options, $decryption_iv);
			//sending mail
            $subject = "Account Verification Status from Team AQP";
            $body = "Hi $name,\n\nFor the safety of the users ,a round of verification has been performed.\nYour account has failed this verification and has been declined by the admin.\n\nWith Best Regards,\nTeam AQP";
            $headers = "From: ADMIN AQP";
            if (mail($decrypt_mail, $subject, $body, $headers)) {
                 echo '<script type="text/javascript">';
                 echo 'setTimeout(function () { swal("DECLINED","This profile has not been accepted and mail sent ","warning");';
                 echo '},1000);</script>';
            } else {
                 echo "Email sending failed...";
                }
        }else{
            echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("Warning","Error while rejecting this profile","warning");';
echo '},1000);</script>';
        }
	}
?>
<br/><br/>
</body>
</html>