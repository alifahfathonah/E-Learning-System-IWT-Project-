<?php
 include 'connect.php';
	if( isset( $_POST['logout']))
	{
		session_destroy();
		header( 'Location:index.php' );
	}
	else if ( isset( $_POST['login']))
	{
		header( 'Location:login.html' );
	}
	else if ( isset( $_POST['register']))
	{
		header( 'Location:register.html' );
	}
	else if ( isset( $_POST['admin']))
	{
		header( 'Location:admin.php' );
	}
	else if ( isset( $_POST['prof']))
	{
		header( 'Location:pro.php' );
	}
	else if ( isset( $_POST['student']))
	{
		header( 'Location:account.php' );
	}
  else if ( isset( $_POST['co']))
	{
		header( 'Location:cor.php' );
	}
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org//1999/xhtml">
<head>
	<title>E-academy</title>
	<link rel="stylesheet" href="css/indexSTY.css">
	<meta charset="utf-8"name="viewport" content="width-device-width, initial-scale=1.0"/>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body class="body">
	<?php
	if( !isset( $_SESSION['user']) )
	{
	?>
	<div class="tophed">
		<nav>
			<ul>
				<form action="index.php" method="POST">
				<li><input type="submit" class="btn btn-basic btn-md" value="Login" style="position:fixed;top:1%;left:82%;width:6%" name="login"></li>
				<li><input type="submit" name="register" class="btn btn-basic"  value="Register" style="position:fixed;top:1%;left:90%"></li>
				</form>
			</ul>
		</nav>
	</div>
	<?php
	}
	else
	{
	?>
		<div class="tophed">
			<nav>
				<ul>
					<?php
					if( $_SESSION['type'] == 'admin' )
					{
					?>
					<form action="index.php" method="POST">
					<li><input type="submit" class="btn btn-basic btn-md" value="My Account" style="position:fixed;top:1%;left:80%" name="admin"</li>
					</form>
					<?php
					}
					else if( $_SESSION['type'] == 'prof' )
					{
					?>
					<form action="index.php" method="POST">
					<li><input type="submit" class="btn btn-basic btn-sm" value="My Account" style="position:fixed;top:1%;left:80%" name="prof"</li>
					</form>
					<?php
					}
					else if( $_SESSION['type'] == 'student' )
					{
					?>
					<form action="index.php" method="POST">
					<li><input type="submit" class="btn btn-basic btn-md" value="My Account" style="position:fixed;top:1%;left:80%" name="student"></li>
					</form>
					<?php
					}
          else if( $_SESSION['type'] == 'coordinator' )
					{
					?>
					<form action="index.php" method="POST">
					<li><input type="submit" class="btn btn-basic btn-md" value="My Account" style="position:fixed;top:1%;left:80%" name="co"></li>
					</form>
					<?php
					}
					?>
					<form action="index.php" method="POST">
						<input type="submit" name="logout" class="btn btn-basic"  value="logout" style="position:fixed;top:1%;left:90%">
					</form>
				</ul>
			</nav>
		</div>
	<?php
	}
	?>
	<div class="mimg">
		<h1><i>Choose Your Passion....</i></h1>
		<p id="para"><i><b>Success is the result of perfection, hard work,<br> learning from failure, loyalty, and persistence.
		<br><br>Our products make learning easier. Learn from <br>experts all around the world, achive your goals....</i></p>
			</b>
	</div>

	<div class="menu">
    <form action="search.php" method="POST">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="courses.php">Subjects</a></li>
				<li><a href="articles.html">Article</a></li>
				<li><a href="aboutus.html">About Us</a></li>
				<li><input type="text" name="value" placeholder="Search..."><input class="btn" type="submit" name="submit" style="margin:0;margin-left:1%" alt="Submit" width="30" height="25"></li>
      </ul>
		</nav>
    </form>
	</div>

	<div class="icon">
		<div class="type"><figure><img src="icons/book.png"></figure><br><br><br>
			<p><b>Learn</b><br>More than 1 Million resources to learn!</p></div>
		<div class="type"><img src="icons/qu.png"><br><br><br>
			<p><b>Qualify</b><br>Worldwide recognized certificates</p></div>
		<div class="type"><img src="icons/re.png"><br><br><br>
			<p><b>Earn Respect</b><br>Achive Your Goals With Respect</p></div>
	</div>

	<div class="cont">
		<div class="one">
			<a href="3"><div class="cim" style="background-image:url(img/webdes1.jpg);height:250px"><div class="title"><h2>Web Designing</h2></div></a></div>
			<a href="3"><div class="cim" style="background-image:url(img/pro.jpg);height:250px"><div class="title"><h2>Programming</h2></div></a></div>
			<a href="3"><div class="cim" style="background-image:url(img/pod.jpg);height:250px"><div class="title"><h2>Productivity</h2></div></a></div>
			<a href="3"><div class="cim" style="background-image:url(img/eng.jpg);height:250px"><div class="title"><h2>Engineering</h2></div></a></div>
		</div>

		<div class="one">
			<a href="3"><div class="cim" style="background-image:url(img/gap.jpg);height:250px"><div class="title"><h2>Graphic design</h2></div></a></div>
			<a href="3"><div class="cim" style="background-image:url(img/bis.jpg);height:250px"><div class="title"><h2>Business</h2></div></a></div>
			<a href="3"><div class="cim" style="background-image:url(img/sei.jpg);height:250px"><div class="title"><h2>Science</h2></div></a></div>
			<a href="3"><div class="cim" style="background-image:url(img/art1.jpg);height:250px"><div class="title"><h2>ART</h2></div></a></div>
		</div>
	</div>
	<hr>
	<div class="allco">
		<h2><a href="courses.html">See all courses</a></h2>
	</div>
	<hr>
	<div style="color:white; background-color:gray;text-align:center;width:100%;font-size:1.5vw;"><h2>Lecture Pannel</h2></div>
	<div class="lec">
		<div class="card">
			<img src="bin/prof.jpg" alt="John" style="width:100%">
			<h2>Prof.Jagath</h2>
			<p class="title">Professor in charge</p>
			<p>Harvard University</p>
		 <p><button>Contact</button></p>
		</div>

		<div class="card" style="z-index:-1;">
			<img src="bin/admin.jpg" alt="John" style="width:100%">
			<h2>Kasun( MSc )</h2>
			<p class="title" style="font-size:1vw;">CEO, Founder & Admin</p>
			<p style="font-size:0.9972vw;">California Institute of Technology</p>
		 <p><button>Contact</button></p>
		</div>

		<div class="card" style="z-index:-1;">
			<img src="bin/lecturer.jpg" alt="John" style="width:100%">
			<h2>Malshi Perera</h2>
			<p class="title">CEO & Founder</p>
			<p>Harvard University</p>
		 <p><button>Contact</button></p>
		</div>
		<div class="card" style="z-index:-1;">
			<img src="img/tec2.jpg" alt="John" style="width:100%">
			<h2>John Doe</h2>
			<p class="title">CEO & Founder</p>
			<p>Harvard University</p>
		 <p><button>Contact</button></p>
		</div>

		<div class="card" style="z-index:-1;">
			<img src="img/tec2.jpg" alt="John" style="width:100%">
			<h2>John Doe</h2>
			<p class="title">CEO & Founder</p>
			<p>Harvard University</p>
		 <p><button>Contact</button></p>
		</div>
	</div>

	<section id="section5">
		<div class="container">
		  <div class="boxes">
			<img src="icons/dwn.png" width="40%" height="40%">
			<h3>Offline Content</h3>
		  </div>
		  <div class="boxes">
			<img src="icons/mp.png" width="40%" height="40%">
			<h3 id="boxes">High Quality MP4 Content</h3>
		  </div>
		  <div class="boxes">
			<img src="icons/glo.png" width="40%" height="40%">
			<h3>Access Anywere</h3>
		  </div>
		  <div class="boxes">
			<img src="icons/com.png" width="40%" height="40%">
			<h3>Large Community Support</h3>
		  </div>
		</div>
	</section>
	<hr>



	<footer id="footer">
	  <div class="container">
		<p>Copyright &copy All Rights Reserved 2018</p>
	  </div>
	</footer>
</body>
</html>
