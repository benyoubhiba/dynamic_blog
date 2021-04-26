<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/b6642401da4629ca42f5161c392c5cd5.jpg" type="image/gif" sizes="100x200">
    <title>Mental Health</title>

<style>

body {
  background-color: #efefef;
}

.profile-pic {
    max-width: 200px;
    max-height: 200px;
    display: block;
}

.file-upload {
    display: none;
}

img {
    max-width: 100%;
    height: auto;
	margin-top:10px;
margin-left:50%;
height:100px;
}
.p-image {
  position: absolute;
  top: 167px;
  right: 30px;
  color: #666666;
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 1.2em;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}
</style>

</head>
<body>
    <h1 class="profile">welcom  to your profile</h1>
</body>
</html><!DOCTYPE html>
<html>
  <head>
    <title>Mental Health</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="styles.css" rel="stylesheet">

    <link href="css/calendar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Mental Health</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
<section>
    <div class="row">
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  <div class="sidebar content-box" style="display: block;">
		  <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="calendar.php"><i class="glyphicon glyphicon-calendar"></i> posts</a></li>
					<li><a href="profile.php"><i class="glyphicon glyphicon-tasks"></i> Profile</a></li>
                
                </ul>
             </div>
		  </div>
		
		
   <div class="small-12 medium-2 large-2 columns">
     <div class="circle">
       <!-- User Profile Image -->
	   <img    class="profile-pic"  src="https://img.icons8.com/dusk/64/fa314a/add-user-group-woman-man.png"/>
	
       <!-- Default Image -->
       <!-- <i class="fa fa-user fa-5x"></i> -->
     </div>
     <div class="p-image">
       <i class="fa fa-camera upload-button"></i>
        <input style="	margin-top:10px;
margin-left:-130%;" class="file-upload" type="file" accept="image/*"/>
     </div>
	 </div>


        <div class="col-sm-8">
            <div class="row">
            
			<form class="row g-3" style="margin: 2px;">
   
   <div class="mb-3">
	   <label for="exampleFormControlInput1" name="nom" class="form-label">Nom</label>
	   <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="xxxxx">
	 </div>
	 <div class="mb-3">
	   <label for="exampleFormControlInput1" name="prenom" class="form-label">Prenom</label>
	   <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="xxxxx">
	 </div>
	 
   
   
	 <div class="form-check">
		<P>Sexe</P><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
	   <label class="form-check-label" for="flexRadioDefault1">
   Homme
	   </label>
	 </div>
	 <div class="form-check">
	   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
	   <label class="form-check-label" for="flexRadioDefault2">
	   Femme
	   </label>
	 </div>
   
   
   
	   <div class="form-check">
		 
		 
		   <div  class="mb-3">
			   <label for="inputState" name="datedenaissance" class="form-label">Date de naissance</label>
			   <input  type="date"  class="form-control" id="DateNaissance" name="DateNaissance">
			
			 </div>
		   
			 
		 </div>
	   <div  class="mb-3">
		   <label for="inputEmail4" name="email" class="form-label">Email</label>
		   <input type="email" class="form-control" id="inputEmail4"><br>
		 </div> 
	   <div>
		 <div  class="mb-3">
		   <label   for="inputPassword4"name="" class="form-label">Mot de passe</label>
		   <input type="password" class="form-control" id="inputPassword4"   >
		 </div></div>
		 <div class>
	   <div class="col-12">
		   <div  class="mb-3">
			   <label for="inputPassword"name=""  class="form-label">Confirmer le Mot de passe</label>
			   <input type="password" class="form-control" id="inputPassword4">
			 </div>
   
	   </div>
	
	 </form>
	 <button style="margin-left: 50%;margin-bottom:10%; margin-top:5%; " type="button" class="btn btn-outline-secondary">Valider</button>
   
   </div>

		  </div>
		</div>
    </div>
	</section>
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='Home.php'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="custom.js"></script>
    <script src="js/calendar.js"></script>




  </body>
</html>