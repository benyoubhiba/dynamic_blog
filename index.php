
<?php
session_start()
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mental Health</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="styles.css" rel="stylesheet">
	<link rel="icon" href="img/b6642401da4629ca42f5161c392c5cd5.jpg" type="image/gif" sizes="100x200">

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
	                          <li><a href="profile.php">Profile</a></li>
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
     
          <!--login name -->
          <?php 
                include("connect.php");
                 $db = mysqli_connect("localhost", "root", "","dynamic_blog") ;

                 $query= mysqli_query( $db,"select * from posts ");
                 while($row=mysqli_fetch_array($query))
                 {
            
                    $id=$row['id'];
                    $title=$row["title"];
                    $author=$row["author"];
                    $image=$row["image"];
                    $content= $row["content"];
                    $date=$row["date"];?>
    
          <h2>
          </h2>
          <form action="index.php" method="post">
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th>id
                    </th>
                    <th>users
                    </th>
                    <th>title
                    </th>
                    <th>author
                    </th>
                    <th>delete
                    </th>
                    <th>edit
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <?php echo "$id"; ?>
                    </td>
                    <td>
                     
                    </td>
                    <td>
                      <?php echo "$title"; ?>
                    </td>
                    <td>
                      <?php echo "$author"; ?>
                    </td>
                    <!--button delete-->
                    <form action="edit.php" method="GET">
                    <td> 
                            <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
                           
                            <a  class="btn btn-primary" href="edit.php?id=<?php echo "$id";?>">update
                      </a> </td>
                            </form>
                            
                            <form action="delete.php" method="GET">
                    <td> 
                            <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                           
                            <a  class="btn btn-primary" href="delete.php?id=<?php echo "$id";?>">delete
                      </a> </td>
                            </form>
                            
                       
                  </tr>
                </tbody>
              </table> 
              <!--end table-->
            </div>
          </form>
          <?php } ?>
        </main> 
      
   
      </div>
    </div>
    
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='Home.php'>Website</a>
            </div>
            
         </div>
       
      </footer>
  </body>
  </body>
</html>