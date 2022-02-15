<?php

if (isset($_POST['submit'])) {
  session_start();

  $_SESSION['name'] = htmlentities($_POST['name']);
  $_SESSION['password'] = htmlentities($_POST['password']);
  #echo $_SESSION['name'];
  header('Location: Dashboard.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/login.css" />
  <title>Tenant's | Login Portal</title>
</head>

<body>
  <div class="main">
    <div class="inner-div">
      <nav>
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li><a href="./register.php">Sign Up</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </nav>
    </div>

    <div class="head-sec">
      <center>
        <h1 class="heading" id="hostel">Hostel</h1>
        <h1 class="heading" id="Management"> Management</h1>
        <h1 class="heading" id="System"> System</h1>
      </center>

      <h3 class="sub-head">Tenant Login Portal</h3>
    </div>
    <div class="login-div">
      <center>
        <form action="" method="post">
          <label for="Username">Username/Email: </label>
          <input type="text" id="name" class="UserInfo" placeholder="Enter your Username here..." name="name" required />

          <label for="Password">Password: </label>
          <input type="password" id="pass" class="UserInfo" placeholder="Enter your Username here..." name="password" required />

          <button class="btn-log" type="submit" name="submit">Login</button>
          <!-- <button class="btn-log" type="reset">Clear</button> -->
        </form>
        <h5 class="account-reg">Are you a staff? <a href="./Admin/login.html"> Login here </a></h4>
      </center>
    </div>
    <h5 class="account-reg">Don't Have an account? <a href="./register.html"> Register here</a></h4>
  </div>
</body>

</html>