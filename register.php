<?php

session_start();

$firstName = '';
$lastName = '';
$username = '';
$email = '';
$userrole = '';
$dob = '';
$password = '';
$re_password = '';
$number = '';
$gender = '';

#echo 'Hello World!';

if (isset($_POST['submit'])) {
  $ok = true;
  if (!isset($_POST['firstName']) || $_POST['firstName'] === '') {
    # code...
    $ok = false;
  } else {
    $firstName = htmlspecialchars($_POST['firstName'], ENT_QUOTES);
    $fName = $_SESSION['firstName'];
  }

  if (!isset($_POST['lastName']) || $_POST['lastName'] === '') {
    # code...
    $ok = false;
  } else {
    $lastName = htmlspecialchars($_POST['lastName'], ENT_QUOTES);
    $lName = $_SESSION['lastName'];
  }

  if (!isset($_POST['username']) || $_POST['username'] === '') {
    # code...
    $ok = false;
  } else {
    # code...
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
  }

  if ($ok) {
    # code...

  }


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./fontawesome/css/all.css">
  <link rel="stylesheet" href="./fontawesome/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/register.css" /> -->
  <title>Tenant's | Registration Portal</title>
</head>

<style>
  * {
    transition: .7s ease-in-out;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
  }

  fieldset {
    border: 1px solid #CCC;
    border-radius: .2em;
  }

  @media screen and (max-width: 700px) {
    .login-div {
      width: 85% !important;
    }
  }
</style>

<body>
<div class="main">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i class="fas"></i> HMS </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a href="./index.html" class="nav-link"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a href="./register.php" class="nav-link"> <i class="fas fa-handshake"></i> Sign Up</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Help <i class="fas fa-question"></i> </a>
      </li>
    </ul>
  </div>
</nav>
</div>

    <div class="container head-sec">

      <h1 class="heading" id="hostel" style="text-align: center;">Hostel Management System</h1>
      <br>
      <h3 class="sub-head" style="text-align: center;">Tenant Registration Portal</h3>
      <br>
    </div>
    <div class="container login-div" style="width: 50%;">

      <form action="./dbConfig/conn.php" method="POST" class="form-control">
        <label for="Firstname">First Name: </label>
        <input type="text" id="name" class="form-control UserInfo" placeholder="Enter your First name here..." name="firstName" required />

        <label for="Lastname">Last Name: </label>
        <input type="text" id="last-name" class="form-control UserInfo" placeholder="Enter your Last name here..." name="lastName" required />

        <label for="Username">Username: </label>
        <input type="text" id="username" class="form-control UserInfo" placeholder="Enter your Username here..." name="username" required />

        <label for="Email">Email: </label>
        <input type="email" id="email" class="form-control UserInfo" placeholder="name@example.com" name="email" required />

        <label for="Date">Date Of Birth: </label>
        <input type="date" id="date" class="form-control UserInfo" placeholder="Enter your Last name here..." max="2009-01-01" name="dob" required />


        <label for="Email">Role: </label>
        <select class="form-control" name="userrole" required />
        <option value="4" selected>Tenant</option>
        <option value="1" disabled>Database Administrator</option>
        <option value="2" disabled>Manager</option>
        <option value="3" disabled>Cashier</option>
        <option value="4" disabled>House Keeper</option>
        </select>

        <label for="Password">Password: </label>
        <input type="password" id="pass" class="form-control password" name="password" placeholder="Enter new password..." required />

        <label for="Password">Re-type Password: </label>
        <input type="password" id="re-pass" class="form-control password" name="re_password" placeholder="Re-type password..." required />

        <label for="Phone">Phone number: </label>
        <input type="tel" id="phone" class="form-control UserInfo" placeholder="eg: 255754XXXXXX" name="number" maxlength="12" minlength="10" pattern="[0-9]{12}" required />

        <br>
        <fieldset>
          <legend>Gender</legend>
          <label for="Male" id="gender" name="gender">Male:
            <input type="radio" id="name" name="gender" value="M" checked />
          </label>
          <label for="Female" id="gender" name="gender">Female:
            <input type="radio" id="gender" name="gender" value="F" />
          </label>
        </fieldset>

        <br>
        <button class="btn btn-outline-primary btn-log" id="btn-register" style="width: 100%;" type="submit" name="submit">Register now</button>
        <br><br>
        <button class="btn btn-danger btn-log" id="btn-clear" type="reset" style="width: 100%;" name="clear">Clear</button>
        <br><br>
      </form>

    </div>
    <br><br>
    <h5 class="account-reg" style="text-align: center;">Have an account? <a href="./login.html"> Login here</a></h4><br><br>
  </div>



  <script>
    document.getElementById('btn-register').addEventListener('click', function checkPassword() {
      if (document.getElementById('pass') !== document.getElementById('re-pass')) {
        document.querySelector('.password').style.border.color = 'red';
      }
    });
  </script>
  <script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
