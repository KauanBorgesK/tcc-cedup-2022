<?php

$mysqli = new mysqli("localhost", "root", "", "tcc");
$conn=mysqli_connect("localhost", "root", "", "tcc");
if($conn==false) {
    die("Erro:".mysqli_connect_error());
};
?>

