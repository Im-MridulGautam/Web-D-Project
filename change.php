<?php
		include('database_connection.php');
        session_start();
		$_SESSION['change'] = "true";
		if($_SESSION['otp'] == "false"){
		   header("Location: forgot.php");
		}
		else{
		   //reset the variable
		   $_SESSION['otp'] = "false";
		}		
		$message = '';
		if(isset($_POST['submit']))
		{
		    $email=$_SESSION['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['confirm_password'];           

            if($password==$cpassword){
					$pass=password_hash($password, PASSWORD_DEFAULT);
				    $query="UPDATE login SET password='$pass' where email='$email'";
					$statement = $connect->prepare($query);
					$statement->execute();
				
					header( "Location: logout.php" ); 
				
			}
			else
			{
					$message = "<label>Passwords do not match</label>";
			}
			
}
?>

<html>
<head>
<title>Confirm Password</title>
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
								</div><!--cm-logo end-->	
								<img src="images/cm-main-img.png" alt="">			
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">											
								<div class="sign_in_sec current" id="tab-1">
									<br><br>
									<h3>Confirm Password</h3>
										<form method="POST" class="register-form" id="register-form" >
										<div class="row">
										<br><br><br>
											<div class="col-lg-12 no-pdd">
											<br><br>											
										<label for="password">New Password :</label><br><br>
															<div class="sn-field">																
											<input type="password" name="password" id="password" required/>
												<i class="la la-user"></i>
															</div><!--sn-field end-->
															<label for="password">Confirm Password :</label><br><br>
															<div class="sn-field">																
											<input type="password" name="confirm_password" id="confirm_password" required/>
															<i class="la la-user"></i>
															</div><!--sn-field end-->
											</div>													
											     <p class="text-danger"><?php echo $message; ?></p>
											<div class="col-lg-12 no-pdd">												
												<button type="submit" value="submit" class="submit" name="submit" id="submit">Submit</button>
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