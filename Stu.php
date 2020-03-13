<?php
	include 'connection.php';

?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org//1999/xhtml">
<head>
	<title>Student</title>
	<link rel="stylesheet" href="css/indexSTY.css" type="text/css">
	<link rel="stylesheet" href="css/prof.css" type="text/css">
	<link rel="stylesheet" href="stu1.css" type="text/css">
	<meta charset="utf-8"name="viewport" content="width-device-width, initial-scale=1.0"/>

	<style>
		.mimg{
			background-image:url(img/aa.jpg);
			height:350px;
			padding-top:50px;
			padding-left:3%;
		}
	</style>
</head>
<body class="body">
		<div class="tophed">
		<div class="in">
		<form>
			<input type="submit" alt="Submit" value="Logout"></form>
		</div>
		<div class="in">
		<form>
			<input type="submit" alt="Submit" value="Home"></form>
		</div>

	</div>
	<div class="mimg">

	<h1><i>My Account...</i></h1>
	</div>

	<div>
	<div class="sep">
		<h1>Download History</h1>
			<table>
		<tr>
			<th>date
			<th>id
			<th>type
			<th>course
		</tr>
		<?php
			$que="SELECT down.date,down.mid,course.cname,c_mat.type from ((down inner join c_mat on c_mat.mid=down.mid) inner join course on
					course.cid=c_mat.cid)where nic=111111111;";

			$res=mysqli_query($con,$que);

			while($row=mysqli_fetch_assoc($res))
			{
				$a=$row['date'];
				$b=$row['mid'];
				$d=$row['type'];
				$c=$row['cname'];
				?>

				<tr>
					<td><?PHP echo $a;?></td>
					<td><?PHP echo $b;?></td>
					<td><?PHP echo $d;?></td>
					<td><?PHP echo $c;?></td>
				</tr>
				<?php
			}
		?>
	</table>
	</div>
