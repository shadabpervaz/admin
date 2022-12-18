<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:index.php');
}
if(isset($_POST['save'])){
  $con= mysqli_connect('localhost','root',"", 'userregistration');
  $address= $_POST['address'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $text= $_POST['text'];
  	$id = $_SESSION['id'];
  $sql="insert into contact(c_address,c_email,c_phone,c_website ,user_id)values('$address',
  '$email','$phone','$text', '$id')";
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
			<h1 class="display-7" style="color:white"><strong>Contact</strong></h1>
			<form name=""  method="post" action="Contact.php" >
			<div class="form-group">
				<label for="fnm"> ADDRESS</label>
				<input type="text" name="address" id="address" placeholder="Enter address "  class="form-control" >
			</div>
			<div class="form-group">
				<label for="email"> Email</label>
				<input type="email" name="email" id="email" placeholder="Enter Email" class="form-control" >
			</div>
			<div class="form-group">
				<label for="age">PHONE NUMBER</label>
				<input type="text" name="phone" id="phone" placeholder="Enter phone number"  class="form-control" >
			</div>
      <div class="form-group">
				<label for="age">WEBSITE</label>
				<input type="text" name="text" id="text" placeholder="Enter website"  class="form-control" >
			</div>
			<div class="form-group">
			 <input type="submit" value="SAVE" name="save"  class="btn btn-outline-primary btn-block" >
			</div>
		</form>
		</div>
	</div>
   </div>
</body>
</html>
