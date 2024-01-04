<?php
session_start();
// $conn = new mysqli("localhost", "u700659242_divstress", "Codego@28", "u700659242_divstress");
$conn = new mysqli("localhost", "root", "", "u700659242_divstress");

if(!$conn){
    echo "not connected";
}

?>