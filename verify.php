<?php
  //session_start();
  //Registration form
  include 'connect.php';

  if( isset( $_POST['register']))
  {
    if( !empty( $_POST['fname']) && !empty( $_POST['lname']) && !empty( $_POST['email']) && !empty( $_POST['address']) && !empty( $_POST['NIC']) && !empty( $_POST['institute']) && !empty( $_POST['password'])&& !empty( $_POST['repassword']))
    {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $NIC = $_POST['NIC'];
      $institute = $_POST['institute'];
      $password = hash( 'SHA512', $_POST['password'] );
      $repassword = hash( 'SHA512', $_POST['repassword']);

      if( $password == $repassword )
      {
        $query = "INSERT INTO users VALUES( '$NIC', '$email', '$fname', '$lname', '$address',  '$institute', '$password', 'student' )";
        if( !mysqli_query( $connect, $query ) )
        {
          ?>
          <script>alert("Error Can't create account");location.href = 'register.html';</script>";
          <?php
        }
        else
        {
          date_default_timezone_set( "Asia/Colombo" );
          $logtime = date("y-m-d-h-i-s");
          $logquery = "INSERT INTO log VALUES( '', '$logtime', '$NIC' )";
          mysqli_query( $connect, $logquery );
          $_SESSION['nic'] = $NIC;
          header( 'Location:security.php');
        }
      }
    }
  }

  //Login Function starts
  else if ( isset( $_POST['login']) )
  {
    if( !empty($_POST['email']) && !empty($_POST['password']) )
    {
      $email = $_POST['email'];
      $password = hash( "SHA512", $_POST['password'] );
      $quary = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
      $result = mysqli_query( $connect, $quary );
      $count = mysqli_num_rows( $result );
      $data = mysqli_fetch_array( $result );
      if( $count == 1 )
      {
        date_default_timezone_set( "Asia/Colombo" );
        $time = date("y-m-d-h-i-s");

        $_SESSION['time'] = $time;
        $_SESSION['nic'] = $data['nic'];
        $_SESSION['user'] = $data['email'];
        $_SESSION['type'] = $data['type'];
        header( 'Location:courses.php');
      }
      else
      {
        ?>
        <script>alert ("Password or email is Incorect");location.href = 'login.html';</script>
        <?php
      }
    }
  }
    //Password Reset function starts
  else if ( isset( $_POST['reset']) )
  {
    if( !empty($_POST['email']) && !empty( $_POST['NIC'] ) )
    {
      $NIC = $_POST['NIC'];
      $email = $_POST['email'];
      $quary = "SELECT * FROM users WHERE email = '$email' AND NIC = '$NIC'";
      $result = mysqli_query( $connect, $quary );
      $count = mysqli_num_rows( $result );
      $data = mysqli_fetch_array( $result );

      if( $count == 1 )
      {
        $_SESSION['user'] = $data['email'];
        header( 'Location: reset.php' );
      }
      else {
        echo "Error";
      }
    }
  }
//End of the functions
?>

<!DOCTYPE html>
<html>
<head>
  <body>
    <div class="image">
      <img src="bin/Elearn.jpg" width="100%" height="100%" alt="" style="opacity:.5;position: relative;z-index:-1;bottom:20%;">
    </div>
  </body>
</html>
