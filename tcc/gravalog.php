<?php
include 'conectalog.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['lastname'];
$email = $_POST['email'];
$senha = $_POST['password'];
$confSenha = $_POST['password_confirmation'];

$erros = [];

// Verificações
if ($senha !== $confSenha) {
	array_push($erros, 'Confirmação de senha incorreta.');
}

// Redirecionar caso ocorra algum erro
if (!empty($erros)) {
	$errosString = "";
	foreach ($erros as $erro) {
		if (!empty($errosString)) {
			$errosString .= "&";
		}

		$errosString .= "erros[]={$erro}";
	}

	header("location:cadastro.php?{$errosString}");
	die();
}

if (isset($_POST['id']) && !empty($_POST['id'])) {
	$id=$_POST['id'];
	$sql="UPDATE cadastro SET nome='{$nome}', sobrenome='{$sobrenome}', email='{$email}', senha='{$senha}' WHERE id_pessoa={$id};";
	
} else {
	$sql="INSERT INTO cadastro(nome, sobrenome, email, senha) VALUES ('{$nome}', '{$sobrenome}' , '{$email}', '{$senha}');";
}

if (mysqli_query ($conn,$sql)==false) {
	die("Erro: ".mysqli_error($conn));
}

header("location:logar.php?");
