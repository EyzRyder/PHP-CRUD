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
    <link rel="stylesheet" href="Style.css">
    <link rel="shortcut icon" href="https://bessiportfolio.vercel.app/static/media/logo.5c42e2e32cbeebcb4c20467e5dd0f8dd.svg" type="image/x-icon">
    <title>dashboard</title>
</head>

<body>
    <form method="post" id="box">
        <h4>User: <?php echo $_SESSION['name']; ?></h4>
        <button class="green" name="logout">Sair</button>
    </form>

    <div class="table">
        <h1>Dados inseridos</h1>
        <button class="green" id="inserir">Cadastrar User</button>
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
    </div>

    <div class="modal" id="modalCadastro">
        <form class="modal-content cadastro" action="cadastro.php" method="POST">
            <span class="close">&times;</span>
            <h2 class="two">Cadastrar</h2>
            <input type="text" name="nome" id="nome" class="inpt" placeholder="Digite seu nome" required />
            <input type="text" name="sobrenome" id="sobrenome" class="inpt" placeholder="Digite seu sobre nome" required />
            <input type="text" name="endereco" id="endereco" class="inpt" placeholder="Digite seu endereço" required />
            <button class="green" name="btn" type="submit" id="submit">input</button>
        </form>
    </div>
    <script src="custum.js"></script>

</html>