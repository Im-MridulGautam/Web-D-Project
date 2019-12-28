<?php
	//include('database_connection.php');
	//session_start();
	$username = $_SESSION['username'];
	$query = "SELECT * FROM login where username='$username' ;";
	$statement = $connect->prepare($query);
	$statement->execute();
	$row= $statement->fetch(PDO::FETCH_ASSOC);	
?>	