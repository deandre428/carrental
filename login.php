<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>


html{
	background:url('fleet2.jpg') no-repeat center center fixed;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:cover;
}

</style>



</head>
<body>
  <div class="header">
  	<h2>Screenshots Car Rental</h2> <br>
	  <h2> LOGIN</h2>
  </div>

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
		  Not yet a member? <a href="register.php">Sign up</a>
		  <a href="homepage.html">Homepage</a>
  	</p>
  </form>
</body>
</html>
