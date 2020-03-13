<?php
  include 'connect.php';

  if (isset($_POST['reset']))
  {
    $email = $_POST['email'];
    $nic = $_POST['nic'];

    $query1 = "SELECT * FROM users WHERE email = '$email' AND NIC = '$nic'";
    $result = mysqli_query( $connect, $query1 );
    $rows = mysqli_num_rows( $result );
    $data = mysqli_fetch_array( $result );
    $_SESSION['nic'] = $nic;

    if( $rows != 1 )
    {
      ?>
      <script>alert( "NIC and email not matching" );location.href="reset.php";</script>
      <?php
    }
    else
    {
      header( 'Location:reset.php' );
    }
  }
?>
<!doctype html>
<html>
  <head>
    <title>Reset password</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script>
    function validate()
    {
      var value1 = document.forms["myForm"]["email"].value;
      var value2 = document.forms["myForm"]["nic"].value;

      if( ck_all( value1, "Email" ))
        if( ck_all( value2, "NIC"))
          return true;
        else
          return false;
      else
        return false;
    }

    function ck_all( value, field )
    {
      if( value == "" || value == "NULL" )
      {
        alert( field + " cannot be empty" );
        return false;
      }
      else
      {
        return true;
      }
    }
    </script>
  </head>
  <body class="" style="background-image:url('bin/33.jpg')">
    <div class="container">
      <div class="p-5 card" style="width:30%;position:absolute;top:40%;left:50%;transform:translate( -50%, -50% )">
        <h1 class="card-title" style="text-align:center">Reset Password</h1>
        <form action="resetclick.php" name="myForm" method="POST" onsubmit="return validate()">
          <div class="form-group">
            <lable for="email">Email:</lable>
            <input type="text" name="email" class="form-control" placeholder="Enter Email" >
          </div>
          <div class="form-group">
            <lable for="nic">NIC Number:</lable>
            <input type="text" name="nic" class="form-control" placeholder="Enter NIC" >
          </div>
          <input type="submit" name="reset" class="btn btn-primary btn-lg" value="Start" style="width:100%">
        </form>
        <div>
          <p style="float:left">To go login page!<a href="login.html">Click here</a></p>
          <p><a href="login.html" style="float:right">Looking Login?</a></p>
        </div>
        <div>
      </div>
      </div>
    </div>
  </body>
</html>
