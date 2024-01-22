<?php
session_start();
$_SESSION['nome'] = $_POST['nome'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['senha'] = $_POST['senha'];

$senha = $_SESSION['senha'];
if ($senha == 'php123') {
    $_SESSION['nome'] = 'Administrador';
    header('location:index.php');
} else if ($senha == '123') {
    $_SESSION['nome'] = 'Cliente';
    header('location:index.php');
} else if($senha == '1234'){
    $_SESSION['nome'] = 'Usuário';
    header('location:index.php');
} else {
    header('location:errosenha.php');
}


?>