
 <?php
		include('database_connection.php');
        session_start();   
		$_SESSION['xy'] = "true";
		if($_SESSION['forgot'] == "false"){
		   header("Location: forgot.php");
		}
		else{
		   //reset the variable
		   $_SESSION['forgot'] = "false";
		}		
		$_SESSION['email']=$_POST['email'];
		header( "Location: abcd.php" );
?>
