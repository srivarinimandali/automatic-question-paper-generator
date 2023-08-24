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
  
   background:#f5f3eb;
}
.b {
  background-color: #4CAF50;
  color:white;
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
<img src="updategif.gif"  align="left" width="750" height="585" ><form action=" ">
<center><b><h4><i><font color="black"> ADD / DELETE COURSES</h1></b><br><br><br><br><br><br>
<b><h5>&emsp; &emsp; &emsp;Name:&emsp;</b><input type="text" name="subject"  placeholder="Enter Subject Name here" style="width: 250px;
height: 30px;" /><br><br><br>
<b>Course ID:&emsp;</b><input type="text" name="subcode"  placeholder="Enter Subject Code here" style="width: 250px;
height: 30px;"/><br><br><br><br><br>
&emsp; &emsp;&nbsp;&nbsp;<input type="submit" class="b" name="add" value="ADD" style="color:white"/>
&emsp;<input type="submit" class="b" name="delete" value="DELETE" style="color:white;background-color:red"/>&emsp;
<input type="reset" class="b" name="reset" value="CANCEL" style="color:white;background-color:#198a9e"/>
</form>
<form action="admin.php">&emsp;&emsp;&emsp;<input type="submit" class="b" name="backtohome" value="BACK TO HOME PAGE" style="color:white;height: 45px; width: 470px ;background-color:#e6a037"/></form>
</p>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_error());
  $db=mysqli_select_db($conn,"mini") or die(mysqli_error()); 
   
    if(isset($_REQUEST['add'])){
   if(isset($_REQUEST['subcode']))
    if(isset($_REQUEST['subject']))
 {
  $q="insert into course values('".$_REQUEST['subcode']."','".$_REQUEST['subject']."')";
	    
 if(mysqli_query($conn,$q)){

                           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS!","Course has been added succesfully","success");';
  echo '}, 1000);</script>';
                          }
               else
			   {
                           echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("OOPS!","Error while adding. Enter valid details.","error");';
echo '},1000);</script>';
			   }
}
   }
   
    if(isset($_REQUEST['delete'])){
		if(isset($_REQUEST['subcode'])){
	 $q1="select * from course where subcode='".$_REQUEST['subcode']."'and subject='".$_REQUEST['subject']."'";
	   $result2=mysqli_query($conn,$q1);
	   if(mysqli_num_rows($result2)==1)
	   {
			  if(isset($_REQUEST['subject']))
			    $qr="delete from course where subcode='".$_REQUEST['subcode']."' and subject='".$_REQUEST['subject']."' ";

  if( mysqli_query($conn,$qr)){

                           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS!","Course has been deleted succesfully","success");';
  echo '}, 1000);</script>';
                          }
	   }
		
	   
               else
			   { 
                        echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("OOPS!","Error while deleting.Enter valid details.","error");';
echo '},1000);</script>';
			   }
		
		}
	}
	
	   
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$(function(){
$('#add').click(function(e){
var valid=this.form.checkValidity();
if(valid){
var subcode=$('#subcode').val();
var subject=$('#subject').val();
e.preventDefault();


}
else{

}

   
)};
)};
</body>
</html>