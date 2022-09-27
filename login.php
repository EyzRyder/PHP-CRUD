<?php
        $conexao = mysqli_connect('localhost', 'root', 'raizV2toorU2', 'nossobanco');
        if (!$conexao) {
            echo 'Erro: Unable to connect to MySQL.' . PHP_EOL;
            echo 'Debugging erro: ' . mysqli_connect_error() . PHP_EOL;
            echo 'Debugging erro: ' . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        mysqli_select_db($conexao, 'nossobanco');
        mysqli_query($conexao, "SELECT * from admin where user_name = '" . $_POST['name'] . "' and user_password = '" . $_POST['password'] . "' ");
        mysqli_close($conexao);
        header("Location:index.php");
        exit();
