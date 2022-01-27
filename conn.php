<?php

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    // $stid = $_POST['stid'];
    $email= $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $phone_no = $_POST['number'];
    $gender = $_POST['gender'];
    $re_type_password = $_POST['re_type_password'];

    /* if (isset($_POST['Username']) && isset($_POST['Password'])) {
        include 'db_conn.php';
        header("Location: Dashboard.html");
    }else {
        echo "Fill the Username and Password";
    } */

    //Database connection
    $conn = new mysqli('localhost','root','','rior_hms');
    
    if ($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into student(firstName, lastName, phone_no, email, dob, gender) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisss", $firstName, $lastName, $phone_no, $email, $dob, $gender);
        $stmt->execute();
        echo "Successfully Registered!";
        header("Location: login.html");
        $stmt->close();
        $conn->close();
    }
?> 