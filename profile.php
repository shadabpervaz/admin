<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:index.php');
}
if(isset($_POST['save'])){
  $con= mysqli_connect('localhost','root',"", 'userregistration');
  $name= $_POST['uname'];
  $email= $_POST['email'];
  $age= $_POST['age'];
  $drop= $_POST['drop'];
  $gender= $_POST['gender'];
  	$id = $_SESSION['id'];
  $sql="insert into profile(p_name,p_email,P_age,p_religion,p_gender,user_id)values('$name',
  '$email','$age','$drop','$gender' '$id')";
  $reg=	mysqli_query($con,$sql);

if($reg)
{
  echo "successfull";
}else
{
  echo "error";
}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript.js"></script>
    <link rel="stylesheet" type="text/css" href="design.css">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container ">
		<div class="row">
		<div class="col-lg-4 ">
			<h1 class="display-7" style="color:white"><strong>PROFILE ADD</strong></h1>
			<form name=""  method="post" action="profile.php">
			<div class="form-group">
				<label for="fnm"> Full Name</label>
				<input type="text" name="uname" id="uname" placeholder="Enter Full Name"  class="form-control">
			</div>
			<div class="form-group">
				<label for="email"> Email</label>
				<input type="email" name="email" id="email" placeholder="Enter Email" class="form-control" >
			</div>
			<div class="form-group">
				<label for="age">Age</label>
				<input type="number" name="age" id="age" placeholder="Enter Age"  class="form-control" >
			</div>
			<div class="form-group">
				<select class="dropdown" name="drop">
					<option value="Islam">Islam</option>
					<option value="Christain">Christain</option>
					<option  value="Buddhism">Buddhism</option>
					<option  value="Hinduism">Hinduism</option>
				</select>
			</div>
			<div class="form-group" class="checkgender">
			  <input type="radio" name="gender" value="Male">Male
			  <input type="radio" name="gender" value="Fimale">Female
			  <input type="radio" name="gender" value="Other">Other
      </div>
			<div class="form-group">
			 <input type="submit" value="SAVE"name="save"  class="btn btn-outline-primary btn-block" >
			</div>
		</form>
		</div>
	</div>
   </div>
</body>
</html>
