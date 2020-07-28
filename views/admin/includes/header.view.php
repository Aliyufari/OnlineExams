<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../../../public/css/admin.css">
		<link rel="stylesheet" type="text/css" href="../../public/fontawesome/css/all.css">
	</head>
	<body>
		<div class="header">
			<h2><a href="">Admin Panel</a></h2>
			<ul class="menu">
				<li><a class="<?php isset($active) ? print($ctive) : '' ?>" href="/admin/home">Users</a></li>
				<li><a class="<?php isset($active) ? print($ctive) : '' ?>" href="/admin/courses">Courses</a></li>
				<li><a class="<?php isset($active) ? print($ctive) : '' ?>" href="/admin/questions">Questions</a></li>
				<li><a class="<?php isset($active) ? print($ctive) : '' ?>" href="#">Results</a></li>
			</ul>
			<span  class="logout"><a href="/admin/logout"><i class="fas fa-user"></i> Logout</a></span>
		</div>