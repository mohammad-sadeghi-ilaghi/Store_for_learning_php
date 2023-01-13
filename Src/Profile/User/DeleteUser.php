<?php

include("../../Base.php");

$userId = $_GET['UserId'];
try{
    $query = "DELETE FROM User Where Id = {$userId}";
    $result = $conn->query($query);
    echo json_encode(new Result($result, true));
}
catch(Exception $e){
    echo json_encode(new Result($e->getMessage(), false));
}

?>
