<!DOCTYPE html>
<html>
<head>
<style>
.b {
  background-color: #4CAF50;
  color:white;
  font-weight: bold;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}
.b:hover {
  opacity: 0.8;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#2a2a78;
  color: white;
}
</style>
</head>
<body>
<form action="admin.php"><input type="submit" class="b" name="home" value="CLICK HERE TO GO BACK TO HOME PAGE " style="color:white;height: 45px; width: 100% ;background-color:black"/></form>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());
echo'<table id="customers">
<tr>
<th>Employee ID</th>
<th>Name</th>
<th>Department</th>
<th>Position</th>
<th>Mail</th>
<th>Gender</th>
<th>Accept / Reject</th>
</tr>
<br>';
$q= "SELECT * FROM empdetails ";
$query_run=mysqli_query($conn,$q)or die( mysqli_error());;

while($row=mysqli_fetch_array($query_run))
{
if(!$row){
die(mysqli_error());

}
else{

?>
<tr>
<td> <?php echo$row['empid'];?></td>
<td> <?php echo$row['name'];?></td>
<td> <?php echo$row['department'];?></td>
<td> <?php echo$row['position'];?></td>
<td> <?php echo$row['mail'];?></td>
<td> <?php echo$row['gender'];?></td>
<td><form action=""><input type=submit name="accept" class="b" value="Accept"  style=" width: 90% ;background-color:#4CAF50">&emsp;<input type=submit class="b" name="reject" value="Reject" style=" width: 90% ;background-color:red"></form></td>
<?php
if(isset($_REQUEST['accept'])){
$q1= "insert into validstaff values('".$row['empid']."','".$row['name']."','".$row['department']."','".$row['position']."','".$row['mail']."','".$row['gender']."')";
$q2= "delete FROM empdetails WHERE empid='".$row['empid']."' and name='".$row['name']."' and department='".$row['department']."' and position='".$row['position']."' and mail='".$row['mail']."' and gender='".$row['gender']."' ";
if( mysqli_query($conn,$q1) And  mysqli_query($conn,$q2))
{
	echo 'Success';
}
}
if(isset($_REQUEST['reject'])){
$q3= "delete FROM empdetails WHERE empid='".$row['empid']."' ";
if( mysqli_query($conn,$q3))
{
	echo 'rejected';
}
}
?>

</tr>
<?php 
}
 }
 
?>
</table>
</form>
</body>
</html>
