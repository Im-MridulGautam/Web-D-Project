<?php
include('database_connection.php');
include('config.php');
$s1=$_REQUEST["n"];
//$select_query="select * from data where name like '%".$s1."%'";

$s1 = htmlspecialchars($s1); 
//$s1 = mysql_real_escape_string($s1);
$query="SELECT * FROM login WHERE (`name` LIKE '".$s1."%') OR (`curr_loc` LIKE '".$s1."%') GROUP BY `name`";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$s="";
$pos=40;
if($result > 0)
{
	foreach($result as $row)
	{
        $s=$s."
        <a href='my-profile-feed.html'>
            <p style='position: absolute; top: ".$pos."; height: 40px; width: 100%; background-color: #fff;'>".$row['name'].' , '.$row['curr_loc']."</p>
        </a>
        "   ;
        $pos=$pos+40;
    }

}
else{
    echo "No results";
}
echo $s;
?>