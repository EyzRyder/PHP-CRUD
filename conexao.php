<?php 
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '123456');
define('DB', 'nossobanco');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);
        if (!$conexao) {
            echo 'Erro: Unable to connect to MySQL.' . PHP_EOL;
            echo 'Debugging erro: ' . mysqli_connect_error() . PHP_EOL;
            echo 'Debugging erro: ' . mysqli_connect_error() . PHP_EOL;
            exit;
        }
?>