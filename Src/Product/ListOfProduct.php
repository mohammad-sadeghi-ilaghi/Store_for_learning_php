<?php
include("../Base.php");

$categoryId = $_GET("IdCategory");
$result = $conn->query("SELECT * FROM Product WHERE CategoryId = {$categoryId}")->fetch_array();
echo json_encode($result);


?>