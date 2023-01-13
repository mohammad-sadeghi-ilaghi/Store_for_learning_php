<?php

include("../../Base.php");
try{

    $categoryId = $_Get['CategoryId'];
    $query = "DELETE FROM Category WHERE Id = {$categoryId}";
    $result = $conn->query($query);
    echo json_encode(new Result($result, true));
}
catch(Exception $e){
    echo json_encode(new Result($e -> getMessage(), false));
}
?>
