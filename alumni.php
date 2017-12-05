<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Hearsay A Cappella</title>
  <link rel="stylesheet" type ="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type ="text/css" href="styles/contact.css" media="all"/>
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/alumni.js" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">
</head>

<body>
  <?php
  include "includes/navigation.php";
  ?>

  <div class="body_container">

    <h1>Alumni</h1>
    <p>If you are an alumna of Hearsay, we would love to hear from you! Please
      email hearsayacappella@gmail.com and let us know what you are up to.
      We will also add you to our alumnae listserv to keep you up to date with
      all things Hearsay.</p>

      <p>Sign up for our listserv!</p>
      <form id="alum_contact" action="alumni-response.php" method="post" novalidate>
        <span>Email: </span><input id="alum_email" name="email" type="email" required>
        <button name="submit" type="submit" class="submit">Submit</button>
        <span class="errorContainer hiddenError" id="alumEmailError">
          <br/>Please enter a valid email.
        </span>
      </form>

    </br>
  </br>
</br>
</br>
</br>
</div>

<?php
include "includes/footer.php";
?>

</body>
