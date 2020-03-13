<?php
  //session_start();
  include 'connect.php';
  if( !isset( $_SESSION['nic'] ) )
  {
    session_destroy();
    header( 'Location:register.html' );
  }
  $NIC = $_SESSION['nic'];

  if( isset( $_POST['submit']))
  {
    $q1 = hash( 'SHA512', $_POST['q1']);
    $q2 = hash( 'SHA512', $_POST['q2']);
    $q3 = hash( 'SHA512', $_POST['q3']);
    $a1 = hash( 'SHA512', $_POST['a1']);
    $a2 = hash( 'SHA512', $_POST['a2']);
    $a3 = hash( 'SHA512', $_POST['a3']);

    $query = "INSERT INTO questions VALUES ( '', '$NIC', '$q1', '$a1', '$q2', '$a2', '$q3', '$a3' )";

    if( !mysqli_query( $connect, $query ))
    {
      ?>
      <script>alert( "Error!! can't insert data" );location.href="security.php";</script>
      <?php
    }
    else
    {
      ?>
      <h1 style="position:fixed;top:40%;left:30%;font-size:3em">Account successfully created!</h1>
      <p style="position:fixed;top:50%;left:36%">Site will automatically redirect to login page after 3 seconds!</p>
      <?php
      header( 'refresh:3;url=login.html');
      session_destroy();
    }
  }

?>
<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
</html>
