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

<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'RookieFort';


  $conn = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
  );

  if ($conn->connect_error) {
    echo 'Errno: '.$conn->connect_errno;
    echo '<br>';
    echo 'Error: '.$conn->connect_error;
    exit();
  }

  $sql = "SELECT id, date, head, body, src, date2, head2, body2, src2 FROM Newsfeed";
  $result = $conn->query($sql);

  //$sql2 = "SELECT ID2, Date2, Head2, Body2, src2 FROM climatelinks";
  //$result2 = $conn->query($sql2);
  //$conn->close();
?> 

<body>
<div class="container">
  <header>
    <h3>
      <a href="index.php" class="logo">
        RookieFort
      </a>
    </h3>
    <nav>
      <a href="#" class="hide-desktop">
        <img src="menu.svg" alt="" class="menu" id="menu">
      </a>
      <ul class="show-desktop hide-mobile" id="navi">
        <li id="exit" class="exit-btn hide-desktop">
          <img src="remove-button.svg" alt="">
        </li>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Log Out</a></li>
        <!--<li><a href="login.php">Login</a></li>-->
        <li><a href="about.php">About Us</a></li>
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </nav>
  </header>

    <div class="blank"></div>
    <div class="khabar-c">
    <?php
      while($row = $result->fetch_assoc()) {
        $ID = $row["id"];
        $Date = $row["date"];
        $Head = $row["head"];
        $Body = $row["body"];
        $Lnk = $row["src"];
        $lk = "https://climate.nasa.gov".$Lnk;
        $Date2 = $row["date2"];
        $Head2 = $row["head2"];
        $Body2 = $row["body2"];
        $Lnk2 = $row["src2"];
        $lk2 = "https://www.climatelinks.org".$Lnk2;
    ?>
    <div class="khabar">
        <ul>
          <li><?php echo "$Date"."<br>"; ?></li>
          <li>
            <h3>
            <?php echo "<a href=$lk>$Head</a><br>"; ?>
            </h3>
          </li>
          <li><?php echo $Body."<br>"; ?></li>
          <li>Source: <a href="https://climate.nasa.gov">NASA Climate</a></li>
        </ul>
      </div>
    <div class="khabar">
        <ul>
          <li><?php echo $Date2."<br>"; ?></li>
          <li>
            <h3>
            <?php echo "<a href=$lk2>$Head2</a><br>"; ?>
            </h3>
          </li>
          <li><?php echo $Body2."<br>"; ?></li>
          <li>Source: <a href="https://www.climatelinks.org">Climatelinks</a></li>
        </ul>
      </div>
  <?php } ?>
    </div>
  </div>
  <script src="jav.js"></script>
</body>
</html>