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
      <h1>Register</h1>
      <form action="reg.php" class="register" method="post">
        <ul>
          <li>
            <input type="email" id="fname" name="fname" class="gap" placeholder="Email address" required />
          </li>
          <li>
            <input type="password" id="passw" name="passw" class="gap" placeholder="Password" required>
          </li>
          <li>
            <input type="submit" class="gap-btn" value="Submit" />
          </li>
          
        </ul>
      </form>
    </div>
  </div>
  <script src="jav.js"></script>
</body>

</html>