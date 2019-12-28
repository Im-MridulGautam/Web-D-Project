<?php
include('database_connection.php');
include('session_var.php');
$_SESSION['forgot'] = "true";
?>
<html>
<head>
<title>Forgot Password</title>
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
									<h3>Forgot Password</h3>
									<form method="POST" class="register-form" id="register-form"  name="encryptEmail" method="post" action="xy.php" onsubmit="encrypt.disabled = true; return true;">
										<div class="row">
										<br>
											<div class="col-lg-12 no-pdd">
											<br><br><br>
								
													<label for="email">email id</label><br><br>
													<div class="sn-field">
													<input type="email" name="email" id="email" placeholder="email" required/>
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>																
											<div class="col-lg-12 no-pdd">
												<button  type="submit" value="submit" class="submit" id="submit" name="encrypt">Get OTP</button>
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