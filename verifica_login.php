<?php
// session_start();
if(!$_SESSION['name']){
    header('Location: index.html');
    exit();
}
?>