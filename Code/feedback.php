<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RookieFort</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Aladin&family=Berkshire+Swash&family=Caveat+Brush&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="container">

  <?php include_once("navigation.php"); ?>

    <div class="content">
      <h1>Feedback</h1>
      <p>
        No personal details needed<br>Just let us know whatever you feel
      </p>
      <form action="feedback.php" class="feedback" method="post">
        <ul>
        <li>
        <input type="text" id="feedb" name="feedb" class="gap" placeholder="Start typing here..." required />
      </li>
      <li>
        <input type="submit" name="submit" class="gap-btn" value="Submit"/>
      </li>
        </ul>
      </form>
    </div>
  </div>
  <script src="jav.js"></script>
</body>

</html>

<?php

if(isset($_POST['submit'])) {
  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con,'RookieFort');

  $feed = $_POST['feedb'];

    $reg = "INSERT INTO `Feedback` (`ID`, `Feed`) VALUES (NULL, '$feed');";
    mysqli_query($con,$reg);

    header ('location: thank.php');
}
?>