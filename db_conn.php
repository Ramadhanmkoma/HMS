<?php

    $sname = "localhost";
    $uname = "root";
    $password = "";

    $db_name = "rior_hms";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {

        echo "Connection Failed";
        exit();

    }else {
        header(location: Dashboard.html);
    }
    
?>  