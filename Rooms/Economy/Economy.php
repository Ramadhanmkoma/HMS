<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/hms/css/style.css" type="text/css">
    <title> Application | Economy </title>
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

    <div class="ecocont" id="buscont">
        <div class="economy box1" id="economy"><img src="http://localhost/hms/Assets/Economy/Fl%c3%a5m-hostel-2-bedded-room-with-bath-3.jpg" alt="Room1" srcset=""><a href=""><button>Order now</button></a></div>
        <div class="economy box2" id="economy"><img src="http://localhost/hms/Assets/Economy/Hostel2.jpg" alt="Room3" srcset=""><a href=""><button>Order now</button></a></div>
        <div class="economy box3" id="economy"><img src="http://localhost/hms/Assets/Economy/Knockree_Bed_dorm_630X380.jpg" alt="Room4" srcset=""><a href=""><button>Order now</button></a></div>
        <div class="economy box4" id="economy"><img src="http://localhost/hms/Assets/Economy/be-dream-barcelona-hostel-rooms-and-dorms.jpg" alt="" srcset=""><a href=""><button>Order now</button></a></div>
        <div class="economy box5" id="economy"><img src="http://localhost/hms/Assets/Economy/dorm-4-person-1-thumb.jpg" alt="Room5" srcset=""><a href=""><button>Order now</button></a></div>
        <div class="economy box6" id="economy"><img src="http://localhost/hms/Assets/Economy/ecom.jpg" alt="Room6" srcset=""><a href=""><button>Order now</button></a></div>
    </div>

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
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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

        div.ecocont {
            display: -ms-grid;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* grid-template-rows: auto; */
            max-width: 75%;
            width: 100%;
            grid-gap: 3em;
            margin: 6em auto;
        }

        div > img {
            object-fit: contain;
            width: 50%;
            height: 100%;
        }

        .economy > img {
            border-radius: .3em;
            transform: scale(1.0099);
            cursor: pointer;
            box-shadow: -5px 5px 10px #112;
            transition: .5s;
            width: 85%;
            height: 85%;
            object-fit: cover;
        }

        .box1 > img {
            grid: auto-flow 16em/repeat(auto-fit, minmax(20em, 1fr));
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

</body>

</html>