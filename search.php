<?php
header('Content-Type: application/json');
$response = array();
if (isset($_GET['ssubcode'])){
$con=mysqli_connect("localhost", "root", "", "mini");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$qry = "SELECT * FROM course WHERE subcode = '".$_GET['ssubcode']."' ";

$result = mysqli_query($con, $qry);  //mysql_query($qry);

while ($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
    array_push($response, $row);
}

echo json_encode($response);
} 
?>
