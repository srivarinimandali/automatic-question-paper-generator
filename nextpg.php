<?php
$subcode=$_POST['subcode'];
$sub=$_POST['sub'];
$qid=$_POST['qid'];
$question=$_POST['question'];
$level=$_POST['level'];
$marks=$_POST['marks'];
$unitno=$_POST['unitno'];
$sem=$_POST['sem'];
$year=$_POST['year'];
$conn=mysqli_connect("localhost","root","") or die(mysqli_error());
  $db=mysqli_select_db($conn,"mini") or die(mysqli_error());
   $q="delete from questions where qid='$qid'";
      if( mysqli_query($conn,$q)){

                            ?>
							<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background-image: url("next2.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
.b {
  background-color: #327da8;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}
b:hover {
  opacity: 0.8;
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

</style>
<body>
<font color="white">
<h2><img src="next8.png" width="125" height="125" align="left" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;DELETED SUCCESSFULLY</h2>
<br><br><h3> Below are the details of the deleted question:</h3><br>
<h4><center>Question id &emsp;:&emsp;<?php echo $qid; ?></center><br><br>
<center>Question &emsp;:&emsp;<?php echo $question; ?></center><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Subject&emsp;:&emsp;<?php echo $sub; ?>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Subject Code &emsp;:&emsp;<?php echo $subcode; ?>
&emsp;&emsp;&emsp;&emsp;&emsp;Year &emsp;:&emsp;<?php echo $year; ?><br><br>
<h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Semester &emsp;:&emsp;<?php echo $sem; ?>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Marks &emsp;:&emsp;<?php echo $marks; ?>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Unit No &emsp;:&emsp;<?php echo $unitno; ?>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Bloom's Level &emsp;:&emsp;<?php echo $level; ?><br><br>
<p>
<img src="next.gif"  width="600" height="250" align="right">
<form action="delete.php">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" class="b" value="Delete another question" style="color:white;background-color:#8f6fc9">
</form><bR>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="button"  onclick="myfunctionhome()" class="b" value="Back to home" style="color:white;background-color:#c96fa1" >
</p>
</body>
</html>
							<?php
                          }
						  else
						  {
							  echo '<h3> Failed to update . Try Again ! ';
						  }
?>
<script>
	function myfunctionhome() {
  location.replace("home.php")}
  </script>
  </body>
  </html>