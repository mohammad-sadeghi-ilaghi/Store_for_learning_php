<?php

include("../../Base.php");

$user = $_POST['User'];
$query = "SELECT * FROM User";
$result = $conn->query($query);
echo json_encode(new Result($result, true));
?>
