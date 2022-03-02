<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/hms/css/style.css" type="text/css">
    <title> Application | Business </title>
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

    <button class="sign-out back"><a href="http://localhost/hms/Application.php">Go to Previous Page <i class="fas fa-sign-out"></i></a></button>

    <div class="ecocont" id="buscont">
        <div class="economy box1" id="economy"><img src="" alt="" srcset=""><a href=""><button></button></a></div>
        <div class="economy box2" id="economy"><img src="" alt="" srcset=""><a href=""><button></button></a></div>
        <div class="economy box3" id="economy"><img src="" alt="" srcset=""><a href=""><button></button></a></div>
        <div class="economy box4" id="economy"><img src="" alt="" srcset=""><a href=""><button></button></a></div>
        <div class="economy box5" id="economy"><img src="" alt="" srcset=""><a href=""><button></button></a></div>
        <div class="economy box6" id="economy"><img src="" alt="" srcset=""><a href=""><button></button></a></div>
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
            grid-template-rows: auto;
            max-width: 75%;
            width: 100%;
            grid-gap: 3em;
            margin: 6em auto;
        }

        .economy > img {
            border: 1px solid #112;
            border-radius: .3em;
        }

        .economy:hover {
            transform: scale(1.0099);
            cursor: pointer;
            transition: .5s;
        }

        .box1 {
            grid: auto-flow 16em/repeat(auto-fit, minmax(20em, 1fr));
        }

        .box2 {
            grid: auto-flow 16em/repeat(auto-fit, minmax(26em, 1fr));
        }

        .box3 {
            grid: auto-flow 16em/repeat(auto-fit, minmax(26em, 1fr));
        }

        .box4 {
            grid: auto-flow 16em/repeat(auto-fit, minmax(26em, 1fr));
        }

        .box5 {
            grid: auto-flow 16em/repeat(auto-fit, minmax(26em, 1fr));
        }

        .box6 {
            grid: auto-flow 16em/repeat(auto-fit, minmax(26em, 1fr));
        }
    </style>

</body>

</html>