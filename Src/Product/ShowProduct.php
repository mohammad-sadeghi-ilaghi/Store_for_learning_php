<?php
include("../Base.php");

$ProductId = $_GET("ProductId");
$result = $conn->query("SELECT * FROM Product WHERE Id = {$ProductId}");
echo json_encode($result);

?>