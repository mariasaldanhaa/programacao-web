<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerar carteirinha</title>
        <link rel="icon" type="image/x-icon" href="images/"/>
        <link rel="stylesheet" href="css/style_gerar.css"/>
    </head>
    <body>
        <h1>GERAR A CARTEIRINHA</h1>

        <h2>Insira agora:</h2>

        <!-- FORMULARIO -->
        <form 
            action="exibe_carteirinha.php"
            method="post"
            enctype="multipart/form-data"
        >
            <table>
                <tr>
                    <td>
                        <!-- CAMPO DE MATRICULA -->
                        <label for="txtMatricula">Matrícula:</label>
                        <input
                            type="text"
                            id="txtMatricula"
                            name="txtMatricula"
                            placeholder="Digite o número de matrícula"
                            title="Digite o número de matrícula"
                            required
                        />
                    </td>
                </tr>

                <!-- CAMPO DE VALIDADE-->
                <tr>
                    <td>
                        <label for="dtValidade">Validade:</label>
                        <input
                            type="date"
                            id="dtValidade"
                            name="dtValidade"
                            title="Data de validade da carteirinha"
                            required
                        />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="fileFoto">Foto:</label>
                        <input
                            type="file"
                            id="fileFoto"
                            name="fileFoto"
                        />
                    </td>
                </tr>

                <tr>
                    <td>
                        <button
                            type="submit"
                            name="btnEnviar"
                            class="btnEnviar"
                        >
                            Gerar
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>