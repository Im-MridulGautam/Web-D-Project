<?php

//fetch_user.php

include('database_connection.php');

session_start();

$query = "
SELECT * FROM login 
WHERE user_id != '".$_SESSION['user_id']."' order by username 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '<div class="msgs-list">
				<div class="msg-title" >
					<font size="5" face="Varela Round" >Messages</font>
					<ul>
						<li><a href="#" title=""><i class="fa fa-cog"></i></a></li>
						<li><a href="#" title=""><i class="fa fa-ellipsis-v"></i></a></li>
					</ul>
				</div>
				
				<div class="messages-list">
					<ul>
';

foreach($result as $row)
{
 $status = '';
 if(fetch_user_online_status($row['user_id'],$connect)==1)
 {
  $status = '<span class="dot"></span>';
 }
 else
 {
  $status = '';
 }
 $output .= '
 
 <li  class="start_chat" data-touserid="'.$row['user_id'].'" data-tousername="'.$row['username'].'">
	<div class="usr-msg-details">
		<div class="usr-ms-img">
			<img src="images/user_small.png" alt="">
			
		</div>
		<div class="usr-mg-info">
			<font size="4" face="Varela Round">'.$row['username'].$status.'</font>
			'.fetch_user_last_chat($_SESSION['user_id'], $row['user_id'], $connect).'
		'.count_unseen_message($row['user_id'], $_SESSION['user_id'], $connect).'
	</div><!--usr-msg-details end-->
</li>
 ';
}

$output .= '</ul>
				</div><!--messages-list end-->
			</div><!--msgs-list end-->';

echo $output;

?>
