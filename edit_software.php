<?php
$con = mysqli_connect("localhost","root","","userregistration");
if (isset($_GET['id'])){

  $id = $_GET['id'];
  $sql = "select * from software where id = $id";
  $res = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($res);
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
			<form name=""  method="post" action="edit_software.php" >
			<div class="form-group">
				<label for="fnm">Programing skills</label>
				<input type="text" name="programing" id="programing" value="<?php echo $row['programing'];?>"   class="form-control" >
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
<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
			 <input type="submit" name="update" value="Update"  class="btn btn-outline-primary btn-block" >
			</div>
		</form>
		</div>
	</div>
   </div>
</body>
</html>
<?php } ?>

<?php
if (isset($_POST['update'])){
  $prgraming = $_POST['programing'];
  $skill_level = $_POST['skill_level'];
  $id = $_POST['id'];

  $sql = "update software set programing='$programing', skill_level='$skill_level' where id='$id'";
  $result = mysqli_query($con, $sql);
  if($result){
    header('location:resume.php');
  }else{
    echo mysqli_error($con);
  }
}
 ?>
