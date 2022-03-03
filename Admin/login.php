<?php

$hostname = "localhost";
$user = "root";
$pass = "12345";
$database = "rior_hms";

//Admin attribute
$username = '';
$password = '';


$connectionString = mysqli_connect($hostname, $user, $pass, $database);

if (mysqli_connect_error()) {
  # code...
  echo 'Connection Failed ' . mysqli_connect_errno();
}

$error = '';
$success = '';

if ($connectionString) {

  if (isset($_POST['submit'])) {

    if (isset($_POST['name']) && isset($_POST['password'])) {
      # code...

      $username = htmlentities($_POST['name'], ENT_QUOTES);
      $password = htmlentities($_POST['password'], ENT_QUOTES);
      //Encrypting the password
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $sql = "SELECT Username, Password FROM rior_admin WHERE Username = '$username' AND Password = '$password'";
      $result = mysqli_query($connectionString, $sql);
      $count = mysqli_num_rows($result);
      if ($count > 0) {
        # code...
        $success = "Login Successfully";

        #starting a session
        session_start();

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['password'] = htmlentities($_POST['password']);

        $username = '';
        $password = '';

        header('Location: http://localhost/hms/Admin/Dashboard.php');

      } else {
        $error = "Incorrect Username or Password";
      }
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/login.css" />
  <title>Staff's | Login Portal</title>
</head>

<body>
  <div class="main">
    <div class="inner-div">
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <!-- <li><a href="#">Sign Up</a></li> -->
          <li><a href="#">Help</a></li>
        </ul>
      </nav>
    </div>

    <div class="head-sec">
      <center>
        <h1 class="heading" id="hostel">Hostel Management System</h1>
      </center>

      <h3 class="sub-head">Staff Login Portal</h3>
    </div>
    <style>
      .error {
        color: #F66;
        font-weight: 400;
      }

      p {
        text-align: center;
        margin-top: 2em;
      }
    </style>
    <p class="error"><?php echo $error; ?></p>
    <div class="login-div">
      <center>
        <form action="" method="post">
          
          <label for="Username">Username: </label>
          <input type="text" id="name" name="name" class="UserInfo" value="<?php echo $username; ?>" placeholder="Enter your Username here..." required />

          <label for="Password">Password: </label>
          <input type="password" id="pass" name="password" class="UserInfo" value="<?php echo $password; ?>" placeholder="Enter your Username here..." required />

          <button class="btn-log" type="submit" name="submit">Login</button>
          <!-- <button class="btn-log" type="reset">Clear</button> -->
        </form>
      </center>
    </div>
    <!-- <h5 class="account-reg">Don't Have an account? <a href="./register.html"> Register here</a></h4> -->
  </div>
</body>

</html>