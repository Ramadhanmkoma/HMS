<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/test.css">
</head>

<style>
    a[name="Dashboard"] {
        color: royalblue;
    }

    img[alt="hms"] {
        margin: .5rem .5rem 0 0;
        width: 2rem;
        height: 2rem;
    }
</style>

<body>
    <header class="header" id="header">
       <img src="../Assets/hotel-hostel-svgrepo-com.svg" alt="hms"> <h1 class="title">Hostel Management System</h1>
    </header>

    <nav class="navbar" id="navbar">
        <ul class="ul-link">
            <li class="li-link"><a href="./Dashboard.php" class="link-header" name="Dashboard">Dashboard</a></li>
            <li class="li-link"><a href="./Payment_Info.php" class="link-header" name="Payment_Info">Payment-Info</a></li>
            <li class="li-link"><a href="./About.html" class="link-header" name="About">About</a></li>
            <li class="li-link"><a href="#" class="link-header" name="Users">User Management</a></li>
        </ul>
    </nav>

    <main class="main">
        <div class="box" id="box1">
            <p>Hostels</p>
        </div>
        <div class="box" id="box2">
            <p>Requests</p>
        </div>
        <div class="box" id="box3">
            <p>Available Rooms</p>
        </div>
        <div class="box" id="box4">
            <p>User Info</p>
        </div>
        <div class="box" id="box5">
            <p>Bookings</p>
        </div>
        <div class="box" id="box6">
            <p>Payments</p>
        </div>
    </main>

    <footer class="footer">
        footer
    </footer>
</body>

</html>