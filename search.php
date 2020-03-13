<?php
include 'connect.php';

if( isset($_POST['submit']))
{
  $value = $_POST['value'];
  $query = "SELECT * FROM course WHERE cname = '$value'";
  $result = mysqli_query( $connect, $query );
  $row = mysqli_num_rows( $result );
  $data = mysqli_fetch_array( $result );

  $string = $data['cname'];
  $name = strtolower( $string );

  if( $row == 1 )
  {
    if( $name == 'accounts' )
    {
      header( 'Location:courses/bussiness/accounts.php' );
    }
    elseif ( $name == 'communication' )
    {
      header( 'Location:courses/bussiness/communication.php');
    }
    elseif ( $name == 'finance' )
    {
      header( 'Location:courses/bussiness/finance.php');
    }
    elseif ( $name == 'sales' )
    {
      header( 'Location:courses/bussiness/sales.php');
    }
    elseif ( $name == 'animation' )
    {
      header( 'Location:courses/design/animation.php');
    }
    elseif ( $name == 'graphic design' )
    {
      header( 'Location:courses/design/graphic.php');
    }
    elseif ( $name == 'game design' )
    {
        header( 'Location:courses/design/game.php');
    }
    elseif ( $name == 'c++' )
    {
      header( 'Location:courses/programming/c++.php');
    }
    elseif ( $name == 'c#' )
    {
      header( 'Location:courses/programming/csharp.php');
    }
    elseif ( $name == 'java' )
    {
      header( 'Location:courses/programming/java.php');
    }
    elseif ( $name == 'microsoft office' )
    {
      header( 'Location:');
    }
    elseif ( $name == 'apple' )
    {
      header( 'Location:');
    }
    elseif ( $name == 'goole cloud' )
    {
      header( 'Location:');
    }
    elseif ( $name == 'css3' )
    {
      header( 'Location:');
    }
    elseif ( $name == 'php' )
    {
      header( 'Location:');
    }
    elseif ( $name == 'hypertext markup' )
    {
      header( 'Location:');
    }
    elseif ( $name == 'html' )
    {
      header( 'Location:');
    }
    elseif ( $name == 'dancing' )
    {
      header( 'Location:');
    }
    elseif ( $name == 'music' )
    {
      header( 'Location:');
    }
    elseif ( $name == 'drawing' )
    {
      header( 'Location:');
    }
    elseif ( $name == 'zoology' )
    {
      header( 'Location:');
    }
    elseif ( $name == 'microbiology' )
    {
      header();
    }
    elseif ( $name == 'botany' )
    {
      header();
    }
    elseif ( $name == 'physics' )
    {
      header();
    }
    elseif ( $name == 'electrical engineering' )
    {
      header();
    }
    elseif ( $name == 'material science' )
    {
      header();
    }
  }
  else
  {
    ?>
    <script> alert( "No results found!!" );location.href="index.php";</script>
    <?php
  }
}
