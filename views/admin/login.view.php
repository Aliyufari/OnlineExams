<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/admin.css">
</head>
<body>
	<form  method="POST" action="login" class="admin-login">
		<h2>Admin Login</h2>
		<p><small class="error"><?php isset($wrong) ? print($wrong) : ''; ?></small></p>
		<div class="input-group">
			<input type="email" name="email" class="" value="<?php isset($old['email']) ? print($old['email']) : ''; ?>"  placeholder="Email Address"> 
			<p><small class="error"><?php isset($error['email']) ? print($error['email']) : ''; ?></small></p>
		</div>
		<div class="input-group">
			<input type="password" name="password" class="" autocomplete="off" placeholder="Password" >
			<p><small class="error"><?php isset($error['password']) ? print($error['password']) : ''; ?></small></p>
		</div>
		<div class="input-group submit">
			<button name="submit">Login</button>
			<a href="#">Forgot Password?</a>
		</div>
	</form>
</body>
</html>