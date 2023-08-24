<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	background-image: url('thanks.gif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 60% 100%;
  background-position:right;
  font-family: Arial, Helvetica, sans-serif;
   
}
.flip-card {
  background-color: transparent;
  width: 515px;
  height: 150px;
  perspective: 1000px;
  
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
.b {
  background-color:#92c282;
  color:white;
  padding: 8px 8px;
  border: none;
  cursor: pointer;
  width: 40%;
}
.b:hover {
  opacity: 0.8;
}

</style>
</head>
<body><p>
<h1><b><i>&emsp;&emsp;&emsp;&emsp;Welcome Admin !</i></b></h1>
<h2>&emsp;&emsp;&emsp;<i>Check out your access cards here </i></h2>
<div align="right" class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="staffimage.png"  style="width:515px;height:150px;">
    </div>
    <div class="flip-card-back">
      <h4>Manage Staff</h4> 
      <p><form action="viewrstaff.php"><input type="submit" class="b" name="staff" value="View Registered Staff" /></form></p> 
      <p><form action="viewestaff.php"><input type="submit" class="b" name="staff" value="View Existing Staff" /></form></p>
    </div>
  </div>
</div><br>
<div align="right" class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="departments.jpeg"  style="width:515px;height:150px;">
    </div>
    <div class="flip-card-back">
      <h4>Manage Departments</h4> 
         <p><form action="deptinfo.php"><input type="submit" class="b" name="staff" value="View Departments" /></form></p> 
      <p><form action="adddepartment.php"><input type="submit" class="b" name="staff" value="Add / Delete Departments" /></form></p>
    </div>
  </div>
</div>
<br>
<div align="right" class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="subjectimage.jpg"  style="width:515px;height:150px;">
    </div>
    <div class="flip-card-back" >
      <h4>Manage Courses</h4> 
      <p><form action="courseinfo.php"><input type="submit" class="b" name="course" value="View Courses" /></form></p> 
      <p><form action="addcourse.php"><input type="submit" class="b" name="staff" value="Add / Delete Courses" /></form></p>
  </div>
</div><br>
<a  class="nav-link" href="logout.php"><i class="fa fa-power-off" style="font-size:18px">LOGOUT</i></a>

</body>
</html>
