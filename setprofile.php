<p><h3><font color="black">Employee ID&emsp;&emsp;&emsp;:<?php echo'<input type="text" name="empid" value='$_POST['empid']' style="width: 250px;height: 30px;" required><br/>' ;?>
<p>Name&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<input type="text" name="name" value=""  style="width: 250px;height: 30px;" required><br/>
<p>Department&emsp;&emsp;&nbsp;&nbsp;&emsp;:<input name="department" type="text"  value=""  style="width: 250px;height: 30px;" ><br>
<p>Gender&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;:<input list="gender" name="gender" value=""  type="text"  style="width: 250px;height: 30px;"><br>
<p>Position&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:<input type="text" name="position" value=""  style="width: 250px;height: 30px;"><br>
<p>Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp:<input type="email" name="mail" value=""  style="width: 250px;height: 30px;" ><br>
<br><br>
 &emsp;&emsp;<input type="submit" class="b" name="update" value="UPDATE MY PROFILE" style="color:white;height: 45px; width: 300px ;background-color:#21aebf"/>
 
</form>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_error());
  $db=mysqli_select_db($conn,"mini") or die(mysqli_error());
 if(isset($_REQUEST['update'])){
if(isset($_REQUEST['name']))
 if(isset($_REQUEST['department']))
  if(isset($_REQUEST['position']))
 if(isset($_REQUEST['mail']))
   if(isset($_REQUEST['gender'])){
     $q="UPDATE validstaff SET name='".$_REQUEST['name']."',department='".$_REQUEST['department']."',position='".$_REQUEST['position']."',mail='".$_REQUEST['mail']."',gender='".$_REQUEST['gender']."'  WHERE empid='".$_REQUEST['empid']."' ";
      if( mysqli_query($conn,$q)){

                           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS!","question has been updated  succesfully","success");';
  echo '}, 500);</script>';
                          }
 }
 
               else
  {
                          echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("OOPS!","Error while updating.Enter valid details.","error");';
echo '},1000);</script>';
  }
  }
 

 ?>
</body>
</html>
