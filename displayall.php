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
<form action="view.php"><input type="submit" class="b" name="home" value="CLICK HERE TO GO BACK TO VIEW QUESTIONS PAGE " style="color:white;height: 45px; width: 100% ;background-color:black"/></form>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());
echo'
     <table id="customers">
<tr>
<th>question id</th>
<th>question</th>
<th>subject code</th>
<th>subject</th>
<th>level</th>
<th>semester</th>
<th>marks</th>
<th>year</th>
<th>unit no</th>
</tr>
<br>';
$subcode=$_POST['subcode'];
$sub=$_POST['sub'];
$q= "SELECT * FROM questions WHERE subjectcode='$subcode' and subject='$sub' ";
$query_run=mysqli_query($conn,$q)or die( mysqli_error());;

while($row=mysqli_fetch_array($query_run))
{
if(!$row){
die(mysqli_error());

}
else{

?>
<tr>
<td> <?php echo$row['qid'];?></td>
<td> <?php echo$row['question'];?></td>
<td> <?php echo$row['subjectcode'];?></td>
<td> <?php echo$row['subject'];?></td>
<td> <?php echo$row['level'];?></td>
<td> <?php echo$row['semester'];?></td>
<td> <?php echo$row['marks'];?></td>
<td> <?php echo$row['year'];?></td>
<td> <?php echo$row['unitno'];?></td>
</tr>

<?php
}
}
 
?>

</table>
</body>
</html>
