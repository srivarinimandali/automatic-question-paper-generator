<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
    include('functions.php');
    $empid = $_GET['empid'];
    
    $query = "DELETE FROM `validstaff` WHERE `validstaff`.`empid` = '$empid';";
        if(performQuery($query)){
             echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("Removed","This profile has been removed successfully","success");';
echo '},1000);</script>';
        }else{
            echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("Warning","Error while rejecting this profile","warning");';
echo '},1000);</script>';
        }
echo header("Location:viewestaff.php");
?>
<br/><br/>
</body>
</html>