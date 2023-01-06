<?php

session_start();

 ini_set('display_errors', 1);
$username_db = 'mohammad';
$server_db = 'localhost';
$password_db = 'Mohammad1400@@';
$database_db = "Store_php";

$conn = new mysqli($server_db, $username_db, $password_db, $database_db);

$result = $conn->query("SELECT * FROM Category");
echo json_encode($result->fetch_all());
?>
