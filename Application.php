<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <title>HMS | Application</title>
</head>

<body>

    <nav class="nav-bar">
        <ul class="ul-link">
            <li class="li-link"><a href="./Dashboard.php" class="link-header" name="Dashboard">Dashboard</a></li>
            <li class="li-link"><a href="./Application.php" class="link-header" name="Application">Application</a></li>
            <li class="li-link"><a href="./Management.html" class="link-header" name="Management">Management</a></li>
            <li class="li-link"><a href="./About.html" class="link-header" name="About">About</a></li>
            <li class="li-link"><a href="#" class="link-header" name="Help">Help</a></li>
        </ul>
    </nav>

    <div class="head">
        <header class="header">
            <img src="./Assets/hotel-hostel-svgrepo-com.svg" alt="hms" srcset="">
            <h1 class="title" id="title"> Hostel Management System </h1>
        </header>
    </div>
    
    <style>
        a[name="Application"] {
            color: royalblue;
        }
    </style>

    <section class="section" id="section">
        <div class="box1" id="box">
            <p>SPECIAL CLASS (ROOM)</p>
            <p class="box-info">Apply Here</p>
            <button type="button" class="apply" id="special" onclick="toggleMenu()">Apply</button>
        </div>

        <div class="box2" id="box" onclick="toggle();">
            <p>ECONOMY CLASS (ROOM)</p>
            <p class="box-info">Apply Here</p>
            <button type="button" class="apply" id="economy" onclick="toggleMenu()">Apply</button>
        </div>

        <div class="box3" id="box">
            <p>BUSINESS CLASS (ROOM)</p>
            <p class="box-info">Apply Here</p>
            <button type="button" class="apply" id="businness" onclick="toggleMenu()">Apply</button>
        </div>

    </section>

    <main class="main" id="main">

        <div class="bg-modal" id="form1">

            <div class="modal-content">
                <form action="#" method="post">
                    <label for="">
                        Full Name:<br>
                        <input type="text" name="FullName" placeholder="Full Name" />
                    </label>

                    <label for="">
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
                        Your Address : <br>
                        <textarea rows="10" cols="53" name="address" > </textarea>
                    </label>

                    <label for="">
                        Date : <br>
                        <input type="date" name="date" />
                    </label>

                    <button>Submit</button>

                </form>
            </div>
        </div>
        <div class="bg-modal" id="form2">
            <div class="modal-content">
                <form action="#" method="post">
                    <label for="">
                        Full Name:
                        <input type="text" name="FullName" placeholder="Full Name" />
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
                        Full Name:
                        <input type="text" name="FullName" placeholder="Full Name" />
                    </label>

                    <label for="">
                        Date :
                        <input type="date" name="date" />
                    </label>

                    <button name="apply" type="submit">Submit</button>
                </form>
            </div>
        </div>
        
        <div class="bg-modal" id="form3">
            <div class="modal-content">
                <form action="#" method="post">
                    <label for="">
                        Full Name:
                        <input type="text" name="FullName" placeholder="Full Name" />
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
                        Your Address:
                        <textarea rows="10" cols="53" name="address" placeholder="address" > </textarea>
                    </label>

                    <label for="">
                        Date :
                        <input type="date" name="date" />
                    </label>

                    <button name="apply" type="submit" id="">Submit</button>
                </form>
            </div>
        </div>
    </main>

    <!-- <footer class="footer" id="footer">
            footer
        </footer> -->
</body>

<script>
    function toggleMenu() {
        document.getElementById('special').addEventListener('click');
    }
</script>

</html>
