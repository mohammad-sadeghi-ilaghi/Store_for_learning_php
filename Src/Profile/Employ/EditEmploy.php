<?php

include("../../Base.php");

$Employ = $_POST['Employ'];
if($Employ['Name'] == null || $Employ['DateOfBirthDay'] == null
                           || $Employ['DateOfRecruitment'] == null 
                           || $Employ['Salary'] == null 
                           || $Employ['Id'] == null ){
    echo "Not found";
}
else{
    $query = "UPDATE Employ SET Name = {$Employ['Name']},
                                DateOfBirthDay = {$Employ['DateOfBirthDay']},
                                DateOfRecruitment = {$Employ['DateOfRecruitment']},
                                Salary = {$Employ['Salary']}
                                WHERE Id = {$Employ['Id']}";
    $result = $conn->query($query);
    echo $result;   
}
?>
