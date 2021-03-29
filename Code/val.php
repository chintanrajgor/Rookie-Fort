<?php

  $con = mysqli_connect('localhost:8889','root','root');

  mysqli_select_db($con,'loginfo');

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
    header ('location: login.php');     
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>"; 
    
  } 
?>