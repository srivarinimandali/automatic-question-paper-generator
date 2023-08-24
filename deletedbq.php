<?php 
    session_start();
	if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>

	<?php
	$qid1 = $_POST['qid'];
	$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());
 $q= "SELECT * FROM questions WHERE qid='$qid1' ";
  $result=mysqli_query($conn,$q);
	   if(mysqli_num_rows($result)==1)
	   {
         $r = $conn->query($q);
	   
            if ($r->num_rows > 0) 
	         {
               // output data of each row
               while($row = $r->fetch_assoc())
                 {
                   
				     ?>
					 <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Delete Questions</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<style>
body {
   background:#de9e14;
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
	border: 1px solid #c90018;
	background-color:#c90018;
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
		     <a  class="nav-link" href="logout.php"><i class="fa fa-power-off" style="font-size:18px"><?php echo " ",$_SESSION['username'] ?></i></a>
      </li>
	  </ul>
    </div>
  </div>
</nav><!-- Page Content --><br>
<img src="delete.gif"  width="750" height="500" align="right"><div>
<h4><i><font color="black">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;DELETE QUESTIONS</i></h4><br>
<form action="nextpg.php" method="post">
&emsp;&emsp;Question ID:&emsp;<?php echo '<input name="qid" type="text" size="60" value="'.$row['qid'].'" style="width: 250px;height: 30px;" readonly><br><br>';?>
  <p>&emsp;&emsp;<label for="question">Question &emsp;:</label><br>&emsp;&emsp;<textarea id="question" name="question" rows="3" cols="65" readonly><?php echo $row['question'];?></textarea><br>
<p>&emsp;&emsp;Subject Code&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<?php echo'<input type="text" name="subcode" value="'.$row['subjectcode'].'" style="width: 250px;height: 30px;" readonly><br>';?>
    <p>&emsp;&emsp;Marks&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<?php echo'<input type="number" name="marks"  value="'.$row['marks'].'" style="width: 250px;height: 30px;" readonly><br>';?>
<p>&emsp;&emsp;Blooms Taxonomy Level&nbsp &nbsp;:<?php echo'<input list="level" name="level"  type="text" value="'.$row['level'].'" style="width: 250px;height: 30px;" readonly>'; ?>
<datalist id="level">
<option value="Remember" />
<option value="Understand" />
<option value="Apply" />
<option value="Analyze" />
<option value="Evaluate" />
<option value="Create" />
</datalist>  

<p>&emsp;&emsp;Subject &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<?php echo'<input type="text" name="sub" value="'.$row['subject'].'" style="width: 250px;height: 30px;" readonly ><br>' ; 
?>
<p>&emsp;&emsp;Semester &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<?php echo'<input list="sem" name="sem" value="'.$row['semester'].'" type="text" style="width: 250px;height: 30px;" readonly>' ; ?>
<datalist id="sem">
<option value="I" />
<option value="II" />
</datalist><br>
   
    <p>&emsp;&emsp;Year&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<?php echo'<input list="year" name="year" value="'.$row['year'].'" type="text" style="width: 250px;height: 30px;" readonly>' ; ?>
<datalist id="year">
<option value="I" />
<option value="II" />
<option value="III" />
<option value="IV" />
</datalist><br>
    <p>&emsp;&emsp;Unit No &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<?php echo'<input type="text" name="unitno" list="unitno" value="'.$row['unitno'].'"style="width: 250px;
height: 30px;" readonly>'; ?>
<datalist id="unitno">
<option value="1" />
<option value="2" />
<option value="3" />
<option value="4" />
<option value="5" />
</datalist>
<br>
 </div>

				<?php 
				 }
			 } ?>
&emsp;&emsp;&emsp;<input type="submit" class="b" name="delete" value="DELETE" style="color:white;height: 40px; width: 200px ;background-color:#c90018" />
&emsp;<input type="button" class="b" name="back" value="CHANGE QID" onclick="myFunctionqid()"style="color:white;background-color:#fc6317;height: 40px; width: 200px ;border: 1px solid #fc6317"/></form><br><br>
	 <?php
	 }
	 if(mysqli_num_rows($result)==0){
		 echo '<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background-image: url("error.jpg");
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
<body><font color="white">
<br><br><br><br><br><br><br><br><br><center><h3><marquee behavior="scroll" direction="right" scrollamount="5"> You have entered an invalid Question ID.</center></h3>
</marquee><br><br><br><br><br><br><br><br><br><br><br><br><form action="update.php" align="center"><input type="submit" class="b" name="back" value="GO BACK" /></form>
</body>
</html>';
		}
	   ?>
<script>
	function myFunctionqid() {
  location.replace("delete.php")
  }
  </script>
  </body>
  </html>