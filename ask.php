 <html>
 <?php
       if(isset($_POST['upload'])){
            
			
            $imagename = $_FILES['file']['name'];
			$tempname = $_FILES['file']['tmp_name'];
			
			move_uploaded_file($tempname,"login/".$imagename);
			
            
            
            $con=mysqli_connect("localhost","root","","chat");
            $query = "INSERT INTO `login` (  `cimg` ) VALUES ( '$imagename' )";
			
			if(performQuery($query)){
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
              }
		 
			
        }
    
    ?>
	<body class="text-center">
      <div class="container">
            <form method="post" class="form-signin" enctype="multipart/form-data">
              <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">question send</h1>
              
             
                <a href="event.php">Back</a>
            </form>
          </div>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
