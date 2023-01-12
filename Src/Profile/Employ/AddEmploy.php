<?php

include("../../Base.php");

$Employ = $_POST['Employ'];
$query = "INSERT INTO Employ(Name, DateOfBirthDay,DateOfRecruitment , Salary)
             VALUES({$Employ['Name']}, {$Employ['DateOfBirthDay']}, {$Employ['DateOfRecruitment']}, {$Employ['Salary']})";
$result = $conn->query($query);
echo $result;
?>
