 <?php
include('database_connection.php');
session_start();
include('session_var.php');

	?>              

<html>
<head>
<title>Profile</title>
<?php
		include('head_links.php');
		?>
</head>
<body>
	<div class="wrapper">	
		<?php
		include('header.php');
		include('fetch_profile.php');
		?>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		<section class="cover-sec">
			<?php
$files = glob("upload/*.*");
$m=0;
for ($i=$m; $i<$m+1; $i++)
{
	$num = $files[$i];
	echo '<img src="'.$num.'" alt="random image" width="1600" height="200"/>'."<br /><br />";
}
$m=$m+1;
?>
			<a> <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" placeholder="image">
					                      <button type="submit" name="upload" class="save">Change</button>
					                     </a>
		</section>
</form>		
		<main>
			<div class="main-section">
				<div style="width:85%; padding-left:5%">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
										<?php
$files = glob("uploads/*.*");
$k=0;
for ($i=$k; $i<$k+1; $i++)
{
	$num = $files[$i];
	echo '<img src="'.$num.'" alt="random image"/>'."<br /><br />";
}
$k=$k+1;
?>
											
										</div>
										<form action="uploadp.php" method="POST" enctype="multipart/form-data">
   
										<input type="file" name="fileToUpload" id="fileToUpload" class="form-control" placeholder="image">
					                      <button type="submit" name="upload" class="save">Change</button>
					                     </form>	
										<div class="suggestion-usd">
											<div class="sgt-text">
												<h4>GENDER : <?php echo $row['gender']; ?></h4> 
											</div>											
											<div class="sgt-text">
												<h4>DOB : <?php echo $row['dob']; ?></h4>
											</div>											
											<div class="sgt-text">
												<h4>LOCATION : <?php echo $row['curr_loc']; ?></h4>
											</div>											
											<div class="sgt-text">
												<h4>MOBILE : <?php echo $row['mobile']; ?></h4><br>
											</div>
											
											<div class="sgt-text">
												<ul class="job-dt"><?php $str_arr = explode (",", $row['skill']);
													$l=0;
													while($l<sizeof($str_arr)){ ?>
														<li><a href="#" title=""><?php print_r($str_arr[$l]); ?></a></li>
												<?php $l=$l+1;}?>
												</ul>
											</div>
										</div>
									</div>									
								</div>
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<h3> <?php echo $row['name'];?></h3>
										<div class="star-descp">
											<span>
										<?php
										 if($row['member']=='alumini')
										 {
											echo $row['curr_role']." at ".$row['curr_comp'];
										 }
										 else
										 {
											 echo "Student";
										 }
										?>
										</span>
										
									</div>	

									</div>	
								</div>
								<div class="post_topbar">
									<div class="usr-post-img">
										<img src="http://via.placeholder.com/40x40" alt="">
									</div>
									<div class="post_comment_sec">
										<form method="post" action="askq.php" enctype="multipart/form-data">
											
											<textarea name="describe" type="text" id="inputEmail" class="form-control" placeholder="describe" ></textarea> 
                                             <input type="file" name="file" id="inputEmail" class="form-control" placeholder="image">
					                      <button type="submit" name="upload" class="save">Post Event</button>
					                     
											
											
										</form>
									</div><!--post_comment_sec end-->
								</div>
								<div class="main-ws-sec">
									
									<div class="posts-section">

<?php

$sql = "SELECT * FROM question where confirm=1;";
$statement = $connect->prepare($sql);
	$statement->execute();
$result=$statement->fetchAll();
foreach($result as $row) {

?>	
	
  <div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="http://via.placeholder.com/50x50" alt="">
													<div class="usy-name">
														<h3>John Doe</h3>
														<span><?php echo $row["time"]; ?></span>
													</div>
												</div>
												<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
													<ul class="ed-options">
														<li><a href="#" title="">Edit Post</a></li>
														<li><a href="#" title="">Unsaved</a></li>
														<li><a href="#" title="">Unbid</a></li>
														<li><a href="#" title="">Close</a></li>
														<li><a href="#" title="">Hide</a></li>
													</ul>
												</div>
											</div>
										
											<div class="job_descp">
												
												
												<p><?php echo $row["describe"]; ?></p>
												 <img src="dataimg/<?php echo $row['image']; ?>" style="max-width:1000px;" alt="" /> 
                                                 
												
											</div>
											
										</div><!--post-bar end-->
										
											
										
								<!--posts-section end-->
<?php

}
$statement = $connect->prepare($query);
	$statement->execute();
$result=$statement->fetchAll();
foreach($result as $row)

?>

							</div>
							</div>
							</div>
							<div class="col-lg-3">
							
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="wd-heady">
										<br>
											<h3>Social links</h3>
											<br>
											<ul class="social_links">
											<li><a href="#" title=""><i class="fa fa-google-plus-square"></i></i> <?php echo $row['email'];?></a></li>
											<li><a href="#" title=""><i class="fa fa-facebook-square"></i> <?php echo $row['fb'];?></a></li>
											<li><a href="#" title=""><i class="fa fa-twitter-square"></i> <?php echo $row['twitter'];?></a></li>
											<li><a href="#" title=""><i class="fa fa-linkedin-square"></i> <?php echo $row['linked'];?></a></li>
											<li><a href="#" title=""><i class="fa fa-github-square"></i> <?php echo $row['github'];?></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</body>
</html>