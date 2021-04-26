<?php
session_start()
?>
<?php include('connect.php') ?>

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
		
  <form class="insert_form" action="insert_post.php"  method="post" enctype ="multipart/form-data">

      <h1 class="titre_center"> New post
      </h1>

      <div class="title_author">
        <div>
          <label> Post Title:
          </label> 
          <input type="text" name="title" size="40"/></div>
        <div>
          <label> Post Author:
          </label>
          <input type="text" name="author" size="40"/>
        </div> 
      </div>

      <div class="imageflex">
        <label class="lbl"> Image:
        </label> 
        <input type="file" name="image" size="40"/>      
      </div>

      <div class="post_content">
        <label> Post content:
        </label> 
        <textarea name="content"  rows="21" cols="90">
        </textarea>  
      </div>

      <div class="submitt">
        <input  type="submit" name="submit"/>
      </div>

        </form>
        <footer>
         <div class="container">
   
        
         
            <div class="copy text-center">
               Copyright 2014 <a href='Home.php'>Website</a>
            </div>
            
         </div>
      </footer>
  </body>


</html> <!-- enb html -->
<form class = "insert_form" action = "insert_post.php" method = "post" enctype = "multipart / form-data">
<?php
include("connect.php");
$db = mysqli_connect('localhost', 'root', '', 'dynamic_blog');
if(isset($_POST['submit']))
{
if($_POST['title']=='' or $_POST['content']=='' or $_POST["author"]=='')
{
echo("<script>alert ('fill all the field ')</script>");
exit();
}

else
{
$title=$_POST['title'];
$author=$_POST['author'];
$content=$_POST['content'];
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp=$_FILES['image']['tmp_name'];
$date=date('y.m.d');

if($image_type == "image/jpeg" or $image_type == "image/jpg" or $image_type == "image/png" or $image_type == "image/gif" )
{
if($image_size<=1000000)
{
move_uploaded_file($image_tmp,"images/$image_name");
}
else
{
echo("<script> alert('larger image only 100kB file sise is valid' )</script>");
}
}
else
{
echo("<script> alert('invalid file type' )</script>");
}
$query = "INSERT INTO posts (title,author,image,content,date) VALUES('$title','$author' ,'$image_name','$content','$date')";
 mysqli_query($db, $query);
{
echo("<h1>post has been submitted !!</h1>");
}
}
}

?>
</form>