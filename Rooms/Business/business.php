<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/hms/css/style.css" type="text/css">
    <title>Application | Business Class</title>
</head>

<body class="bg-light">
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

        .li-link > a[name="Application"] {
            color: #66F !important;
        }

        div.buscont {
            display: -ms-grid;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: auto;
            max-width: 75%;
            width: 100%;
            grid-gap: 3em;
            margin: 6em auto;
        }

        .business > img {
            /* border: 1px solid #112; */
            transform: scale(1.0099);
            border-radius: .3em;
            box-shadow: -5px 5px 10px #112;
            cursor: pointer;
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

    <?php #require '/xampp/htdocs/HMS/inc/header.php' ?>
    <nav class="nav-bar">

        <nav class="nav-bars">
            <i class="fas fa-bars"></i>
        </nav>

        <ul class="ul-link">
            <li class="li-link"><a href="http://localhost/hms/Dashboard.php" class="link-header" name="Dashboard">Dashboard</a></li>
            <li class="li-link"><a href="http://localhost/hms/Application.php" name="Application">Application</a></li>
            <li class="li-link"><a href="http://localhost/hms/Management.php" class="link-header" name="Management">Management</a></li>
            <li class="li-link"><a href="http://localhost/hms/Payment.php" class="link-header" name="Payment">Payments</a></li>
            <li class="li-link"><a href="http://localhost/hms/About.php" class="link-header" name="About">About</a></li>
            <li class="li-link"><a href="#" class="link-header" name="Help">Help <i class="fas fa-question-circle"></i></a></li>
        </ul>

        <button class="sign-out"><a href="./index.html">Sign Out <i class="fas fa-sign-out"></i></a></button>
    </nav>

    <button class="sign-out back"><a href="http://localhost/hms/Application.php">Go to Previous Page <i class="fas fa-sign-out"></i></a></button>

    <div class="buscont" id="buscont">
        <div class="business" id="business"></div>
        <div class="business" id="business"></div>
        <div class="business" id="business"></div>
        <div class="business" id="business"></div>
        <div class="business" id="business"></div>
        <div class="business" id="business"></div>
    </div>
</body>

</html>