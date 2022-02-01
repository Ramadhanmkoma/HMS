
<?php
  $hostel = 122;
  $room = 1326;
  $roomLeft = 0;
  $payment = 00.00;
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/test.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
</head>

<body>
    <header class="header" id="header">
        <img src="./Assets/hotel-hostel-svgrepo-com.svg" alt="hms" srcset="">
        <h1 class="title">Hostel Management System</h1>
    </header>

    <nav class="navbar" id="navbar">
        <!-- <div class="nav-bar"> -->
            <ul class="ul-link">
                <li class="li-link"><a href="./Dashboard.php" class="link-header" name="Dashboard">Dashboard</a></li>
                <li class="li-link"><a href="./Application.php" class="link-header" name="Application">Application</a>
                </li>
                <li class="li-link"><a href="./Management.html" class="link-header" name="Management">Management</a>
                </li>
                <li class="li-link"><a href="./Payment.php" class="link-header" name="Payment">Payments</a></li>
                <li class="li-link"><a href="./About.php" class="link-header" name="About">About</a></li>
                <li class="li-link"><a href="#" class="link-header" name="Help">Help <i class="fas fa-question-circle"></i></a></li>
            </ul>
        <!-- </div> -->
    </nav>

    <main class="main">
        <div class="box" id="box1">
            <p>Hostels</p>
            <hr style="width: 95%; margin: 0 auto; border: 1px solid #EEE; box-shadow: 0 0 20px #EEE;">
            <i class="fas fa-bed"></i>
            No. of Hostels: <label for="Hostels" name="hostel" style="font-size: 2rem; margin: 1em 1em;"><?php echo $hostel; ?></label>
        </div>
        <div class="box" id="box2">
            <p>Requests</p>
            <hr style="width: 95%; margin: 0 auto; border: 1px solid #EEE; box-shadow: 0 0 20px #EEE;">
            <i class="fas fa-rocket"></i>
            Requests Made: <label for="Requests" name="request" style="font-size: 2rem; margin: 1em 1em;">00</label>
        </div>
        <div class="box" id="box3">
            <p>Available Rooms</p>
            <hr style="width: 95%; margin: 0 auto; border: 1px solid #EEE; box-shadow: 0 0 20px #EEE;">
            <i class="fas fa-signal"></i>
            Room left: <label for="Rooms" name="room" style="font-size: 2rem; margin: 1em 1em;">0 / <?php echo $room ?> </label>
        </div>
        <div class="box" id="box4">
            <p>User Info</p>
            <hr style="width: 95%; margin: 0 auto; border: 1px solid #EEE; box-shadow: 0 0 20px #EEE;">
            <i class="fas fa-address-book"></i>
            Username: <label for="User-Info" name="user-info">NULL</label>
        </div>
        <div class="box" id="box5">
            <p>Bookings</p>
            <hr style="width: 95%; margin: 0 auto; border: 1px solid #EEE; box-shadow: 0 0 20px #EEE;">
            <i class="fas fa-ticket"></i>
            Booking Made: <label for="Booking" name="booking">0</label>
        </div>
        <div class="box" id="box6">
            <p>Payments</p>
            <hr style="width: 95%; margin: 0 auto; border: 1px solid #EEE; box-shadow: 0 0 20px #EEE;">
            <i class="fas fa-credit-card-alt"></i>
            Total Payment: <label for="Payment" name="payment" style="font-size: 1.5em; margin: 1em 0 1em 1em;"> <?php echo $payment ?> </label>Tshs
        </div>

    </main>

        <section class="btn-sec-apply">
          <p>Need a room?</p>
          <a href="./Application.php"> <button type="button" name="button"> Apply Now </button></a>

          <a href="./index.html"> <button type="button" name="button" style="margin: 1em 0; border-color: #F66; color: #EEE; background-color: #F66; box-shadow: 0px 4px 15px #F66;"> Sign Out </button></a>
        </section>

    <!-- <footer class="footer">
        footer
    </footer> -->
</body>

</html>
