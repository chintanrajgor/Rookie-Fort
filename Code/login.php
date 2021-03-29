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
      <h1>Log In</h1>
      <form action="login.php" class="signin" method="post">
        <ul>
          <li>
            <input type="email" id="uname" name="uname" class="gap" placeholder="Email address" required />
          </li>
          <li>
            <input type="password" id="psw" name="psw" class="gap" placeholder="Password" required>
          </li>
          <li>
            <input type="submit" name="submit" class="gap-btn" value="Submit"/>
          </li>
          <li>
            Don't have an account? <a href="register.php" class="link-b">Register here</a>
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

  $username = $_POST['uname'];
  $password = $_POST['psw'];

  //to prevent from mysqli injection  
  $username = stripcslashes($username);  
  $password = stripcslashes($password);  
  $username = mysqli_real_escape_string($con, $username);  
  $password = mysqli_real_escape_string($con, $password);  

  $sql = "select * from logtab where user = '$username' and pass = '$password'";  
  $result = mysqli_query($con, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);  
    
  if($count == 1){  
    header ('location: news.php');  
  }  
  else{  
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>"; 
    
  } 
}
?>