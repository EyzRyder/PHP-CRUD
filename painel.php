<?php
session_start();
include('verifica_login.php');
include('conexao.php');
mysqli_select_db($conexao, "nossobanco");
$query = sprintf("SELECT id, first_name, last_name, address FROM user");
$dados = mysqli_query($conexao, $query) or die(mysqli_connect_error() . PHP_EOL);
?>
<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins?query=poppins">
    <link rel="stylesheet" href="style.css">
    <title>dashboard</title>
</head>

<body>
    <h4>User: <?php echo $_SESSION['name']; ?></h4>
    <center>
        <h2>Cadastrar</h2>
        <form action="cadastro.php" method="POST">
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required />
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobre nome" required />
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço" required />
            <button type="submit" id="submit">input</button>
        </form>
        <h1>Dados inseridos</h1>
        <table border=1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($row = $dados->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['first_name'] . '</td>';
                    echo '<td>' . $row['last_name'] . '</td>';
                    echo '<td>' . $row['address'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </center>
</body>

</html>