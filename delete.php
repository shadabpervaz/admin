<?php

session_start();
$con= mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');
$email= $_POST['Email'];
$s="delete from userreg where email='$email'";
$num=mysqli_query($con,$s);
if($num){
	header('location:homePage.php');
}
else{
	header('location:logInForm.html');
}
?>
