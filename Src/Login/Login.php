<?php
include("../Base.php");
$input = $_POST["LoginForm"];

$query = "SELECT * FROM User Where UserName = \"{$input['username']}\" AND Password = \"{$input['password']}\" ";
$result = $conn->query($query);
if($result->fetch_array() == null){
    echo json_encode(new Result("not found", true));
    header("Location: ../../View/Login/index.html");
}
else {
    setcookie("Authorization", "true", time() + (20 * 60), "/");
    setcookie("AuthorizationUser", strval($result), time() + (20 * 60), "/");
    header("Location: ../../View/Home/Home.html");
}

?>
