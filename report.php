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
<html>
	<head>
		<title>Report</title>
		<link rel="stylesheet" href="report.css" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
		if( isset($_SESSION['nic']))
		{
		?>
		<form action="report.php" method="post">
			<input type="submit" class="btn btn-primary" style="z-index:1;position:absolute;top:2%;left:90%;width:8%" name="logout" value="LOGOUT">
			<input type="submit" class="btn btn-primary" style="z-index:1;position:absolute;top:2%;left:80%;width:8%" name="home" value="HOME">
		</form>
		<?php
		}
		else
		{
		?>
		<form action="report.php" method="post">
			<input type="submit" class="btn btn-primary" style="z-index:1;position:absolute;top:2%;left:90%;width:8%" name="logout" value="LOGOUT">
			<input type="submit" class="btn btn-primary" style="z-index:1;position:absolute;top:2%;left:80%;width:8%" name="home" value="HOME">
		</form>
		<?php
		}
		?>
		<div class="top">
			<div class="mar">
				<script language="JavaScript" type="text/javascript">
					var d=new Date();
					var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
					var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
				</script>

				<div style="font-size: 15pt;padding-top:5px; height: 26px;text-align: center; width: 256px; z-index: 100; left: 296px; position: absolute; top: 20px; color:white">
				<script language="JavaScript" type="text/javascript">
					document.write(TODAY);
				</script>
			</div>
		</div>

			<h1><u>Report</u></h1>
			<div class="select">
				<form method="post" action="report.php">
					<select name="category" id="cat">
						<option>Select Category</option>
						<?php

							$qu1="SELECT catogory FROM course GROUP BY catogory ";
							$res1=mysqli_query($connect,$qu1);
							while($row1=mysqli_fetch_array($res1))
							{
								$rdata1=$row1['catogory'];
							?>
								<option value="<?php echo $rdata1; ?>"><?php echo $rdata1; ?></option>
							<?php
							}
						?>
					</select> &nbsp;&nbsp;

					<select name="course" id="cos" hidden>
						<option>Select Courses</option>
						<?php
							$qu2="SELECT cname FROM course";
							$res2=mysqli_query($connect,$qu2);
							while($row2=mysqli_fetch_array($res2))
							{
								$id2=$row2['cid'];
								$rdata2=$row2['cname'];
							?>
								<option value="<?php echo $id2; ?>"><?php echo $rdata2; ?></option>
							<?php
							}
						?>
					</select>

					<input method="post"  type="radio" name="typ" checked="checked" value="cate" hidden>&nbsp;&nbsp;
					<input method="post" type="radio" name="typ"  value="cour" hidden>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input method="post" type="submit" name="submit" class="submit" value="submit">
					<br><br>
					<table border="1" class="tab">
						<tr>
							<th>Course
							<th>No of student
						</tr>
						<?php
							if(isset($_POST['submit']))
							{
								if(isset($_POST['typ']))
								{
									if($_POST['typ']=='cour')
									{
										$stem=$_POST['course'];

										$qu3="select download.mid,count(nic) as number
										from ((download inner join course_materials on course_materials.mid=download.mid)
										inner join course on course_materials.cid=course.cid and course.cname='$stem')
										group by download.mid;";

										$res3=mysqli_query($connect,$qu3);
											while($row3=mysqli_fetch_array($res3))
											{
												$mid=$row3['mid'];
												$scount=$row3['number'];
						?>
												<tr>
													<td><?php echo $mid; ?></td>
													<td><?php echo $scount; ?></td>
												</tr>
											<?php
											}
									}

									else
									{
										$stem1=$_POST['category'];

										$qu4="SELECT course.cname as cnm,count(download.mid)as no, catogory
										from ((download inner join course_materials on download.mid=course_materials.mid)
										inner join course on course.cid=course_materials.cid)
										group by course.cname
										having catogory='$stem1'";

										$res4=mysqli_query($connect,$qu4);
											while($row4=mysqli_fetch_array($res4))
											{
												$categ=$row4['cnm'];
												$items=$row4['no'];
						?>
												<tr>
													<td><?php echo $categ; ?></td>
													<td><?php echo $items; ?></td>
												</tr>
											<?php
											}
									}
								}
							}
						?>
						<tr>
						</tr>
					</table>
				</form>
			</div>

			<script>

				function fun1()
				{
					document.getElementById('cat').disabled = false;
					document.getElementById('cos').disabled = true;
					document.getElementById('1').disabled=false;
					document.getElementById('2').disabled=true;
				}
				function fun2()
				{
					document.getElementById('cat').disabled = true;
					document.getElementById('cos').disabled = false;
					document.getElementById('1').disabled=true;
					document.getElementById('2').disabled=false;
				}

				window.onload=fun1;
			</script>
			<div class="mar" style="margin-top:10xp;"></div>
		</div>
	</body>

</html>
