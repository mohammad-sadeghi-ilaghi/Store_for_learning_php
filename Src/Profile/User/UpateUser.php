<?php

include("../../Base.php");

try{
    $user = $_POST['User'];
    $query = "UPDATE User SET UserName = {$user['username']}, Permision = {$user['Permision']}, Password = {$user['password']} WHERE Id = {{$user['id']}}";
    $result = $conn->query($query);
    echo json_encode(new Result($result, true));
}
catch(Exception $e){
    echo json_encode(new Result($e->getMessage(), false));
}

?>
