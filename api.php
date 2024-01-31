<?php
include("bdconnect.php");
$result = $mysqli->query("SELECT * FROM Tours");
$tours = [];
while ($myrow = $result->fetch_assoc()) {
  $tours[] = $myrow;
}
header('Content-type: application/json');
echo json_encode($tours);
?>