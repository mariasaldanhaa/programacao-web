<?php
session_start();

$mensagem = '';

if (isset($_SESSION['erro'])) {
    $mensagem = $_SESSION['erro'];

    unset($_SESSION['erro']); // limpando a mensagem ao reiniciar a pagina
}

if (isset($_SESSION['login'])) {
    $mensagem = 'Você já está logado no sistema';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IFCard</title>
        <link rel="icon" type="image/x-icon" href="images/"/>
        <link rel="stylesheet" href="css/style_index.css"/>
    </head>
    <body>
        <div>
            <img
                src="images/"
                alt="Logo do IFCard"
            />
            
            <br/>

            <span>
                Login
            </span>

            <br/>

            <!-- MENSAGEM DE ERRO -->
            <div>
                <?php
                    echo $mensagem;
                ?>
            </div>

            <hr/>
            
            <!-- FORMULÁRIO -->
            <form action="login.php" method="post">
                <!-- CAMPOS DE LOGIN -->
                <div>
                    <div>
                        <!-- CAMPO DE USUÁRIO -->
                        <label for="login-usuario">
                            Usuário: 
                        </label>

                        <input
                            type="text"
                            placeholder="Digite seu usuário"
                            id="login-usuario"
                            name="txtLogin"
                            required
                        />
                    </div>

                    <!-- CAMPO DE SENHA-->
                    <div>
                        <label for="senha-usuario">
                            Senha:
                        </label>

                        <input 
                            type="password"
                            placeholder="Digite sua senha"
                            id="senha-usuario"
                            name="txtSenha"
                            required
                        />
                    </div>

                    <button type="submit">
                        Acessar
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>