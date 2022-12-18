<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:index.php');
}
$con = mysqli_connect("localhost","root","","userregistration");
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Resume Project</title>
        <link rel="stylesheet" href="css/style.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
      <form class="" action="index.html" method="post">
        <div class="maincontent">
            <div class="left_content">
                <div class="surname">
                    <div class="propic">
                        <img src="img/picture.JPG" alt="" class="profilepicture" >
                    </div>
										<?php
											$u_id = $_SESSION['id'];
												$sql = "select * from profile where user_id =$u_id";
												$res = mysqli_query($con,$sql);
												$row = mysqli_fetch_assoc($res);
										 ?>
                    <div class="names">
                        <h2><?php echo $row['p_name']; ?></h2>
                        <P>WEB DEVELOPER</P>
                    </div>
                </div>
                <div class="profile">
                    <div class="fullicon">
                        <img src="img/profile.png" alt="" class="icon">
                    </div>
                    <div class="title">
                        <h1>PROFILE</h1>
                    </div>
                    <div class="profile_line">
                        <img src="img/line.png" alt="" class="pline">
                    </div>
                    <div class="Cdes">
                        <div class="c_left">
                            <p>FULL NAME</p>
                            <p>EMAIL</p>
                            <p>AGE</p>
                            <p>Religion</p>
														<p>GENDER</p>
                        </div>
                        <div class="c_right">
													<p><?php echo $row ?> </p>
                            <p><?php echo $row['p_name']; ?></p>
                            <p><?php echo $row['p_email']; ?></p>
														  <p><?php echo $row['p_age']; ?></p>
                            <p><?php echo $row['p_religion']; ?></p>
                            <p><?php echo $row['p_gender']; ?></p>
                      </div>
                    </div>
                </div>
                <div class="contact">
                    <div class="fullicon">
                        <img src="img/contact.png" alt="" class="icon">
                    </div>
                    <div class="title">
                        <h1>CONTACT</h1>
                    </div>
                    <div class="contact_line">
                        <img src="img/line.png" alt="" class="cline">
                    </div>
                    <div class="Cdes">
                        <div class="c_left">
                            <p>ADDRESS</p>
                            <p>E-MAIL</p>
                            <p>PHONE</p>
                            <p>WEBSITE</p>
                        </div>
                        <div class="c_right">
                            <p>West Rajabazar, Dhaka</p>
                            <p>abdurrahmansmark1997@gmail.com</p>
                            <p>+8801738526663</p>
                            <p>https://sites.google.com/diu.edu.bd/abdur-rahman</p>
                      </div>
                    </div>
                </div>
                <div class="skills">
                    <div class="fullicon">
                        <img src="img/skills.png" alt="" class="icon">
                    </div>
                    <div class="title">
                        <h1>SKILLS</h1>
                    </div>
                    <div class="skills_line">
                        <img src="img/line.png" alt="" class="sline">
                    </div>

                    <div class="s_des">
											<?php
											$sql_skill = "select * from skills where user_id = $u_id";
											$res_skill = mysqli_query($con,$sql_skill);
											while ($row = mysqli_fetch_assoc($res_skill)) {
													$skill_leve = $row['skill_level']/10;
													$count =0;
												?><div class="skills_dots">
													<p><?php echo $row['skill_name']; ?> &nbsp; <a href="edit_skill.php?id=<?php echo $row['skill_id'];?>">Edit</a></p>
														<?php for ($i=0; $i < 10 ; $i++) {
															if($count<$skill_leve){ $count++; ?>
																	<div class="spinner-grow text-primary"></div>
														<?php	}else{ ?>
																	<div class="spinner-grow text-danger"></div>
														<?php	}
														}
														echo "</div>";
													}
											 ?>
                    </div>
                </div>
            </div>
            <div class="right_content">
                <div class="education">
                    <div class="fullicon">
                        <img src="img/education.png" alt="" class="icon">
                    </div>
                    <div class="title">
                        <h1>EDUCATION</h1>
                    </div>
                    <div class="edu_line">
                        <img src="img/line.png" alt="" class="Eline">
                    </div>
                    <div class="edu_des">
                        <div class="right_blackdots">
                            <div class="spinner-grow text-dark"></div>
                        </div>
                        <div class="Enames">
                            <h1>S.S.C <span>2013</span></h1>
                            <h1>SCHOOL NAME</h1>
                            <p>Namosankar bati High School</p>
                        </div>
                        <div class="right_blackdots">
                        <div class="spinner-grow text-muted"></div>
                        </div>
                        <div class="Enames">
                            <h1>H.S.C <span>2015</span></h1>
                            <h1> COLLEGE NAME</h1>
                            <p> Nawabgonj Govt. College</p>
                        </div>
                        <div class="right_blackdots">
                            <div class="spinner-grow text-info"></div>
                        </div>
                        <div class="Enames">
                            <h1>BSC <span>RUNNING</span></h1>
                            <h1>UNIVERSITY NAME</h1>
                            <p> DAFFODIL INTERNATIONAL UNIVERSITY</p>
                        </div>
                        <div class="right_blackdots">
                            <div class="spinner-grow text-danger"></div>
                        </div>
                        <div class="Enames">
                            <h1>MASTER DEGREE <span>NOT COMPLETED</span></h1>
                            <h1>UNIVERSITY NAME</h1>
                            <p>NO</p>
                        </div>
                    </div>
                </div>
                <div class="experience">
                    <div class="fullicon">
                        <img src="img/experiance.png" alt="" class="icon">
                    </div>
                    <div class="title">
                        <h1>EXPERIENCE</h1>
                    </div>
                    <div class="ex_line">
                        <img src="img/line.png" alt="" class="Eline">
                    </div>
                    <div class="edu_des">
                        <div class="right_blackdots">
                        <div class="spinner-grow text-secondary"></div>
                        </div>
                        <div class="EXnames">
                            <h1>COMPANY NAME<span>// Feb 2011 - Jun 2014</span></h1>
                            <h1>YOUR JOB HERE</h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque.</p>
                        </div>
                        <div class="right_blackdots">
                              <div class="spinner-grow text-warning"></div>
                        </div>
                        <div class="EXnames">
                            <h1>COMPANY NAME<span>// Feb 2011 - Jun 2014</span></h1>
                            <h1>YOUR JOB HERE</h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque.</p>
                        </div>
                        <div class="right_blackdots">
                            <div class="spinner-grow text-danger"></div>
                        </div>
                        <div class="EXnames">
                            <h1>COMPANY NAME<span>// Feb 2011 - Jun 2014</span></h1>
                            <h1>YOUR JOB HERE</h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque.</p>
                        </div>
                    </div>
                </div>
                <div class="software">
                    <div class="fullicon">
                        <img src="img/software.png" alt="" class="icon">
                    </div>
                    <div class="title">
                        <h1>SOFTWARE</h1>
                    </div>
                    <div class="software_line">
                        <img src="img/line.png" alt="" class="Eline">
                    </div>
                    <div class="softdes">
											<div class="soft_left">
											<?php
											$sql_skill = "select * from software where user_id = $u_id";
											$res_skill = mysqli_query($con,$sql_skill);
											while ($row = mysqli_fetch_assoc($res_skill)) {
												?>
													<p class="softnames"><?php echo $row['programing']; ?> &nbsp; <a href="edit_software.php?id=<?php echo $row['id'];?>">Edit</a></p>

																<div class="progress">
																	 <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: <?php echo $row['skill_level'];?>%"></div>
																</div>


											<?php
													}
											 ?>
										 </div>


                </div>
            </div>
        </div>
          </form>
    </body>
</html>
