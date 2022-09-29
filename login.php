<?php
session_start();
include('conexao.php');

if(empty($_POST['name']) || empty($_POST['password'])){
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['name']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);
$query = "SELECT * from admin where user_name = '{$usuario}' and user_password = '{$senha}' ";
$result = mysqli_query($conexao,$query);
$row=mysqli_num_rows($result);


if($row>=1){
$_SESSION['name']=$usuario;
header('Location: painel.php');
exit();
} else{
    header('Location: index.php');
    exit();
}

