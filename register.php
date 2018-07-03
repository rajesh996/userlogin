<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="Username">
  	</div>
  	<div class="input-group">
  	  <label>Email </label>
  	  <input type="email" name="email" placeholder="email">
  	</div>
  	<div class="input-group">
  	  <label>Password (use only numbers from 6-12 characters)</label>
  	  <input type="password" name="password_1" placeholder="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password (Re-type the password)</label>
  	  <input type="password" name="password_2" placeholder="Confirm password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>