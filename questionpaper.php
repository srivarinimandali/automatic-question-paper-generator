<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Emulating real sheets of paper in web documents (using HTML and CSS)">
		<title>Question Paper</title>
		<link rel="stylesheet" type="text/css" href="css/sheets-of-paper-a4.css">
	</head>
<style>
.page {
	/* Styles for better appearance on screens only -- are reset to defaults in print styles later */

	/* Reflect the paper width in the screen rendering (must match size from @page rule) */
	width: 21cm;
	/* Reflect the paper height in the screen rendering (must match size from @page rule) */
	min-height: 29.7cm;

	/* Reflect the actual page margin/padding on paper in the screen rendering (must match margin from @page rule) */
	padding-left: 2cm;
	padding-top: 2cm;
	padding-right: 2cm;
	padding-bottom: 2cm;
}
/* Use CSS Paged Media to switch from continuous documents to sheet-like documents with separate pages */
@page {
	/* You can only change the size, margins, orphans, widows and page breaks here */

	/* Paper size and page orientation */
	size: A4 portrait;

	/* Margin per single side of the page */
	margin-left: 2cm;
	margin-top: 2cm;
	margin-right: 2cm;
	margin-bottom: 2cm;
}
html, body {
	/* Reset the document's margin values */
	margin: 0;
	/* Reset the document's padding values */
	padding: 0;
	/* Use the platform's native font as the default */
	font-family: "Roboto", -apple-system, "San Francisco", "Segoe UI", "Helvetica Neue", sans-serif;
	/* Define a reasonable base font size */
	font-size: 12pt;

	/* Styles for better appearance on screens only -- are reset to defaults in print styles later */

	/* Use a non-white background color to make the content areas stick out from the full page box */
	background-color: #eee;
}
/* Styles that are shared by all elements */
* {
	/* Include the content box as well as padding and border for precise definitions */
	box-sizing: border-box;
	-moz-box-sizing: border-box;
}
.page {
	/* Styles for better appearance on screens only -- are reset to defaults in print styles later */

	/* Divide single pages with some space and center all pages horizontally */
	margin: 1cm auto;
	/* Define a white paper background that sticks out from the darker overall background */
	background: #fff;
	/* Show a drop shadow beneath each page */
	box-shadow: 0 4px 5px rgba(75, 75, 75, 0.2);
	/* Override outline from user agent stylesheets */
	outline: 0;
}
/* Defines a class for manual page breaks via inserted .page-break element */
div.page-break {
	page-break-after: always;
}
/* Simulates the behavior of manual page breaks from `print` mode in `screen` mode */
@media screen {
	/* Renders the border and shadow at the bottom of the upper virtual page */
	div.page-break::before {
		content: "";
		display: block;
		/* Give a sufficient height to this element so that its drop shadow is properly rendered */
		height: 0.8cm;
		/* Offset the negative extra margin at the left of the non-pseudo element */
		margin-left: 0.5cm;
		/* Offset the negative extra margin at the right of the non-pseudo element */
		margin-right: 0.5cm;
		/* Make the bottom area appear as a part of the page margins of the upper virtual page */
		background-color: #fff;
		/* Show a drop shadow beneath the upper virtual page */
		box-shadow: 0 6px 5px rgba(75, 75, 75, 0.2);
	}
	/* Renders the empty space as a divider between the two virtual pages that are actually two parts of the same page */
	div.page-break {
		display: block;
		/* Assign the intended height plus the height of the pseudo element */
		height: 1.8cm;
		/* Apply a negative margin at the left to offset the page margins of the page plus some negative extra margin to paint over the border and shadow of the page */
		margin-left: -2.5cm;
		/* Apply a negative margin at the right to offset the page margins of the page plus some negative extra margin to paint over the border and shadow of the page */
		margin-right: -2.5cm;
		/* Create the bottom page margin on the upper virtual page (minus the height of the pseudo element) */
		margin-top: 1.2cm;
		/* Create the top page margin on the lower virtual page */
		margin-bottom: 2cm;
		/* Let this page appear as empty space between the virtual pages */
		background: #eee;
	}
}
/* For top-level headings only */
h1 {
	/* Force page breaks after */
	page-break-before: always;
}
/* For all headings */
h1, h2, h3, h4, h5, h6 {
	/* Avoid page breaks immediately */
	page-break-after: avoid;
}
/* For all paragraph tags */
p {
	/* Reset the margin so that the text starts and ends at the expected marks */
	margin: 0;
}
/* For adjacent paragraph tags */
p + p {
	/* Restore the spacing between the paragraphs */
	margin-top: 0.5cm;
}
/* For links in the document */
a {
	/* Prevent colorization or decoration */
	text-decoration: none;
	color: black;
}
/* For tables in the document */
table {
	/* Avoid page breaks inside */
	page-break-inside: avoid;
}
/* Use CSS Paged Media to switch from continuous documents to sheet-like documents with separate pages */
@page {
	/* You can only change the size, margins, orphans, widows and page breaks here */

	/* Require that at least this many lines of a paragraph must be left at the bottom of a page */
	orphans: 4;
	/* Require that at least this many lines of a paragraph must be left at the top of a new page */
	widows: 2;
}
/* When the document is actually printed */
@media print {
	html, body {
		/* Reset the document's background color */
		background-color: #fff;
	}
	.page {
		/* Reset all page styles that have been for better screen appearance only */
		/* Break cascading by using the !important rule */
		/* These resets are absolute must-haves for the print styles and the specificity may be higher elsewhere */
		width: initial !important;
		min-height: initial !important;
		margin: 0 !important;
		padding: 0 !important;
		border: initial !important;
		border-radius: initial !important;
		background: initial !important;
		box-shadow: initial !important;

		/* Force page breaks after each .page element of the document */
		page-break-after: auto;
	}
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
.boxed {
  border: 1px solid black ;
}
.blank_row
{
 
    background-color: #FFFFFF;
border : 1px;
}
table { border: 2px single black }
td { border: thin single black collapse }
 @media print {
    #printbtn {
        display :  none;
    }
}
.container {
  position: relative;
  max-width: 90%;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  top:0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color:black;
  width: 100%;
  padding: 10px;
}
.btn {
  background-color: #3285a8 ;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 15px;
}

/* Darker background on mouse-over */
.btn:hover {
 opacity: 0.8;
}
</style>
<body class="document" bgcolor="white">
		<div class="page" contenteditable="true">
<center><p><h2>G. Narayanamma Institute of Technology & Science</h2></p>
<p><h2>(For Women)</h2></p>
<h3>Shaikpet, Hyderabad - 500 104</h3></center>
<?php
$subcode=$_POST['subcode'];
$sub=$_POST['sub'];
$date=$_POST['date'];
$year=$_POST['year'];
$sem=$_POST['sem'];
$ay=$_POST['ay'];
$month=$_POST['month'];
$ye=$_POST['ye'];
$chkbox = $_POST['checkboxName']
?>
<center><h3><?php echo $year;?> B.Tech.&nbsp;<?php echo $sem; ?>&nbsp;Semester - Mid I Examination&nbsp;<?php echo $month; ?>-<?php echo $ye; ?></p>
<p>Academic Year&emsp;<?php echo $ay; ?></p></center></h3>
<p><h4>Subject:&nbsp;<?php echo $sub;?><br>
<br><p>Subject Code:&nbsp;<?php echo $subcode;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Time:&nbsp;1 hr<br>
<p>Date:&nbsp; <?php  
    $orgDate =$date;  
    $newDate = date("d-m-Y", strtotime($orgDate));  
    echo $newDate ;  ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Max Marks:&nbsp;10</p>
<p>Branch:&nbsp;<?php  
 $i = 0;
 While($i < sizeof($chkbox))
 { 
 echo $chkbox[$i],' ';
 $i++;
 } ?>
 </h4>
 <div class="boxed" align="center">
  <b> Bloom's Taxonomy Levels:</b><br>
  Level 1 - Remembering ,Level 2- Understanding ,Level 3- Applying, Level 4- Analyzing,<br>
  Level 5- Evaluating , Level 6-Creating<br>
</div>
<center><h4>( Answer 02 full questions. Each question carries 5 marks )</h4></center>
 <?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());
 $q1="select * from course where subcode='".$_POST['subcode']."' and subject='".$_POST['sub']."'";
	   $result=mysqli_query($conn,$q1);
	   if(mysqli_num_rows($result)==1)
	   {

echo'
     <table align="center">
<tr>
<th>S.NO</th>
<th>Question</th>
<th>Marks</th>
<th>BT Level</th>
</tr>
<br>';
$f=0;
$s=1;
$un=1;
$q=1;
while($q!=9){
if($q%2==1){
if($un==3){
$query1=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=2 and unitno='3-1') or (subjectcode='$subcode' and subject='$sub' and marks<=3 and unitno='3-1') order by rand();") or die("query failed");
    $row=mysqli_fetch_assoc($query1);
	}
 else if($un==4){
$query1=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=2 and unitno='1') or (subjectcode='$subcode' and subject='$sub' and marks=3 and unitno='1') order by rand();") or die("query failed");
    $row=mysqli_fetch_assoc($query1);
	}
else{
$query1=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=2 and unitno='$un') or (subjectcode='$subcode' and subject='$sub' and marks=3 and unitno='$un' ) order by rand();") or die("query failed");
   $row=mysqli_fetch_assoc($query1);

}
}
else
{
	if($un==3){
     $query2=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='3-1') or (subjectcode='$subcode' and subject='$sub' and marks=10 and unitno='3-1') order by rand();") or die("query failed");
    $row=mysqli_fetch_assoc($query2);
	}
	else if($un==4){
     $query2=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='2') or (subjectcode='$subcode' and subject='$sub' and marks=10 and unitno='2') order by rand();") or die("query failed");
    $row=mysqli_fetch_assoc($query2);
	}
	else{
     $query2=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='$un') or (subjectcode='$subcode' and subject='$sub' and marks=10 and unitno='$un' ) order by rand();") or die("query failed");
    $row=mysqli_fetch_assoc($query2);
	}
    $un=$un+1;
}

$q++;
?>
<tr>
<td> <?php if($f==0) { echo $s; echo ' a)'; $f=1; }
 else{  echo $s; echo ' b)'; $f=0; $s=$s+1;}
?>
</td>
<td> <?php echo $row['question']; ?> </td>
<?php
if($row['marks']==2 || $row['marks']==3)
{
?>
<td> <?php echo "2";} ?></td>
<?php
if($row['marks']==5 || $row['marks']==10)
{
?>
<td> <?php echo "3"; } ?></td>
<td>
 <?php
   if($row['level']=="Remember")
  echo "L-1";
   else if($row['level']=="Understand")
  echo "L-2";
    else if($row['level']=="Apply")
  echo "L-3";
    else if($row['level']=="Analyze")
  echo "L-4";
    else if($row['level']=="Evaluate")
  echo "L-5";
    else if($row['level']=="Create")
  echo "L-6";
 
  ?>
  </td>
</tr>
<?php if($f==0){ if($q!=9){ echo' <tr class="blank_row">
            <td bgcolor="#FFFFFF" colspan="3"><center> OR </center></td>
       </tr>';
}
}
} 
}
	   else{
		           echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("Go Back!"," Enter valid details of subject inorder to view questions here.","warning");';
echo '},1000);</script>';
	   }
?>

</table>
</div>
<div class="container">
 <div class="content"><center>
<center>
             <button class="btn btn-primary hidden-print"   id ="printbtn" style="color:white;height: 50px; width: 300px ;" onclick="window.print();"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&emsp; Print</button>
   </center>
       
</div>
</div>

</body>
</html>
