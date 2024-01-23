<?php
session_start();

$_SESSION ['nome'] = $_POST['nome'];
$_SESSION ['sobrenome'] = $_POST['sobrenome'];
$_SESSION ['pais'] = $_POST['pais'];
$_SESSION ['email'] = $_POST['email'];
$_SESSION ['nascimento'] = $_POST['nascimento'];
$_SESSION ['celular'] = $_POST['celular'];
$_SESSION ['senha'] = $_POST['senha'];
$_SESSION ['senhaconfirmacao'] = $_POST['senhaconfirmacao'];


if ($_SESSION ['senha'] == $_SESSION ['senhaconfirmacao']) {
header('location:index.php');
}else{
    $SESSION['erro'] ='Error';
    header('location:auth.php');
}
?>