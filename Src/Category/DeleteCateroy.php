<?php

include("../../Base.php");

$categoryId = $_Get['CategoryId'];
$query = "DELETE FROM Category WHERE Id = {$categoryId}";
$result = $conn->query($query);
echo $result;
?>
