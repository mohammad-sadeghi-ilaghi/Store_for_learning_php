<?php
include("../Base.php");

$productId = $_GET("ProductId");
$result = $conn->query("DELETE FROM Product WHERE CategoryId = {$productId}");
echo $result;

?>