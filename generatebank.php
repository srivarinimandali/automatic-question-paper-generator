<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
   background:#f2eded;
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
  background-color:#eb9834;
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
<h2><i>GENERATE QUESTION BANK</i></h2><br>
<p> <img src="pic20.jpeg"  width="700" height="400" align="right"><div>
    <p>Subject Code&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="subcode" placeholder=" Enter Subject Code" style="width: 250px;
height: 30px;"required><br>
	<p>Subject &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="sub" placeholder=" Enter Subject Name" style="width: 250px;
height: 30px;"required><br>
    <p>Branch &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<input type="checkbox" id="cse" name="cse" value="cse">
  <label for="cse"> CSE</label>&nbsp <input type="checkbox" id="it" name="it" value="it">
  <label for="it">IT</label>
 &nbsp<input type="checkbox" id="eee" name="eee" value="eee">
  <label for="eee">EEE</label>
 &nbsp <input type="checkbox" id="ece" name="ece" value="ece">
  <label for="ece">ECE</label>
  &nbsp <input type="checkbox" id="etm" name="etm" value="etm">
  <label for="etm"> ETM</label><br>
    <p>Year&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input list="year" placeholder=" Select Year" type="text" style="width: 250px;
height: 30px;"required>
	<datalist id="year">
	<option value="I" />
	<option value="II" />
	<option value="III" />
	<option value="IV" />
</datalist><br>
<p>Semester &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input list="sem" placeholder=" Select Semester" type="text" style="width: 250px;
height: 30px;"required>
<datalist id="sem">
<option value="I" />
<option value="II" />
</datalist><br><br>
<form action="" align="center">
<button class="b1" id="myBtn" ><b>Be More Specific</button>
<button class="b" type="submit">Generate</button>
<button class="b" style="background-color:red" type="reset">Cancel</button>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>
     <form action="/action_page.php" class="form-container">
 <label><b>Bloom's Taxonomy Level</b></label><br><br>
 <label>Remember&emsp; &emsp;:</label><input type="text" placeholder="No of questions" name="rem" style="width: 250px;
height: 30px;"required>&emsp;
  <label>Understand&emsp; &emsp;:</label><input type="text" placeholder="No of questions" name="und" style="width: 250px;
height: 30px;"required><br><br>
   <label>Apply &emsp; &emsp;&emsp;&emsp; :</label><input type="text" placeholder="No of questions" name="app" style="width: 250px;
height: 30px;"required>&emsp;
   <label>Analyze&emsp;&emsp;&emsp;&emsp;:</label>
    <input type="text" placeholder="No of questions" name="anl" style="width: 250px;
height: 30px;"required><br><br>
    <label>Evaluate&emsp;&emsp;&emsp;:</label> <input type="text" placeholder="No of questions" name="eva" style="width: 250px;
height: 30px;"required>&emsp;
   <label>Create&emsp;&emsp;&emsp;&emsp;:</label>  <input type="text" placeholder="No of questions" name="create" style="width: 250px;
height: 30px;"required><br><br>
&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; <button class="b" style="background-color:#198a9e" type="submit" >Submit</button>
  </form>
    </p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>
