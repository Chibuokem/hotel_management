<!doctype html>
<html>
<head>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="materialize/css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="project.css" type="text/css" rel="stylesheet"/>
<link href="responsive_project.css" type="text/css" rel="stylesheet"/>
<script src="jquery-3.1.1.min.js" type="text/javascript" ></script>
<script src="project.js"></script>
<script src="materialize/js/materialize.min.js" type="text/javascript"></script>


<meta charset="utf-8">
<title>Rooms</title>
</head>

<body>
  <div class="wrapper">   
<!-- Dropdown Structure
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>-->
 <div class="navbar-fixed">

<nav style="background-color:#660000 !important;">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo logoo"><img src="images/logo.png"></a>
    <a href="#" class="brand-logo center logoo2 " id="dissappear">Inglot hotels</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">Menu</i></a>
    

    
    <ul class="right hide-on-med-and-down">
    
      <li><a href="#">Home</a></li>
      <li><a href="index.php#rooms">Rooms and suites</a></li>
      <li><a href="index.php#gallery">Gallery</a></li>
      <li><a href="#">About us </a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Logout<i class="material-icons right">arrow_drop_down</i></a></li>
      
    </ul>
    <ul class="side-nav " id="mobile-demo" style="background-color: rgba(0, 0, 0, 0.6) !important; font-weight:bold; ">
       <li ><a href="#" class="grey-text  text-grey darken-4 ">Home</a></li>
      <li ><a href="#" class="grey-text  text-grey darken-4 ">Rooms and suites</a></li>
      <li ><a href="index.php#gallery" class="grey-text  text-grey darken-4 ">Gallery</a></li>
      <li ><a href="#" class="grey-text  text-grey darken-4 ">Login </a></li>
      <li ><a href="#" class="grey-text  text-grey darken-4 ">About us </a></li>
     
       
      </ul>
  </div>
</nav>
     </div>
   
      <!-- <div class="row lines">

      
      <div class="col s12 m12"><span style="text-align:center; height:600px; color:#660000; "></span></div>
      
      
       </div>-->
       
      <div class="row ">

      <p><h4 id="suites" style="text-align:center; color:#660000;">ROOMS AND SUITES </h4><hr class="line2" style="color:#660000;"/>
      
      
     
      
      <div class="col offset-l1 s12 m4 l4">
      		<div class="card small">
    			<img src="images/t1.jpg">
  		 	</div>
  		
       </div>
                
 <div class="col s12 m6 l6">
      <div class="card small  darken-1">
          <div class="txtcolor card-content red-text">
              <span class="card-title">ROOM 202</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
           </div>
                 <div class="card-action">
                     <button class="btn waves-effect waves-light" type="submit" name="action">Book Now
    					<i class="material-icons right">send</i>
 				     </button>
       	
        		<div class="input-field col s4">
          <i class="material-icons prefix">today</i>
          <input id="icon_prefix" type="number" class="validate">
          <label for="icon_prefix">Reservation Period</label>
        </div>
        
        
                 </div>
          </div>  
    </div>     
</div>

    </div>    
     
                
      <div class="row ">

      <div class="col offset-l1 s12 m4 l4">
      		<div class="card small">
    			<img src="images/t2.jpg">
  		 	</div>
  		
       </div>
                
 <div class="col s12 m6 l6">
      <div class="card small  darken-1">
          <div class="txtcolor card-content red-text">
              <span class="card-title">ROOM 100</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
           </div>
                 <div class="card-action">
                     <button class="btn waves-effect waves-light" type="submit" name="action">Book Now
    					<i class="material-icons right">send</i>
 				     </button>
                     
                     	<div class="input-field col s4">
          <i class="material-icons prefix">today</i>
          <input id="icon_prefix" type="number" class="validate">
          <label for="icon_prefix">Reservation Period</label>
        </div>
                     
       
                 </div>
          </div>  
    </div>     
</div>
 
    </div> 
       
       
       
     <div class="row ">

      <div class="col offset-l1 s12 m4 l4">
      		<div class="card small">
    			<img src="images/t3.jpg">
  		 	</div>
  		
       </div>
                
 <div class="col s12 m6 l6">
      <div class="card small  darken-1">
          <div class="txtcolor card-content red-text">
              <span class="card-title">ROOM 50</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
           </div>
                 <div class="card-action">
                     <button class="btn waves-effect waves-light" type="submit" name="action">Book Now
    					<i class="material-icons right">send</i>
 				     </button>
       
       	<div class=" col s4">
          <i class="material-icons prefix">today</i>
          <input id="icon_prefix" type="date" class="validate tacker fonts datepicker" >
          <label for="Check-in Date">Reservation Period</label>
        </div>
        
        <div class=" col s4">
          <i class="material-icons prefix">today</i>
          <input id="icon_prefix" type="date" class="validate tacker fonts datepicker" >
          <label for="Check-out Date">Reservation Period</label>
        </div>
       
       
                 </div>
          </div>  
    </div>     
</div>
 
    </div> 
    
    
    
    
    <div class="row ">

      <div class="col offset-l1 s12 m4 l4">
      		<div class="card small">
    			<img src="images/t4.jpg">
  		 	</div>
  		
       </div>
                
 <div class="col s12 m6 l6">
      <div class="card small  darken-1">
          <div class="txtcolor card-content red-text">
              <span class="card-title">ROOM 70</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
           </div>
                 <div class="card-action">
                     <button class="btn waves-effect waves-light" type="submit" name="action">Book Now
    					<i class="material-icons right">send</i>
 				     </button>
                     
                     
                     	<div class="input-field col s4">
          <i class="material-icons prefix">today</i>
          <input id="icon_prefix" type="number" class="validate">
          <label for="icon_prefix">Reservation Period</label>
        </div>
       
                 </div>
          </div>  
    </div>     
</div>



<div class="row section">
  <div class="col">
    <!-- Modal Trigger -->
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Call us Now</a>
    <p> <a href="http://materializecss.com/getting-started.html">CDN (getting started)</a>.
  </div>
</div>
<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>




 
    </div> 

     
 
       
       </div> 
       

</body>
</html>