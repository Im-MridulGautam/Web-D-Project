<?php 
	include('database_connection.php');
    session_start();
	$_SESSION['abcd'] = "true";
		if($_SESSION['xy'] == "false"){
		   header("Location: forgot.php");
		}
		else{
		   //reset the variable
		   $_SESSION['xy'] = "false";
		}		
  
	$email=$_SESSION['email'];
    $query="SELECT * from login WHERE email='$email'";
	 $statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	if(count($result) > 0)
	{ 

	$rndno=rand(100000, 999999);//OTP generate 
	$message = urlencode("otp number.".$rndno); 
	if(isset($_SESSION['email'])){
	$address=$_SESSION['email']; 
	}
	else{
		$address=$_SESSION['email']; 
	}

	require_once('PHPMailer/class.phpmailer.php');

	$mail             = new PHPMailer(); // defaults to using php "mail()"

	$mail->IsSMTP();
	$mail->Host = "smtp.rediffmail.com";
	$mail->Port = 25;
	//$mail->SMTPSecure = "tls";
	//$mail->Port = 587;
	// optional
	// used only when SMTP requires authentication  
	$mail->SMTPAuth = true;
	$mail->Username = 'shipra_khattri@rediffmail.com';
	$mail->Password = 'shiprabhu';


	$mail->From         = 'shipra_khattri@rediffmail.com';
	$mail->FromName     = 'Employee Registration';
	$mail->AddReplyTo("info@abc.com","Admin"); 
	$mail->AddAddress($address);

	$mail->Subject    = "OTP for Employee Registration";
	$body             = "Your OTP for registration is : ".$rndno."";

	$mail->MsgHTML($body);


	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;  
	} else {
	 // echo "Message sent!";
	 // header( "timezone_location_get()on: otp.php" );
	 // if(isset($_POST['encrypt'])) {
	 
		$_SESSION['email']=$_SESSION['email']; 
		$_SESSION['otp2']=$rndno;
		header( "Location: otp.php" ); 
	 // }
	}


	  }
		   
		else
		   {
			   
				echo '<script language="javascript">';
				echo 'alert("INVALID EMAIL ID");';
				echo 'window.location.href = "forgot.php";';
				echo '</script>';

		   }

?>
