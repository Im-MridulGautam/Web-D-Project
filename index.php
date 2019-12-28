<?php

include('database_connection.php');
session_start();
include('session_var.php');
if(!isset($_SESSION['user_id']))
{
 header("location:login.php");
}
?>

<html>  
    <head>  
        <title>Messages</title>  	
		<?php
		include('head_links.php');
		?>
	</head> 
<body>        
	<?php
		include('header.php');
	?>
	
	<div class="messages-sec">
		<div class="row">
			<div  style=" margin: 10px; position: absolute;  top: 8%;  bottom: 0;  width: 30%; overflow-y: scroll; scrollbar-width: none; ">
				<div id="user_details"></div>
					
			</div>
			<div style=" padding:10px; position: absolute;  top: 8%;  left: 30%;  bottom: 0;  width: 70%; ">
				<div class="main-conversation-box">					
					 <div id="user_model_details"></div>
				</div>
			</div>
		</div>
	</div>
</body>  
</html>  



<script>  

$(document).keypress(
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }
});
$(document).ready(function(){

 fetch_user();
start_make_chat_dialog_box();
 setInterval(function(){
  update_last_activity();
  fetch_user();
   update_chat_history_data();
 }, 2000);
 


 function fetch_user()
 {
  $.ajax({
   url:"fetch_user.php",
   method:"POST",
   success:function(data){
    $('#user_details').html(data);
   }
  })
 }

 function update_last_activity()
 {
  $.ajax({
   url:"update_last_activity.php",
   success:function()
   {

   }
  })
 }

 function make_chat_dialog_box(to_user_id, to_user_name)
 {
  var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="You have chat with '+to_user_name+'">';
  modal_content += '<div style="height: 80%;  overflow-y: scroll;  padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
  modal_content += fetch_user_chat_history(to_user_id);
  modal_content += '</div>';
  modal_content += '<div class="message-send-area"><form><form><div class="mf-field">';
  modal_content += '<input type="textarea" name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="chat_message"  placeholder="Type a message here"  autocomplete="off" >';
  modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="send_chat"><font size="4" face="Varela Round">Send</font></button></div>';
  modal_content+= '<ul><li><a href="#" title=""><i class="fa fa-smile-o"></i></a></li><li><a href="#" title=""><i class="fa fa-camera"></i></a></li><li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li></ul></form></div>';
  $('#user_model_details').html(modal_content);
 
 }
 
 function start_make_chat_dialog_box()
 {
  var modal_content ='<div style="height: 99%; overflow-y: scroll;  padding:16px;" >';
  modal_content += '<div style="padding-top:200px;" class="user-pro-img"><img height=170 width=170 src="images/user_big.png" alt="">	</div>';
  modal_content += '<center><b><font size="6" face="Varela Round">Hello <?php echo $_SESSION['username'];  ?> !!</font></b><center><br>';
  modal_content += '<center><b><font size="4" face="Varela Round">welcome to missive chat, stay connected to your mates.</font></b><center>';
  modal_content += '</div><div style="height: 1%;" class="mydiv"></div>';
   $('#user_model_details').html(modal_content);
 
 }


 $(document).on('click', '.start_chat', function(){
  var to_user_id = $(this).data('touserid');
  var to_user_name = $(this).data('tousername');
  make_chat_dialog_box(to_user_id, to_user_name);
  setTimeout(
  function() 
  {var element = document.getElementById('chat_history_'+to_user_id);
	element.scrollTop = element.scrollHeight;
	
  }, 50);
   
  $("#user_dialog_"+to_user_id).dialog({
   autoOpen:false,
   width:400
  });
  $('#user_dialog_'+to_user_id).dialog('open');
  $('#chat_message_'+to_user_id).emojioneArea({
   pickerPosition:"top",
   toneStyle: "bullet"
  });
 });

 $(document).on('click', '.send_chat', function(){
  var to_user_id = $(this).attr('id');
  var chat_message = $('#chat_message_'+to_user_id).val();
  jQuery.trim(chat_message);
  if(chat_message != "")
  {
  $.ajax({
   url:"insert_chat.php",
   method:"POST",
   data:{to_user_id:to_user_id, chat_message:chat_message},
   success:function(data)
   {
    $('#chat_message_'+to_user_id).val('');
    var element = $('#chat_message_'+to_user_id).emojioneArea();
    element[0].emojioneArea.setText('');
    $('#chat_history_'+to_user_id).html(data);
   }
  })
  }
  update_chat_history_data();
 setTimeout(
  function() 
  {var element = document.getElementById('chat_history_'+to_user_id);
	element.scrollTop = element.scrollHeight;
  }, 300);
   
  
 });

 function fetch_user_chat_history(to_user_id)
 {
  $.ajax({
   url:"fetch_user_chat_history.php",
   method:"POST",
   data:{to_user_id:to_user_id},
   success:function(data){
    $('#chat_history_'+to_user_id).html(data);
   }
  })
 }

 function update_chat_history_data()
 {
  $('.chat_history').each(function(){
   var to_user_id = $(this).data('touserid');
   fetch_user_chat_history(to_user_id);
   
  });
  
 }

 $(document).on('click', '.ui-button-icon', function(){
  $('.user_dialog').dialog('destroy').remove();
 });

 $(document).on('focus', '.chat_message', function(){
  var is_type = 'yes';
  $.ajax({
   url:"update_is_type_status.php",
   method:"POST",
   data:{is_type:is_type},
   success:function()
   {

   }
  })
 });

 $(document).on('blur', '.chat_message', function(){
  var is_type = 'no';
  $.ajax({
   url:"update_is_type_status.php",
   method:"POST",
   data:{is_type:is_type},
   success:function()
   {
    
   }
  })
 });
 
});  
</script>
