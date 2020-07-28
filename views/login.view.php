<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<div class="box">
		<h2>Login</h2>
		<p><small class="success"><?php isset($success) ? print($success) : ''; ?></small></p>
		<form action="login" method="POST">
			<p><small class="error"><?php isset($wrong) ? print($wrong) : ''; ?></small></p>
			<div class="inputbox">
				<p><small class="error"><?php isset($error['email']) ? print($error['email']) : ''; ?></small></p>
				<input type="text" name="email" value="<?php isset($old['email']) ? print($old['email']) : ''; ?>" required="">
				<label>Email Address</label>
			</div>
			<div class="inputbox">
				<p><small class="error"><?php isset($error['password']) ? print($error['password']) : ''; ?></small></p>
				<input type="password" name="password" value="<?php isset($old['password']) ? print($old['password']) : ''; ?>" required="">
				<label>Password</label>
			</div> 
			<input type="submit" name="" value="Login">
			<p class="directve_stmt">Not a member? <a href="register">Register</a></p>
		</form>
	</div>
</body>
</html>