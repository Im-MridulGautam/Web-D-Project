<html>
<head>  
	<link href='https://fonts.googleapis.com/css?family=Varela Round' rel='stylesheet'>
</head>
</html>
<?php

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=chat;charset=utf8mb4", "root", "");

date_default_timezone_set('Asia/Kolkata');

function fetch_user_online_status($user_id, $connect)
{
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($user_id, $connect);
 if($user_last_activity > $current_timestamp)
 {
 return 1;
 }
 else
 {
  return 0;
 }
}
function fetch_user_last_activity($user_id, $connect)
{
 $query = "
 SELECT * FROM login_details 
 WHERE user_id = '$user_id' 
 ORDER BY last_activity DESC 
 LIMIT 1
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row['last_activity'];
 }
}

function fetch_user_last_chat($from_user_id, $to_user_id, $connect)
{
	
 $query = "
 SELECT * FROM chat_message 
 WHERE (from_user_id = '".$from_user_id."' 
 AND to_user_id = '".$to_user_id."') 
 OR (from_user_id = '".$to_user_id."' 
 AND to_user_id = '".$from_user_id."') 
 ORDER BY timestamp DESC LIMIT 1
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return '<p>'.$row["chat_message"].'</p>
		</div>
		<span class="posted_time">'.date('d M H:i',strtotime($row["timestamp"])).'</span>
		';  
  
 }
}
function fetch_user_chat_history($from_user_id, $to_user_id, $connect)
{
 $query = "
 SELECT * FROM chat_message 
 WHERE (from_user_id = '".$from_user_id."' 
 AND to_user_id = '".$to_user_id."') 
 OR (from_user_id = '".$to_user_id."' 
 AND to_user_id = '".$from_user_id."') 
 ORDER BY timestamp 
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
  if(fetch_is_type_status($to_user_id, $connect)==1)
 {
	 $status="Typing...";
 }
 else{  
	 if(fetch_user_online_status($to_user_id, $connect)==1)
	 {
		 $status="Online";
	 }
	 else
	 {
		 $status="Offline";
	 }
 }
 $output = '<div class="message-bar-head">
			<div class="usr-msg-details">
				<div class="usr-ms-img">
					<img src="images/user_small.png" alt="">
				</div>
				<div class="usr-mg-info">
					<font size="4" face="Varela Round">'.get_user_name($to_user_id, $connect).'</font>
					<p>'.$status.'</p>
				</div><!--usr-mg-info end-->
			</div>
			<a href="#" title=""><i class="fa fa-ellipsis-v"></i></a>
		</div><!--message-bar-head end-->
		<br><br><br><br><br><br><br><br><br>
		
		<div class="messages-line">';
 foreach($result as $row)
 {
  $user_name = '';
  if($row["from_user_id"] != $from_user_id)
  {
   $user_name = '<div class="main-message-box st3">
					<div class="message-dt st3">
						<div class="message-inner-dt">
							<p>'.$row["chat_message"].'</p>';
  }
  else
  {
   //$user_name = '<b class="text-danger">'.get_user_name($row['from_user_id'], $connect).'</b>';
   $user_name = '<div class="main-message-box ta-right">
					<div class="message-dt">
						<div class="message-inner-dt">
							<p2>'.$row["chat_message"].'</p2>';
  }
  
  

		

  $output .= ''.$user_name.'
  
		</div><!--message-inner-dt end-->
		<span>'.date('d M  H:i',strtotime($row["timestamp"])).'</span>
	</div><!--message-dt end-->
</div><!--main-message-box end-->
';
 }
 $output .= '</div>';
 $query = "
 UPDATE chat_message 
 SET status = '0' 
 WHERE from_user_id = '".$to_user_id."' 
 AND to_user_id = '".$from_user_id."' 
 AND status = '1'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $output;
}

function get_user_name($user_id, $connect)
{
 $query = "SELECT username FROM login WHERE user_id = '$user_id'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row['username'];
 }
}

function count_unseen_message($from_user_id, $to_user_id, $connect)
{
 $query = "
 SELECT * FROM chat_message 
 WHERE from_user_id = '$from_user_id' 
 AND to_user_id = '$to_user_id' 
 AND status = '1'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $count = $statement->rowCount();
 $output = '';
 if($count > 0)
 {
  $output = '<span class="msg-notifc">'.$count.'</span>';
 }
 return $output;
}

function fetch_is_type_status($user_id, $connect)
{
 $query = "
 SELECT is_type FROM login_details 
 WHERE user_id = '".$user_id."' 
 ORDER BY last_activity DESC 
 LIMIT 1
 "; 
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  if($row["is_type"] == 'yes')
  {
   return 1;
  }
  else{
	  return 0;
  }
 }
 
}



?>
