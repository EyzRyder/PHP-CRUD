<?php
session_start();
if (!$_SESSION['name']) {
    header('Location: index.html');
    exit();
}
include('conexao.php');
mysqli_select_db($conexao, "nossobanco");
$query = sprintf("SELECT id, first_name, last_name, address FROM user");
$dados = mysqli_query($conexao, $query) or die(mysqli_connect_error() . PHP_EOL);

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

        <form action="cadastro.php" method="POST" class="cadastro">
            <h2>Cadastrar</h2>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required />
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobre nome" required />
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço" required />
            <button name="btn" type="submit" id="submit">input</button>
        </form>
        <h1>Dados inseridos</h1>
        <table border=1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Endereço</th>
                    <th>ação</th>
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
                    echo '<td> <form method="POST"> 
                    <button name="editRow">Edit</button> ';
                    echo ' <button name="deleteRow">Delete</button> </form> </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </center>
</body>

</html>