<?php

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $email= $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $re_password = $_POST['re_password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    var_dump($hashed_password);
    require 'db_conn.php';

    if ($conn) {
        # code...
        
        $query = "INSERT INTO reg_users (firstName, lastName, username, email, dob, pwd, number, gender) VALUES ('$firstName', '$lastName', '$username', '$email', '$dob', '$hashed_password', '$number', '$gender')";

        $result = $conn->query($query);
        
        //Free Results
        mysqli_free_result($result);    

        header("Location: http://localhost/hms/index.html");
    }

    
    mysqli_close($conn);
?> 