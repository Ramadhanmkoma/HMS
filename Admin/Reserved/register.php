<?php
if (isset($_POST['submit'])) {
  # code...
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <link rel="stylesheet" href="../fontawesome/css/all.min.css">
  <!-- <link rel="stylesheet" href="css/register.css" /> -->
  <title>Staff's | Registration Portal</title>
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
    <div class="navbar inner-div">
      <nav class="nav nav-bar">
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li><a href="./login.php">Sign In</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </nav>
    </div>

    <div class="container head-sec">

      <h1 class="heading" id="hostel" style="text-align: center;">Hostel Management System</h1>
      <br>
      <h3 class="sub-head" style="text-align: center;">Staff Registration Portal</h3>
      <br>
    </div>
    <div class="container login-div" style="width: 60%;">

      <form action="./dbConfig/conn.php" method="POST" class="form-control">
        <label for="Firstname">First Name: </label>
        <input type="text" id="name" class="form-control UserInfo" placeholder="Enter your First name here..." name="firstName" required />

        <label for="Lastname">Last Name: </label>
        <input type="text" id="last-name" class="form-control UserInfo" placeholder="Enter your Last name here..." name="lastName" required />

        <label for="Username">Username: </label>
        <input type="text" id="username" class="form-control UserInfo" placeholder="Enter your Username here..." name="username" required />

        <label for="Email">Email: </label>
        <input type="email" id="email" class="form-control UserInfo" placeholder="name@example.com" name="email" required />

        <label for="Email">Role: </label>
        <select class="form-control" name="userrole" required />
        <option value="" selected disabled>Please Select From the option below</option>
        <option value="1">Database Administrator</option>
        <option value="2">Manager</option>
        <option value="3">Cashier</option>
        <option value="4" disabled>Tenant</option>
        <option value="5">House Keeper</option>
        </select>

        <label for="Date">Date Of Birth: </label>
        <input type="date" id="date" class="form-control UserInfo" placeholder="Enter your Last name here..." max="2009-01-01" name="dob" required />

        <label for="Password">Password: </label>
        <input type="password" id="pass" class="form-control password" name="password" placeholder="Enter new password..." required />

        <label for="Password">Re-type Password: </label>
        <input type="password" id="re-pass" class="form-control password" name="re_password" placeholder="Re-type password..." required />

        <label for="Phone">Phone number: </label>
        <input type="tel" id="phone" class="form-control UserInfo" placeholder="eg: 255754XXXXXX" name="number" maxlength="12" minlength="12" pattern="[0-9]{12}" required />
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
        <br><br>
        <button class="btn btn-outline-primary btn-log" id="btn-register" style="width: 100%;" type="submit" name="submit">Register now</button>
        <br><br>
        <button class="btn btn-danger btn-log" id="btn-clear" type="reset" style="width: 100%;" name="clear">Clear</button>
        <br><br>
      </form>

    </div>
    <br><br>
    <h5 class="account-reg" style="text-align: center;">Have an account? <a href="./login.php"> Login here</a></h4><br><br>
  </div>

  <script>
    document.getElementById('btn-register').addEventListener('click', function checkPassword() {
      if (document.getElementById('pass') !== document.getElementById('re-pass')) {
        document.querySelector('.password').style.border.color = 'red';
      }
    });
  </script>
</body>

</html>