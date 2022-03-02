<?php

    $firstName = htmlspecialchars($_POST['firstName'], ENT_QUOTES);
    $lastName = htmlspecialchars($_POST['lastName'], ENT_QUOTES);
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
    $email= htmlspecialchars($_POST['email'], ENT_QUOTES);
    $dob = htmlspecialchars($_POST['dob'], ENT_QUOTES);
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $number = htmlspecialchars($_POST['number'], ENT_QUOTES);
    $gender = htmlspecialchars($_POST['gender'], ENT_QUOTES);
    $roleid = htmlspecialchars($_POST['userrole'], ENT_QUOTES);
    $re_password =htmlspecialchars( $_POST['re_password'], ENT_QUOTES);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    var_dump($hashed_password);
    require 'db_conn.php';

    if ($conn) {
        # code...
        
        $query = "INSERT INTO reg_users (firstName, lastName, username, email, dob, pwd, number, gender) VALUES ('$firstName', '$lastName', '$username', '$email', '$dob', '$hashed_password', '$number', '$gender')";

        $result = $conn->query($query);
        
        //Free Results

        header("Location: http://localhost/hms/index.html");
    }

    //mysqli_free_result($result);    
    
    mysqli_close($conn);
?> 