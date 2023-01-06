<?php
ini_set('display_errors', 1);



if($_COOKIE["Authorization"])
{
    echo $_COOKIE["Authorization"];
}
else{
    echo false;
}
?>
