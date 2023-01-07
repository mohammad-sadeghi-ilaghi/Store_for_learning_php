<?php

include("../../Base.php");

$result = $conn->query("SELECT * FROM Employ");
echo json_encode($result->fetch_all());
?>
