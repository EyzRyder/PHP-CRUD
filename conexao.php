<<<<<<< HEAD
<?php 
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'raizV2toorU2');
define('DB', 'nossobanco');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);
        if (!$conexao) {
            echo 'Erro: Unable to connect to MySQL.' . PHP_EOL;
            echo 'Debugging erro: ' . mysqli_connect_error() . PHP_EOL;
            echo 'Debugging erro: ' . mysqli_connect_error() . PHP_EOL;
            exit;
        }
=======
<?php 
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'raizV2toorU2');
define('DB', 'nossobanco');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);
        if (!$conexao) {
            echo 'Erro: Unable to connect to MySQL.' . PHP_EOL;
            echo 'Debugging erro: ' . mysqli_connect_error() . PHP_EOL;
            echo 'Debugging erro: ' . mysqli_connect_error() . PHP_EOL;
            exit;
        }
>>>>>>> 63a5f438a0ec8def466893399a3c38821be33e4d
?>