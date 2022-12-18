<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:index.php');
}
if(isset($_POST['save'])){
	$con = mysqli_connect("localhost","root","","userregistration");
	$prgraming = $_POST['Programing'];
	$skill_level = $_POST['skill_level'];
	$id = $_SESSION['id'];

	$sql = "insert into software(Programing,skill_level,user_id) values ('$prgraming ', '$skill_level','$id')";
	$result = mysqli_query($con, $sql);
	if($result){
		echo "successfull";
	}
	else
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
			<h1 class="display-7" style="color:white"><strong>SOFTWARE</strong></h1>
			<form name=""  method="post" action="software.php" >
			<div class="form-group">
				<label for="fnm">Programing Skill</label>
				<input type="text" name="Programing" id="Programing" placeholder="Enter Programing name "  class="form-control" >
			</div>
      <div class="form-group">
				<label for="fnm">Skill Level</label>
				<select name="skill_level" id="">
          <option value="10">10%</option>
          <option value="20">20%</option>
          <option value="30">30%</option>
          <option value="40">40%</option>
          <option value="50">50%</option>
          <option value="60">60%</option>
          <option value="70">70%</option>
          <option value="80">80%</option>
          <option value="90">90%</option>
          <option value="100">100%</option>
        </select>
			</div>

			<div class="form-group">
			 <input type="submit" name="save" value="SAVE" name="save"  class="btn btn-outline-primary btn-block" >
			</div>
		</form>
		</div>
	</div>
   </div>
</body>
</html>
