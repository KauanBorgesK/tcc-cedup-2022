<?php
include 'conectalog.php';
$id=$_GET['id'];
$sql="DELETE FROM cadastro WHERE id_pessoa=$id";
mysqli_query($conn,$sql);
header ('location:formlista.php');
?>