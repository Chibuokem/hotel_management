<?php
require("connection.php");
session_start();
 if (isset($_POST["submit"])){
 $email=$_POST["email"];
 $password=$_POST["password"];

$check="SELECT * FROM admin WHERE email='$email' and password='$password' LIMIT 1";

$login_query=mysqli_query($db, $check);
if(mysqli_num_rows($login_query)==1){
		$row=mysqli_fetch_assoc($login_query);
		$_SESSION['id']= $row['id'];
		//header("location:portal.php"); //admin page opens
		echo"Admin Login successful";
		
		
	}
	else{
		echo "<span style='color:red;font-weight:bold; font-size:30px;'>"."Password or email is incorrect"."</span>";
	}
}


?>