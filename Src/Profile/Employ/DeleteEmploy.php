<?php

include("../../Base.php");

$EmployId = $_GET['EmployId'];
$query = "DELETE FROM EMPLOY WHERE Id = {$EmployId}";
$result = $conn->query($query);
echo $result;
?>
