<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<div class="box">
		<h2>Sign Up</h2>
		<form action="register" method="POST">
			<p><small class="error"><?php isset($wrong) ? print($wrong) : ''; ?></small></p>
			<div class="inputbox">
				<p><small class="error"><?php isset($error['name']) ? print($error['name']) : ''; ?></small></p>
				<input type="text" name="name" value="<?php isset($old['name']) ? print($old['name']) : ''; ?>" required="">
				<label>Full Name</label>
			</div>
			<div class="inputbox">
				<p><small class="error"><?php isset($error['email']) ? print($error['email']) : ''; ?></small></p>
				<input type="text" name="email" value="<?php isset($old['email']) ? print($old['email']) : ''; ?>" required="">
				<label>Email Address</label>
			</div>
			<div class="inputbox">
				<p><small class="error"><?php isset($error['username']) ? print($error['username']) : ''; ?></small></p>
				<input type="text" name="username" value="<?php isset($old['username']) ? print($old['username']) : ''; ?>" required="">
				<label>Username</label>
			</div>
			<div class="inputbox">
				<p><small class="error"><?php isset($error['gender']) ? print($error['gender']) : ''; ?></small></p>
				<input type="text" name="gender" value="<?php isset($old['gender']) ? print($old['gender']) : ''; ?>" required="">
				<label>Gender</label>
			</div>
			<div class="inputbox">
				<p><small class="error"><?php isset($error['institution']) ? print($error['institution']) : ''; ?></small></p>
				<input type="text" name="institution" value="<?php isset($old['institution']) ? print($old['institution']) : ''; ?>" required="">
				<label>Institution Name</label>
			</div>
			<div class="inputbox">
				<p><small class="error"><?php isset($error['address']) ? print($error['address']) : ''; ?></small></p>
				<input type="text" name="address" value="<?php isset($old['address']) ? print($old['address']) : ''; ?>" required="">
				<label>Address</label>
			</div>
			<div class="inputbox">
				<p><small class="error"><?php isset($error['password']) ? print($error['password']) : ''; ?></small></p>
				<input type="password" name="password" value="<?php isset($old['password']) ? print($old['password']) : ''; ?>" required="">
				<label>Password</label>
			</div> 
			<input type="submit" name="" value="Submit">
			<p class="directve_stmt">Already a member? <a href="login">Login</a></p>
		</form>
	</div>
</body>
</html>