<?php
	include 'connect.php';

	if( !$_SESSION['type'] == 'coodinator' )
	{
		header( 'Location:login.html' );
	}
	if( isset($_POST['logout']))
	{
		session_destroy();
		header( 'Location:login.html' );
	}
	else if( isset($_POST['home']))
	{
		header( 'Location:index.php' );
	}
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org//1999/xhtml">
<head>
	<title>cor</title>
	<link rel="stylesheet" href="css/indexSTY.css" type="text/css">
	<link rel="stylesheet" href="css/prof.css" type="text/css">
	<link rel="stylesheet" href="css/stu1.css" type="text/css">
	<meta charset="utf-8"name="viewport" content="width-device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<style>
		.mimg{
			background-image:url(img/cop.jpeg);
			height:350px;
			padding-top:50px;
			padding-left:3%;
		}

		th{
			background-color:white;
		}
			tr:nth-child(even) {
			background-color: #CCD1D1;
		}

		tr:nth-child(odd) {
		  background-color: #95A5A6;
		}
	</style>
</head>
<body class="body">
	<div class="tophed" style="width:100%;background-color:black;">
	<form action="cor.php" method="post">
		<input type="submit" class="btn btn-primary" style="z-index:1;position:absolute;top:2%;left:90%;width:8%" name="logout" value="LOGOUT">
		<input type="submit" class="btn btn-primary" style="z-index:1;position:absolute;top:2%;left:80%;width:8%" name="home" value="HOME">
	</form>
</div>
	<div class="mimg">

	<h1><i>My Account...</i></h1>
	</div>

	<div>
		<table>
			<tr>
				<th>Date
				<th>Report id
				<th>nic
			</tr>
				<?PHP
					$que="SELECT report.rp_date,report.rep_id,report.nic from report; ";

			$res=mysqli_query($connect,$que);

			while($row=mysqli_fetch_assoc($res))
			{
				$a=$row['rp_date'];
				$b=$row['rep_id'];
				$d=$row['nic '];
				?>

				<tr>
					<td><?PHP echo $a;?></td>
					<td><?PHP echo $b;?></td>
					<td><?PHP echo $d;?></td>
				</tr>
				<?php
			}
				?>
			<tr>

			</tr>
		</table>
	</div>

	<div style="text-align:center;">
	<form action="report.php" method="post">
		<input method="post" type="submit" name="submit" class="submit" value="Genarate report" >
	</form>
	</div>
</body>
