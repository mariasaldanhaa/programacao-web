<?php
session_start();
$mensagem = 'Faça seu login no sistema';
$mensagem  .= '<br>
    <form action="login.php" method="post">
        Login: <input type="text" name="txtLogin"></input><br>
        Senha: <input type="text" name="txtSenha"></input><br>
        <input type="submit" name="btnEnviar"></input>
    </form>';

if (isset($_SESSION['erro'])) {
    $mensagem = 'Seu login ou senha estão errados';
    $mensagem  .= '<br>
        <form action="login.php" method="post">
            Login: <input type="text" name="txtLogin"></input><br>
            Senha: <input type="text" name="txtSenha"></input><br>
            <input type="submit" name="btnEnviar"></input>
        </form>';
}

if (isset($_SESSION['login'])) {
    $mensagem = 'Você já está logado no sistema.';
    $mensagem .= '<br><br>
        <a href="pagina1.php">Página 1</a><br>
        <a href="pagina2.php">Página 2</a><br>
        <a href="pagina3.php">Página 3</a><br>
        <a href="logout.php">SAIR DO SISTEMA</a>
    ';
}

?>

<html>
    <head></head>
    <body>
        <?php
            echo $mensagem;
        ?>
    </body>
</html>