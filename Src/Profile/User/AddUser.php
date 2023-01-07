<?php

include("../../Base.php");
$user = $_POST['User'];
$query = "INSERT INTO User (UserName, Permision, Password) VALUES ({$user['username']}, {$user['Permision']}, {$user['Password']})";
$result = $conn->query($query);
echo strval($result);
?>
