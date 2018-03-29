<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin Page</title>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="materialize/css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="project.css" type="text/css" rel="stylesheet"/>
<link href="responsive_project.css" type="text/css" rel="stylesheet"/>
<script src="jquery-3.1.1.min.js" type="text/javascript" ></script>
<script src="materialize/js/materialize.min.js" type="text/javascript"></script>
<script src="project.js"></script>
</head>

<body>

	 <nav>
    <div class="nav-wrapper" style="background-color:#660000">
      <a href="#!" class="brand-logo">Admin</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#book_room">Book Room</a></li>
        <li><a href="#view_room">View Rooms</a></li>
        <li><a href="#add_room">Add Rooms</a></li>
        <li><a href="#pricing">Room Price</a></li>
       
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#book_room">Book Room</a></li>
        <li><a href="#view_room">View Rooms</a></li>
        <li><a href="#add_room">Add Rooms</a></li>
        <li><a href="#pricing">Room Price</a></li>
        

      </ul>
    </div>
  </nav>
  
 
 <div class="container"> 
 
          <div class="row">
           
             <div class="col s12 m12 l12" style="padding-top:20px;">
             <h5 style="color:#660000;"  id="book_room">Book Room</h5><hr class="underline"/>
             </div>
             
             
            <div class="row"> 
            <br/><br/>
            <div class="col s12 m12 l12 "></div>
            
               <div class="col s12 m12 l12" style="padding-top:50px;">
                <?php
             require_once("room_display.php");
			 ?>
                <?php for($i=0;$i<$count;$i++){?>
                  <div class="col s12 m3 l3">
                  List Of Rooms
                  <p><?php  echo $name[$i]; ?></p>
                  </div>
                  <div class="col s12 m3 l3">
                  Pictures
                  <p><img src="<?php echo $picture[$i];?>" width="100";></p>
                  </div>
                  <div class="col s12 m3 l3">
                  Edit status
                  <form action="book_room.php" method="POST">
                  status<input type="text" name="status" value="<?php echo $status[$i]; ?>"><br/>
                  Room id<input type="text" name="id" value="<?php echo $id[$i]; ?>" ><br/>
                  <input type="submit" value="Book room">
                  </form>
                  
                  
                  </div>
                  <div class="col s12 m3 l3">
                  Prices
                  <p><?php echo $price[$i]; ?></p>
                  </div>
                  
              
              </div>    
           </div>   
         </div>
         
          
         <div class="row" >
                <div class="col s12 m12 l12">
             <h5 style=" color:#660000;">Add Room</h5><hr class="underline"/>
             </div>
              
              
             
               
              <form class="col s12" id="add_room" action="room_addition_process.php" enctype="multipart/form-data" method="post">
              <div class="row">
                <div class="input-field col s12" style="padding-top:50px;">
                  <input placeholder="Room Name" id="room_name" type="text" class="validate" name="name">
                  <label for="room_name">Room  Name</label>
                </div><br/>
                <div class="input-field col s12 m12">
                  Picture<input id="picture" type="file" class="validate"  name="imageupload">
                  
                </div>
              </div>
             
              <div class="row">
                <div class="input-field col s12 m12">
                  <input id="price" type="text" class="validate" name="price">
                  <label for="price">Price</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="status" type="text" class="validate" name="status">
                  <label for="status">Status</label>
                </div>
              </div>
             
          <button class="btn waves-effect waves-light" type="submit" name="submit">Add Room
            <i class="material-icons right">send</i>
          </button>
                
            </form>
         
         </div>
        
     
    <div class="row" >
   
     <div class="col s12 m12 l12">
            <div class="col s12 m12 l12">
             <h5 style=" color:#660000;" id="view_room">View Rooms</h5><hr class="underline"/>
             </div>
            
        <div class="col s12 m3 l3 ">
        <h6>Room Names</h6>
      
        <p><?php  echo $name[$i]; ?></p>
        </div>
        
        <div class="col s12 m3 l3 ">
        <h6>Room Pictures</h6>
        <p><img src="<?php echo $picture[$i];?>" width="100";>
</p>
        </div>
        
        <div class="col s12 m3 l3 ">
        <h6>Prices</h6>
        <p><?php  echo $price[$i]; ?></p>
        </div>
        
         <div class="col s12 m3 l3 ">
        <h6>Status</h6>
        <p><?php  echo $status[$i]; ?></p>
        </div>
        
       
     </div>
    </div> 
    
    
    
     <div class="row" >
     <div class="col s12 m12 l12">
         
            <div class="col s12 m12 l12">
             <h5 style=" color:#660000;" id="pricing">Pricing </h5><hr class="underline"/>
             </div>
        <div class="col s12 m3 l3 ">
        <h6>Room Names</h6>
        <p><?php  echo $name[$i] ?></p>
        </div>
        
        <div class="col s12 m3 l3 ">
        <h6>Room Pictures</h6>
        <p><img src="<?php echo $picture[$i];?>" width="100";></p>
        </div>
        
        <div class="col s12 m3 l3 ">
        <h6>Prices</h6>
        <p><?php echo $price[$i];?></p>
        </div>
        
         <div class="col s12 m3 l3 ">
        <h6>Change price</h6>
        <form action="price_update.php" method="POST">
        <input type="text" name="price" value="<?php echo $price[$i]; ?>"><br/>
        Room id<input type="text" name="id" value="<?php echo $id[$i]?>"   ><br/>
         <input type="submit" value="Change price" >
           </form>
		 <?php }?>
           
          
      
        </div>
        
        
     </div>
    </div> 
    
    
    
     	
   
   
 
 
 
 </div>
 
 
 
</body>
</html>