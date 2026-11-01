<?php
session_start();
$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha'];

if ($login == 'Maria' && $senha == '1234') {
    // logou com sucesso
    $_SESSION['login'] = $login;
    header('location:dados_carteirinha.php');
} else {
    // logou errado, redireciona para index
    $mensagem = 'Por favor, entre com um usuário e senha corretos. 
                Note que ambos os campos diferenciam maiúsculas e minúsculas.';
    $_SESSION['erro'] = $mensagem;
    header('location:index.php');
}
?>