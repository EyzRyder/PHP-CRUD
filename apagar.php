<?php
include('conexao.php');
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
    $query_usuario = 'DELETE FROM user WHERE id='.$id.'';
    $result_usuario = mysqli_query($conexao, $query_usuario) ;
    // header('Location: painel.php');
    // exit();

} else {
    // header('Location: painel.php');
    // exit();
}
