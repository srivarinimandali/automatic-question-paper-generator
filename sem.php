<?php 
    session_start();
		if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Semester Examination</title>
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<style>
body {
  background:#84cf93;
}
.b {
 border-radius: 20px;
	border: 1px solid ;
	background-color:#3fa300;
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
</style>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="logoi1.png"  width="270px" height="70px" alt="">
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
		     <a  class="nav-link" href="javascript:myFunction()"><i class="fa fa-power-off" style="font-size:18px"><?php echo " ",$_SESSION['username'] ?></i></a>
      </li>
	  </ul>
    </div>
  </div>
</nav><!-- Page Content -->
<p>
<img src="formids1.gif"  align="left" width="800" height="562" >
<center><b><h4><i><font color="black">&emsp;&emsp; SEMESTER EXAMINATION</h4></b>
<form action="questionpaper3.php" method="post"><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;Subject Code &emsp;:&emsp;<input type="text" list="subcode" name="subcode" placeholder=" Enter Subject Code" style="width: 250px;
height: 30px;" autocomplete="off" required>
<datalist id="subcode">
<option value="134AK" />
<option value="135AR" />
</datalist>
<br><br>&emsp;&emsp;&emsp;&emsp;&emsp;
Branch&emsp;&nbsp;:&emsp;
	 <input type='checkbox' name='checkboxName[]' value='CSE'>CSE &nbsp;
     <input type='checkbox' name='checkboxName[]' value='IT'>IT&nbsp;
     <input type='checkbox' name='checkboxName[]' value='ECE'>ECE&nbsp;
     <input type='checkbox' name='checkboxName[]' value='EEE'>EEE&nbsp;
     <input type='checkbox' name='checkboxName[]' value='ETM'>ETM&nbsp;
<br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;Subject&emsp;:&emsp;<input list="sub" autocomplete="off" type="text" name="sub" placeholder=" Enter Subject Name" style="width: 250px;
height: 30px;"required>&emsp;&emsp;&emsp;
<datalist id="sub">
<option value="Computer Organization" />
<option value="Fundamentals of Management" /></datalist>
<br><br>
&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;Year&emsp;:&emsp;<input list="year" name="year" placeholder=" Select Year" type="text" style="width: 250px;
height: 30px;" required>
	<datalist id="year">
	<option value="I" />
	<option value="II" />
	<option value="III" />
	<option value="IV" />
</datalist><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;Semester&emsp;:&emsp;<input list="sem" name="sem" placeholder=" Select Semester" type="text" style="width: 250px;
height: 30px;" required>
	<datalist id="sem">
	<option value="I" />
	<option value="II" />
</datalist><br><br>
Month of Examination&emsp;:&emsp;<input list="month" name="month" placeholder=" Select Month" type="text" style="width: 250px;
height: 30px;" required>
	<datalist id="month">
	<option value="January" />
	<option value="February" />
	<option value="March" />
	<option value="April" />
	<option value="May" />
	<option value="June" />
	<option value="July" />
	<option value="August" />
	<option value="September" />
	<option value="October" />
	<option value="November" />
	<option value="December" />
	</datalist><br><br>
Year of Examination&emsp;:&emsp;&nbsp;<input type="number" name="ye" placeholder="Enter Year" type="text" style="width: 250px;
height: 30px;" required><br><br>&emsp;
<center>
&emsp;&emsp;&emsp;&emsp;<button class="b" type="submit">Generate</button>
<button class="b" style="background-color:red" type="reset">Cancel</button></center>
</form>
<script>
	function myFunction() {
  location.replace("login.php")}
  </script>
</body>
</html>