<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
   background:#faf4eb;
}
.header {
  padding: 10px;
  text-align: center;
  background:#daf1f2;
  color:black;
  font-family:century;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 20px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar button.active {
  background-color: #666;
  color: white;
}
.main {  
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}
/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 100px) {
  .row {  
    flex-direction: column;
  }
}


/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:grey;
}
.navbar a.right {
  float: right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.b {
  background-color: #4CAF50;
  color: white;
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
</head>
<body>
<div class="header">
  <h1><b>AUTOMATIC QUESTION PAPER GENERATOR</b></h1>
</div>
<div class="navbar">
  <a href="home.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Questions
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="view.php">View Questions</a>
      <a href="add.php">Add Questions</a>
      <a href="update.php">Update/Delete Questions</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Question Paper
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="generatepaper.php">Generate Question Paper</a>
      <a href="savespapers.php">Saved Question Papers</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Question Bank
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="generatebank.php">Generate Question Bank</a>
      <a href="squestionbank.php">Saved Question Banks</a>
    </div>
  </div>
  <div class="dropdown" >
    <button class="dropbtn" >Account
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="profile.php">View Profile</a>
      <a href="login.php">Log Out</a>
    </div>
  </div>
</div>
<br>
<marquee behavior="scroll" direction="left">
<font color="black">
<?php
	
	echo "<i>Welcome ",$_SESSION['username'],"</i><br>";
?>
</font></marquee>
<h3><i><font color="black">UPDATE / DELETE QUESTIONS</i></h3>
<form action="">
<p> <img src="maingif.gif"  width="600" height="400" align="right"><div>
      <p>Question ID&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="qid" placeholder=" Enter Question ID" style="width: 250px;
height: 30px;"required><br>
       <p><label for="question">Question &emsp;:<br></label><textarea id="question" name="question" rows="4" cols="65" placeholder="Enter Question Here..." required></textarea><br>
    <p>Subject Code&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="subcode" placeholder=" Enter Subject Code" style="width: 250px;
height: 30px;"required><br>
    <p>Marks&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<input type="number" name="marks" placeholder=" Enter Marks" style="width: 250px;
height: 30px;" >
<p>Blooms Taxonomy Level&nbsp &nbsp;:<input list="level" name="level" placeholder="Select a Level" type="text" style="width: 250px;
height: 30px;">
<datalist id="level">
<option value="Remember" />
<option value="Understand" />
<option value="Apply" />
<option value="Analyze" />
<option value="Evaluate" />
<option value="Create" />
</datalist>
  <p>Subject &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="sub" placeholder=" Enter Subject Name" style="width: 250px;
height: 30px;"><br>
<p>Semester &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input list="sem" name="sem" placeholder=" Select Semester" type="text" style="width: 250px;
height: 30px;">
<datalist id="sem">
<option value="I" />
<option value="II" />
</datalist><br>
   
    <p>Year&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input list="year" name="year" placeholder=" Select Year" type="text" style="width: 250px;
height: 30px;" >
<datalist id="year">
<option value="I" />
<option value="II" />
<option value="III" />
<option value="IV" />
</datalist><br>
    <p>Unit No &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="unitno" list="unitno" placeholder=" Select Unit No" style="width: 250px;
height: 30px;">
<datalist id="unitno">
<option value="1" />
<option value="2" />
<option value="3" />
<option value="4" />
<option value="5" />
</datalist>
<br>
 </div><br>
<center>
 &emsp;<input type="submit" class="b" name="update" value="UPDATE" />
&emsp;<input class="b" name="delete" style="background-color:red" type="submit" value="DELETE" />
&emsp;<input type="reset" class="b" name="reset" value="CANCEL" style="color:white;background-color:#198a9e"/>
</center>
</form>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_error());
  $db=mysqli_select_db($conn,"mini") or die(mysqli_error());
 if(isset($_REQUEST['update'])){
 if(isset($_REQUEST['qid'])){
$q="select * from questions where qid='".$_REQUEST['qid']."'";
  $result=mysqli_query($conn,$q);
  if(mysqli_num_rows($result)==1)
  {
if(isset($_REQUEST['question']))
 if(isset($_REQUEST['subcode']))
  if(isset($_REQUEST['sub']))
 if(isset($_REQUEST['level']))
   if(isset($_REQUEST['marks']))
   if(isset($_REQUEST['sem']))
    if(isset($_REQUEST['year']))
 if(isset($_REQUEST['unitno'])){
     $q="update questions set question='".$_REQUEST['question']."',subjectcode='".$_REQUEST['subcode']."',subject='".$_REQUEST['sub']."',level='".$_REQUEST['level']."',marks='".$_REQUEST['marks']."',semester='".$_REQUEST['sem']."',year='".$_REQUEST['year']."',unitno='".$_REQUEST['unitno']."' where qid='".$_REQUEST['qid']."'";
      if( mysqli_query($conn,$q)){

                           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS!","question has been updated  succesfully","success");';
  echo '}, 500);</script>';
                          }
 }
  }
               else
  {
                          echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("OOPS!","Error while updating.Enter valid details.","error");';
echo '},1000);</script>';
  }
 }
 }
 if(isset($_REQUEST['delete'])){
          if(isset($_REQUEST['qid'])){
			  $q="select * from questions where qid='".$_REQUEST['qid']."'";
  $result=mysqli_query($conn,$q);
  if(mysqli_num_rows($result)==1)
  {
 if(isset($_REQUEST['question']))
 if(isset($_REQUEST['subcode']))
   $qr="delete from questions where qid='".$_REQUEST['qid']."'and question='".$_REQUEST['question']."' and subjectcode='".$_REQUEST['subcode']."' ";

  if( mysqli_query($conn,$qr)){

                           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS!","question has been deleted succesfully","success");';
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
var qid=$('#qid').val();
var question=$('#question').val();
var subjectcode=$('#subjectcode').val();
var subject=$('#subject').val();
var level=$('#level').val();
var marks=$('#marks').val();
var semester=$('#semester').val();
var year=$('#year').val();
var unitno=$('#unitno').val();

e.preventDefault();


}
else{

}

   
)};
)};
</body>
</html>