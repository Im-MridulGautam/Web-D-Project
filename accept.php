<?php
    include('functions.php');
    $id = $_GET['id'];
    $query = "UPDATE `request1` SET `confirm` = '1' WHERE `id` = '$id';";
    
        if(performQuery($query))
		{
          echo "data entered successfully";
        }
		else
		{
            echo "Unknown error occured. Please try again.";
        }
	
?>
<br/><br/>
<a href="home.php">Back</a>


