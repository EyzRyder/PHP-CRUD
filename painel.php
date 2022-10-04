<?php
session_start();
if (!$_SESSION['name']) {
    header('Location: index.html');
    exit();
}
include('conexao.php');

if (array_key_exists('logout', $_POST)) {
    logout();
}
function logout()
{
    session_destroy();
    header('Location: index.html');
    exit();
}


?>
<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins?query=poppins">
    <link rel="stylesheet" href="painelStyle.css">
    <title>dashboard</title>
</head>

<body>
    <form method="post" id="box">
        <h4>User: <?php echo $_SESSION['name']; ?></h4>
        <button name="logout">Sair</button>
    </form>
    <center>
        <h1>Dados inseridos</h1>
        <table border=1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Endereço</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>
        <button id="inserir">Cadastrar User</button>
    </center>
    <div class="modal" id="modalCadastro">
        <form class="modal-content cadastro" action="cadastro.php" method="POST">
            <span class="close">&times;</span>
            <h2>Cadastrar</h2>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required />
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobre nome" required />
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço" required />
            <button name="btn" type="submit" id="submit">input</button>
        </form>
</div>
    <script src="custum.js"></script>
</html>