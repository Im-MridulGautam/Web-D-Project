
<?php
session_start();
$_SESSION['otp'] = "true";
		if($_SESSION['abcd'] == "false"){
		   header("Location: forgot.php");
		}
		else{
		   //reset the variable
		   $_SESSION['abcd'] = "false";
		}		
$message = '';
if(isset($_POST['submit']))
{
$rno=$_SESSION['otp2'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{

$email=$_SESSION['email'];
header( "Location: change.php" );
}
else{
   $message = "<label>Invalid OTP</labe>";
}
}


?>
<html lang="en">
<head>
		<title>OTP</title>
		<?php
		include('head_links.php');
		?>
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
									<p>WorkWise,  is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
								
								</div>	
								<img src="images/cm-main-img.png" alt="">			
							</div>
						</div>
						<div class="col-lg-6">
							<div class="login-sec">											
								<div class="sign_in_sec current" id="tab-1">
									<br><br><br><br>
									<h3>OTP</h3>
									<form method="POST" class="register-form" id="register-form" action="" >
										<div class="row">
										<br><br><br>
											<div class="col-lg-12 no-pdd">
											<br><br><label for="otp">One Time Password :</label><br><br>
												<div class="sn-field">
													<input type="text" name="otpvalue" id="otp" pattern="[\d*]{6,}" maxlength="6" />
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>	
											<p class="text-danger"><?php echo $message; ?></p>											
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="SUBMIT" name="submit" id="submit">Submit</button>
											</div>
										</div>
									</form>									
								</div><!--sign_in_sec end-->								
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			
		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->
</body>
</html>