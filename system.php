<?php
include 'connect.php';

if( isset( $_POST['login'] ) )
{
  if( isset($_POST['email']) && isset( $_POST['password']) )
  {
    $email = $_POST['email'];
    $password = hash( "SHA512", $_POST['password'] );

    $quary = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query( $connect, $quary );
    $rows = mysqli_num_rows( $result );
    $data = mysqli_fetch_array( $result );

    if( $rows == 1 )
    {
      $_SESSION['user'] = $data['email'];
      $_SESSION['type'] = $data['type'];
      if( $data['type'] == 'admin' )
      {
        header( 'Location:admin.php' );
      }
      elseif ( $data['type'] == 'prof' )
      {
        header( 'Location:prof.php' );
      }
      elseif ( $data['type'] == 'lec' )
      {
        header( 'Location:lec.php' );
      }
      elseif ( $data['type'] == 'coordinator' )
      {
        header( 'Location:cor.php' );
      }
      elseif ( $data['type'] == 'student' )
      {
        session_destroy();
        header( 'Location:login.html' );
      }
    }
    else
    {
      ?>
      <script>alert( "Email or password wrong" );location.href="adminlogin.html";</script>
      <?php
    }
  }
}

if( isset( $_POST['logout'] ) )
{
  session_destroy();
  header( 'Location:adminlogin.html' );
}
