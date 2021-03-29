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

$sql = "SELECT ID, Date, Head, Body FROM Info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"]. " Date: " . $row["Date"]. " " . $row["Head"]. " " . $row["Body"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 