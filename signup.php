<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Times New Roman;
  color: white;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background:black;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color:black;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}
.image {
  display: block;
  width: 100%;
  height: auto;
}
.left {
  left: 0;
background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%);
}

.right {
  right: 0;
background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%);
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 250px;
  border-radius: 100%;
}
.sansserif {
  font-family: , Helvetica, sans-serif;
}
.container {
  padding: 16px;
}

</style>
</head>
<body>
<div class="split left">
 <center><h2><font color="black"><i>STAFF REGISTERATION</i></font></h2>
<form action="" style="max-width:500px;margin:auto">
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Full Name" name="name" autocomplete="off" required>
  </div>
  <div class="input-container">
    <i class="fa fa-id-card-o icon"></i>
    <input class="input-field" type="text" placeholder="Employee ID" name="empid" autocomplete="off" required>
  </div>
  <div class="input-container">
    <i class="fa fa-university icon">
	</i><input list="dept" name="dept" placeholder=" Select Department" style="height: 40px; width: 440px;" type="text" autocomplete="off" required>
    <datalist id="dept">
    <option value="CSE" />
    <option value="ECE" />
    <option value="EEE" />
    <option value="ETM" />
    <option value="IT" />
    </datalist>
	 </div>
	 <div class="input-container">
    <i class="fa fa-user icon">
	</i><input list="gender" name="gender" placeholder="Select Gender" style="height: 40px; width: 440px;" type="text" autocomplete="off" required>
<datalist id="gender">
<option value="Male" />
<option value="Female" />
    </datalist>
	 </div>
	  <div class="input-container">
    <i class="fa fa-university icon">
	</i><input list="position" name="pos" placeholder="Select Position"  style="height: 40px; width: 440px;" type="text" autocomplete="off" required>
<datalist id="position">
<option value="Professor" />
<option value="Associate Professor" />
<option value="Assistant Professor" />
    </datalist>
	 </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="uname" autocomplete="off" required>
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="mail" autocomplete="off" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pass" autocomplete="off" required>
  </div>
    <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="cpass" autocomplete="off" required>
  </div>
  <input type="submit" name="register" class="btn" value="REGISTER">
</form>
<?php
if(isset($_REQUEST['register'])){
$conn=mysqli_connect("localhost","root","") or die(mysqli_error());
  $db=mysqli_select_db($conn,"mini") or die(mysqli_error());
  if($_REQUEST['pass'] == $_REQUEST['cpass']){
   if(isset($_REQUEST['empid']))
if(isset($_REQUEST['name']))
 if(isset($_REQUEST['dept']))
  if(isset($_REQUEST['pos']))
	  if(isset($_REQUEST['mail']))
   if(isset($_REQUEST['gender'])){
	   
	    $password=$_REQUEST['pass'];
	   $empid=$_REQUEST['empid'];
	  $uname=$_REQUEST['uname'];
	  $name=$_REQUEST['name'];
	  $dept=$_REQUEST['dept'];
   $pos=$_REQUEST['pos'];
   $email=$_REQUEST['mail'];
   $gender=$_REQUEST['gender'];
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
   //$encryp_mail=base64_decode($email);
  $q="insert into empdetails values('$empid','$name','$dept','$pos','$encry_mail','$gender','$uname','$encry_pass')";
  
	   
	   
	   
	   
  //$q="INSERT INTO empdetails VALUES('".$_REQUEST['empid']."','".$_REQUEST['name']."','".$_REQUEST['dept']."','".$_REQUEST['pos']."','".$_REQUEST['mail']."','".$_REQUEST['gender']."','".$_REQUEST['uname']."','".$_REQUEST['pass']."')";
  if(mysqli_query($conn,$q)){
           echo header("Location:registeredpage.html");
    }
else{
	   echo '<script type="text/javascript">';
  echo 'setTimeout(function () {swal({
  title: "Are you Sure ?",
  text: "An Account has been registered with the same Employee ID.",
  icon: "warning",
  button: "Re-Check",
  
});';
  echo '}, 1000);</script>';
}
	
}
}
else{
	echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("Warning!","Ensure that the Password and Confirm Password submitted are same ","warning");';
echo '},1000);</script>';
  }
}
  ?>
<div class="split right">
  <div class="centered">
    <div class="slideshow-container">
<div class="mySlides fade">
  <img src="p.gif" style="width:100%">
  <i style="color:black"><br><br><b><center>Hello Guest!<br> Start the journey with us by registering here .</b></center></i>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
</div>     
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$(function(){
$('#register').click(function(e){
var valid=this.form.checkValidity();
if(valid){
var empid=$('#empid').val();
var name=$('#name').val();
var dept=$('#dept').val();
var pos=$('#pos').val();
var mail=$('#mail').val();
var gender=$('#gender').val();
var uname=$('#uname').val();
var pass=$('#pass').val();


e.preventDefault();


}
else{

}

   
)};
)};
</body>
 </html>