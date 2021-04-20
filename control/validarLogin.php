<?php
session_start();

include_once '../control/Conexao.php';

if(empty($_POST['user']) || empty($_POST['senha'])) {
	header('location: ../view/index.php');
	exit();
}


$user = mysqli_real_escape_string($conexao, $_POST['user']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	//$query = "select * from professor where email = '{$email}' and senha = md5('{$senha}')";
$query = "SELECT * FROM cadastro WHERE user = '{$user}' AND senha = '{$senha}' ";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['user'] = $user;
	header('Location: ../view/feed.php');
	exit();
}else {
	header('Location: ../view/login.php');
}	exit();

?>