<?php
session_start();
$con= mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');
$email= $_POST['Email'];
$pass= $_POST['Password'];
$s="select * from userreg where email='$email' && password='$pass'";
$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);
if($num == 1){
  $row = mysqli_fetch_assoc($result);
    $_SESSION['email']=$email;
    $_SESSION['id']=$row['id'];
	header('location:resume.php');
}
else{
	header('location:index.php');
}
?>
