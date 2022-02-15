<?php
   
   //Creating Connection
  $conn = mysqli_connect('localhost', 'root', '12345', 'rior_hms');

  //Check for Connection\
  if (mysqli_connect_errno()) {
    # code...
    echo 'Connection Failed '. mysqli_connect_errno();
  }

?>  