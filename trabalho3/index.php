<?php
    session_start();

    $mensagem = '';

    if (isset($_SESSION['erro'])) {
        $mensagem = $_SESSION['erro'];

        unset($_SESSION['erro']); // limpando a mensagem ao reiniciar a pagina
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IFCard</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.svg"/>
        <link rel="stylesheet" href="css/style_index.css"/>
    </head>
    <body>
        <div class="login">
            <img
                src="images/logo_ifcard.png"
                alt="Logo do IFCard"
                id="logo-ifmg"
            />
            
            <br/>

            <span id="spanLogin">
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
                <div class="campos">
                    <div>
                        <!-- CAMPO DE USUÁRIO -->
                        <label for="login-usuario" id="usuario">
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
                        <label for="senha-usuario" id="senha">
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

                    <button type="submit" id="btnAcessar">
                        Acessar
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>