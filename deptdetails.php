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
   font-family: Arial, Helvetica, sans-serif;
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
    </header><p>
<img src="dept3.gif"  align="left" width="750" height="620" >
<center><b><h4><i><font color="black"> ADD / DELETE DEPARTMENTS</b></h1></b><br><br><br><br><br><br><form action="">
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());
 $q= "SELECT * FROM dept WHERE deptid='".$_SESSION['deptid']."' ";
  $result=mysqli_query($conn,$q);
	   if(mysqli_num_rows($result)==1)
	   {
		 $sql = "SELECT * FROM dept WHERE deptid='".$_SESSION['deptid']."'";
         $r = $conn->query($sql);
	   
            if ($r->num_rows > 0) 
	         {
               // output data of each row
               while($row = $r->fetch_assoc())
                 {
                   
				     ?>
<h5>Department ID:&emsp;<?php echo '<input name="deptid" type="text" size="60" value="'.$row['deptid'].'" style="width: 250px;height: 30px;" readonly><br><br><br><br>';?>
&emsp; &emsp; &emsp;Name:&emsp;<?php echo '<input name="deptname" type="text" size="60" value="'.$row['deptname'].'" style="width: 250px;height: 30px;" readonly><br>' ?>
<br><br><br><br>
<?php
if($row['status']=='y')
{
	 ?>
&emsp;&emsp;&nbsp;&nbsp;<input type="submit" class="b" name="delete" value="DELETE" style="color:white;background-color:#b83c12"/>
<?php
}
else{
?>
&emsp; &emsp;&nbsp;<input type="submit" class="b" name="add" value="ADD" style="color:white;background-color:#4e9c24"/>

<?php
}
				 }
			 }
			
			 }
	   
			?> 
<form action=""><input type="submit" class="b" name="change" value="CHANGE" style="color:white;background-color:#198a9e"/></form>
&emsp;&nbsp;<form action="admin.php">&emsp;<input type="submit" class="b" name="backtohome" value="BACK TO HOME PAGE" style="color:white;height: 45px; width: 280px ;background-color:#eb9834"/></form>
<font color="white">	</form>	
<?php
 $conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());
 if(isset($_REQUEST['change'])){
	echo header("Location:adddepartment.php");
 }
 if(isset($_REQUEST['add'])){
        $qu="update dept set status='y' WHERE deptid='".$_SESSION['deptid']."' ";
	  if( mysqli_query($conn,$qu)){
                           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS!","Department has been added succesfully","success");';
  echo '}, 1000);</script>';

                          }
	  }
	  if(isset($_REQUEST['delete'])){
        $qu="update dept set status='n' WHERE deptid='".$_SESSION['deptid']."' ";
	  if( mysqli_query($conn,$qu)){
                          echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS!","Department has been deleted succesfully","success");';
  echo '}, 1000);</script>';

                          }
	  }	  
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$(function(){
$('#add').click(function(e){
var valid=this.form.checttkValidity();
if(valid){
var deptid=$('#deptid').val();
var deptname=$('#deptname').val();
var status=$('#status').val();

e.preventDefault();


}
else{

}

   
)};
)};
$(function(){
$('#delete').click(function(e){
var valid=this.form.checttkValidity();
if(valid){
var deptid=$('#deptid').val();
var deptname=$('#deptname').val();
var status=$('#status').val();

e.preventDefault();


}
else{

}

   
)};
)};
 </body>
 </html>