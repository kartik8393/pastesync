<?php
// $servername = "localhost";
// $username = "id15290296_kartik8393";
// $password = "w7kB%4]\Y4>rjzb5";
// $dbname = "id15290296_pastesync";

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "paste_sync";
$conn = new mysqli($servername, $username, $password, $dbname);
// new connection for testing
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>