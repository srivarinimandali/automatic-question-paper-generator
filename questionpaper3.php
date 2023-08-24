<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
 
    background-color: #FFFFFF;http://www.firstranker.com/
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
<?php
$subcode=$_POST['subcode'];
$sub=$_POST['sub'];
$year=$_POST['year'];
$sem=$_POST['sem'];
$month=$_POST['month'];
$ye=$_POST['ye'];
$chkbox = $_POST['checkboxName'];

?>

<p><h4>Code No:&nbsp;<?php echo $subcode;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;R16</h4></p>
<center><p><h3>JAWAHARLAL NEHRU TECHNOLOGICAL UNIVERSITY HYDERABAD</h3></p></center>
<center><h4>B.Tech <?php echo $year;?> Year&nbsp;<?php echo $sem; ?>&nbsp;Semester Examinations, &nbsp;<?php echo $month; ?>-<?php echo $ye; ?></h4></p></center>
<p><center><h4><b>&nbsp;<?php echo $sub;?></b></center></h4></p>
<p><center><h5><?php  
 $i = 0;
 echo "( Common to ";
 While($i < sizeof($chkbox))
 {
 echo $chkbox[$i],' ';
 $i++;
 }
 echo ")"; ?></h5></center></p>
<p><h4><b> Time: 3 Hours</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Max Marks : 75 </b></h4></p>
<p><b style="font-size:17px"> Note:</b>&emsp; This question paper contains two parts A and B.</p>
<p> Part A is compulsory which carries 25 marks. Answer all questions in part A.</p>
<p> Part B consists of 5 Units. Answer any one full question from each unit. Each question carries 10 marks and may have a, b sub questions.</h4></p>
<br><p><h4><center>PART-A</center>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;(25 Marks)</h4></p>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());
$q1="select distinct * from course where subcode='".$_POST['subcode']."' and subject='".$_POST['sub']."'";
	   $result=mysqli_query($conn,$q1);
	   if(mysqli_num_rows($result)==1)
	   {
		   $k="select distinct * from questions where subcode='".$_POST['subcode']."' and subject='".$_POST['sub']."' order by rand()";
		    $result1=mysqli_query($conn,$k);
echo'
     <table align="center">
<tr>
<th></th>
<th></th>
<th></th>
</tr>
<br>';
$f=0;
$s=1;
$un=1;
$q=1;
$sno=97;
while($q!=11){
if($q%2==1){
if($un==3){
$query1=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=2 and unitno='3-1') or (subjectcode='$subcode' and subject='$sub' and marks=2 and unitno='3-2' ) order by rand();") or die("query failed");
   $row=mysqli_fetch_assoc($query1);

}else{

$query1=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=2 and unitno='$un') or (subjectcode='$subcode' and subject='$sub' and marks=2 and unitno='$un' ) order by rand();") or die("query failed");
   $row=mysqli_fetch_assoc($query1);

}
}
else
{
if($un==3){
     $query2=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=3 and unitno='3-1') or (subjectcode='$subcode' and subject='$sub' and marks=3 and unitno='3-2') order by rand();") or die("query failed");
    $row=mysqli_fetch_assoc($query2);
}else{
    $query2=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=3 and unitno='$un') or (subjectcode='$subcode' and subject='$sub' and marks=3 and unitno='$un' ) order by rand();") or die("query failed");
    $row=mysqli_fetch_assoc($query2);
}
$un=$un+1;
}
$q++;
?>
<tr>
<td> <?php if($f==0){ echo $s; ?><?php  echo  chr($sno);  $sno=$sno+1; $f=1;} else { echo  chr($sno);  $sno=$sno+1;} ?><?php echo ")<html>&emsp;&emsp;</html>";?>
</td>
<td> <?php echo $row['question']; ?> </td>
<td> <?php echo "<html>&nbsp;&emsp;</html>"; echo "[";?><?php echo $row['marks'];?><?php echo "]";?></td>

<?php

}
?>
</tr>
</table>
</div>
<div class="page" contenteditable="true">
<br><br><p><h4><center>PART-B</center>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;(50 Marks)</h4></p>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());

echo'
     <table align="center">
<tr>
<th></th>
<th></th>
<th></th>
</tr>
<br>';
$f1=0;
$or1=1;
$s1=2;
$un1=1;
$q1=1;
while($s1!=12){
if($s1==2 || $s1==3)
$un1=1;
if($s1==4 || $s1==5)
$un1=2;
if($s1==6 || $s1==7)
$un1=3;
if($s1==8 || $s1==9)
$un1=4;
if($s1==10 || $s1==11)
$un1=5;

if($q1%2==1){
if($un1==3){
if($f1==2){
$query3=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='3-1') or (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='3-1' ) order by rand() LIMIT 1;")  or die("query failed");
   $row=mysqli_fetch_assoc($query3);
}
else{
$query1=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='3-1') or (subjectcode='$subcode' and subject='$sub' and marks=10 and unitno='3-1' ) order by rand() LIMIT 1;")  or die("query failed");
   $row=mysqli_fetch_assoc($query1);
  if($row['marks']==5)
  {
 $f1=1;
  }
}
}
else{
if($f1==2){
$query3=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='$un1') or (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='$un1' ) order by rand() LIMIT 1;")  or die("query failed");
   $row=mysqli_fetch_assoc($query3);
}
else{
$query1=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=10 and unitno='$un1') or (subjectcode='$subcode' and subject='$sub' and marks=10 and unitno='$un1' ) order by rand() LIMIT 1;") or die("query failed");
   $row=mysqli_fetch_assoc($query1);
   if($row['marks']==5)
  {
 $f1=1;
  }
}
}

}
else
{

if($un1==3){
if($f1==2){
$query3=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='3-2') or (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='3-2' ) order by rand() LIMIT 1;")  or die("query failed");
   $row=mysqli_fetch_assoc($query3);
}
else{
     $query2=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=10 and unitno='3-2') or (subjectcode='$subcode' and subject='$sub' and marks=10 and unitno='3-2') order by rand() LIMIT 1;") or die("query failed");
    $row=mysqli_fetch_assoc($query2);
if($row['marks']==5)
  {
 $f1=1;
  }
}
}
else{
if($f1==2){
$query3=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='$un1') or (subjectcode='$subcode' and subject='$sub' and marks=5 and unitno='$un1' )order by rand() LIMIT 1;")  or die("query failed");
   $row=mysqli_fetch_assoc($query3);
}
else{
    $query2=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=10 and unitno='$un1') or (subjectcode='$subcode' and subject='$sub' and marks=10 and unitno='$un1' ) order by rand() LIMIT 1;") or die("query failed");
    $row=mysqli_fetch_assoc($query2);
if($row['marks']==5)
  {
 $f1=1;
  }
}
}

}
if($f1==0){
$un1=$un1+1;
}
$q1++;
?>
<tr>
<td> <?php if($f1==0) { echo $s1; echo ")";$s1=$s1+1; } else if($f1==1) { echo $s1; echo "a)" ; $f1=2;  } else {  echo $s1; echo "b)" ; $f1=0; $s1=$s1+1; }
echo "<html>&emsp;&emsp;</html>";
 
?></td>
<td> <?php echo $row['question']; ?> </td>
<td> <?php echo "<html>&nbsp;&emsp;<align='right'>"; echo "[";?><?php echo $row['marks'];?><?php echo "]</html>";?></td>
<?php if(($s1%2!=0 && $f1==0))
               if($s1!=12){ echo' <tr class="blank_row">
            <td bgcolor="#FFFFFF" colspan="3"><center> OR </center></td>
       </tr>';
 
 
 
}
if($s1%2!=1){
  echo' <tr class="blank_row">
            <td bgcolor="#FFFFFF" colspan="3"></td>
       </tr>';
}
}
}
	  
	   else{
		           echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("Go Back!"," Enter valid details of subject inorder to view questions here.","warning");';
echo '},1000);</script>';
	   }
?>
</div>
</tr>

</table>

<center> <b>--ooOoo--</center>
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