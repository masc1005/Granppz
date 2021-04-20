<?php
session_start();
require_once '../control/Conexao.php';

$nome = mysqli_real_escape_string($conexao, $_SESSION['user']);
$texto = mysqli_real_escape_string($conexao,$_POST['texto']);
//$titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);



$sql = "INSERT INTO postar (texto, nomeUser) VALUES ('$texto', '$nome')";

if($conexao->query($sql) === true) {
	header('Location: ../view/feed.php');
}else{
	$conexao->close();

	header('Location: ../view/login.php');
	exit;
}