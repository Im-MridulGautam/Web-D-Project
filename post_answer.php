<?php
	include('database_connection.php');
	 session_start();
	if($_SESSION['question'] == "false"){
	   header("Location: questions.php");
	}
	else{
	   //reset the variable
	   $_SESSION['question'] = "false";
	}	
	if(isset($_POST['submit']))
	{
		 $id=$_POST['id'];
		 $answer= $_POST['answer'];		
		 $username= $_SESSION['username']; 					
			
			
		$query="INSERT INTO answers ( `answer`, `q_no`, `answer_username`) VALUES ('$answer','$id','$username')";
		$statement = $connect->prepare($query);
		$statement->execute();
		header("location:questions.php");

	}
?>
