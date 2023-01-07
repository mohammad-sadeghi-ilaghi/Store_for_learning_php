<?php

include("../../Base.php");

$getIdEmploy = $_GET("EmployId"); 
$result = $conn->query("SELECT * FROM Employ WHERE Id = {$getIdEmploy}");
echo json_encode($result->fetch_all());
?>
