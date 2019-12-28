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
		
        if(isset($_POST['upload'])){
            $heading = $_POST['heading'];
            $tag = $_POST['tag'];			
            $describe = $_POST['describe'];            
            
			
            $query = "INSERT INTO questions ( `q_title`, `q_tag`, `q_description`) VALUES ( '$heading', '$tag', '$describe')";
            $statement = $connect->prepare($query);
			$statement->execute();
			header("location:questions.php");
        }
    
    ?>