
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

    <nav class="nav-bar">
        <ul class="ul-link">
            <li class="li-link"><a href="./Dashboard.php" class="link-header" name="Dashboard">Dashboard</a></li>
            <li class="li-link"><a href="./Application.php" class="link-header" name="Application">Application</a></li>
            <li class="li-link"><a href="./Management.html" class="link-header" name="Management">Management</a></li>
            <li class="li-link"><a href="./Payment.php" class="link-header" name="Payment">Payments</a></li>
            <li class="li-link"><a href="./About.php" class="link-header" name="About">About</a></li>
            <li class="li-link"><a href="#" class="link-header" name="Help">Help <i class="fas fa-question-circle"></i></a></li>
        </ul>

        <button class="sign-out"><a href="./index.html"><i class="fas fa-sign-out"></i> Sign Out</a></button>
    </nav>

    <div class="head">
        <header class="header">
            <img src="./Assets/hotel-hostel-svgrepo-com.svg" alt="hms" srcset="">
            <h1 class="title" id="title"> Hostel Management System </h1>
        </header>
    </div>

    <style>
        a[name="About"] {
            color: royalblue !important;
        }

        main {
          justify-content: center !important;
          align-content: center !important;
          max-width: 1080px !important;
          width: 100% !important;
          /* border: 1px solid; */
          margin: 2rem auto;
        }

        @@media (max-width: 1080px) {
          main {
            max-width: 800px !important;
            width: 100%;
          }

          .about-main > .about-sec {
            max-width: 600px;
            width: 100%;
          }
        }


        .about-main > .about-sec {
          margin: 2rem auto !important;
          color: royalblue;
          text-align: center;
        }

        hr {
          margin: 2rem auto;
        }

        .p-title {
          color: #000;
          font-weight: 600;
          font-size: 25px;
          text-decoration: underline;
        }
    </style>

    <main class="about-main" id="main">

      <section class="about-sec">
        <h1>About-<font color="black">Us</font></h1>

            <p class="p-title"><i class="fas fa-bed"></i> Hostel Management System</p>

            <p class="about-p">Hostel management system is designed to manage all hostel activities like hostel admissions, fees, room, mess allotment, hostel stores & generates related reports for smooth transactions. It is also used to manage monthly mess bill calculation, hostel tenant payroll, etc.</p>

            <p class="about-p">Designed & developed keeping in mind all the hostel management concerns of staff. Right from Tenant's registration to allocating rooms & mess, managing student count records, and ins-and-outs of students, it streamlines & automates all the day-to-day hostel activities. </p>

      </section>
      <hr>
      <section class="Contact-sec">
        <h1>Contact<font color="black">-Us</font></h1>

        <form class="form-Contact" action="#" method="post">
          <fieldset>
            <legend>Leave Us a Message</legend>
            <label for="Name" id="Contact-label"><i class="fas fa-user"></i> Name: </label>

              <input type="text" name="name" value="" placeholder="Name" />

            <label for="Email" id="Contact-label"><i class="fas fa-envelope"></i> Email: </label>
              <input type="email" name="email" value="" placeholder="Email@example.com">

              <label for="Email" id="Contact-label"><i class="fas fa-phone"></i> Phone: </label>
                <input type="tel" name="phone" value="" placeholder="0754-XXX-XXX" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" maxlength="12" minlength="12">

              <label for="Message"><i class="fas fa-message"></i> Message: </label>
              <textarea name="message" rows="8" cols="80" placeholder="Leave us a Message!"></textarea>

              <button type="submit" name="submit" id="submit-msg">Send <i class="fas fa-paper-plane"></i></button>
              <button type="reset" name="reset" id="clear-msg">Clear <i class="fas fa-eraser"></i></button>
          </fieldset>
        </form>

      </section>

    </main>

    <footer class="footer" id="footer">
            <p> <i class="fas fa-copyright copyright"></i> Copyright all right reserved</p>
    </footer>
</body>

<?php

?>


<script>

</script>

</html>
