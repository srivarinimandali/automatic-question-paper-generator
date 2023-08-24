<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Mid-2 Examination</title>
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<style>
body {
  background:#e06767;
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
    opacity: 0.8;
	  text-shadow: 0 0 3px #FF0000;
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
                    <a href="homenew.php"class="menuitem">Saved Papers</a>
                </div>
            </div>
        </li>
        <li class="nav-item"> <div class="dropdown">
          <a class="nav-link" href="#">Assignment</a>
		   <div class="dropdown-content">
                    <a href="mid1assignment.php" class="menuitem">Generate Mid-1 Assignment</a>
					  <a href="mid2assignment.php" class="menuitem">Generate Mid-2 Assignment</a>
                    <a href="" class="menuitem">Saved Assignments</a>
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
<img src="assignment3.gif"  align="left" width="800" height="500" >
<center><b><h4><i><font color="white">&emsp;&emsp; ASSIGNMENT </h4></b>

<script>
	function myFunction() {
  location.replace("login.php")}
  </script>
</body>
</html>