<?php
include 'conectalog.php';
$id_produto = $_GET['id'];
unset($_SESSION['carrinho'][$id_produto]); 