<?php

include("../../Base.php");

$getIdEmploy = $_GET("EmployId"); 
$result = $conn->query("SELECT * FROM Employ WHERE Id = {$getIdEmploy}");
echo json_encode(new Result($result->fetch_all(), true));
?>
