<?php
include("../Base.php");

$result = $conn->query("SELECT * FROM Category");
echo json_encode($result->fetch_all());
?>