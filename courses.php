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
	else if ( isset( $_POST['home']))
	{
		header( 'Location:index.php' );
	}
	else if ( isset( $_POST['accounts']))
	{
		header( 'Location:courses/bussiness/accounts.php' );
	}
	else if ( isset( $_POST['finance']))
	{
		header( 'Location:courses/bussiness/finance.php' );
	}
	else if ( isset( $_POST['game']))
	{
		header( 'Location:courses/design/game.php' );
	}
	else if ( isset( $_POST['graphic']))
	{
		header( 'Location:courses/design/graphic.php' );
	}
	else if ( isset( $_POST['animation']))
	{
		header( 'Location:courses/design/animation.php' );
	}
	else if ( isset( $_POST['music']))
	{
		header( 'Location:courses/art/music.php' );
	}
	else if ( isset( $_POST['dancing']))
	{
		header( 'Location:courses/art/dancing.php' );
	}
	else if ( isset( $_POST['drawing']))
	{
		header( 'Location:courses/art/drawing.php' );
	}
	else if ( isset( $_POST['management']))
	{
		header( 'Location:courses/bussiness/communication.php' );
	}
	else if ( isset( $_POST['sales']))
	{
		header( 'Location:courses/bussiness/sales.php' );
	}
	else if ( isset( $_POST['csharp']))
	{
		header( 'Location:courses/Programming/csharp.php' );
	}
	else if ( isset( $_POST['c++']))
	{
		header( 'Location:courses/Programming/c++.php' );
	}
	else if ( isset( $_POST['java']))
	{
		header( 'Location:courses/Programming/java.php' );
	}
  else if ( isset( $_POST['zoology']))
	{
		header( 'Location:courses/science/zoology.php' );
	}
  else if ( isset( $_POST['microbiology']))
	{
		header( 'Location:courses/science/microbiology.php' );
	}
  else if ( isset( $_POST['botany']))
	{
		header( 'Location:courses/science/botany.php' );
	}

?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org//1999/xhtml">
<head>
	<title>All cources</title>
	<link rel="stylesheet" href="css/indexSTY.css" type="text/css">
	<link rel="stylesheet" href="css/prof.css" type="text/css">
	<link rel="stylesheet" href="css/admin.css" type="text/css">
	<link rel="stylesheet" href="css/all.css" type="text/css">
	<meta charset="utf-8"name="viewport" content="width-device-width, initial-scale=1.0"/>

	<script src="js/prof.js"></script>
	<style>
		.mimg{
			background-image:url(img/par1.jpg);
			height:350px;
			padding-top:50px;
			padding-left:3%;
		}

		.body{
			object-fit:cover;
		}

		.card{
		background-color:white;
		}
	</style>

</head>

<body class="body" background="img/bac1.jpg"style=" background-repeat: repeat;">
<?php
if( !isset($_SESSION['nic']))
{
?>
	<div class="tophed">
			<div class="in">
			<form action="cources.php" method="post">
				<input type="submit" alt="Submit" value="Login" name="login" class="link"/></form>
			</div>
			<div class="in">
			<form action="courses.php" method="post">
				<input type="submit" alt="Submit" value="Home" name="home" class="link"/></form>
			</div>
	</div>
	<?php
	}
	else
	{
	?>
		<div class="tophed">
				<div class="in">
				<form action="courses.php" method="post">
					<input type="submit" alt="Submit" value="Logout" name="logout" class="link"/></form>
				</div>
				<div class="in">
				<form action="courses.php" method="post">
					<input type="submit" alt="Submit" value="Home" name="home" class="link"/></form>
				</div>
		</div>
		<?php
	}
	?>
	<div class="mimg">

	<h1><i>Choose Your Path</i></h1>
	</div>


	<div class="menu">
		<form action="index.php" method="post">
		<nav>
			<ul>
				<li><a href="#">Web Designing</a></li>
				<li><a href="#">Programming</a></li>
				<li><a href="#">Productivity</a></li>
				<li><a href="#">Engineering</a></li>
				<li><a href="#">Graphic design</a></li>
				<li><a href="#">Business</a></li>
				<li><a href="#">Science</a></li>
				<li><a href="#">Art</a></li>
				<li><input type="text" placeholder="Search..." name="value"><input class="submit" type="image" src="icons/i3.png" alt="Submit" width="30" height="30" name="submit"></li>
			</ul>
		</nav>
	</form>
	</div>
	<form action="courses.php" method="post">
	<div class="bod">
	<hr>
		<div class="name">
			<b>Web Development</b>
		</div>
		<hr>

		<div class="lec" style="height:300px;">
			<div class="card" >
				<img src="n/html.jpg"  style="width:100%">
				<h2>HTML</h2>
				<p><button>Start</button></p>
			</div>

			<div class="card">
				<img src="n/css.jpg"  style="width:100%">
				<h2>CSS3</h2>
				<p><button>Start</button></p>
			</div>

			<div class="card">
				<img src="n/php1.jpg"  style="width:100%">
				<h2>PHP</h2>
				<p><button>Start</button></p>
			</div>
		</div>
		<hr>

		<div class="name">
			<b>Programming</b>
		</div>
		<hr>
		<div class="lec" style="height:300px;">
			<div class="card" >
				<img src="n/c++2.jpg"  style="width:100%">
				<h2>C++</h2>
				<p><button type="submit" name="c++">Start</button></p>
			</div>

			<div class="card">
				<img src="n/c.jpg"  style="width:100%">
				<h2>C#</h2>
				<p><button type="submit" name="csharp">Start</button></p>
			</div>

			<div class="card">
				<img src="n/j3.png"  style="width:100%">
				<h2>JAVA</h2>
				<p><button type="submit" name="java">Start</button></p>
			</div>
		</div>
		<hr>



		<div class="name">
			<b>Engineering</b>
		</div>
		<hr>
		<div class="lec" style="height:300px;">
			<div class="card" >
				<img src="n/c1.jpg"  style="width:100%">
				<h2>Physics</h2>
				<p><button>Start</button></p>
			</div>

			<div class="card">
				<img src="n/ee2.jpg"  style="width:100%">
				<h3 style="font-size:1.32vw;line-height:1;">Electrical &nbsp Engineering</h3>
				<p><button>Start</button></p>
			</div>

			<div class="card">
				<img src="n/met.png"  style="width:100%">
				<h3 style="font-size:1.4vw;">Material Science</h3>
				<p><button>Start</button></p>
			</div>
		</div>
		<hr>

		<div class="name">
			<b>Design</b>
		</div>
		<hr>
		<div class="lec" style="height:300px;">
			<div class="card" >
				<img src="n/gra1.jpg"  style="width:100%">
				<h2>Graphic Design</h2>
				<p><button type="submit" name="graphic" fromaction="/courses/design/graphic.php">Start</button></p>
			</div>

			<div class="card">
				<img src="n/gm2.jpg"  style="width:100%">
				<h2>Game Design</h2>
				<p><button type="submit" name="game" fromaction="/courses/design/game.php">Start</button></p>
			</div>

			<div class="card">
				<img src="n/3d.png"  style="width:100%">
				<h2>3D Animation</h2>
				<p><button type="submit" name="animation" fromaction="/courses/design/animation.php">Start</button></p>
			</div>
		</div>
		<hr>

		<div class="name">
			<b>Business</b>
		</div>
		<hr>
		<div class="lec" style="height:300px;padding-left:20%;">
			<div class="card" >
				<img src="n/fi.jpg" style="width:100%">
				<h2>Finance</h2>
				<p><button type="submit" name="finance" fromaction="/courses/bussiness/Finance.php">Start</button></p>
			</div>

			<div class="card">
				<img src="n/acc.jpg" style="width:100%">
				<h2>Accounts</h2>
				<p><button type="submit" name="accounts" fromaction="/courses/bussiness/accounts.php">Start</button></p>
			</div>

			<div class="card">
				<img src="n/man.jpg"  style="width:100%">
				<h2>Management</h2>
				<p><button type="submit" name="management" fromaction="/courses/bussiness/communication.php">Start</button></p>
			</div>
			<div class="card">
				<img src="n/sal.jpg"  style="width:100%">
				<h2>Sales</h2>
				<p><button type="submit" name="sales" fromaction="/courses/bussiness/sales.php">Start</button></p>
			</div>
		</div>
		<hr>

		<div class="name">
			<b>Science</b>
		</div>
		<hr>
		<div class="lec" style="height:300px;">
			<div class="card" >
				<img src="n/bio.jpg"  style="width:100%">
				<h2>Microbiology</h2>
				<p><button type="submit" name="microbiology" fromaction="/courses/bussiness/sales.php">Start</button></p>
			</div>

			<div class="card">
				<img src="n/geo.jpg"  style="width:100%">
				<h2>Zoology</h2>
				<p><button type="submit" name="zoology" fromaction="/courses/bussiness/sales.php">Start</button></p>
			</div>

			<div class="card">
				<img src="n/en.jpg"  style="width:100%">
				<h2>Botany</h2>
				<p><button type="submit" name="botany" fromaction="/courses/bussiness/sales.php">Start</button></p>
			</div>
		</div>
		<hr>

		<div class="name">
			<b>Art</b>
		</div>
		<hr>
		<div class="lec" style="height:300px;">
			<div class="card" >
				<img src="n/mu.jpg"  style="width:100%">
				<h2>Music</h2>
				<p><button type="submit" name="music"fromaction="/courses/art/music.php">Start</button></p>
			</div>

			<div class="card">
				<img src="n/art.jpeg"  style="width:100%">
				<h2>Drawing</h2>
				<p><button type="submit" name="drawing"fromaction="/courses/art/drawing.php">Start</button></p>
			</div>

			<div class="card">
				<img src="n/grm.jpg"  style="width:100%">
				<h2>Dancing</h2>
				<p><button type="submit" name="dancing"fromaction="/courses/art/dancing.php">Start</button></p>
			</div>
		</div>
		<hr>

			<div class="name">
			<b>Productivity</b>
		</div>
		<hr>
		<div class="lec" style="height:300px;">
			<div class="card" >
				<img src="n/off1.jpg"  style="width:100%">
				<h2>MS Office</h2>
				<p><button >Start</button></p>
			</div>


			<div class="card">
				<img src="n/clou.png"  style="width:100%">
				<h2>Google cloude</h2>
				<p><button>Start</button></p>
			</div>

			<div class="card">
				<img src="n/app.jpg"  style="width:100%">
				<h2>Apple</h2>
				<p><button>Start</button></p>
			</div>
		</div>
		<hr>
	</div>
</form>
</body>
</html>
