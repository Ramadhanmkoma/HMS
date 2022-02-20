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
        a[name="Application"] {
            color: #39F !important;
        }
    </style>

    <section class="section" id="section">
        <div class="box1" id="box">
            <p><i class="fas fa-bed"></i> SPECIAL CLASS (ROOM)</p>
            <p class="box-info">Apply Here</p>
            <button type="submit" class="apply special" id="special" name="special">Apply</button>
        </div>

        <div class="box2" id="box" onclick="toggle();">
            <p><i class="fas fa-bed"></i> ECONOMY CLASS (ROOM)</p>
            <p class="box-info">Apply Here</p>
            <button type="button" class="apply economy" id="economy" onclick="toggleMenu2()" name="economy">Apply</button>
        </div>

        <div class="box3" id="box">
            <p><i class="fas fa-bed"></i> BUSINESS CLASS (ROOM)</p>
            <p class="box-info">Apply Here</p>
            <button type="button" class="apply business" id="business" onclick="toggleMenu3()" name="business">Apply</button>
        </div>
    </section>

    <main class="main" id="main">

        <!-- Start SPECIAL CLASS -->

        <?php if (isset($_REQUEST['special'])) : ?>

        <div class="bg-modal form1" id="form1">
            <div class="modal-content">

                <div class="close-btn">+</div>

                <form action="#" method="post">

                    <fieldset>
                        <legend>SPECIAL CLASS</legend>
                        <label for="">
                            <i class="fas fa-users"></i> Full Name:<br>
                            <input type="text" name="fullName" placeholder="Full Name" />
                        </label>

                        <label for="">
                            <i class="fas fa-location"></i>
                            Location for Hostel : <br>
                            <select name="location" id="location">
                                <option value="Tunguu">Tunguu</option>
                                <option value="Mbweni">Mbweni</option>
                                <option value="Beitras">Beitras</option>
                                <option value="Maruhubi">Maruhubi</option>
                                <option value="Chwaka">Chwaka</option>
                                <option value="Kizimbani">Kizimbani</option>
                                <option value="Kilimani">Kilimani</option>
                                <option value="Vuga">Vuga</option>
                            </select>
                        </label>

                        <label for="">

                            <i class="fas fa-phone"></i> Phone: <br>
                            <input type="tel" name="telephone" placeholder="0754XXXXXX" maxlength="12" minlength="10" />
                        </label>

                        <label for="">
                            <i class="fas fa-home"></i>
                            Your Address : <br>
                            <textarea rows="10" cols="49" name="address"> </textarea>
                        </label>

                        <label for="">
                            <i class="fas fa-clock"></i>
                            Date : <br>
                            <input type="date" name="date" />
                        </label>

                        <button>Submit <i class="fas fa-paper-plane"></i></button>
                    </fieldset>
                </form>
            </div>
        </div>
        <?php endif ?>

        <!-- End SPECIAL CLASS -->

        <!-- Start ECONOMY CLASSs -->
        <div class="bg-modal form2" id="form2">
            <div class="modal-content">
                <div class="close-btn" onclick="toggleMenu()">+</div>
                <form action="#" method="post">

                    <fieldset>
                        <legend>ECONOMY CLASS</legend>

                        <label for="">
                            <i class="fas fa-users"></i>
                            Full Name:
                            <input type="text" name="fullName" placeholder="Full Name" />
                        </label>

                        <label for="">
                            Location:
                            <select name="location" id="location">
                                <option value="Tunguu">Tunguu</option>
                                <option value="Mbweni">Mbweni</option>
                                <option value="Beitras">Beitras</option>
                                <option value="Maruhubi">Maruhubi</option>
                                <option value="Chwaka">Chwaka</option>
                                <option value="Kizimbani">Kizimbani</option>
                                <option value="Kilimani">Kilimani</option>
                                <option value="Vuga">Vuga</option>
                            </select>
                        </label>

                        <label for="">
                            <i class="fas fa-phone"></i> Phone:
                            <input type="tel" name="telephone" placeholder="0754XXXXXX" maxlength="12" minlength="10" />
                        </label>

                        <label for="">
                            <i class="fas fa-home"></i>
                            Your Address:
                            <textarea rows="10" cols="49" name="address" placeholder="address"> </textarea>
                        </label>

                        <label for="">
                            <i class="fas fa-clock"></i>
                            Date :
                            <input type="date" name="date" />
                        </label>

                        <button name="apply" type="submit">Submit<i class="fas fa-paper-plane"></i></button>

                    </fieldset>
                </form>
            </div>
        </div>

        <!-- End ECONOMY Clss -->


        <!-- Start BUSINESS CLASS -->

        <div class="bg-modal form3" id="form3">
            <div class="modal-content">
                <form action="#" method="post">
                    <fieldset>
                        <legend>BUSINESS CLASS</legend>
                        <label for="">
                            <i class="fas fa-users"></i>
                            Full Name:
                            <input type="text" name="fullName" placeholder="Full Name" />
                        </label>

                        <label for="">
                            <i class="fas fa-location"></i>
                            Location:
                            <select name="location" id="location">
                                <option value="Tunguu">Tunguu</option>
                                <option value="Mbweni">Mbweni</option>
                                <option value="Beitras">Beitras</option>
                                <option value="Maruhubi">Maruhubi</option>
                                <option value="Chwaka">Chwaka</option>
                                <option value="Kizimbani">Kizimbani</option>
                                <option value="Kilimani">Kilimani</option>
                                <option value="Vuga">Vuga</option>
                            </select>
                        </label>

                        <label for="">
                            <i class="fas fa-phone"></i> Phone:
                            <input type="tel" name="telephone" placeholder="0754XXXXXX" maxlength="12" minlength="10" />
                        </label>

                        <label for="">
                            <i class="fas fa-hotel"></i>
                            Your Address:
                            <textarea rows="10" cols="49" name="address" placeholder="address"> </textarea>
                        </label>

                        <label for="">
                            <i class="fas fa-clock"></i>
                            Date :
                            <input type="date" name="date" />
                        </label>

                        <button name="apply" type="submit" id="">Submit<i class="fas fa-paper-plane"></i></button>

                    </fieldset>
                </form>
            </div>
        </div>

        <!-- End BUSINESS CLASS -->
    </main>

    <?php #require 'inc/footer.php'; 
    ?>

    <!-- <footer class="footer" id="footer">
            <p> <i class="fas fa-copyright copyright"></i> Copyright all right reserved</p>
    </footer> -->

    <script src="./js/javascript.js"> </script>
</body>

</html>