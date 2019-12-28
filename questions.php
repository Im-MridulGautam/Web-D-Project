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
<meta charset="UTF-8">
<title>Questions</title>
<?php
		include('head_links.php');
		?>
</head>
<body>
<div class="wrapper">
		<?php
		include('header.php');
		?>
	
		<section class="forum-page">
			<div style="width:100%;">
				<div class="forum-questions-sec">
					<div class="row">
						<div class="col-lg-1">
						</div>
						<div class="col-lg-9">
							<a href="#" title="" class="ask-question">Ask a question</a><br><br><br>
							<?php
							$query = "SELECT * FROM questions ;";
							$statement = $connect->prepare($query);
							$statement->execute();
							$result = $statement->fetchAll();
							foreach($result as $row)
								{ 						
								?>
								<div class="forum-post-view">
									<div class="usr-question">
										<div class="usr_img">
											<img src="images/user_small.png" alt="">
										</div>
										<div class="usr_quest">
											<h3><?php echo $row["q_title"]; ?></h3>
											<span><?php echo date('d M H:i',strtotime($row["time"])); ?></span>										
											<ul class="quest-tags">
												<li><a href="#" title=""><?php echo $row["q_tag"]; ?></a></li>										
											</ul>
											<p><?php echo $row["q_description"]; ?></p>										
											
											<div class="comment-section">	
											<h3>Answers</h3>
												<?php
													$query_ans = "SELECT * FROM answers where q_no=".$row["q_id"]." ;";
													$statement_ans = $connect->prepare($query_ans);
													$statement_ans->execute();
													$result_ans = $statement_ans->fetchAll();
													foreach($result_ans as $row_ans)
														{ 						
														?>																				
														<div class="comment-sec">
															<ul>
																<li>
																	<div class="comment-list">
																		<div class="bg-img">
																			<img src="images/user_small.png" alt="">
																		</div>
																		<div class="comment">
																			<h3><?php echo $row_ans["answer_username"]; ?></h3>
																			<span><img src="images/clock.png" alt=""><?php echo date('d M H:i',strtotime($row_ans["time"])); ?></span>
																			<p><?php echo $row_ans["answer"]; ?></p>
																		</div>
																	</div>
																</li>																									
															</ul>											
														</div>
														<?php } ?>
											</div>
											<div class="post-comment-box">
												<div class="user-poster">
													<div class="usr-post-img">
														<img src="images/user_small.png" alt="">
													</div>
													<div class="post_comment_sec">
														<form method="post"  enctype="multipart/form-data"  action="post_answer.php">													
															<textarea name="answer" placeholder="Enter Answer"></textarea>
															<input type="hidden" name="id" value="<?php echo $row["q_id"]; ?>" >													
															<button type="submit" name="submit" value="Submit">Post Answer</button>
														</form>
													</div>
												</div>
											</div>		
										</div>
									</div>
								</div>
								<div class="next-prev">	
								</div>							
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<div class="overview-box" id="question-box">
		<div class="overview-edit">
			<h3>Ask a Question</h3>
				<form method="post" action="post_question.php">
					<input name="heading" type="text" class="form-control" placeholder="heading" >
					<input name="tag" type="text" class="form-control" placeholder="tag" >
					<textarea name="describe" type="textarea" class="form-control" placeholder="Description"></textarea>				
					<button type="submit" name="upload" class="save">Submit</button>
				</form>
				<a href="" title="" class="close-box"><i class="la la-close"></i></a>
		</div>
	</div>
</div>
</body>
</html>