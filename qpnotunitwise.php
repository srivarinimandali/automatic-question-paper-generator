<html>
<style>
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
</style>
<body bgcolor="white">
<center><p><h1>G. Narayanamma Institute of Technology & Science</h1></p>
<p><h1>(For Women)</h1></p>
<h2>Shaikpet, Hyderabad - 500 104</h2></center>
<?php
$subcode=$_POST['subcode'];
$sub=$_POST['sub'];
$date=$_POST['date'];
$exam=$_POST['exam'];
$year=$_POST['year'];
$marks=$_POST['marks'];
$dur=$_POST['dur'];
$tq=$_POST['tq'];
$sem=$_POST['sem'];
$ay=$_POST['ay'];
$month=$_POST['month'];
$ye=$_POST['ye'];
$chkbox = $_POST['checkboxName']
?>
<center><h2><?php echo $year;?> B.Tech.&nbsp;<?php echo $sem; ?>&nbsp;Semester - <?php echo $exam; ?>&nbsp;<?php echo $month; ?>-<?php echo $ye; ?></p>
<p>Academic Year&emsp;<?php echo $ay; ?></p></center>
<p><h3>Subject:&nbsp;<?php echo $sub;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Max Marks:&nbsp;<?php echo $marks;?><br>
<p><h3>SubjectCode:&nbsp;<?php echo $subcode;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Time:&nbsp;<?php echo $dur;?><br>
<p><h3>Branch:&nbsp;<?php  
 $i = 0;
 While($i < sizeof($chkbox))
 {
 echo $chkbox[$i],' ';
 $i++;
 } ?></p>
 <p>Date:&nbsp;<?php echo $date;?></p></h3>
 <div class="boxed" align="center">
  <b> Bloom's Taxonomy Levels:</b><br>
  Level 1 - Remembering ,Level 2- Understanding ,Level 3- Applying, Level 4- Analyzing,<br>
  Level 5- Evaluating , Level 6-Creating<br>
</div>
<center><h4>( Answer 02 full questions. Each question carries 5 marks )</h4></center>
 <?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
 $db=mysqli_select_db($conn,"mini") or  die(mysqli_connect_error());

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
	$query1=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=2 ) or (subjectcode='$subcode' and subject='$sub' and marks=3 ) order by rand();") or die("query failed");
	$query2=mysqli_query($conn,"select distinct * from questions where (subjectcode='$subcode' and subject='$sub' and marks=5 ) or (subjectcode='$subcode' and subject='$sub' and marks=10 ) order by rand();") or die("query failed");
for($i=1;$i<=$tq;$i++) {
		if($i%2==1)
		{
			mysqli_data_seek($query1,$i/2);
			$row=mysqli_fetch_assoc($query1);
		}
		else
		{
			mysqli_data_seek($query2,$i/2-1);
			$row=mysqli_fetch_assoc($query2);
		}
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
<td> <?php echo "2"; }?></td>
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
	<?php if($f==0){ if($i!=$tq){ echo' <tr class="blank_row">
            <td bgcolor="#FFFFFF" colspan="3"><center> OR </center></td>
        </tr>';
	}
	}
		} ?>

</table>
</body>
</html>
