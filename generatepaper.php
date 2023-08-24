<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Generate Question Paper</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:1000,1000');

* {
	box-sizing: border-box;
}

body {
	font-family: 'Montserrat', sans-serif;
	background-color:black;
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
    opacity: 0.8;
	 background:#d9d9d9;
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
h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}
.b {
	border-radius: 20px;
	border: 1px solid #008a91;
	background-color: #008a91;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
.b:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
#logo{
	position:absolute;
	top:0;
	left:0;
}
form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
	
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 637px;
	background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
	
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
	
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
	
	
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
	
	

}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
	
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background:#132e75;
	background: -webkit-linear-gradient(to right,#009191, #132e75);
	background: linear-gradient(to right, #009191, #132e75);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out
	
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
	
}

.overlay-left {
	transform: translateX(-20%);
	
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
.h1 { 
  
            /* Increase line-height  
               compare to default */ 
            line-height: 1em; 
            
        } 
.icon {
  padding: 10px;
  background: pink;
  color: white;
  min-width: 50px;
  text-align: center;
}
button {
	border-radius: 20px;
	border: 1px solid #008a91;
	background-color: #008a91;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
.p {
	
  text-align: justify;

}
button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}
button:hover {
  opacity: 0.8;
  
}
</style>
<body>
<div class="container" id="container" style="width:100%">
	<div class="form-container sign-up-container" >
		<form action="">
		<h1>MIDS</h1><br>
			<span><h3>Select the Mid Examination you want to generate</h3></span><br><br>
			<input type="button" class="b" name="create" onclick="myFunctionmid1()" value="TO GENERATE MID-I" />
			<input type="button" class="b" name="create" onclick="myFunctionmid2()" value="TO GENERATE MID-II" />
		</form>
	</div>
	<div class="form-container sign-in-container" >
		<form action="">
         <h1><b>SEMESTER EXAMINATIONS</b></h1>
				<p><font color="black"><b>Click the below button to generate Semester Examination Paper</font></p>
				<input type="button" class="b" name="create" onclick="myFunctionsem()" value="TO GENERATE SEMESTER PAPER" />
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
			<h1><b>SEMESTER EXAMINATIONS</b></h1>
				<p><font color="white"><b>An exam given at the end of an academic grading term to measure students grasp of the course materials and identify areas that need work.</b></font></p>
				<button class="ghost" id="signIn">Semester</button><br>
				<button class="ghost" id="signIn" onclick="myFunction()">Back To Home</button>
			
			</div>
			<div class="overlay-panel overlay-right">
				<h1><b>MID EXAMINATIONS</b></h1>
				<p>An exam given near the middle of an academic grading term, or near the middle of any given quarter or semester to measure students' grasp of the course materials and identify areas that need work.</p>
				<button class="ghost" id="signUp">Mids</button><br>
				<button class="ghost" id="signUp" onclick="myFunction()">Back To Home</button>
			</div>
		</div>
	</div>
</div>

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
<script>
function myFunction() {
   window.location='home.php'
}
function myFunctionmid1() {
  window.location='mid1.php'
}
function myFunctionmid2() {
  window.location='mid2.php'
}
function myFunctionsem() {
  window.location='sem.php'
}
</script>
</body>
</html>