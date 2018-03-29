<?php

$host = "localhost"; 
$user = "root";
$pass = ""; 
$db_name = "hotel"; 

$con = new mysqli($host,$user,$pass,$db_name);
      
		 
		  
		  
		    $status= $_POST["status"];
			$price= $_POST["price"];
			$name=$_POST["name"];
			$target_path="image/";
	 		$target_path=$target_path.basename($_FILES["imageupload"]["name"]);
			
			
			if(empty($status) || empty($price) ||empty($name)){
				
			echo"<span style='color:red; font-weight:bold; font-size:30px;'>"."Please complete the empty fields"."<span>";
		
			}
			
			
			else{
			
	 		if(move_uploaded_file($_FILES["imageupload"]["tmp_name"],$target_path)){
			
			
		
				$query = "INSERT INTO rooms(status,price,name,picture) values 	('$status','$price','$name','$target_path')";

				$run = $con->query($query);
				
				if(isset($run)){
					echo"Room added successfully";
		
		 
	 }
				else{
					echo "Registration failed";
				}
	 
			}
		
		
		else{
			echo"image upload error";	
			}		 







	
	
	
			}
	
	

	
  



?>



