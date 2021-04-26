<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Mental Health</title>
  <link rel="stylesheet" type="text/css" href="./adminpanel/style.css">
  <link rel="icon" href="img/b6642401da4629ca42f5161c392c5cd5.jpg" type="image/gif" sizes="100x200">
</head>
<style>* {
    margin: 0px;
    padding: 0px;
}

body {
    font-size: 120%;
    background: #F8F8FF;
}

.header {
    width: 30%;
    margin: 50px auto 0px;
    color: #c34f80;
    background: #bde1e8;
    text-align: center;
    border: 1px solid #b023bE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}

form,
.content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}

.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}

.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}

.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #637575;
    border: none;
    border-radius: 5px;
}

.error {
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #e22926;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
}

.success {
    color: #035204;
    background: #b1f099;
    border: 1px solid #25115a;
    margin-bottom: 20px;
}
.profile{
    background-color: #B0C4DE;
}</style>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="LoginUsername" id="LoginUsername" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="LoginPassword"id="LoginPassword" >
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
	  
	  <p>
  		forget pass word? <a href="forgot_pw.php">click here</a>
  	</p>
	  
  </form>
 

</body>
</html>