<?php
include('conexao.php');
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);
$endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
mysqli_select_db($conexao, 'nossobanco');
$query = "INSERT INTO user(first_name, last_name, address) VALUES ('{$nome}','{$sobrenome}','{$endereco}') ";
mysqli_query($conexao,$query);
mysqli_close($conexao);
header('Location: painel.php');
exit();
?>