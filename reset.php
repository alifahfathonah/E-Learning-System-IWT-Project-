<?php
  //session_start();
  include 'connect.php';

  if( !isset($_SESSION['nic']))
  {
    header( 'Location:resetclick.php' );
  }

  if ( isset( $_POST['resetnow']))
  {
    if( !empty( $_POST['a1']) && !empty( $_POST['a2']) && !empty( $_POST['a3']) && !empty( $_POST['password']) && !empty( $_POST['repassword']) )
    {
      $nic = $_SESSION['nic'];
      $q1 = hash( 'SHA512', $_POST['q1']);
      $q2 = hash( 'SHA512', $_POST['q2']);
      $q3 = hash( 'SHA512', $_POST['q3']);
      $a1 = hash( 'SHA512', $_POST['a1']);
      $a2 = hash( 'SHA512', $_POST['a2']);
      $a3 = hash( 'SHA512', $_POST['a3']);

      $quary = "SELECT * FROM questions WHERE q1 = '$q1' AND q1 = '$q1' AND q1 = '$q1' AND nic = '$nic' AND a1 = '$a1' AND a2 = '$a2' AND a3 = '$a3'";
      $result = mysqli_query( $connect, $quary );
      $rows = mysqli_num_rows( $result );
      $data = mysqli_fetch_array( $result );

      if( $rows == 1 )
      {
        $password = hash( 'SHA512', $_POST['password'] );
        $repassword = hash( 'SHA512', $_POST['repassword'] );

        $upquery = "UPDATE users SET password = '$password' WHERE nic = '$nic'";
        if( !mysqli_query( $connect, $upquery ))
        {
          ?>
          <script>alert( "Password cannot change" );location.href="reset.php";</script>
          <?php
        }
        else
        {
          session_destroy();
          ?>
          <script>alert( "Password successfully changed" );location.href="login.html";</script>
          <?php
          session_destroy();
        }
      }
      else
      {
        //session_destroy();
        ?>
        <script>alert( "wrong answers" );location.href="reset.php";</script>
        <?php
      }
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
      var value1 = document.forms["myForm"]["q1"].value;
      var value2 = document.forms["myForm"]["q2"].value;
      var value3 = document.forms["myForm"]["q3"].value;
      var value4 = document.forms["myForm"]["password"].value;
      var value5 = document.forms["myForm"]["repassword"].value;

      if( ck_all( value1, "Answer 1" ))
        if( ck_all( value2, "Answer 2"))
          if( ck_all( value3, "Answer 3" ))
            if( ck_all( value4, "Password" ))
              if( ck_all( vlaue, "Re-password" ))
               if( ck_pass( value4, value5 ))
                  return true;
                else
                  return false;
              else
                return false;
            else
              return false;
          else
          return false;
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

    function ck_pass( valuex, valuey )
    {
      if( valuex == valuey )
      {
        return true;
      }
      else
      {
          alert( "Password must be same" );
          return false;
      }
    }
    </script>
  </head>
  <body class="" style="background-image:url('bin/33.jpg')">
    <div class="container">
      <div class="p-5 card" style="width:30%;position:absolute;top:40%;left:50%;transform:translate( -50%, -50% )">
        <h1 class="card-title" style="text-align:center">Reset Password</h1>
        <form action="reset.php" name="myForm" method="POST" onsubmit="return validate()">
          <div class="form-group">
            <select name="q1" class="form-control">
              <option value="pet">What is your pet name?</option>
              <option value="city">What city you most visited?</option>
              <option value="name">What is your childhood name?</option>
              <option value="bname">What is your bestfriend name?</option>
              <option value="hero">Who is your hero?</option>
            </select>
            <input type="text" name="a1" class="form-control" placeholder="First question answer" >
          </div>
          <div class="form-group">
            <select name="q2" class="form-control">
              <option value="pet">What is your pet name?</option>
              <option value="city" selected>What city you most visited?</option>
              <option value="name">What is your childhood name?</option>
              <option value="bname">What is your bestfriend name?</option>
              <option value="hero">Who is your hero?</option>
            </select>
            <input type="text" name="a2" class="form-control" placeholder="Second question ansewer" >
          </div>
          <div class="form-group">
            <select name="q3" class="form-control">
              <option value="pet">What is your pet name?</option>
              <option value="city">What city you most visited?</option>
              <option value="name" selected>What is your childhood name?</option>
              <option value="bname">What is your bestfriend name?</option>
              <option value="hero">Who is your hero?</option>
            </select>
            <input type="text" name="a3" class="form-control" placeholder="Third question ansewer" >
          </div>
          <div class="form-group">
            <lable for="nic">Password:</lable>
            <input type="password" name="password" class="form-control" placeholder="New password" >
          </div>
          <div class="form-group">
            <lable for="nic">Re-Password:</lable>
            <input type="password" name="repassword" class="form-control" placeholder="Re-enter new password" >
          </div>
          <input type="submit" name="resetnow" class="btn btn-primary btn-lg" value="Start" style="width:100%">
        </form>
        <div>
      </div>
      </div>
    </div>
  </body>
</html>
