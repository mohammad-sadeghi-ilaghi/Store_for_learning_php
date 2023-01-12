<?php


include("../Base.php");
try {
    $getProducts = json_decode($_COOKIE['Products_list']);
    $query = "";
    $OffsetSeller = $_COOKIE["OffsetSeller"];
    $user = $_COOKIE['User'];
    $sumPrice = calculateSumOfPrice($getProducts, $OffsetSeller);
    $conn->begin_transaction();
    addFactor($sumPrice, $OffsetSeller, $conn, $user);
    addProductBought($getProducts, $conn);
}
catch(Exception $e){
    $conn->rollback();
    echo $e->getMessage();
}
function addProductBought($productBought, $conn)
{
    foreach($productBought as $product){
        $user = $conn->query("SELECT TOP 1 *  FROM Factor WHERE ORDER BY ID DESC");
        $conn->query("INSERT INTO Buy(Number, FactorId, ProductId) VALUES({$product['Name']}, {$user['Id']}, {$product['Id']})");
    }
}
function addFactor($sumPrice, $offSet, $conn, $user){
    $query = "INSERT INTO Factor (DateOfBuy, UserId, Price, OffPersent)
    VALUES ({date()}, {$user['Id']}, {$sumPrice}, {$offSet})";
    $conn->query($query);    
}

function calculateSumOfPrice($getProducts, $OffsetSeller){
    $sumPrice = 0;
    foreach($getProducts as $item){
        $sumPrice += $item['Price'] * (floatval($item['Offset'] ) / 100); 
    }
    try{
        $OffsetSeller = $_COOKIE["OffsetSeller"];
        $sumPrice *= ($OffsetSeller / 100);
    }
    catch(Exception $e){
    }
    return $sumPrice;
}

?>