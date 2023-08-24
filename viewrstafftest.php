<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<style>
body {
 
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;

}
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
</style>
</head>
<body>
<form action="admin.php"><input type="submit" class="b" name="home" value="CLICK HERE TO GO BACK TO HOME PAGE " style="color:white;height: 45px; width: 100% ;background-color:black"/></form>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());
echo'<table id="table" class="customers">
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
$q= "SELECT * FROM empdetails";
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
<td> <?php echo$row['mailid'];?></td>
<td> <?php echo$row['gender'];?></td>
<td><form action="" method="post"><?php echo "<button name='accept' class='b' value='".$row['empid']."' style=' width: 90% ;background-color:#4CAF50' onclick='addFunction()'> Accept </button>"; ?>
&emsp;<?php echo "<button name='reject' class='b' value='".$row['empid']."' style=' width: 90% ;background-color:red' onclick='deleteFunction()'> Reject </button>"; ?>
</form></td>
</tr>

<script>
function addFunction() {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Are you sure?",
  text: "Do you want to accept this profile !",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#7cb064",
  cancelButtonColor: "#ff0055",
  confirmButtonText: "Yes, Accept it!",
  cancelButtonText: "No, Cancel Please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
	  sessionStorage.setItem("favoriteMovie", "<?php echo $row['empid'] ?>");
       window.location.href='deleterow.php';     // submitting the form when user press yes
  } else {
    swal("Cancelled", "But you will still be able to accept this profile :)", "error");
  }
});
}
function deleteFunction() {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Are you sure?",
  text: "Do you want to reject this profile !",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#ff0055",
  cancelButtonColor: "#ff0055",
  confirmButtonText: "Yes, Reject it!",
  cancelButtonText: "No, Cancel Please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
        swal("Rejected", "Profile has been rejected successfully :)", "success");         // submitting the form when user press yes
  } else {
    swal("Cancelled", "But you will still be able to accept this profile :)", "error");
  }
});
}
</script>
<?php } } ?>
</table>
 <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</body>
</html>