<?php

include("../../Base.php");

$category = $_POST['Category'];
if($category["Name"] == null || $category['Id'] == null){
    echo json_encode(new Result("Not founded!!!", false));

}
else{
    $query = "INSERT INTO Category (Name) VALUES({$category['Name']}) WHERE Id = {$category['Id']}";
    $result = $conn->query($query);
    echo json_encode($result, true);
}
?>
