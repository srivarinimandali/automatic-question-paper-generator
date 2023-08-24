<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   </head>
  <style>
body {
  background-image: url('bg5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 10px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  position:absolute;
  width: 30%;
  bottom: 10px;
   left: 45px;
   border-radius: 25px;
}
.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;} 

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.b {
    border-radius: 20px;
	border: 1px solid #008a91;
	background-color: #008a91;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
b:hover {
  opacity: 0.8
}

.login-div {
  max-width: 480px;
  left:0;
  padding: 25px;
   border: 1px solid #b6d9d3;
  border-radius: 8px;
  background-color:#b6d9d3;
  
}
.topcorner{
   position:absolute;
   top:2% ;
   left:5%;
   
  }
  .logo{
   position:absolute;
   top:10% ;
   right:15%;
   
  }
  .i {
    margin-left: -30px;
    cursor: pointer;
}
  
</style>
  <body>
  <p><form action="">
<img src="logoi1.png"  class="logo" align="right" width="550" height="220" >
  <div class="topcorner">
    <div class="login-div" align="left" >
      <div class="row center-align">
        <h5 style = " font-family:Times New Roman, Times, serif;"><i><font color="black"><b>Login</b></i></h5>
		<i>Welcome back! Sign in to access</i> 
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="username" name="username" type="text" class="validate" required>
          <label for="username" style="color:black">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate" required>
		   <i class="far fa-eye" id="togglePassword"> Show Password</i>
          <label for="password" style="color:black">Password</label>
		  <div><br></div>
          <div ><b><i><a href="forgot.php" style="color:#2a246e">Forgot password?</a></i></b></div>
        </div>
      </div>
      <div class="row">
         <div align="center"><input type="submit" class="b" name="login" value="Login" style="color:white;background-color:#2d9cb5"/></div>
      </div>
	  <div class="row">
	  <div align="center"><i>Hello Guest! Start the journey with us by</i></div>
	   </div>
	  <div class="row">
	  <div align="center"><a href="signup.php" style="color:#2a246e"><b>Create account</b></a></div>
	   </div>
    </div>
	</div>
	<?php
session_start();
   if(isset($_REQUEST['login']))
   {  
  $conn=mysqli_connect("localhost","root","") or die(mysqli_error());
  $db=mysqli_select_db($conn,"mini") or die(mysqli_error());
 
  
  
  $password=$_REQUEST['password'];
  $q2="select * from validstaff where username='".$_REQUEST['username']."' and password='$password'";
  $result2=mysqli_query($conn,$q2);
  
  //if(mysqli_num_rows($result2)==1){
	 if($_REQUEST['username']=="admin"){
                  if($password=="admin@gnits"){
					  
					  $_SESSION['username']=$_REQUEST['username'];
                        echo header("Location:admin.php");
						
				  }
	 }
  //}
  
  
  //encrypt the password
  $ciphering = "AES-128-CTR";
   $options = 0;
   $encryption_iv = '1234567891011121';
   $encryption_key = "GNITS";
   $encry_p = openssl_encrypt($password, $ciphering,$encryption_key, $options, $encryption_iv); 
   $encry_pass=base64_encode($encry_p);
   
   
  $q="select * from validstaff where username='".$_REQUEST['username']."'";
	   $result=mysqli_query($conn,$q);
	   if(mysqli_num_rows($result)==1)
	   {
			$q1="select * from validstaff where username='".$_REQUEST['username']."' and password='$encry_pass'";
	        $result1=mysqli_query($conn,$q1);
			if(mysqli_num_rows($result1)==0)
                    echo '<div class="alert warning"><span class="closebtn">&times;</span>  
  <strong><center><b> Attention !</b></strong> <br>Enter the correct password . <br>kindly , try again or click on Forgot Password . </center>
</div>';

 if(mysqli_num_rows($result1)==1){
	 if($_REQUEST['username']=="admin"){
                  if($encry_pass=="c1FGMElaST0="){
					  
					  $_SESSION['username']=$_REQUEST['username'];
                        echo header("Location:admin.php");
						
				  }
	 }
         else{
			     $_SESSION['username']=$_REQUEST['username'];
                       echo header("Location:home.php");
				  
		 }  
	   }
	   }
      if(mysqli_num_rows($result)==0)
       echo '<div class="alert"><span class="closebtn">&times;</span>  
  <strong><center><b>Oh Snap !</b></strong> <br>Username submitted doesnt match any account . <br>If you dont have an account ? Create account . </center>
</div>';

	  
				  
   }
?>
<script>
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
  </body>
</html>