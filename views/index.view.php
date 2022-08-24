<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/fontawesome/css/all.css">
</head>
<body>
	<div class="header">
		<h2><a href="#"><i class="fas fa-graduation-cap"></i> Online Exams</a></h2>
		<ul class="menu">
			<li><a href="" class="active"><i class="fas fa-home"></i> Home</a></li>
			<li><a href="login"><i class="fas fa-users"></i> Start now</a></li>
			<li>
				<span class="dropdown"><i class="fas fa-edit"></i> Courses <span class="arrow down"></span></span>
				<ul class="sub-menu">
					<li><a href="#">Html 5</a></li>
					<li><a href="#">CSS 3</a></li>
					<li><a href="#">Java Script</a></li>
					<li><a href="#">PHP</a></li>
				</ul>
			</li>
			<li>
				<span class="dropdown"><i class="fas fa-pen"></i> About <span class="arrow down"></span></span>
				<ul class="sub-menu">
					<li><a href="admin/login">Admin Panel</a></li>
					<li><a href="#">Developer</a></li>
					<li><a href="#">Buy Apps</a></li>
					<li><a href="#">Other Apps</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="fas fa-phone"></i> Contact</a></li>
		</ul>
		<?php if(isset($_SESSION['email'])): ?>
			<span  class="register dropdown"><a href="./logout"><i class="fas fa-user"></i> Logout</a></span>
		<?php else: ?>
			<span  class="register dropdown"><a href="register"><i class="fas fa-user"></i> Register</a></span>
		<?php endif; ?>
	</div>

	<div class="container">
		<div class="left">

			<div class="banner">
				<img src="public/images/banner3.jpg">
				<h3>Online Examination System</h3>
			</div>

			<div class="content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

		<div class="right">
			<div class="search">
				<form>
					<input type="text" name="" placeholder="Search here">
					<button>Search</button>
				</form>
			</div>
			<div class="apps">
				<h3>Related Applications:</h3>
				<p class="sample">
					<a href="#">School Management System</a>
				</p>
				<p class="sample">
					<a href="#">Hospital Management System</a>
				</p>
				<p class="sample">
					<a href="#">Resturant Management System</a>
				</p>
			</div>
		</div>
	</div>
</body>
</html>