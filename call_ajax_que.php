<body>
<div class="wrapper">
<section class="forum-page">
            <div class="container">
                <div class="forum-questions-sec">
                    <div class="row">
                        <div class="col-lg-12">
<?php
include('config.php');

$s1=$_REQUEST["n"];
$s1 = htmlspecialchars($s1); 
echo strlen($s1);
if($s1=="*")
{
    $q="SELECT * FROM question";
}
else{
    $q="SELECT * FROM question WHERE (`tag` LIKE '%".$s1."%') OR (`describe` LIKE '%".$s1."%') GROUP BY `tag` ";
    
}
$sql= mysqli_query($conn,$q) or die(mysqli_error());

$s="";

if(mysqli_num_rows($sql) > 0)
{
    while($row=mysqli_fetch_array($sql))
    {
?>
        <a class='link-p-colr' href='view.php?product=".$row['id']."'>
                            <div class="forum-post-view">
                                <div class="usr-question">
                                    <div class="usr_img">
                                        <img src="http://via.placeholder.com/60x60" alt="">
                                    </div>
                                    <div class="usr_quest">
                                        <h3><?php echo $row["heading"]; ?></h3> 
                                        <ul class="quest-tags">
                                            <li><a href="#" title=""><?php echo $row["tag"]; ?></a></li>
                                        </ul>
                                        <p><?php echo $row["describe"]; ?></p>
                                        
                                    </div><!--usr_quest end-->
                            
<?php
}
echo "</table>";
} 
else { echo "No Results";}
?>
                                </div><!--usr-question end-->
                            </div><!--forum-post-view end-->
                            
                        </div>
                    </div>
                </div><!--forum-questions-sec end-->
            </div>
        </section><!--forum-page end-->
</div>
</body>
