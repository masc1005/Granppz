<?php

require_once 'conexao.php';

$sql = "SELECT * FROM post";
$result = mysqli_query($conexao, $sql);

 while($rows = mysqli_fetch_array($result)) {

 	echo "Titulo ".$rows['titulo']."<br>";
 	echo "Texto ".$rows['texto']."<br>";
 	echo "-----------------------------";
 }

 $dh = "select TABLE_NAME, CREATE_TIME from information_schema.TABLES where TABLE_SCHEMA = '' ";
 $result = mysql_query($conexao, $dh);

?>