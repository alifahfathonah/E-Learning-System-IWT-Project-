<?php
	include 'connect.php';

	if( !$_SESSION['type'] = 'admin' )
	{
		?>
		<script>alert( "Wrong Account type!!! LOGING OUT NOW" );location.href = "login.html";</script>
		<?php
		header( 'Location:login.html' );
		session_destroy();
	}
 ?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org//1999/xhtml">
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="indexSTY.css" type="text/css">
	<link rel="stylesheet" href="prof.css" type="text/css">
	<link rel="stylesheet" href="admin.css" type="text/css">
	<meta charset="utf-8"name="viewport" content="width-device-width, initial-scale=1.0"/>

	<style>
		.mimg{
			background-image:url(img/sys4.jpg);
			height:350px;
			padding-top:50px;
			padding-left:3%;
			object-fit: cover;
		}
	</style>
	<script src="js/prof.js"></script>
</head>
<body class="body">

	<div>
		<form action="admin.php" method="POST" class="btn btn-primary">
			<input type="submit" value="HOME" name="home">
			<input type="submit" value="LOGOUT" name="logout">
	</div>

	<div class="mimg">

	<h1><i>My Account...</i></h1>
	</div>

	<hr>

	<div class="con">
		<div class="add">
			<h2>Add HTML/PHP files</h2><hr>

			<div class="upload">
				<input type="file" id="up"><button name="subject" type="submit" value="Edit" class="bn">Add</button>
			</div>

			<table>
				<caption><b>Current file</b></caption>
				<tr id="bn">
					<td>File 01 </td>
					<td><button name="subject" type="submit" value="Edit" class="bn">Edit</button></td>
				</tr>
				<tr>
					<td>File 01 </td>
					<td><button name="subject" type="submit" value="Edit" class="bn">Edit</button></td>
				</tr>
				<tr>
					<td>File 01 </td>
					<td><button name="subject" type="submit" value="Edit" class="bn">Edit</button></td>
				</tr>
				<tr>
					<td>File 01 </td>
					<td><button name="subject" type="submit" value="Edit" class="bn">Edit</button></td>
				</tr>
				<tr>
					<td>File 01 </td>
					<td><button name="subject" type="submit" value="Edit" class="bn">Edit</button></td>
				</tr>
			</table>
		</div>

		<div class="add">
			<h2>Add Style Sheet</h2><hr>

			<div class="upload">
				<input type="file" id="up"><button name="subject" type="submit" value="Edit" class="bn">Add</button>
			</div>

			<table>
				<caption><b>Current file</b></caption>
				<tr id="bn">
					<td>File 01 </td>
					<td><button name="subject" type="submit" value="Edit" class="bn">Edit</button></td>
				</tr>
				<tr>
					<td>File 01 </td>
					<td><button name="subject" type="submit" value="Edit" class="bn">Edit</button></td>
				</tr>
				<tr>
					<td>File 01 </td>
					<td><button name="subject" type="submit" value="Edit" class="bn">Edit</button></td>
				</tr>
				<tr>
					<td>File 01 </td>
					<td><button name="subject" type="submit" value="Edit" class="bn">Edit</button></td>
				</tr>
				<tr>
					<td>File 01 </td>
					<td><button name="subject" type="submit" value="Edit" class="bn">Edit</button></td>
				</tr>
			</table>
		</div>

	</div>

	<div class="con">
		<p style="text-align:center;"><i style="margin-top:-10px;">Maximum data allocation<i>
		<label class="switch">
		  <input type="checkbox">
		  <span class="slider round"></span>
		</label></p>

		<div class="""slidecontainer">
		  <input type="range" min="1" max="100" value="50" class="slider1" id="myRange">
		  <p>Data allocation <span id="demo"></span></p>
		</div>
	</div>
