<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/hms/css/style.css" type="text/css">
    <title>Application | Special Class</title>
</head>

<body>

    <nav class="nav-bar">

        <nav class="nav-bars">
            <i class="fas fa-bars"></i>
        </nav>

        <ul class="ul-link">
            <li class="li-link"><a href="http://localhost/hms/Dashboard.php" class="link-header" name="Dashboard">Dashboard</a></li>
            <li class="li-link"><a href="http://localhost/hms/Application.php" class="link-header" name="Application">Application</a></li>
            <li class="li-link"><a href="http://localhost/hms/Management.php" class="link-header" name="Management">Management</a></li>
            <li class="li-link"><a href="http://localhost/hms/Payment.php" class="link-header" name="Payment">Payments</a></li>
            <li class="li-link"><a href="http://localhost/hms/About.php" class="link-header" name="About">About</a></li>
            <li class="li-link"><a href="#" class="link-header" name="Help">Help <i class="fas fa-question-circle"></i></a></li>
        </ul>

        <button class="sign-out"><a href="./index.html">Sign Out <i class="fas fa-sign-out"></i></a></button>
    </nav>

    <!-- <button class="sign-out back"><a href="http://localhost/hms/Application.php">Go to Previous Page <i class="fas fa-sign-out"></i></a></button> -->

    <div class="speccont" id="speccont">
        <div class="special box1" id="special"><img src="http://localhost/hms/assets/Special/Hostel-1.jpg" alt="Room" srcset=""><a href="#"><button>Order now</button></a></div>
        <div class="special box2" id="special"><img src="http://localhost/hms/assets/Special/Academic_Endla-8.jpg" alt="Room" srcset=""><a href="#"><button>Order now</button></a></div>
        <div class="special box3" id="special"><img src="http://localhost/hms/assets/Special/Hostel-room-types-LubD-Siem-Reap.jpg" alt="Room" srcset=""><a href="#"><button>Order now</button></a></div>
        <div class="special box4" id="special"><img src="http://localhost/hms/assets/Special/SpecialClass.jpg" alt="Room"><a href="#"><button>Order now</button></a></div>
        <div class="special box5" id="special"><img src="http://localhost/hms/assets/Special/h400_1.jpg" alt=""><a href="#"><button>Order now</button></a></div>
        <div class="special box6" id="special"><img src="http://localhost/hms/assets/Special/3_Academic_hostel_11_01_2021.jpg" alt=""><a href="#"><button>Order now</button></a></div>
    </div>


    <button class="sign-out back"><a href="http://localhost/hms/Application.php">Go to Previous Page <i class="fas fa-sign-out"></i></a></button>
 









    <style>
        html,
        body {
            height: 100%;
        }

        * {
            margin: 0;
            padding: 0;
            transition: .5s ease-in-out;
        }

        body {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(12, 1fr);
        }

        .li-link>a[name="Application"] {
            color: #66F !important;
        }

        a {
            margin: 0 auto;
        }

        a > button {
            cursor: pointer;
            background-color: #66F;
            border-style: none;
            border-radius: .3em;
            margin: 1em auto;
            padding: .2em .7em;
            color: #FFF;
            box-shadow: -3px 3px 6px #33C;
            /* width: 85%; */
        }

        .back {
            grid-row: 12/13;
            grid-column: 2/12;
            width: 90% !important;
            margin: 0 auto;
        }

        .speccont {
            grid-column: 1/13;
            grid-row: 1/12;
            display: -ms-grid;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: auto;
            max-width: 75%;
            width: 100%;
            grid-gap: 3em;
            margin: 6em auto;
        }

        div > img {
            object-fit: contain;
            width: 50%;
            height: 100%%;
        }

        .special > img {
            /* border: 1px solid #112; */
            border-radius: .3em;
            box-shadow: -5px 5px 10px #112;
            cursor: pointer;
            width: 85%;
            height: 85%;
            object-fit: cover;
        }

        .special > img:hover {
            transform: scale(1.0099);
            /* height: 30em; */
            transition: .5s;
        }

        .box1 > img {
            grid: auto-flow 16em/repeat(auto-fit, minmax(26em, 1fr));
        }

        .box2 > img {
            grid: auto-flow 16em/repeat(auto-fit, minmax(26em, 1fr));
        }

        .box3 > img {
            grid: auto-flow 16em/repeat(auto-fit, minmax(26em, 1fr));
        }

        .box4 > img {
            grid: auto-flow 16em/repeat(auto-fit, minmax(26em, 1fr));
        }

        .box5 > img {
            grid: auto-flow 16em/repeat(auto-fit, minmax(26em, 1fr));
        }

        .box6 > img {
            grid: auto-flow 16em/repeat(auto-fit, minmax(26em, 1fr));
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>