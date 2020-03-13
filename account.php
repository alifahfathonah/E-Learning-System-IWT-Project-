<?php
  include 'connect.php';

  if( $_SESSION['type'] != 'student' )
  {
    session_destroy();
    header( 'Location:login.html' );
  }

  if( !isset($_SESSION['nic']) )
  {
    header( 'Location:login.html' );
  }
  else
  {
    $nic = $_SESSION['nic'];
  }

  if( isset( $_POST['logout'] ) )
  {
    $stime = $_SESSION['time'];
    $logquery = "UPDATE log SET date = '$stime' WHERE nic = '$nic'";
    mysqli_query( $connect, $logquery );
    session_destroy();
    header('Location:login.html');
  }

  else if ( isset($_POST['reset'] ) )
  {
    if( !empty($_POST['cpassword']) && !empty($_POST['password']) && !empty($_POST['repassword']))
    {
      $nic = $_SESSION['nic'];
      $old_password = hash( 'SHA512', $_POST['cpassword']);
      $new_password = hash( 'SHA512', $_POST['password']);
      $renew_password = hash( 'SHA512', $_POST['repassword']);
      $query = "SELECT * FROM users WHERE nic = '$nic' AND password = '$old_password' ";
      $result = mysqli_query( $connect, $query );
      $row = mysqli_num_rows( $result );
      $data = mysqli_fetch_array( $result );
      if( $row == 1 )
      {
        if( $new_password == $renew_password )
        {
          $upquery = "UPDATE users SET password = '$new_password' WHERE nic = '$nic'";
          if( !mysqli_query( $connect, $upquery ) )
          {
            ?>
            <script>alert("Error can't change password" );</script>
            <?php
          }
          else
          {
            ?>
            <script>alert( "Password changed" );</script>
            <?php
          }
        }
        else
        {
          ?>
          <script>alert( "Password must be same" );</script>
          <?php
        }
      }
      else
      {
        ?>
        <script>alert( "password is wrong" );</script>
        <?php
      }
    }
    else
    {
      ?>
      <script>alert( "one or more fileds are empty" );</script>
      <?php
    }
  }
  else if( isset( $_POST['submit']))
  {
    if( !empty($_POST['select']) && !empty($_POST['content']))
    {
      $lec = $_POST['select'];
      $question = $_POST['content'];

    }
    else
    {
      ?>
      <script>alert( "Content must be not empty!" );</script>
      <?php
    }
  }

  $logquery = "SELECT * FROM log WHERE nic = '$nic'";
  $logresult = mysqli_query( $connect, $logquery );
  $logrows = mysqli_num_rows( $logresult );
  $logdata = mysqli_fetch_array( $logresult );
  if( $logrows == 1 )
  {
    $time = $logdata['date'];
  }
?>
<!doctype html>
<html>
<head>
  <title>My Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
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
<body>
  <div class="card">
    <h1 class="card-title text-center" >My Account</h1>
    <form action="account.php" method="post">
    <input type="submit" class="btn btn-primary" value="LOGOUT" name="logout" style="width:10%;position: absolute;left:70%;top:20%">
    </form>
    <form action="courses.php" method="post">
    <input type="submit" class="btn btn-primary" value="Courses" name="mycourses" style="width:10%;position: absolute;left:82%;top:20%">
    </form>
  </div>

  <div class="container">
    <div class="p-5 card">
      <h5 class="text-center">Update password</h5>
      <form action="account.php" method="post">
        <div class="d-flex justify-content-center flex-column">
          <div class="form-group w-50">
            <lable for="cpass">Current Password:</label>
            <input type="password" class="form-control" placeholder="Enter current password" name="cpassword">
          </div>
          <div class="form-group w-50">
            <lable for="pass">New Password:</label>
            <input type="password" class="form-control" placeholder="Enter New password" name="password">
          </div>
          <div class="form-group w-50">
            <lable for="pass">Re-Enter New Password:</label>
            <input type="password" class="form-control" placeholder="Re-Enter New password" name="repassword">
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <input type="submit" class="btn btn-primary" value="Change password" name="reset" >
        </div>
      </form>
    </div>
  </div>

  <div class="card">
    <div>
  		<h1 class="text-center">Download History</h1>
  			<table style="width:60%;margin-left:20%">
  		<tr>
  			<th>Date</th>
  			<th>Id</th>
  			<th>Type</th>
  			<th>Course</th>
  		</tr>
  		<?php
  			$que="SELECT download.date,download.mid,course.cname,course_materials.type from ((download inner join course_materials on course_materials.mid=download.mid) inner join course on
  					course.cid=course_materials.cid)where nic='$nic'";

  			$res=mysqli_query($connect,$que);

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
</div>
  <div class="container">
    <div class="card">
      <?php echo "<h5 class='text-center'>Your last activity: ". $time ?> </h5>
    </div>
  </div>
</body>
</html>
