<?php
include("../Base.php");

$product = $_POST("Product");
if($product["Name"] == null || $product["Price"] == null ||  $product["CategoryId"] == null || $product["Id"] == null ){
    echo json_encode(new Result("can not found product!!!", false));
}
$product = $conn->query("SELECT * FROM Product WHERE Id = {$product['Id']}")->fetch_array();
if(count($product) == 0){
    echo json_encode(new Result("it was not found!!!", false));

}
$result = $conn->query("UPDATE Product Set Price = {$product['Price']},
                                           Name = {$product['Name']}, 
                                           CategoryId = {$product['Category']},
                                           Offset = {$product['Offset']}
                                        WHERE  Id = {$product['Id']}");


echo json_encode(new Result($result, true));


?>