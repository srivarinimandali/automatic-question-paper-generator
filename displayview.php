<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
.customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#2a2a78;
  color: white;
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<form action="view.php"><input type="submit" class="b" name="home" value="CLICK HERE TO GO BACK TO VIEW QUESTIONS PAGE " style="color:white;height: 45px; width: 100% ;background-color:black"/></form>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());

echo' <center> <h4>Search : <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Questions..(Type in keywords of a Question)" title="Type in a Question"></center>
     <table id="myTable" class="customers">
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
$sub=$_POST['sub'];
$subcode=$_POST['subcode'];
if(isset($_POST['unitno'])){
$unitno=$_POST['unitno'];
$q= "SELECT * FROM questions WHERE subjectcode='$subcode' and subject='$sub'  and unitno='$unitno' ORDER BY CAST(qid as SIGNED INTEGER) ASC";
}
if(empty($_POST['unitno'])){
$q= "SELECT * FROM questions WHERE subjectcode='$subcode' and subject='$sub' ORDER BY CAST(qid as SIGNED INTEGER) ASC";	
}
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
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>
