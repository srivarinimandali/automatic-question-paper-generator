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
<form action="view.php"><input type="submit" class="b" name="home" value="CLICK HERE TO GO BACK TO VIEW  PAGE " style="color:white;height: 45px; width: 100% ;background-color:black"/></form>
<form>
<?php
if(isset($_REQUEST['gen']))
{
	$conn=mysqli_connect("localhost","root","") or die(mysqli_error("error"));
	   $db=mysqli_select_db($conn,"mini") or die(mysqli_error("error"));
	  
	   echo'<table id="bank">
<tr>
<th>QUESTION</th>
<th>Subject Code</th>
<th>Subject</th>
<th>level</th>
<th>Marks</th>
<th>unit no</th>
</tr>
<br>';
	   $q= "select * from question where subjectcode='".$_REQUEST['sc']."' and subject='".$_REQUEST['s']."'";
	   $query_run=mysqli_query($conn,$q)or die( mysqli_error());;

while($row=mysqli_fetch_array($query_run))
{
if(!$row){
die(mysqli_error());

}
else{

?>
<tr>
<td> <?php echo$row['question'];?></td>
<td> <?php echo$row['subjectcode'];?></td>
<td> <?php echo$row['subject'];?></td>
<td> <?php echo$row['level'];?></td>
<td> <?php echo$row['marks'];?></td>
<td> <?php echo$row['unitno'];?></td>
</tr>
<?php
}
 }
}
 
?>

</table>

</form>
</body>
</html>