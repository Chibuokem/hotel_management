 <?php
 require("connection.php");
       
		  
            $status= $_POST["status"];
			$price= $_POST["price"];
			$name=$_POST["name"];
			
			
			$target_path="image/";
	 $target_path=$target_path.basename($_FILES["imageupload"]["name"]);
			
			if(empty($status) || empty($price)){
				
			echo"<span style='color:red; font-weight:bold; font-size:30px;'>"."Please complete the empty fields"."<span>";
		
			}
			
			
			else{
			
	 		if(move_uploaded_file($_FILES["imageupload"]["tmp_name"],$target_path)){
			
			$sql= "INSERT INTO rooms(name,status,price,picture) values 	     			    ('$name','$status','$price','$email','$target_path')";
		
				$query = 

				$run = $con->query($query);
				
				if(isset($run)){
					echo "Room upload successful";
		 //header("location:hospital_display.php");
		 
	 }
				else{
					echo "Room upload  failed";
				}
	 
			}
		
		
		else{
			echo"image upload error";	
			}		 







	
	
	
			}
	
	




?>
