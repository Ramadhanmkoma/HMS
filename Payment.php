<?php
    session_start();

    $username = $_SESSION['username'];
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

    <?php require 'inc/header.php' ?>

    <div class="head">
        <header class="header">
            <img src="./Assets/hotel-hostel-svgrepo-com.svg" alt="hms" srcset="">
            <h1 class="title" id="title"> Hostel Management System </h1>
        </header>
    </div>

    <style>
        a[name="Payment"] {
            color: #39F !important;
        }

        main {
            width: 85%;
            margin: 2em auto;
            border-radius: .3em;
            /* border: 1px solid black; */
        }

        @media screen and (max-width: 700px) {
            main {
                width: 90%;
            }

            @media screen and (max-width: 600px) {
                .payment-box {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    grid-template-rows: 3;
                    height: 10em;
                    width: 85%;
                    /* justify-content: center; */
                }

                .credit-btn {
                    /* margin: 2em auto; */
                    grid: 1/1/2/2;
                }

                .Mobile-btn {
                    grid: 1/2/2/3;
                }

                .sim-btn {
                    grid: 2/1/3/3;
                }

            }

            @media screen and (max-width: 460px) {

                .payment-box {
                    display: block;
                    height: 12em;
                    width: 85%;
                    justify-content: center;
                    justify-items: center;
                }

                .payment-btn {
                    margin: 3em auto 0 auto;
                }

            }
        }
    </style>

    <main class="main-Management" id="main">


        <h2 class="payment-header" id="payment-header">
            Payment Details <?php echo "{$username}"; ?>
        </h2>
        <article>
            <div class="payment-form">
                <div class="payment-box">
                    <div class="payment-btn credit-card"> <a href="#credit" class="credit-btn" id="#credit"><i class="fas fa-credit-card-alt"></i> Credit Card </a></div>
                    <div class="payment-btn Mobile"> <a href="" class="Mobile-btn" onclick="changesInfo()"> <i class="fas fa-signal"></i> Mobile Payment </a></div>
                    <div class="payment-btn Sim-banking"> <a href="#" class="Sim-btn" onclick="changesInfo()"><i class="fas fa-handshake"></i> Sim Banking </a></div>
                </div>

                <section class="credit" id="credit">
                    <form action="#" method="post">
                        <label for="Credit-Card">
                            Card Owner:
                        </label>

                        <input type="text" name="cardOwner" placeholder="Card Owner Name">

                        <label for="Credit-Card">
                            Card Number:
                        </label>

                        <input type="tel" name="cardNumber" placeholder="Valid Card No. eg: 4107 48XX XXXX XXXX" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" maxlength="19" minlength="19">

                        <label for="Credit-Card">
                            Expiration Date:
                        </label>

                        <input type="month" name="cardNumber" min="2022-03" max="2030-12" />

                        <label for="Credit-Card">
                            CVV <i class="fas fa-question-circle" onclick="helpCVV()" style="cursor: pointer; color: #39f;"></i>
                        </label>

                        <input type="text" name="cardNumber" placeholder="CVV" style="width: 20%;" pattern="[0-9]{3}">

                        <div class="submit-div">
                            <button type="submit" class="confirm-btn">Confirm Payment</button>
                        </div>
                    </form>
                </section>
            </div>
        </article>

    </main>

    <script src="./js/javascript.js"> </script>

</body>

</html>