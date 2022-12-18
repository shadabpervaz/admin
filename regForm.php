<?php
session_start();
$con= mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');
$name= $_POST['uname'];
$email= $_POST['email'];
$pass= $_POST['password'];
$age= $_POST['age'];
$drop= $_POST['drop'];
$gender= $_POST['gender'];

$s=" select * from userreg where email='$email'";
$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);
if($num == 1){
	echo "Email already exists";
}
else{
	$reg="insert into userreg(name,email,password,age,dropdown,gender)values('$name',
	'$email','$pass','$age','$drop','$gender')";
	mysqli_query($con,$reg);
	echo "registration is successfull";
    // header("location:
    // logInForm.html");
}

?>
