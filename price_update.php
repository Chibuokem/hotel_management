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



$price=$_POST['price'];
$id=$_POST['id'];


	


 $check="UPDATE  rooms SET price='$price' WHERE id='$id' ";
	 
	// die($check);
	 $sql = $db->query($check) or die($db->error.' issues');
	 if(isset($sql)){
	echo "your price  has been sucessfully changed"."<br/>";
	}
	else{
		echo "error price didnt change"."<br/>";
		}
	 


?>