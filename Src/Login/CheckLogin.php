<?php
include("../Base.php");



if($_COOKIE["Authorization"])
{
    echo json_encode(new Result($_COOKIE["Authorization"], true));
}
else{
    echo json_encode(new Result(false, true));

}
?>
