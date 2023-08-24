 <?php

 $chkbox = $_POST['chk'];
 $i = 0;
 While($i < sizeof($chkbox))
 {
 echo $chkbox[$i],' ';
 
 $i++;
 }
 
 ?>