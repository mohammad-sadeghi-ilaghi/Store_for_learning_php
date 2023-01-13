<?php

include("../../Base.php");
try{
    $EmployId = $_GET['EmployId'];
    $query = "DELETE FROM EMPLOY WHERE Id = {$EmployId}";
    $result = $conn->query($query);
    echo json_encode(new Result($result, true));
}
catch(Exception $e){
    echo json_encode(new Result($e->getMessage(), false));
}
?>
