<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">

    <title>HMS | Application</title>
</head>

<body>
    <?php require 'inc/header.php'; ?>

    <div class="head">
        <header class="header">
            <img src="./Assets/hotel-hostel-svgrepo-com.svg" alt="hms" srcset="">
            <h1 class="title" id="title"> Hostel Management System </h1>
        </header>
    </div>

    <style>
        a[name="Management"] {
            color: royalblue !important;
        }

        .regbox {
            width: 700px;
            height: 755px;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            top: 50%;
            left: 50%;
            position: relative;
            justify-items: center;
            align-items: center;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
            margin-top: 0;
            border-radius: .4em;
        }

        @media screen and (max-width: 920px) {
            .regbox {
                width: 85%;
            }

            @media screen and (max-width: 600px) {

                .regbox {
                    width: 90%;
                }

                .icon {
                    display: none;
                }
            }
        }

        .icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% -50px);
            margin: 0 38%;
            text-align: center;
        }

        h1 {
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 32px;
        }

        .reg label {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .reg input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            border: none;
            border-bottom: 1px solod #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #39f;
            font-size: 16px;
        }

        .reg input {
            width: 100%;
            margin-bottom: 20px;
        }

        select {
            cursor: pointer;
            width: 98%;
            height: 3em;
            color: #39F;
        }

        select > option {
            background-color: rgba(0, 0, 0, 0.7);
            cursor: pointer;
        }

        textarea {
            border-color: #39F !important;
            box-shadow: 0 0 15px #39F !important;
        }

        a {
            text-decoration: none;
            color: darkgrey;
            line-height: 20px;
            font-size: 12px;
        }

        .reg button :hover {
            cursor: pointer;
            background: #ffc107;
            color: #000;

        }

        textarea {
            width: 100%;
            height: 80%;
            font-size: 1.5em;
        }

        .reg>form>.send-request {
            width: 100%;
            margin-bottom: 20px;
            border: none;
            outline: none;
            height: 40px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: .3em;
        }
    </style>

    <main class="main-Management" id="main">

        <div class="regbox">
            <img src="./Assets/hotel-hostel-svgrepo-com.svg" alt="icon" class="icon">
            <h1>Maintanance Form </h1>
            <div class="reg">
                <form action="log.php" method="POST">
                    <div>
                        <label> [ Full Name ]: </label>
                        <input type="text" name="Fname" required placeholder="Enter First Name">
                        <p></p>
                    </div>

                    <div>
                        <label> [ Email ]: </label>
                        <input type="email" name="Email" required placeholder="Enter Email">
                        <p></p>
                    </div>

                    <div>
                        <label> [ Select Type of Request to report ]: </label>
                        <br>
                        <select name="requestType" value="Select to Report" required>
                            <option value="Select to Report" disabled selected>Select to Report</option>
                            <option value="Electrical">Electrical Issues</option>
                            <option value="Fire">Fire burn</option>
                            <option value="Water">Water Problem</option>
                            <option value="Room Repair">Room Repairement</option>
                            <option value="Others"> Others</option>
                        </select>
                        <p></p>
                    </div>

                    <div>
                        <label> [ Description ]: </label>
                        <textarea name="message" rows="10" placeholder="Please Describe your issue here..."></textarea>
                    </div>

                    <button class="send-request" type="submit" name="submit" style="margin-top: 1.5rem">Send Request <i class="fas fa-paper-plane"> </i> </button>


                </form>
            </div>
        </div>

    </main>

</body>

<script>

</script>

</html>