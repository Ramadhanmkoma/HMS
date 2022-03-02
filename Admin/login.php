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
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </nav>
      </div>

<div class="head-sec">
    <center>
      <h1 class="heading" id = "hostel">Hostel Management System</h1>
    </center>

    <h3 class="sub-head">Staff Login Portal</h3>
</div>
      <div class="login-div">
        <center>
          <form action="index.html" method="post">
            <label for="Username">Username: </label>
            <input
              type="text"
              id="name"
              class="UserInfo"
              placeholder="Enter your Username here..."
              required
            />

            <label for="Password">Password: </label>
            <input
              type="password"
              id="pass"
              class="UserInfo"
              placeholder="Enter your Username here..."
              required
            />

            <button class="btn-log" type="submit">Login</button>
            <!-- <button class="btn-log" type="reset">Clear</button> -->
          </form>
        </center>
      </div>
    <h5 class="account-reg">Don't Have an account? <a href="./register.html"> Register here</a></h4>
    </div>
  </body>
</html>
