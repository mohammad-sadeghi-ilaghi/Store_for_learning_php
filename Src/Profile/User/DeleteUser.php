<?php

include("../../Base.php");

$userId = $_GET['UserId'];

$query = "DELETE FROM User Where Id = {$userId}";
$result = $conn->query($query);
echo strval($result);
?>
