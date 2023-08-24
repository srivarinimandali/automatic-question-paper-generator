<?php 
    session_start();
	if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome to Home!</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<style>
body {
  background:#121554;
}
.b {
 border-radius: 20px;
	border: 1px solid ;
	background-color:#3fa300;
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
.menuitem {
    text-decoration: none;
    padding: 1vw 4vh 1vw 4vh;
    font-family:'Candara';
    font-size: 18px;
    color: black;
}
 .menu:hover{
	  opacity: 0.8;
	 text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
 }
 
.menuitem:hover {
   margin: 20px;
        -webkit-transition: color 1s; /* For Safari 3.0 to 6.0 */
        transition: color 1s; /* For modern browsers */
		color: #ff0000;
}

 
.dropdown-content {
    display: none;
    position: absolute;
    background-color:black;
    min-width: 14vw;
    min-height: 20vh;
    padding: 12px 16px;
    z-index: 1;
    text-align: center;
    background-color: rgba(253, 246, 246, 0.6);
    border-radius: 5%;
}
 
.dropdown-content a {
    display: inline-block;
}
 
.dropdown {
    position: relative;
    display: inline-block;
}
 
.dropdown:hover .dropdown-content {
    display: block;
}
a:visited {
  color: black;
  font-weight:bold;
}
</style>
</head>
<body>
<!-- Navigation --><font color="white">
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="logoi1.png"  width="270px" height="70px" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item"> <div class="dropdown">
          <a class="nav-link" href="#">Questionnaire</a>
		  <div class="dropdown-content">
                    <a href="view.php" class="menuitem">View Questions</a>
                    <a href="add.php" class="menuitem">Add Questions</a>
                    <a href="update.php" class="menuitem">Update Questions</a>
                    <a href="delete.php"class="menuitem">Delete Questions</a>
                </div>
            </div>
        </li>
        <li class="nav-item"> <div class="dropdown">
          <a class="nav-link" href="#">Examination</a>
		   <div class="dropdown-content">
                    <a href="generatepaper.php"class="menuitem">Generate Question Paper</a>
                </div>
            </div>
        </li>
        <li class="nav-item"> <div class="dropdown">
          <a class="nav-link" href="#">Assignment</a>
		   <div class="dropdown-content">
                    <a href="mid1assignment.php" class="menuitem">Generate Mid-1 Assignment</a>
					  <a href="mid2assignment.php" class="menuitem">Generate Mid-2 Assignment</a>
                </div>
            </div>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
		<li class="nav-item">
		     <a  class="nav-link" href="logout.php"><i class="fa fa-power-off" style="font-size:18px"><?php echo " ",$_SESSION['username'] ?></i></a>
      </li>
	  </ul>
    </div>
  </div>
</nav><!-- Page Content -->
<p>
<img src="profile5.gif"  width="750" height="562" align="right"><div>
<div class="container"><form action=""><h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;My Profile</h4><br>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());
 
 $q= "SELECT * FROM validstaff WHERE username='".$_SESSION['username']."' ";
  $result=mysqli_query($conn,$q);
	   if(mysqli_num_rows($result)==1)
	   {
		 $sql = "SELECT empid FROM validstaff WHERE username='".$_SESSION['username']."'";
         $r = $conn->query($sql);
	   
            if ($r->num_rows > 0) 
	         {
               // output data of each row
               while($row = $r->fetch_assoc())
                 {
                   echo '<br> Employee ID&emsp;&emsp;&emsp;&nbsp;:<input name="name" type="text" size="60" value="'.$row['empid'].'" style="width: 250px;height: 30px;" readonly><br>';
                 
             
			     $sql1 = "SELECT * FROM validstaff WHERE empid='". $row["empid"]. "'";
                $r1 = $conn->query($sql1);
	              if ($r1->num_rows > 0) 
	                while($row1 = $r1->fetch_assoc())
                     { 
				$mailid= $row1['mail'];
				$password=$row1['password'];
				 //decrypting the password
			    $decry=base64_decode($password);
			$ciphering = "AES-128-CTR";
            $options = 0;
			$decryption_iv = '1234567891011121'; 
            $decryption_key = "GNITS";
			$decrypt_pass=openssl_decrypt ($decry, $ciphering,$decryption_key, $options, $decryption_iv);
			//decrypting the emailid
			$decry_m=base64_decode($mailid);
			$decrypt_mail=openssl_decrypt ($decry_m, $ciphering,$decryption_key, $options, $decryption_iv);
			
				     ?>
					 <br>
<p>Name&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<?php echo'<input name="name" type="text" size="60" value="'.$row1['name'].'" style="width: 250px;height: 30px;" readonly><br>' ?>
<p>Department&emsp;&emsp;&nbsp;&nbsp;&emsp;:<?php echo'<input name="department" type="text" size="60" value="'.$row1['department'].'" style="width: 250px;height: 30px;" ><br>' ?>
<p>Position&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:<?php echo'<input type="text" size="60" name="position" value="'.$row1['position'].'" style="width: 250px;height: 30px;"><br>' ?>
<p>Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:<?php echo'<input type="email" name="mail" size="60" value="'.$decrypt_mail.'" style="width: 250px;height: 30px;" ><br>' ?>
<p>Gender&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp:<?php echo'<input type="text" name="gender" size="60" value="'.$row1['gender'].'" style="width: 250px;height: 30px;" readonly><br>' ?>
<p>Username&emsp;&emsp;&emsp;&emsp;&nbsp;:<?php  echo'<input type="text" name="username" size="60" value="'.$_SESSION['username'].'" style="width: 250px;height: 30px;" readonly><br>' ?>
<p>Password&emsp;&emsp;&emsp;&emsp;&nbsp; :<?php echo'<input type="text" name="password" size="60" value="'.$decrypt_pass.'" style="width: 250px;height: 30px;" ><br>' ?>
<?php 
					 }
			 }
			 }
	   }
			?> <br><br>
 &emsp;&emsp;<input type="submit" class="b" name="update" value="UPDATE MY PROFILE" style="color:white;height: 45px; width: 300px ;background-color:#21aebf"/> </form>
<?php
 $conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());
 if(isset($_REQUEST['update'])){
 if(isset($_REQUEST['department']))
  if(isset($_REQUEST['position']))
 if(isset($_REQUEST['mail']))
    if(isset($_REQUEST['password']))
      {
		$password=$_REQUEST['password'];
		$email=$_REQUEST['mail'];
		//password hashing code
   $ciphering = "AES-128-CTR";
   $options = 0;
   $encryption_iv = '1234567891011121';
   $encryption_key = "GNITS";
   $encry_p = openssl_encrypt($password, $ciphering,$encryption_key, $options, $encryption_iv); 
   $encry_pass=base64_encode($encry_p);
   //email base64_encode
   $encry_m = openssl_encrypt($email, $ciphering,$encryption_key, $options, $encryption_iv); 
   $encry_mail=base64_encode($encry_m);
        $qu="update validstaff set department='".$_REQUEST['department']."' , position='".$_REQUEST['position']."' , mail='$encry_mail' , password='$encry_pass' WHERE username='".$_SESSION['username']."' ";
        $p="update login set password='$encry_pass' WHERE username='".$_SESSION['username']."' ";
	  if( mysqli_query($conn,$qu) and mysqli_query($conn,$p)){
                           echo '<div class="alert info">
  <span class="closebtn">&times;</span>  
  <strong><center>Info!</strong> Your Profile has been updated successfully. Refresh the page to view your updated profile.</center>
</div>';

                          }
	  }
 
               else
  {
                          echo "failure";
  }
	  
 }	  
?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$(function(){
$('#update').click(function(e){
var valid=this.form.checkValidity();
if(valid){
var empid=$('#empid').val();
var name=$('#name').val();
var department=$('#department').val();
var postion=$('#position').val();
var mail=$('#mail').val();
var gender=$('#gender').val();
var username=$('#username').val();
var password=$('#password').val();


e.preventDefault();


}
else{

}

   
)};
)};
</body>
</html>