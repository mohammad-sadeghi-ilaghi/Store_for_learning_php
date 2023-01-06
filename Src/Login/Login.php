<?php
ini_set('display_errors', 1);
$username_db = 'mohammad';
$server_db = 'localhost';
$password_db = 'Mohammad1400@@';
$database_db = "Store_php";
$conn = new mysqli($server_db, $username_db, $password_db, $database_db);

$input = $_POST["LoginForm"];

$query = "SELECT * FROM User Where UserName = \"{$input['username']}\" AND Password = \"{$input['password']}\" ";
$result = $conn->query($query);
if($result->fetch_array() == null){
    echo "not found";
    header("Location: ../../View/Login/index.html");
}
else {
    setcookie("Authorization", "true", time() + (20 * 60), "/");
    header("Location: ../../View/Home/Home.html");
}

?>
