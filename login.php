<?php
include('database_connection.php');
session_start();
include('session_var.php');
$message = '';
if(isset($_SESSION['user_id']))
{
 header('location:index.php');
}

if(isset($_POST["signin"]))
{
 $query = "
   SELECT * FROM login 
    WHERE username = :username
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
    array(
      ':username' => $_POST["username"]
     )
  );
  $count = $statement->rowCount();
  if($count > 0)
 {
  $result = $statement->fetchAll();
    foreach($result as $row)
    {
      if(password_verify($_POST["password"], $row["password"]))
      {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $sub_query = "
        INSERT INTO login_details 
        (user_id) 
        VALUES ('".$row['user_id']."')
        ";
        $statement = $connect->prepare($sub_query);
        $statement->execute();
        $_SESSION['login_details_id'] = $connect->lastInsertId();
        header("location:index.php");
      }
      else
      {
      $message = "<label>Wrong Password</label>";
      }
    }
 }
 else
 {
   $message = "<label>Wrong Username</labe>";
 }
}
?>
<html>
	<head>
		<title>Login</title>
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
									<br>
									<h3>Signin</h3>
									<form method="POST" class="register-form" id="register-form" action="" >
										<div class="row">
										
										<div class="col-lg-12 no-pdd">
										<br><br>
										<label for="username">Username :</label><br><br>
											<div class="sn-field">	
										<input type="text" name="username" id="username" placeholder="username" required>
											<i class="la la-user"></i>
											</div><!--sn-field end-->
										<label for="password">Password :</label><br><br>
											<div class="sn-field">								
										<input type="password" name="password" id="password" placeholder="password" required>
											<i class="la la-user"></i>
											</div><!--sn-field end-->
											</div>
											 <p class="text-danger"><?php echo $message; ?></p>
											<div class="col-lg-12 no-pdd">												
												<button type="signin" value="Login" class="submit" name="signin" id="submit">Login</button>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
														<a href="forgot.php" title="" >Forgot Password?</a>			
												</div>
											<br><br><br><br>
											<center><a href="register.php" title="" >New user Register here -></a></center>
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