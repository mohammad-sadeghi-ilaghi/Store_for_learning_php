<?php
include("../Base.php");

$product = $_POST("Product");
if($product["Name"] == null || $product["Price"] == null ||  $product["CategoryId"] == null || $product["Id"] == null ){
    echo "can not found product!!!";
}
$product = $conn->query("SELECT * FROM Product WHERE Id = {$product['Id']}")->fetch_array();
if(count($product) == 0){
    echo "it was not found!!!";
}
$result = $conn->query("UPDATE Product Set Price = {$product['Price']},
                                           Name = {$product['Name']}, 
                                           CategoryId = {$product['Category']}
                                        WHERE  Id = {$product['Id']}");


echo $result;


?>