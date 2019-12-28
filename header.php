<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">						
							<a  title=""><img src="images/logo.png" alt="" style="height:30px;"></a>
							</div>
							<div class="logo">
							<a  title=""><img src="images/logo.gif" alt="" style="height:30px;"></a>
						</div>	
					
					<div class="search-bar">
						<form>
							<input type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" class="textbox" placeholder="What are you looking for ?" tabindex="1">
        
          					<div id="livesearch"></div>
							<button type="submit" disabled><i class="la la-search"></i></button>
						</form>
					</div><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="event.php" title="">
									<span><img src="images/icon1.png" alt=""></span>
									Home
								</a>
							</li>
							
	
							<li>
								<a href="questions.php" title="">
								<span><img src="images/ques1.png"></span>	
									Question
								</a>
							</li>
								
						
							<li>
								<a href="index.php" title="">
									<span><img src="images/icon6.png" alt=""></span>
									Messages
								</a>
							</li>
							<li>

								<a href="my_profile.php" title="">
									<span><img src="images/icon4.png" alt=""></span>
									Profile
							   </a>
							  </li>	
					</nav>	
                    <div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
							<img src="images/user_small.png" height="30" alt="">
							<a href="#" title=""><?php echo substr($_SESSION['username'],0,4);  ?>...</a>
							<i class="la la-sort-down"></i>
						</div>
						<div class="user-account-settingss">
						
							<h3 class="tc"><a href="logout.php" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->
		
		
<script>
function lightbg_clr() {
	$('#qu').val("");
	$('#textbox-clr').text("");
 	$('#search-layer').css({"width":"auto","height":"auto"});
	$('#livesearch').css({"display":"none"});	
	$("#qu").focus();
 };
 
function fx(str)
{
var s1=document.getElementById("qu").value;
var xmlhttp;
if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
	document.getElementById("search-layer").style.width="auto";
	document.getElementById("search-layer").style.height="auto";
	document.getElementById("livesearch").style.display="block";
	$('#textbox-clr').text("");
    return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
	document.getElementById("search-layer").style.width="100%";
	document.getElementById("search-layer").style.height="100%";
	document.getElementById("livesearch").style.display="block";
	$('#textbox-clr').text("X");
    }
  }
xmlhttp.open("GET","call_ajax_profile.php?n="+s1,true);
xmlhttp.send();
}
</script>