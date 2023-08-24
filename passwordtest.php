<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </head>
  <style>
body {
  background-image: url('bg6.jpg');
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

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
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
.login-div {
  max-width: 480px;
  left:0;
  padding: 25px;
  
}
.topcorner{
   position:absolute;
   top:10 ;
   right:5%;
   
  }
  #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
  <body>
  <p><form action="">
<img src="logoi1.png"  align="left" width="850" height="520" >
  <div class="topcorner">
    <div class="login-div" align="right" >
      <div class="row center-align">
        <h5 style = " font-family:Times New Roman, Times, serif;"><i><font color="black"><b>Login</b></i></h5>
		<h6><i>Welcome back! Sign in to access</i> </h6>
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
          <label for="password" style="color:black">Password</label>
          <div ><b><i><a href="#" style="color:#251957">Forgot password?</a></i></b></div>
        </div>
      </div>
      <div class="row">
        <div class="col s6"><a href="signup.php" style="color:black"><i><b>Create account</b></i></a></div>
        <div class="col s6 right-align"><input type="submit" class="b"  onclick="myFunction()" name="login" value="Login" style="color:white;background-color:#2d9cb5"/></div>
      </div>
    </div>
	</div>
	<?php
session_start();
   if(isset($_REQUEST['login']))
   {  
  $conn=mysqli_connect("localhost","root","") or die(mysqli_error());
  $db=mysqli_select_db($conn,"mini") or die(mysqli_error());
  $q="select * from login where username='".$_REQUEST['username']."'";
	   $result=mysqli_query($conn,$q);
	   if(mysqli_num_rows($result)==1)
	   {
			$q1="select * from login where username='".$_REQUEST['username']."' and password='".$_REQUEST['password']."'";
	        $result1=mysqli_query($conn,$q1);
			if(mysqli_num_rows($result1)==0)
                      echo '<div id="snackbar">Some text some message..</div>';
 if(mysqli_num_rows($result1)==1){
	 if($_REQUEST['username']=="Admin_gnits"){
                  if($_REQUEST['password']=="admin@aqp"){
                        echo header("Location:admin.php");
						exit();
				  }
	 }
         else{
			     $_SESSION['username']=$_REQUEST['username'];
                       echo header("Location:home.php");
				  
		 }  
	   }
	   }
      if(mysqli_num_rows($result)==0)
       echo '<div id="snackbar">wronggg..</div> ';

	  
				  
   }
?>
<script>
function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 1000);
}
</script>
  </body>
</html>
