
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/register.css" />
  <title>Tenant's | Registration Portal</title>
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

      <h3 class="sub-head">Tenant Registration Portal</h3>
    </div>
    <div class="login-div">
      <center>
        <form action="./dbConfig/conn.php" method="POST">
          <label for="Firstname">First Name: </label>
          <input type="text" id="name" class="UserInfo" placeholder="Enter your First name here..." name="firstName" required />

          <label for="Lastname">Last Name: </label>
          <input type="text" id="last-name" class="UserInfo" placeholder="Enter your Last name here..." name="lastName" required />

          <label for="Username">Username: </label>
          <input type="text" id="username" class="UserInfo" placeholder="Enter your Username here..." name="username" required />

          <label for="Email">Email: </label>
          <input type="email" id="email" class="UserInfo" placeholder="name@example.com" name="email" required />

          <label for="Date">Date Of Birth: </label>
          <input type="date" id="date" class="UserInfo" placeholder="Enter your Last name here..." max="2009-01-01" name="dob" required />

          <label for="Password">Password: </label>
          <input type="password" id="pass" class="password" name="password" placeholder="Enter new password..." required />

          <label for="Password">Re-type Password: </label>
          <input type="password" id="re-pass" class="password" name="re_password" placeholder="Re-type password..." required />

          <?php
              if (isset($_POST['password']) !== isset($_POST['re_password'])) {
                # password do not match
                echo '<font color="red">Password do not match</font>  <br>';
              }
          ?>

          <label for="Phone">Phone number: </label>
          <input type="tel" id="phone" class="UserInfo" placeholder="eg: 255754XXXXXX" name="number" maxlength="12" minlength="12" pattern="[0-9]{12}" required />

          <label for="Male" id="gender" name="gender">Male:
            <input type="radio" id="name" name="gender" value="M" checked />
          </label>

          <label for="Female" id="gender" name="gender">Female:
            <input type="radio" id="gender" name="gender" value="F" />
          </label>

          <button class="btn-log" id="btn-register" type="submit">Register now</button>
          <button class="btn-log" id="btn-clear" type="reset">Clear</button>
        </form>
      </center>
    </div>
    <h5 class="account-reg">Have an account? <a href="./login.html"> Login here</a></h4>
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