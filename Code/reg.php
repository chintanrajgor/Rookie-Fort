<?php

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con,'RookieFort');

  $name = $_POST['fname'];

  $pass = $_POST['passw'];

  $s = "select * from logtab where user = '$name'";

  $rs = mysqli_query($con,$s);

    $reg = "INSERT INTO `logtab` (`ID`, `user`, `pass`) VALUES (NULL, '$name', '$pass')";
    mysqli_query($con,$reg);
  
    header ('location: login.php');
?>