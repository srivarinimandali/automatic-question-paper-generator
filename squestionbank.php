<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background-image: url('loginpic.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
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
      <a href="#">View Profile</a>
      <a href="login.php">Log Out</a>
    </div>
  </div> 
</div>
<h3><i>ADD QUESTIONS</i></h3>
<p> 
      <p>Question ID&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="qid" placeholder=" Enter Question ID" required><br>
    <p>Question&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="textarea" name="question" placeholder=" Enter Question" required><br>
    <p>Subject Code&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="subcode" placeholder=" Enter Subject Code" required><br>
	
    <p>Blooms Taxonomy Level&nbsp &nbsp:<input list="level" placeholder="Select a Level" type="text">
	<datalist id="level">
	<option value="Remember" />
	<option value="Understand" />
	<option value="Apply" />
	<option value="Analyze" />
	<option value="Evaluate" />
	<option value="Create" />
</datalist>
  <p>Subject &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="sub" placeholder=" Enter Subject Name" required><br>
<p>Semester &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input list="sem" placeholder=" Select Semester" type="text" required>
	<datalist id="sem">
	<option value="I" />
	<option value="II" />
</datalist><br>
    
    <p>Year&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input list="year" placeholder=" Select Year" type="text" required>
	<datalist id="year">
	<option value="I" />
	<option value="II" />
	<option value="III" />
	<option value="IV" />
</datalist><br>
    <p>Unit No &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" list="unitno" placeholder=" Select Unit No" required>
	<datalist id="unitno">
	<option value="1" />
	<option value="2" />
	<option value="3" />
	<option value="4" />
	<option value="5" />
</datalist>
<br>
 </div>
<form action="" align="center">
<button class="b" type="submit">Submit</button>
<button class="b" style="background-color:red" type="reset">Cancel</button></form>
<form action="login.php" align="center"><button class="b" style="background-color:blue" type="submit">Exit</button>
</form><p>
</body>
</html>
