<?php
    session_start();
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    if ($login == 'Maria' && $senha == 'teste@1234') {
        // logou com sucesso
        $_SESSION['login'] = $login;
        header('location:dados_carteirinha.php');
        exit;
    }

    // logou errado, redireciona para index
    $mensagem = 'Por favor, entre com um usuário e senha corretos. 
                Note que ambos os campos diferenciam maiúsculas e minúsculas.';
    $_SESSION['erro'] = $mensagem;
    header('location:index.php');
    exit;
?>