<?php

include("../../Base.php");

$user = $_POST['User'];
$query = "UPDATE User SET UserName = {$user['username']}, Permision = {$user['Permision']}, Password = {$user['password']} WHERE Id = {{$user['id']}}";
$result = $conn->query($query);
echo strval($result);
?>
