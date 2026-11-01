<?php
    session_start();

    if (isset($_SESSION['login'])) {
        $mensagem = 
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carteirinha Estudantil</title>
        <link rel="icon" type="image/x-icon" href="images/"/>
        <link rel="stylesheet" href="css/style_carteirinha.css"/>
    </head>
    <body>
        <!-- FORMULARIO -->
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th>
                            <img
                                src="images/"
                                alt="Logo do IFMG"
                            />
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <?php
                                echo $mensagem;
                            ?>
                        </td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="2">
                            <img
                                src="images/"
                                alt="Código de barra"
                            />
                        </td>

                        <td>
                            <img
                                src="images/"
                                alt="QRCode"
                            />
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>
</html>