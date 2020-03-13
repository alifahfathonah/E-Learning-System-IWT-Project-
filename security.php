<?php
session_start();
if( !isset( $_SESSION['nic']))
{
  header( 'Location:register.html' );
}
?>
<!doctype html>
<html>
  <head>
    <title>Login</title>
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

        if( ck_all( value1, "Question 1" ))
          if( ck_all( value2, "Question 2"))
            if( ck_all( value3, "Question 3" ))
              return true;
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
    </script>
  </head>
  <body class="" style="background-image:url('bin/33.jpg')">
    <div class="container">
      <div class="p-5 card" style="width:30%;position:absolute;top:40%;left:50%;transform:translate( -50%, -50% )">
        <h1 class="card-title" style="text-align:center">Security questions</h1>

        <form action="check.php" method="POST" name="myForm" onsubmit="return validate()">
          <div class="form-group">
            <select name="q1" class="form-control">
              <option value="pet">What is your pet name?</option>
              <option value="city">What city you most visited?</option>
              <option value="name">What is your childhood name?</option>
              <option value="bname">What is your bestfriend name?</option>
              <option value="hero">Who is your hero?</option>
            </select>
            <input type="text" name="a1" class="form-control" placeholder="Answer 1">
          </div>
          <div class="form-group">
            <select name="q2" class="form-control">
              <option value="pet">What is your pet name?</option>
              <option value="city" selected>What city you most visited?</option>
              <option value="name">What is your childhood name?</option>
              <option value="bname">What is your bestfriend name?</option>
              <option value="hero">Who is your hero?</option>
            </select>
            <input type="text" name="a2" class="form-control" placeholder="Answer 2">
          </div>
          <div class="form-group">
            <select name="q3" class="form-control">
              <option value="pet">What is your pet name?</option>
              <option value="city">What city you most visited?</option>
              <option value="name" selected>What is your childhood name?</option>
              <option value="bname">What is your bestfriend name?</option>
              <option value="hero">Who is your hero?</option>
            </select>
            <input type="text" name="a3" class="form-control" placeholder="Answer 3">
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-lg" style="width:100%">Submit</button>
        </form>
        <div>
      </div>
      </div>
    </div>
  </body>
</html>
