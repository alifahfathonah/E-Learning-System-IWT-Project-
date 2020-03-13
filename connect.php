<?php
  session_start();
//E - Learning system database connection
//Database name: elearning
//Relations:

  $connect = mysqli_connect( "localhost", "admin", "123456789", "elearning" );
  if( mysqli_connect_errno() )
  {
    echo "Can't establish connection with the database";
  }
  else
  {
    //Uncomment to use
    //echo "Database Connection successful";
  }
?>
