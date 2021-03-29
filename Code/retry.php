<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'NewsData';
$db_port = 8889;

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

    function get_news()
    {
        global $db;
        $ret = array();
        $sql = "SELECT * FROM Info";
        $res = mysqli_query($db, $sql);

        while($ar = mysqli_fetch_assoc($res))
        {
            $ret[] = $ar;
        }
        echo $ret;
        return $ret;
    }
?>

  <?php 
      $products = get_news(); 

      foreach($products as $ap)
      {
        echo $ap['ID'];  
        $date = $ap['Date'];
        $head = $ap['Head'];
        $body = $ap['Body'];
        echo $date;
        echo $head;
      }
  ?>