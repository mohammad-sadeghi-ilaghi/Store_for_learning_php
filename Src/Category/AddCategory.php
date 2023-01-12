<?php

include("../../Base.php");

$category = $_POST['Category'];
$query = "INSERT INTO Category (Name) VALUES({$category['Name']}) WHERE Id = {$category['Id']}";
$result = $conn->query($query);
echo $result;
?>
