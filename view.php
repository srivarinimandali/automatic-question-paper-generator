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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>View Questionnaire</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<style>
body {

   background:#b31e1e;
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
	border: 1px solid #cca702;
	background-color:#cca702;
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
<p><form name="f1" action="displayview.php" method="post">
 <img src="gifs6.gif"  width="750" height="500" align="right"><div><br>
 <h4><i><font color="white"><center>VIEW QUESTIONS</i></h4>
 <div class="container"><br><br>
<p>Subject Code&nbsp &nbsp :&emsp;<input type="text" list="subcode" name="subcode" placeholder=" Enter Subject Code" style="height: 30px; width: 300px ;" autocomplete="off" required><br><br>
<datalist id="subcode">
<option value="134AK" />
<option value="135AR" />
<p>Subject &nbsp &nbsp&nbsp &emsp;&emsp;:&emsp;<input type="text" list="sub" name="sub" placeholder=" Enter Subject Name" style="height: 30px; width: 300px ;" autocomplete="off" required><br><br>
<datalist id="sub">
<option value="Computer Organization" />
<option value="Fundamentals of Management" />
<p>Unit No&nbsp&emsp;&emsp;&emsp; :&emsp;<input type="text" list="unitno" name="unitno" placeholder=" Select Unit No" style="height: 30px; width: 300px ;" autocomplete="off" >
<datalist id="unitno">
<option value="1" />
<option value="2" />
<option value="3-1" />
<option value="3-2" />
<option value="4" />
<option value="5" />
</datalist></div><br><br><br>
&emsp;&emsp;&emsp;<center>
<input type="submit" class="b"  name="view" value="VIEW" style="color:white;height: 50px; width: 200px ;"/>&emsp;
<input type="reset" class="b" name="reset" value="CANCEL" style="color:white;background-color:#fc6317;height: 50px; width: 200px ;border: 1px solid #fc6317"/></center>
</form>
</body>
</html>
