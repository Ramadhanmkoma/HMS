<?php
// Creating Database Connection 
$service = 'localhost';
$db_username = 'root';
$db_pass = '12345';
$dbName = 'rior_hms';

$conn = mysqli_connect($service, $db_username, $db_pass, $dbName);
$username = '';
$password = '';
$error = '';
//Check for Connection\
if (mysqli_connect_errno()) {
  # code...
  echo 'Connection Failed ' . mysqli_connect_errno();
}

if ($conn) {
  #$result = $conn->query($sql);
  if (isset($_POST['submit'])) {

    if (isset($_POST['name']) && isset($_POST['password'])) {
      # code...
      
      $username = $_POST['name'];
      $password = $_POST['password'];
      //Encrypting the password
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $sql = "SELECT username, email, pwd FROM reg_users WHERE username = '$username' AND pwd = '$password'";
      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);
      if ($count > 0) {
        # code...
        $success = "Login Successfully";

        #starting a session
        session_start();

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['password'] = htmlentities($_POST['password']);

        header('Location: Dashboard.php');
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

    <style>
      .error {
        color: #F66;
        font-weight: 600;
      }
    </style>

    <div class="login-div">
      <center>
        <form action="" method="post">
          <p class="error"><?php echo $error; ?></p>
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
    <h5 class="account-reg">Don't Have an account?<a href="./register.html"> Register here</a></h4>
  </div>

</body>

</html>