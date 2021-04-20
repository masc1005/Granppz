<?php

require_once '../control/Conexao.php';

$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$unome = mysqli_real_escape_string($conexao,$_POST['unome']);
$user = mysqli_real_escape_string($conexao,$_POST['user']);
$nascimento = mysqli_real_escape_string($conexao,$_POST['nascimento']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);



$sql = "INSERT INTO cadastro (nome, sobrenome, user, nasc, senha) VALUES ('$nome', '$unome', '$user', '$nascimento', '$senha') ";

if($conexao->query($sql) === true) {
	header('Location: ../view/login.php');
}else{
$conexao->close();

header('Location: ../view/cadastro.php');
exit;
}