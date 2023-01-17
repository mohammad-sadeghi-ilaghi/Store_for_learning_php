<?php
include("../Base.php");
use Utilities\Result;
$categoryId = $_GET["CategoryId"];
$result = $conn->query("SELECT * FROM Product WHERE CategoryId = {$categoryId}")->fetch_array();
$result_content = new Utilities\Result($result, true);
echo json_encode($result_content);


?>