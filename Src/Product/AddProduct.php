<?php
include("../Base.php");

$product = $_POST("Product");
if($product['Name'] == null || $product["Price"] == null || $product["CategoryId"] == null){
    echo "input is not compeleted!!!"; 
}
$addProdQuery = "INSERT INTO Product(Name, Price, CategoryId, Offset) 
                        VALUES({$product['Name']},{$product['Price']}, {$product['CategoryId']}, {$product['Offset']} )";

$result = $conn->query($query);
echo $result;


?>