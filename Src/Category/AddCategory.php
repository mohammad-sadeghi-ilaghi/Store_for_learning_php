<?php

include("../../Base.php");
try{
    $category = $_POST['Category'];
    $query = "INSERT INTO Category (Name) VALUES({$category['Name']}) WHERE Id = {$category['Id']}";
    $result = $conn->query($query);
    echo json_encode(new Result($result, true));
}
catch(Exception $e){
echo json_encode(new Result($e->getMessage(), false));
}
?>
