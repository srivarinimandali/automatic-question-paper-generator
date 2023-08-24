<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
   background:#121554;
}
.header {
  padding: 10px;
  text-align: center;
  background:#daf1f2;
  color:black;
  font-family:century;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 20px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar button.active {
  background-color: #666;
  color: white;
}
.main {  
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}
/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 100px) {
  .row {  
    flex-direction: column;
  }
}


/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:grey;
}
.navbar a.right {
  float: right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.b {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}
.b:hover {
  opacity: 0.8;
}
</style>
</head>
<body>
<div class="header">
  <h1><b>AUTOMATIC QUESTION PAPER GENERATOR</b></h1>
</div>
<div class="navbar">
  <a href="home.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Questions
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="view.php">View Questions</a>
      <a href="add.php">Add Questions</a>
      <a href="update.php">Update/Delete Questions</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Question Paper
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="generatepaper.php">Generate Question Paper</a>
      <a href="savespapers.php">Saved Question Papers</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Question Bank
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="generatebank.php">Generate Question Bank</a>
      <a href="squestionbank.php">Saved Question Banks</a>
    </div>
  </div>
  <div class="dropdown" >
    <button class="dropbtn" >Account
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="profile.php">View Profile</a>
      <a href="login.php">Log Out</a>
    </div>
  </div>
</div>
<h1><i><font color="white">PROFILE</i></h1>
<p> <img src="profile5.gif"  width="750" height="420" align="right"><div>
<div class="container">
<form action="">
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());
 $q= "SELECT * FROM validstaff";
 $query_run=mysqli_query($conn,$q)or die( mysqli_error());;

while($row=mysqli_fetch_array($query_run))
{
if(!$row){
die(mysqli_error());

}
else{
?> 
<p><h3><font color="white">
<p>Employee ID&emsp;&emsp;&emsp;:<?php echo'<input type="text" name="empid" value='.$row['empid'].' style="width: 250px;height: 30px;" required><br/>' ?>
<p>Name&nbsp&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<?php echo'<input type="text" name="name" value='.$row['name'].' style="width: 250px;height: 30px;"><br/>' ?>
<p>Department&emsp;&emsp;&nbsp;&nbsp;&emsp;:<?php echo'<input list="dept" name="dept" type="text" value='.$row['department'].' style="width: 250px;height: 30px;"><br>'  ?>
<p>Gender&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp:<?php echo'<input list="gender" name="gender"  value='.$row['gender'].' type="text"  style="width: 250px;height: 30px;" ><br>'  ?>
<p>Position&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:<?php echo'<input type="text" name="pos"  value='.$row['position'].' style="width: 250px;height: 30px;"><br>'  ?>
<p>Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp:<?php echo'<input type="email" name="mail" value='.$row['mail'].' style="width: 250px;height: 30px;" ><br>'  ?>
 <?php
}
}
?>
</div>&emsp;&emsp;<input type="submit" class="b" name="update" value="UPDATE MY PROFILE" style="color:white;height: 45px; width: 300px ;background-color:#21aebf"/>
 </div>
</form>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_error());
  $db=mysqli_select_db($conn,"mini") or die(mysqli_error());
 if(isset($_REQUEST['update'])){
 if(isset($_REQUEST['empid'])){
$q="select * from validstaff where empid='".$_REQUEST['empid']."'";
  $result=mysqli_query($conn,$q);
  if(mysqli_num_rows($result)==1)
  {
if(isset($_REQUEST['name']))
 if(isset($_REQUEST['dept']))
  if(isset($_REQUEST['gender']))
 if(isset($_REQUEST['pos']))
   if(isset($_REQUEST['mail']))
   {
     $q="update validstaff set name='".$_REQUEST['name']."',department='".$_REQUEST['dept']."',position='".$_REQUEST['pos']."',mail='".$_REQUEST['mail']."',gender='".$_REQUEST['gender']."' where empid='".$_REQUEST['empid']."'";
      if( mysqli_query($conn,$q)){

                           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS!","profile has been updated  succesfully","success");';
  echo '}, 500);</script>';
                          }
 }
  }
               else
  {
                          echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("OOPS!","Error while updating.Enter valid details.","error");';
echo '},1000);</script>';
  }
 }
 }
   
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$(function(){
$('#update').click(function(e){
var valid=this.form.checkValidity();
if(valid){
var empid=$('#empid').val();
var name=$('#name').val();
var department=$('#dept').val();
var position=$('#pos').val();
var mail=$('#mail').val();
var gender=$('#gender').val();


e.preventDefault();


}
else{

}

   
)};
)};
</body>
</html>