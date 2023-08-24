<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
   background:#F6F3F2;
}
.header {
  padding: 10px;
  text-align: center;
  background: #49768f;
  color: white;
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
</style>
</head>
<body>
<div class="header">
  <h1>AUTOMATIC QUESTION PAPER GENERATOR</h1>
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
      <a href="savedpapers.php">Saved Question Papers</a>
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
  <div class="dropdown">
    <button class="dropbtn" class="right">Account
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">View Profile</a>
      <a href="login.php">Log Out</a>
 
    </div>
  </div>
</div><center>
<h2>SAVED QUESTION PAPER</h2>
</center>
<form align="center">
<input type="button" style="background-color:red;color:white;" name="dowload" value="Dowload as pdf"/>
</form>
</body>
</html>
