<?php
include("../Base.php");




if($_COOKIE["Authorization"])
{
    echo $_COOKIE["Authorization"];
}
else{
    echo false;
}
?>
