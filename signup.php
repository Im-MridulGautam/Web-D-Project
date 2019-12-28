<?php
session_start();
$conn = mysqli_connect('localhost','root','','otp');
    if ($conn->connect_error)
    {
    die("Connection failed: " . $conn->connect_error);
    }
    else
    {
if(isset($_POST['signup']))
{
				$name=$_POST['name'];
                $email=$_POST['email'];
		        $password=$_POST['password'];
				$cpass=$_POST['cpassword'];
                $address=$_POST['state'];
                $course=$_POST['course'];
             	if (empty($name) || empty($email) || empty($password) ||   empty($address) || empty($course))
                {
                    echo '<script type="text/javascript">
                    window.onload = function () 
                    { alert("Fill all the required fields"); }
                    </script>';
                }
                elseif($course=='Course')
                {
                    echo '<script type="text/javascript">
                    window.onload = function () 
                    { alert("Select Course"); }
                    </script>';
                }
                 elseif($address=='State')
                {
                   echo '<script type="text/javascript">
                    window.onload = function () 
                    { alert("Select State"); }
                    </script>';
                }
				elseif($password!=$cpass)
				{
					echo '<script type="text/javascript">
                    window.onload = function () 
                    { alert("password mismatch"); }
                    </script>';
				}
                else
                {
                    $query="INSERT INTO data (`name`, `email`, `password`, `curr_loc`, `c_name`) VALUES ( '$name', '$email', '$password', '$address', '$course')"; 
		
        if(mysqli_query($conn,$query))
		{
            echo "Data entered sucessfully";
			header( "Location: signin.php" );
		}
		else
		{
			echo "<script>alert('unknown error occured')</script>";
		}
	}
}

//resend OTP
if(isset($_POST['signin']))
{

header( "Location: signin.php" );
}
	}

?>
<html>
<head>
<meta charset="UTF-8">
<title>Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>


<body class="sign-in">
	

	<div class="wrapper">
		

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<img src="images/cm-logo.png" alt="">
									<p>Wor,  is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
								</div><!--cm-logo end-->	
								<img src="images/cm-main-img.png" alt="">			
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<div class="sign_in_sec current" id="tab-1">
									<br><br><br><br>
									<h3>Signup</h3>
<form method="POST" class="register-form" id="register-form" action="" >
										<div class="row">
										<br><br><br>
											<div class="col-lg-12 no-pdd">
											<br><br>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="name" placeholder="Full Name">
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" name="email" placeholder="Email">
														<i class="la la-globe"></i>
													</div>
												</div>
                                                <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<select name="course">
															<option>Course</option>
                                                            <option value="M.C.A">M.C.A</option>
											                <option value="M.Sc" >M.sc</option>
                                                        </select>
														<i class="fa fa-briefcase" aria-hidden="true"></i>
														<span><i class="fa fa-ellipsis-h"></i></span>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<select name="state">
															<option>State</option>
                                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
											<option value="Andhra Pradesh">Andhra Pradesh</option>
											<option value="Arunachal Pradesh">Arunachal Pradesh</option>
											<option value="Assam">Assam</option>
											<option value="Bihar">Bihar</option>
											<option value="Chandigarh">Chandigarh</option>
											<option value="Chhattisgarh">Chhattisgarh</option>
											<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
											<option value="Daman and Diu">Daman and Diu</option>
											<option value="Delhi">Delhi</option>
											<option value="Goa">Goa</option>
											<option value="Gujarat">Gujarat</option>
											<option value="Haryana">Haryana</option>
											<option value="Himachal Pradesh">Himachal Pradesh</option>
											<option value="Jammu and Kashmir">Jammu and Kashmir</option>
											<option value="Jharkhand">Jharkhand</option>
											<option value="Karnataka">Karnataka</option>
											<option value="Kerala">Kerala</option>
											<option value="Lakshadweep">Lakshadweep</option>
											<option value="Madhya Pradesh">Madhya Pradesh</option>
											<option value="Maharashtra">Maharashtra</option>
											<option value="Manipur">Manipur</option>
											<option value="Meghalaya">Meghal             aya</option>
											<option value="Mizoram">Mizoram</option>
											<option value="Nagaland">Nagaland</option>
											<option value="Orissa">Orissa</option>
											<option value="Pondicherry">Pondicherry</option>
											<option value="Punjab">Punjab</option>
											<option value="Rajasthan">Rajasthan</option>
											<option value="Sikkim">Sikkim</option>
											<option value="Tamil Nadu">Tamil Nadu</option>
											<option value="Tripura">Tripura</option>
											<option value="Uttaranchal">Uttaranchal</option>
											<option value="Uttar Pradesh">Uttar Pradesh</option>
											<option value="West Bengal">West Bengal</option>
														</select>
														<i class="fa fa-map-marker" aria-hidden="true"></i>
														<span><i class="fa fa-ellipsis-h"></i></span>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="cpassword" placeholder="Confirm Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="c" group="role" id="c2">
															<label for="c2">
																<span></span>Select if Current Student<br><br>
                                                                  </label>
															
														</div>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="signup" class="signup" name="signup" id="signup" type="signup">Submit</button>
												<button type="signin" value="signin" class="signin" name="signin" id="signin" type="signin">Signin</button>
												</div>
											</div>
										</form>
									
									
								</div>		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>