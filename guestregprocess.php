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
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$country=$_POST["country"];
		$password=$_POST["password"];
		$payment_method=$_POST["payment_method"];
		
		$check="INSERT INTO guest (name,email,phone,address,country,password,payment_method)
	 VALUES('$name','$email','$phone','$address','$country','$password','$payment_method')";
	// die($check);
	 $sql = $db->query($check) or die($db->error.' issues');
	 if(isset($sql)){
	echo "guest added"."<br/>";
	}
	else{
		echo "error guest was not added"."<br/>";
		}
	 }
		
	

?>
