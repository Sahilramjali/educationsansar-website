<?php include('header.php');?>
<?php require_once "server.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Education Sansar || Login</title>
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  <?php include('errors.php'); ?>
  	<div class="input-group">
  		<label for="username">User name</label>
  		<input type="text" name="username" id="username" >
  	</div>
  	<div class="input-group">
  		<label for="password">Password</label>
  		<input type="password" name="password" id="password">
	  </div>
	  <div>
		  <label for="remember">
		<input type="checkbox" name="remember" id="remember">Remember me
    </div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
	  </div>
  	<p>
  		Not yet a member? <a href="register.php"><span style="color:black;">Sign up</span></a>
  	</p>
  </form>
</body>
</html>