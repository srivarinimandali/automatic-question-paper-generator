<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-image: url('qp.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  font-family: Arial, Helvetica, sans-serif;
  
}
.header {
  padding: 10px;
  text-align: center;
  background: #daf1f2;
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
  color:white;
  font-weight: bold;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}
.b:hover {
  opacity: 0.8;
}
.b1 {
  background-color:#edd145;
  color:white;
  font-weight: bold;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}
.b1:hover {
  opacity: 0.8;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 90%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
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
      <a href="profile.php">View Profile</a>
      <a href="login.php">Log Out</a>
    </div>
  </div> 
</div>

<div class="container">
<font color="white">
<p> <h2><i>GENERATE QUESTION PAPER</i></h1>
<form action="questionpaper.php" method="post">
    <p>Subject Code :<input type="text" name="subcode" placeholder=" Enter Subject Code" style="width: 250px;
height: 30px;"required>&emsp;&emsp;&emsp;
   Maximum Marks:<input type="text" name="marks" placeholder=" Enter Maximum Marks" style="width: 250px;
height: 30px;"required>&emsp;&emsp;&emsp;&emsp;&emsp;

Duration of Exam:<input type="text" name="dur" placeholder=" Enter Duration" style="width: 250px;
height: 30px;" >&emsp;&emsp;
<br><br>
Branch&emsp;&emsp;&emsp;:
	 <input type='checkbox' name='checkboxName[]' value='CSE'>CSE
     <input type='checkbox' name='checkboxName[]' value='IT'>IT
     <input type='checkbox' name='checkboxName[]' value='ECE'>ECE
     <input type='checkbox' name='checkboxName[]' value='EEE'>EEE
     <input type='checkbox' name='checkboxName[]' value='ETM'>ETM
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
Subject:<input type="text" name="sub" placeholder=" Enter Subject Name" style="width: 250px;
height: 30px;"required>&emsp;&emsp;&emsp;
Total No of Questions:<input type="number" name="tq" placeholder=" Enter Maximum Questions" style="width: 250px;
height: 30px;" required><br><br>
Year&emsp;&emsp;&emsp;&emsp;:<input list="year" name="year" placeholder=" Select Year" type="text" style="width: 250px;
height: 30px;" required>
	<datalist id="year">
	<option value="I" />
	<option value="II" />
	<option value="III" />
	<option value="IV" />
</datalist>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
Semester:<input list="sem" name="sem" placeholder=" Select Semester" type="text" style="width: 250px;
height: 30px;" required>
	<datalist id="sem">
	<option value="I" />
	<option value="II" />
</datalist>&emsp;&emsp;&emsp;&nbsp;
Date of Examination:<input type="text" name="date" placeholder=" Enter DD/MM/YY" style="width: 250px;
height: 30px;"required><br><br><img src="giphytemp.gif"  width="250" height="250" align="right">&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;
Name of Examination:<input list="exam" name="exam" placeholder=" Select Examination " type="text" style="width: 250px;
height: 30px;">
	<datalist id="exam">
	<option value="I Mid Examination" />
	<option value="II Mid Examination" />
	<option value="Semester Examination" />
</datalist>&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;
Month of Examination&nbsp&nbsp:<input list="month" name="month" placeholder=" Select Month" type="text" style="width: 250px;
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
&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&emsp;Year of Examination:<input type="number" name="ye" placeholder="Enter Year" type="text" style="width: 250px;
height: 30px;" required>
&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
Academic Year:<input type="text" name="ay" placeholder=" Enter Year-Year" style="width: 250px;
height: 30px;" ><br><br><center>
<button class="b" type="submit">Generate</button>
<button class="b" style="background-color:red" type="reset">Cancel</button></center>
</form>
</body>
</html>
