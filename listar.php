<?php
include('conexao.php');
$query = sprintf("SELECT id, first_name, last_name, address FROM user");
$dados = mysqli_query($conexao, $query) or die(mysqli_connect_error() . PHP_EOL);

while ($row = $dados->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['first_name'] . '</td>';
    echo '<td>' . $row['last_name'] . '</td>';
    echo '<td>' . $row['address'] . '</td>';
    echo '<td> <form method="POST">';
    echo '<button name="editRow" class="edit" id="'.$row['id'].'"
    onclick="editUsuarioDados('. $row['id'] .')">Edit</button> ';
    echo '<button name="deleteRow" class="del" id="'.$row['id'].'"
    onclick="apagarUsuarioDados('.$row['id'].')">Delete</button>';
    echo '</form> </td> </tr>';

}