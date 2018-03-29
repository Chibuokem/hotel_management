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



$status=$_POST['status'];
$id=$_POST['id'];


	


 $check="UPDATE  rooms SET status='$status' WHERE id='$id' ";
	 
	// die($check);
	 $sql = $db->query($check) or die($db->error.' issues');
	 if(isset($sql)){
	echo "Room successfully booked click "."<a href='group_proj.php'>"." here"."</a>"." to go back"."<br/>";
	}
	else{
		echo "error room not booked"."<br/>";
		}
	 


?>