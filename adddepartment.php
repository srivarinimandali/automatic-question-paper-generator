<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
<style>
body {
 background:#bee6df;
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
<body>
 <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Hi, Admin </strong>
          </a>
            <div class="pull-right">
				<div class="pull-right">
                <?php
                if(isset($_POST['home'])){
                   
                    header('location:admin.php');
					
                }
    
                ?>
                <form method="post">
                    <button name="home" class="btn btn-danger my-2">Back to Home</button>
                </form>
            </div>
        </div>
      </div>
    </header>
<p>
<img src="dept3.gif"  align="left" width="750" height="585" >
<center><b><h4><i><font color="black"> ADD / DELETE DEPARTMENTS</h4></b><br><br><br><br><br><br><form action="">
<h5>Department ID:&emsp;<input type="text" name="deptid"  placeholder="Enter Department ID here" style="width: 250px;
height: 30px;"/><br><br><br><br><br><br>
&emsp; &emsp;&nbsp;<input type="submit" class="b" name="submit" value="SUBMIT" style="color:white"/>
</form>
<?php
   if(isset($_REQUEST['submit']))
   {  
  $conn=mysqli_connect("localhost","root","") or die(mysqli_error());
  $db=mysqli_select_db($conn,"mini") or die(mysqli_error());
  $q="select * from dept where deptid='".$_REQUEST['deptid']."'";
	   $result=mysqli_query($conn,$q);
	   if(mysqli_num_rows($result)==1)
	   {
            $_SESSION['deptid']=$_REQUEST['deptid'];
                       echo header("Location:deptdetails.php");
	   }
   }
   ?>