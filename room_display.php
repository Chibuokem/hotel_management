<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='hotel';
$db= mysqli_connect("$db_host","$db_user","$db_pass","$db_name") or die("cannot connect to database");

if($db->connect_error>0)
{
	die($db->connect_error);
}






	
/*if(!isset($_SESSION["id"])){
	header("location:index.php");
	
}*/

$result=$db->query("SELECT * FROM rooms ORDER BY id DESC " ) or die ($db->error);
$count=0;
while ($row=$result->fetch_assoc())
{
	
	$name[]=$row['name'];
	$status[]=$row['status'];
	$picture[]=$row['picture'];
	$price[]=$row["price"];
	$id[]=$row["id"];
	
	$count++;
}

?>