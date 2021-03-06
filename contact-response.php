<?php
 session_start();
 $name = $_SESSION["name"];
 $email = $_SESSION["email"];
 $listserv = $_SESSION["listserv"];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Hearsay A Cappella</title>
  <link rel="stylesheet" type ="text/css" href="styles/all.css" media="all"/>
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">
</head>

<body>
  <?php
  include "includes/navigation.php";
  ?>

  <div class="body_container">

    <p>Thank you for your response, <?php echo( htmlspecialchars($name) ); ?>! We'll be contacting you back shortly at <?php echo( htmlspecialchars($email) ); ?>. <br/>Love, Hearsay A Cappella.</p>

</div>


  <?php
  include "includes/footer.php";
  ?>

</body>
