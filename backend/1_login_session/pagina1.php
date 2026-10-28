<?php
session_start();

if (isset($_SESSION['login'])) {
    $mensagem = 'Seja bem vindo(a) ' . $_SESSION['login'] . '! Você está logado
        <br><br>
        <a href="pagina1.php">Página 1</a><br>
        <a href="pagina2.php">Página 2</a><br>
        <a href="pagina3.php">Página 3</a><br>
        <a href="logout.php">SAIR DO SISTEMA</a> <br><br>
    ';
} else {
    $mensagem = '
        Essa página é de acesso restrito!
        <br>
        <a href="index.php">VOLTAR</a><br>
    ';
}
?>

<html>
    <head></head>
    <body align="center">
        <h1>PÁGINA 1</h1>
        <h2><?php echo $mensagem; ?></h2>
    </body>
</html>