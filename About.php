<?php

$msg = '';
$msgClass = '';
#  $success = '';
//Check for submit button
if (filter_has_var(INPUT_POST, 'submit')) {
  // code...
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $message = $_POST['message'];

  if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      # Failed...
      $msg = 'Please Enter a valid email';
      $msgClass = 'btn-danger';

    } else {

      $toEmail = 'Ramadhanmkoma9@gmail.com';
      $subject = 'Contact Request From ' .$name;
      $body = '<h2>Contact Request</h2>
              <h4>Name: </h4><p>' .$name .'</p>
              <h4>Email: </h4><p>' .$email .'</p>
              <h4>Message: </h4><p>' .$message .'</p>
      ';

      //Email Headers
      $headers = "HMS-Version: 1.0" ."\r\n";
      $headers = "Content-Type:text/html; charset=UTF-8" ."\r\n";

      $headers = "From: " .$name. "<".$email.">". "\r\n";

      if (mail($toEmail, $subject, $body, $headers)) {
        # Email Sent ...
        $msg = '"Message Successfully sent"';
        $msgClass = "btn-success";
      } else {

        $msg = '"Failed to send a Message"';
        $msgClass = "btn-danger";

      }


    }

  } else {
    $msg = 'Please fill in all the fields';
    $msgClass = 'btn-danger';
  }
}

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
    a[name="About"] {
      color: royalblue !important;
    }

    .btn-danger {
      background-color: #F44;
      margin: 2em auto;
      width: 79%;
      /* height: 2.5em; */
      padding: 1em 1em;
      border-radius: .12em;
      font-family: -apple-system, sans-serif;
    }

    .btn-success {
      background-color: #6F6;
      margin: 2em auto;
      width: 79%;
      /* height: 2.5em; */
      padding: 1em 1em;
      border-radius: .4em;
      font-family: -apple-system, sans-serif;
    }


    main {
      justify-content: center !important;
      align-content: center !important;
      max-width: 1080px !important;
      width: 100% !important;
      /* border: 1px solid; */
      margin: 2rem auto;
    }

    @media (max-width: 1080px) {
      main {
        max-width: 800px !important;
        width: 100%;
      }

      .about-main>.about-sec {
        max-width: 600px;
        width: 100%;
      }
    }


    .about-main>.about-sec {
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
      <h1>About-<font color="black">Us</font>
      </h1>

      <p class="p-title"><i class="fas fa-bed"></i> Hostel Management System</p>

      <p class="about-p">Hostel management system is designed to manage all hostel activities like hostel admissions, fees, room, mess allotment, hostel stores & generates related reports for smooth transactions. It is also used to manage monthly mess bill calculation, hostel tenant payroll, etc.</p>

      <p class="about-p">Designed & developed keeping in mind all the hostel management concerns of staff. Right from Tenant's registration to allocating rooms & mess, managing student count records, and ins-and-outs of students, it streamlines & automates all the day-to-day hostel activities. </p>

    </section>
    <hr>
    <section class="Contact-sec">
      <h1>Contact<font color="black">-Us</font>
      </h1>

      <form class="form-Contact" action="#" method="post">
        <?php if ($msg != '') : ?>
          <div class="btn <?php echo $msgClass; ?>"> <?php echo "{$msg}"; ?> </div>
        <?php endif ?>

        <?php if ($msg == '') : ?>
          <div class="btn <?php echo $msgClass; ?>">
            <?php echo "{$msg}"; ?>
          </div>
        <?php endif ?>

        <fieldset>
          <legend>Leave Us a Message</legend>
          <label for="Name" id="Contact-label"><i class="fas fa-user"></i> Name: </label>

          <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" placeholder="Name" />

          <label for="Email" id="Contact-label"><i class="fas fa-envelope"></i> Email: </label>
          <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" placeholder="Email@example.com" >

          <label for="Phone" id="Contact-label"><i class="fas fa-phone"></i> Phone: </label>
          <input type="tel" name="phone" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>" placeholder="0754 XXX XXX" pattern="[0-9]{4} [0-9]{3} [0-9]{3}" maxlength="12" minlength="12">

          <label for="Message"><i class="fas fa-message"></i> Message: </label>
          <textarea name="message" rows="8" cols="80" placeholder="Leave us a Message!"></textarea>

          <button type="submit" name="submit" id="submit-msg">Send <i class="fas fa-paper-plane"></i></button>
          <button type="reset" name="reset" id="clear-msg">Clear <i class="fas fa-eraser"></i></button>
        </fieldset>
      </form>

    </section>

  </main>

  <?php #require 'inc/footer.php';
  ?>
</body>

<script>

</script>

</html>
