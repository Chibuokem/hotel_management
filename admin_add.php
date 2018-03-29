<?php
require("connection.php");


//session_start();

	//$user_id=$_SESSION["id"];
//if(!isset($_SESSION["id"])){
	//header("location:index.php");
	
//}

	if(isset($_POST["submit"])){
		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$phone=$_POST["phone"];
		
		$check="INSERT INTO admin (name,email,password,phone)
	 VALUES('$name','$email','$password','$phone')";
	// die($check);
	 $sql = $db->query($check) or die($db->error.' issues');
	 if(isset($sql)){
	echo "Admin added"."<br/>";
	}
	else{
		echo "Error Admin was not added"."<br/>";
		}
	 }
		
	

?>
