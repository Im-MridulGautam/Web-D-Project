<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  </head>
    <?php
        if(isset($_POST['upload'])){
            $heading = $_POST['heading'];
            $imagename = $_FILES['file']['name'];
			$tempname = $_FILES['file']['tmp_name'];
			$folder = "dataimg/".$imagename;
			move_uploaded_file($tempname,$folder);
			
            $describe = $_POST['describe'];
            
            
            $query = "INSERT INTO `request1` ( `heading`, `image`, `describe`) VALUES ( '$heading', '$imagename', '$describe')";
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
              <h1 class="h3 mb-3 font-weight-normal">post here</h1>
              
              <input name="heading" type="text" id="inputEmail" class="form-control" placeholder="heading" >
                
              <input type="file" name="file" id="inputEmail" class="form-control" placeholder="image">
                
              <input name="describe" type="text" id="inputEmail" class="form-control" placeholder="describe" >
              

              <input type="submit" name="upload" value="upload image" >
              <a href="login1.php" class="mt-5 mb-3 text-muted">Go back to login page</a>
            </form>
          </div>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
