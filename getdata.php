<?php 

include "db_connection.php";
$id=$_POST['id'];
$sql = "SELECT code,message from data where code='$id'";
$result = $conn->query($sql);
foreach($result as $row)
   {
    echo json_encode($row);
   }

?>