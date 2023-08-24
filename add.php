<?php 
    session_start();
	if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Questions</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<style>
body {
  
   background:#2a92ad;
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

.menu {
    font-size: 21px;
    padding: 0vh 2vw 0vh 2vw;
    text-decoration: none;
    font:'Candara';
    color:#e8e8e8;
}
 
.menuitem {
    text-decoration: none;
    padding: 1vw 4vh 1vw 4vh;
    font-family:'Candara';
    font-size: 18px;
    color: black;
}
 .menu:hover{
	  opacity: 0.8;
	 text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
 }
 
.menuitem:hover {
     margin: 20px;
        -webkit-transition: color 1s; /* For Safari 3.0 to 6.0 */
        transition: color 1s; /* For modern browsers */
		color: #ff0000;
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

 
.dropdown-content {
    display: none;
    position: absolute;
    background-color:black;
    min-width: 14vw;
    min-height: 20vh;
    padding: 12px 16px;
    z-index: 1;
    text-align: center;
    background-color: rgba(253, 246, 246, 0.6);
    border-radius: 5%;
}
 
.dropdown-content a {
    display: inline-block;
}
 
.dropdown {
    position: relative;
    display: inline-block;
}
 
.dropdown:hover .dropdown-content {
    display: block;
}
a:visited {
  color: black;
  font-weight:bold;
}
.b {
 border-radius: 20px;
	border: 1px solid ;
	background-color: #02266e;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
.b:hover {
  opacity: 0.8;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="logoi1.png"  width="350px" height="70px" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item"> <div class="dropdown">
          <a class="nav-link" href="#">Questionnaire</a>
		  <div class="dropdown-content">
                    <a href="view.php" class="menuitem">View Questions</a>
                    <a href="add.php" class="menuitem">Add Questions</a>
                    <a href="update.php" class="menuitem">Update Questions</a>
                    <a href="delete.php"class="menuitem">Delete Questions</a>
                </div>
            </div>
        </li>
        <li class="nav-item"> <div class="dropdown">
          <a class="nav-link" href="#">Examination</a>
		   <div class="dropdown-content">
                    <a href="generatepaper.php"class="menuitem">Generate Question Paper</a>
                </div>
            </div>
        </li>
        <li class="nav-item"> <div class="dropdown">
          <a class="nav-link" href="#">Assignment</a>
		   <div class="dropdown-content">
                    <a href="mid1assignment.php" class="menuitem">Generate Mid-1 Assignment</a>
					  <a href="mid2assignment.php" class="menuitem">Generate Mid-2 Assignment</a>
                </div>
            </div>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
		<li class="nav-item">
		     <a  class="nav-link" href="logout.php"><i class="fa fa-power-off" style="font-size:18px"><?php echo " ",$_SESSION['username'] ?></i></a>
      </li>
	  </ul>
    </div>
  </div>
</nav><!-- Page Content --><br>

<form action="">
<p> <img src="gifs4.gif"  style="background-attachment: fixed;" width="700" height="500" align="right"><div>
<h4><i><font color="white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ADD QUESTIONS</i></h4><br>
 <p>&emsp;&emsp; Question ID&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="qid" placeholder=" Enter Question ID" style="width: 250px;
height: 30px;"required><br>
 <p><label for="question">&emsp;&emsp; Question &emsp;:<br></label><br>&emsp;&emsp; <textarea id="question" name="question" rows="3" cols="65" placeholder="Enter Question Here..." required></textarea><br>
   <p>&emsp;&emsp; Subject Code&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" autocomplete="off" list="subcode" name="subcode" placeholder=" Enter Subject Code" style="width: 250px;
height: 30px;"required>
<datalist id="subcode">
<option value="134AK" />
<option value="135AR" />
<br>
<p>&emsp;&emsp;Marks&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<input type="number" name="marks" placeholder=" Enter Marks" style="width: 250px;
height: 30px;"required>
 <p>&emsp;&emsp; Blooms Taxonomy Level&nbsp;&nbsp;&nbsp;:<input list="level" name="level" placeholder="Select a Level" type="text" style="width: 250px;
height: 30px;">
<datalist id="level">
<option value="Remember" />
<option value="Understand" />
<option value="Apply" />
<option value="Analyze" />
<option value="Evaluate" />
<option value="Create" />
</datalist>
<p>&emsp;&emsp; Subject &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" list="sub" name="sub" placeholder=" Enter Subject Name" style="width: 250px;
height: 30px;" autocomplete="off" required>
<datalist id="sub">
<option value="Computer Organization" />
<option value="Fundamentals of Management" /><br>
<p>&emsp;&emsp;  Semester &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input list="sem" name="sem" placeholder=" Select Semester" type="text" style="width: 250px;
height: 30px;"required>
<datalist id="sem">
<option value="I" />
<option value="II" />
</datalist><br>
 <p> &emsp;&emsp; Year&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input list="year" name="year" placeholder=" Select Year" type="text" style="width: 250px;
height: 30px;"required>
<datalist id="year">
<option value="I" />
<option value="II" />
<option value="III" />
<option value="IV" />
</datalist><br>
   <p> &emsp;&emsp;  Unit No &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="unitno" list="unitno" placeholder=" Select Unit No" style="width: 250px;
height: 30px;" autocomplete="off" required>
<datalist id="unitno">
<option value="1" />
<option value="2" />
<option value="3-1" />
<option value="3-2" />
<option value="4" />
<option value="5" />
</datalist>
&emsp; &emsp;&emsp; &emsp; &emsp; &emsp;<input type="submit" class="b" name="add" value="ADD" style="color:white;height: 50px; width: 200px ;background-color:#02266e;border: 1px solid #02266e"/>
&emsp;<input type="reset" class="b" name="reset" value="CANCEL" style="color:white;background-color:red;height: 50px; width: 200px ;border: 1px solid red"/>
</div>
 </form>
</body>
<?php
 if(isset($_REQUEST['add'])){
$conn=mysqli_connect("localhost","root","") or die(mysqli_error());
  $db=mysqli_select_db($conn,"mini") or die(mysqli_error());
  $q1="select * from course where subcode='".$_REQUEST['subcode']."' and subject='".$_REQUEST['sub']."'";
	   $result=mysqli_query($conn,$q1);
	   if(mysqli_num_rows($result)==1)
	   {
   if(isset($_REQUEST['qid']))
if(isset($_REQUEST['question']))
 if(isset($_REQUEST['subcode']))
  if(isset($_REQUEST['sub']))
 if(isset($_REQUEST['level']))
   if(isset($_REQUEST['marks']))
   if(isset($_REQUEST['sem']))
    if(isset($_REQUEST['year']))
 if(isset($_REQUEST['unitno'])){
  $q="insert into questions values('".$_REQUEST['qid']."','".$_REQUEST['question']."','".$_REQUEST['subcode']."','".$_REQUEST['sub']."','".$_REQUEST['level']."','".$_REQUEST['marks']."','".$_REQUEST['sem']."','".$_REQUEST['year']."','".$_REQUEST['unitno']."')";
   
 if(mysqli_query($conn,$q)){

                           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS!","question has been added succesfully","success");';
  echo '}, 1000);</script>';
                          }
               else
  {
                           echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("OOPS!","Error while adding. Enter valid question id.","error");';
echo '},1000);</script>';
  }
}
   }
   else{
	    echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("OOPS!","Error while adding. Enter the correct subject code and subject name.","error");';
echo '},1000);</script>';
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
</html>