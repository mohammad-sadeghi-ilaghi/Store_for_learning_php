<?php
include("../Base.php");

$product = $_POST("Product");
if($product['Name'] == null || $product["Price"] == null || $product["CategoryId"] == null){
    echo "input is not compeleted!!!"; 
}
$addProdQuery = "INSERT INTO Product(Name, Price, CategoryId) 
                        VALUES({$product['Name']},{$product['Price']}, {$product['CategoryId']} )";

$result = $conn->query($query);
echo $result;


?>