<?php 

include "db_connection.php";
$id=$_POST['id'];
$code=$_POST['code'];
$sql = "INSERT into data (code,message) values('$code','$id')";
$result = $conn->query($sql);
foreach($query as $row)
   {
    echo json_encode($row);
   }

?>