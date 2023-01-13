<?php


include("../../Base.php");

$Employ = $_POST['Employ'];
if($Employ['Name'] == null || $Employ['DateOfBirthDay'] == null
                           || $Employ['DateOfRecruitment'] == null 
                           || $Employ['Salary'] == null 
                           || $Employ['Id'] == null ){
    echo json_encode(new Result("Not found", false));
}
else{
    try{
        $query = "UPDATE Employ SET Name = {$Employ['Name']},
                                DateOfBirthDay = {$Employ['DateOfBirthDay']},
                                DateOfRecruitment = {$Employ['DateOfRecruitment']},
                                Salary = {$Employ['Salary']}
                                WHERE Id = {$Employ['Id']}";
    $result = $conn->query($query);
    echo json_encode(new Result($result, true));   
    }
    catch(Exception $e){
        echo json_encode(new Result($e->getMessage(), false));
    }
}
?>
