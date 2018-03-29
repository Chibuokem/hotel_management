<!doctype html>
<html>
<head>

<meta charset="utf-8">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="materialize/css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="project.css" type="text/css" rel="stylesheet"/>
<link href="responsive_project.css" type="text/css" rel="stylesheet"/>
<script src="jquery-3.1.1.min.js" type="text/javascript" ></script>
<script src="materialize/js/materialize.min.js" type="text/javascript"></script>
<script src="project.js"></script>
<title>Profile</title>

</head>

<body>
<div class="wrapper">


	<div class="container">
   
    <div class="row">
    	<div class="col s12 m12 l12">
         <p>NAME: <?php echo $name;  ?> </p>
        </div>
        <div class="col s12 m12 l12">
         <p>PHONE NUMBER : <?php echo $phone;  ?> </p>
        </div>
        <div class="col s12 m12 l12">
         <p>EMAIL : <?php echo $email;  ?> </p>
        </div>
        <div class="col s12 m12 l12">
         <p>COUNTRY: <?php echo $country;  ?> </p>
        </div>
        <div class="col s12 m12 l12">
         <p>RESERVATION : <?php echo $reservation;  ?> </p>
        </div>
        
        
    </div>


 </div>






</div>

</body>
</html>