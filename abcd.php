<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());

{
	$eid=$_REQUEST['eid'];
	$en=$_REQUEST['en'];
	$ed=$_REQUEST['ed'];
	$ep=$_REQUEST['ep'];
	$ee=$_REQUEST['ee'];
	$eg=$_REQUEST['eg'];
	$em=$_REQUEST['em'];
	
	$q="insert into validstaff values('$eid' , '$en' ,'$ed' , '$ep' ,'$ee' ,'$eg' ,'$em')";
	    if(mysqli_query($conn,$q)){
	   echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("CONGRATULATION!","user is added succesfully","success");';
  echo '}, 1000);</script>';
	}
	
}
 ?>