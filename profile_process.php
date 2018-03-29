<?php
session_start();
$id=$_SESSION['id'];
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

$result=$db->query("SELECT * FROM guest WHERE id='$id' " ) or die ($db->error);

while ($row=$result->fetch_assoc())
{
	
	$name=$row['name'];
	$phone=$row['phone'];
	$email=$row['email'];
	$country=$row["country"];
	$reservation=$row["payment_method"];
	
	
}




?>

