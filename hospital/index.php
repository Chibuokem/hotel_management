<!doctype html>
<html>
<head>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="materialize/css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="project.css" type="text/css" rel="stylesheet"/>
<link href="class.css" type="text/css" rel="stylesheet"/>
<link href="responsive_project.css" type="text/css" rel="stylesheet"/>
<script src="jquery-3.1.1.min.js" type="text/javascript" ></script>
<script src="project.js"></script>
<script src="materialize/js/materialize.min.js" type="text/javascript"></script>


<meta charset="utf-8">
<title>Hotel</title>
</head>

<body>
  <div class="wrapper">   
<!-- Dropdown Structure
<ul id="dropdown1" class=" dropdown-content">
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


      
      <div class="slider slideheight po">
      
        <ul class="slides slideheight">
          <li>
            <img src="images/room1.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3 style="font-weight:bold;">Macan Models</h3>
              <h5 class="light grey-text text-lighten-3">6.3 sec<br/> 0 - 60 mph</h5>
            </div>
          </li>
          <li>
            <img src="images/room.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>Macan Models</h3>
              <h5 class="light grey-text text-lighten-3">6.3 sec<br/> 0 - 60 mph </h5>
            </div>
          </li>
          <li>
            <img src="images/room3.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h2 >$ 47,500.00*<br/>Base Price</h2>
              <h5 class="light grey-text text-lighten-3">252 hp<br/>Horsepower</h5>
            </div>
          </li>
          <li>
            <img src="images/room4.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3 class="font-weight:bold;">Comfort on wheels!</h3>
              <h5 class="light grey-text text-lighten-3">Remain classy</h5>
            </div>
          </li>
        </ul>
        </div>
        
        
      <div class="frank">
        <form class="form-container">
<div class="form-title"><h2>Check in</h2></div>
<div class="form-title">E-mail</div>
<input class="form-field" placeholder="e.g frank@yahoo.com" type="text" name="firstname" /><br />
<div class="form-title">Password</div>
<input class="form-field" placeholder="password" type="password" name="email" /><br />
<div class="submit-container">
<input class="submit-button" type="submit" value="Submit" />
</div>
<div class="form-title"><h2> 
<!-- Modal Trigger -->
<a href="#modal1" class=" modal-trigger">New here? Sign up here</a></h2></div>
</form>

      </div>
       <br/>
       
    
    
    
   
  
<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4 style="text-align:center;">SIGN UP HERE</h4>
    <p>
    
    
    
    </div>
  <div class="row"> 
<div class="col s12 m6 l2 ">.</div>
<div class="col s12 m6 l8 fom">
<div class="col s12 m6 l2 fom1"></div>
 <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
          <input id="name" name="name" type="text" class="validate" required/>
          <label for="name">Name *</label>
        </div>
      </div>
 
      <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">call</i>
          <input  id="call" name="phone" type="number" class="validate" required/>
          <label for="call">Phone *</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">location_on</i>
          <input id="country" name="country" type="text" class="validate" required/>
          <label for="country">country *</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">vpn_key</i>
          <input id="password" name="password" type="password" class="validate" required/>
          <label for="password">Password *</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="email" class="validate" required/>
          <label for="email">Email *</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 sub1">
          <input type="submit" value="Submit" class="validate" required/>
          <label></label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12 sub1">
         <a href="login.html" class="sub1"> Already have an account? LOGIN</a> </div>
      </div>
    </form>
  </div>

  </div>
</div>
</div>
    
   
    
    </p>
  </div>

</div>
       
       
       
       
       
       
      <div class="row">

      
      <div class="col s12 m12"><span style="text-align:center; color:#660000; "><h4>Welcome to  Digital hotel</h4><hr class="line2" style="color:#660000;"/></span></div>
      
       </div>
       
       
       
      
         <div class="row lines">

      
      <div class="col s12 m12"><span style="text-align:center; height:600px; color:#660000; "></span></div>
      
      
       </div>
       
         <div class="row roomi">

      <p><h4 id="rooms" class="white-text" style="text-align:center;">ROOMS & SUITES </h4>
      <div class="col s12 m4 l4"> <div class="card hoverable">
            <div class="card-image">
              <img src="images/sample-1.jpg">
              <span class="card-title">Executive Suite</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div></span></div>
       <div class="col s12 m4 l4">
       		<!--<div class="card small hoverable">
            		<img src="images/cardc.jpg">
                   
             </div>-->
             
             
              <div class="card small">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/cardc.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Standard Suite<i class="material-icons right">more_vert</i></span>
      <p><button class="btn waves-effect waves-light" type="submit" name="action">View Rooms
    					<i class="material-icons right">send</i>
 				     </button></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Standard Suite<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
         
             
             
 					 <!--<div class="card small hoverable">
    						<img src="images/cardb.jpg">
  					  </div>-->
  	 <div class="card small">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/cardb.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Classic Suite<i class="material-icons right">more_vert</i></span>
      <p><button class="btn waves-effect waves-light" type="submit" name="action">View Rooms
    					<i class="material-icons right">send</i>
 				     </button></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Classic Suite<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
         
    
    
    
    
    
    
    
        </div>
        
        <div class="col s12 m4 l4">
   
        	<!--<div class="card small hoverable">
    			<img src="images/cardd.jpg">
  		    </div>-->
            
            
             <div class="card small">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/carde.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Economy Suite<i class="material-icons right">more_vert</i></span>
      <p><button class="btn waves-effect waves-light" type="submit" name="action">View Rooms
    					<i class="material-icons right">send</i>
 				     </button></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Economy Suite<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
         
            
            
            
  			<!--<div class="card small hoverable">
  					 <img src="images/carde.jpg">
 			 </div>
 		-->
            
  <div class="card small">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator " src="images/cardd.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Executive Suite<i class="material-icons right">more_vert</i></span>
     <p> <button class="btn waves-effect waves-light" type="submit" name="action">View Rooms
    					<i class="material-icons right">send</i>
 				     </button></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Executive Suite<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
            
        
        
         </div>
      
      
       </div>
        
   
      
      <!-- <div class="row lines">

      
      <div class="col s12 m12"><span style="text-align:center; height:600px; color:#660000; "></span></div>
      
      
       </div>-->
       
         <div class="row ">

      <p><h4 id="gallery" style="text-align:center; color:#660000;">GALLERY </h4><hr class="line2" style="color:#660000;"/>
      
      <div class="col s12 m4 l4">
      		<div class="card small">
    			<img src="images/g1.jpg">
  		 	</div>
         
         		<div class="card small">
    				<img src="images/g2.jpg">
  		 		</div>
            
       </div>
                
       <div class="col s12 m4 l4">
       		<div class="card small">
    			<img src="images/g3.jpg">
  			</div>
            
            <div class="card small">
            		<img src="images/g4.jpg">
                   
             </div>
        </div>
             
      

        
        <div class="col s12 m4 l4">
  			<div class="card small ">
  				 <img src="images/g5.jpg">
 			 </div>
 		 
     		<div class="card small ">
  				<img src="images/carde.jpg">
 			 </div>
             
 		 </div>
  
</div>
     
   
       
       

      <p><h4 id="about" style="text-align:center; color:#660000;">ABOUT US </h4><hr class="line2" style="color:#660000;"/>
      
       
  <div class="row roomi">
       <div class="col s12 m6">
             <div class="card Large map  roomi ">
   <iframe class="map hoverable" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4968047119132!2d7.519353013951629!3d6.4585626257086695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a3f4d3a8ff1b%3A0xddfd66f545e8fa5b!2sNew+Heaven%2C+Enugu!5e0!3m2!1sen!2sng!4v1481037922244" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  			</div>
       </div>
  
   
 <div class="col s12 m6">
 		<div class="card " style=" background-color:#660000 !important;" >
            <div class="card-content white-text " style=" background-color:#660000 !important;">
              <span class="card-title">Contact us</span>
              <p>We are Located at Number 2 new heaven road Enugu,
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>  
     </div>
     
 </div>    
     
       
       </div> 
       

</body>
</html>