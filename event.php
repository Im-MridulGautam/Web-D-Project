<?php
	include('database_connection.php');
    session_start();
	include('session_var.php');
	if(!isset($_SESSION['user_id']))
	{
	 header("location:login.php");
	}
	$_SESSION['question'] = "true";
?>
<html>
<head>
<title>Home</title>
<?php
		include('head_links.php');
		?>
</head>
<body>
	<div class="wrapper">
		<?php
		include('header.php');
		?>

		<main>
			<div class="main-section">			
			</div>
				<div class="container">						
					<div class="main-section-data">
						<div class="row"><div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
													<img src="http://via.placeholder.com/100x100" alt="">
												</div>
											</div><!--username-dt end-->
											<div class="user-specs">
												<h3>John Doe</h3>
												<span>Graphic Designer at Self Employed</span>
											</div>
										</div><!--user-profile end-->
										<ul class="user-fw-status">
											<li>
												<h4>Following</h4>
												<span>34</span>
											</li>
											<li>
												<h4>Followers</h4>
												<span>155</span>
											</li>
											<li>
												<a href="#" title="">View Profile</a>
											</li>
										</ul>
									</div><!--user-data end-->
									
									<div class="tags-sec full-width">
										<ul>
											<li><a href="#" title="">Help Center</a></li>
											<li><a href="#" title="">About</a></li>
											<li><a href="#" title="">Privacy Policy</a></li>
											<li><a href="#" title="">Community Guidelines</a></li>
											<li><a href="#" title="">Cookies Policy</a></li>
											<li><a href="#" title="">Career</a></li>
											<li><a href="#" title="">Language</a></li>
											<li><a href="#" title="">Copyright Policy</a></li>
										</ul>
										<div class="cp-sec">
											<img src="images/logo2.png" alt="">
											<p><img src="images/cp.png" alt="">Copyright 2018</p>
										</div>
									</div><!--tags-sec end-->
								</div><!--main-left-sidebar end-->
							</div>
							
							<div class="col-lg-6 col-md-8 no-pd">
							
							
							
							
								<div class="main-ws-sec">
									
									<div class="posts-section">

<?php
$conn = mysqli_connect("localhost", "root", "", "chat");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM question where confirm=1;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
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
												<h3><?php echo $row["topic"]; ?></h3>
												
												<p><?php echo $row["describe"]; ?></p>
												<img src="dataimg/<?php echo $row['image']; ?>" style="max-width:1000px;"  />  
                                                 
												
											</div>
											<div class="job-status-bar">
												
												<a><i class="la la-eye"></i>Views 50</a>
											</div>
										</div><!--post-bar end-->
										
											
										
									</div><!--posts-section end-->
<?php

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</div><!--main-ws-sec end-->
							</div>
							
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>
	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/scrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>