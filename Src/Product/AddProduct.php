<?php


include("../Base.php");
$product = $_POST("Product");
if($product['Name'] == null || $product["Price"] == null || $product["CategoryId"] == null){
    echo json_encode(new Result("input is not compeleted!!!", false)); 
}
$addProdQuery = "INSERT INTO Product(Name, Price, CategoryId, Offset) 
                        VALUES({$product['Name']},{$product['Price']}, {$product['CategoryId']}, {$product['Offset']} )";

$result = $conn->query($query);
echo json_encode(new Result($result, true));


?>