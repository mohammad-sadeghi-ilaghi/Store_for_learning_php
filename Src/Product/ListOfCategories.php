<?php
include("../Base.php");

$result = $conn->query("SELECT * FROM Category");
echo json_encode(new Result($result->fetch_all(), true));
?>