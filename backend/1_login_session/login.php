<?php
session_start();
$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha'];

if ($login == 'Maria' && $senha == '1234') {
    // logou com sucesso
    $_SESSION['login'] = $login;
    header('location:pagina1.php');
} else {
    // logou errado, redireciona para index
    $_SESSION['erro'] = 'Login ou senha incorretos';
    header('location:index.php');
}
?>