<?php
	session_start();

	if( !isset( $_SESSION['user']) && $_SESSION['user'] != 'prof@els.com' )
	{
		session_destroy();
		header( 'Location:adminlogin.html' );
	}
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org//1999/xhtml">
<head>
	<title>Professor</title>
	<link rel="stylesheet" href="css/indexSTY.css" type="text/css">
	<link rel="stylesheet" href="css/prof.css" type="text/css">
	<meta charset="utf-8"name="viewport" content="width-device-width, initial-scale=1.0"/>

	<style>
		.mimg{
			background-image:url(img/arr.jpg);
			height:350px;
			padding-top:50px;
			padding-left:3%;
		}
	</style>
	<script src="js/prof.js"></script>
</head>
<body class="body">

	<div class="tophed">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<form action="system.php" method="POST">
				<li><input type="submit" name="logout" value="Logout" ></li>
			</form>
			</ul>
		</nav>
	</div>

	<div class="mimg">

	<h1><i>My Account...</i></h1>
	</div>

	<hr>

	<div class="con">
		<div class="add">
			<h2>Add new videos</h2><hr>
			<div class="btnG"><h3>Web Design</h3>
				<span class="tip">
					<ul>
						<li><a href="#">HTML</a></li>
						<li><a href="#">CSS3</a></li>
						<li><a href="#">PHP</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Programming</h3>
				<span class="tip">
					<ul>
						<li><a href="#">C++</a></li>
						<li><a href="#">C#</a></li>
						<li><a href="#">JAVA</a></li>
						<li><a href="#">Python</a></li>
						<li><a href="#">Ruby</a></li>
						<li><a href="#">perl</a></li>
						</ul>
				</span>
			</div>
			<div class="btnG"><h3>Productivity</h3>
				<span class="tip">
					<ul>
						<li><a href="#">MS Office</a></li>
						<li><a href="#">Google Cloud</a></li>
						<li><a href="#">Apple</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Engineering</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Chemistry</a></li>
						<li><a href="#">Electrical Engineering</a></li>
						<li><a href="#">Material Science</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Graphic Design</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Graphic Design</a></li>
						<li><a href="#">Game Design</a></li>
						<li><a href="#">3D Animation</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Buisness</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Finance</a></li>
						<li><a href="#">Communication</a></li>
						<li><a href="#">Management</a></li>
						<li><a href="#">Stratergy</a></li>
						<li><a href="#">Project Management</a></li></ul>
				</span>
			</div>
			<div class="btnG"><h3>Science</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Bio Chemistry</a></li>
						<li><a href="#">Earth Science </a></li>
						<li><a href="#">Environmental Science</a></li>
						<li><a href="#">Geology</a></li>
				</span>
			</div>
			<div class="btnG"><h3>Art</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Grammer</a></li>
						<li><a href="#">Art history</a></li>
						<li><a href="#">Music</a></li>
						<li><a href="#">World history</a></li>
					</ul>
				</span>
			</div>

			<div class="upload">
				<input type="file" id="up"><br>
				<input type="file" id="up"><br>
				<input type="file" id="up"><br>
				<input type="file" id="up"><br>
				<input type="file" id="up"><br>
			</div>
			<p><b>Note:</b>You can upload 5 files at a time</p>
				<button type="submit"  value="Submit">Submit</button>

		</div>

		<div class="add">
			<h2>Add new Tutorials</h2><hr>
				<div class="btnG"><h3>Web Design</h3>
				<span class="tip">
					<ul>
						<li><a href="#">HTML</a></li>
						<li><a href="#">CSS3</a></li>
						<li><a href="#">PHP</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Programming</h3>
				<span class="tip">
					<ul>
						<li><a href="#">C++</a></li>
						<li><a href="#">C#</a></li>
						<li><a href="#">JAVA</a></li>
						<li><a href="#">Python</a></li>
						<li><a href="#">Ruby</a></li>
						<li><a href="#">perl</a></li>
						</ul>
				</span>
			</div>
			<div class="btnG"><h3>Productivity</h3>
				<span class="tip">
					<ul>
						<li><a href="#">MS Office</a></li>
						<li><a href="#">Google Cloud</a></li>
						<li><a href="#">Apple</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Engineering</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Chemistry</a></li>
						<li><a href="#">Electrical Engineering</a></li>
						<li><a href="#">Material Science</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Graphic Design</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Graphic Design</a></li>
						<li><a href="#">Game Design</a></li>
						<li><a href="#">3D Animation</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Buisness</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Finance</a></li>
						<li><a href="#">Communication</a></li>
						<li><a href="#">Management</a></li>
						<li><a href="#">Stratergy</a></li>
						<li><a href="#">Project Management</a></li></ul>
				</span>
			</div>
			<div class="btnG"><h3>Science</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Bio Chemistry</a></li>
						<li><a href="#">Earth Science </a></li>
						<li><a href="#">Environmental Science</a></li>
						<li><a href="#">Geology</a></li>
				</span>
			</div>
			<div class="btnG"><h3>Art</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Grammer</a></li>
						<li><a href="#">Art history</a></li>
						<li><a href="#">Music</a></li>
						<li><a href="#">World history</a></li>
					</ul>
				</span>
			</div>

			<div class="upload">
				<input type="file" id="up"><br>
				<input type="file" id="up"><br>
				<input type="file" id="up"><br>
				<input type="file" id="up"><br>
				<input type="file" id="up"><br>
			</div>
			<p><b>Note:</b>You can upload 5 files at a time</p>
			<button type="submit"  value="Submit">Submit</button>
		</div>

	</div>

	<div class="con" style="margin-top:10px;border-style:ridge;">
			<h2 style="text-align:center;">Current file</h2><hr>
				<div class="btnG"><h3>Web Design</h3>
				<span class="tip">
					<ul>
						<li><a href="#">HTML</a></li>
						<li><a href="#">CSS3</a></li>
						<li><a href="#">PHP</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Programming</h3>
				<span class="tip">
					<ul>
						<li><a href="#">C++</a></li>
						<li><a href="#">C#</a></li>
						<li><a href="#">JAVA</a></li>
						<li><a href="#">Python</a></li>
						<li><a href="#">Ruby</a></li>
						<li><a href="#">perl</a></li>
						</ul>
				</span>
			</div>
			<div class="btnG"><h3>Productivity</h3>
				<span class="tip">
					<ul>
						<li><a href="#">MS Office</a></li>
						<li><a href="#">Google Cloud</a></li>
						<li><a href="#">Apple</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Engineering</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Chemistry</a></li>
						<li><a href="#">Electrical Engineering</a></li>
						<li><a href="#">Material Science</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Graphic Design</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Graphic Design</a></li>
						<li><a href="#">Game Design</a></li>
						<li><a href="#">3D Animation</a></li>
					</ul>
				</span>
			</div>
			<div class="btnG"><h3>Buisness</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Finance</a></li>
						<li><a href="#">Communication</a></li>
						<li><a href="#">Management</a></li>
						<li><a href="#">Stratergy</a></li>
						<li><a href="#">Project Management</a></li></ul>
				</span>
			</div>
			<div class="btnG"><h3>Science</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Bio Chemistry</a></li>
						<li><a href="#">Earth Science </a></li>
						<li><a href="#">Environmental Science</a></li>
						<li><a href="#">Geology</a></li>
				</span>
			</div>
			<div class="btnG"><h3>Art</h3>
				<span class="tip">
					<ul>
						<li><a href="#">Grammer</a></li>
						<li><a href="#">Art history</a></li>
						<li><a href="#">Music</a></li>
						<li><a href="#">World history</a></li>
					</ul>
				</span>
			</div>

			<div id="displayr">
				<ul id="display">
					<li tabindex="1">file1</li>
					<li tabindex="1">file2</li>
					<li tabindex="1">file3</li>
					<li tabindex="1">file4</li>
					<li tabindex="1">file5</li>
					<li tabindex="1">file6</li>
					<li tabindex="1">file7</li>
					<li tabindex="1">file8</li>
					<li tabindex="1">file9</li>
					<li tabindex="1">file10</li>
					<li tabindex="1">file11</li>
					<li tabindex="1">file12</li>
					<li tabindex="1">file13</li>
					<li tabindex="1">file14</li>
					<li tabindex="1">file15</li>
					<li tabindex="1">file16</li>
					<li tabindex="1">file17</li>
					<li tabindex="1">file18</li>
					<li tabindex="1">file19</li>
					<li tabindex="1">file20</li>
				</ul>
				<input type="text" id="candidate" placeholder="Input file name....."/>
				<button onclick="remove()">Remove select file</button>
			</div>
	</div>
