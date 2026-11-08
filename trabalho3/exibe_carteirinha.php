<?php
    session_start();

    if (isset($_SESSION['login'])) {
        $_SESSION['matricula'] = $_POST['txtMatricula'];
        $_SESSION['validade'] = $_POST['dtValidade'];

        // formatando as datas
        $dataNascimento_session = $_SESSION['dataNascimento'];
        $date_dtNascimento = new DateTime($dataNascimento_session);

        $dataValidade_session = $_SESSION['validade'];
        $date_dtValidade = new DateTime($dataValidade_session);

        $nome = $_SESSION['nome'];
        $dataNascimento = $date_dtNascimento->format('d/m/Y');
        $cpf = $_SESSION['cpf'];
        $curso = $_SESSION['curso'];
        $matricula = $_SESSION['matricula'];
        $validade = $date_dtValidade->format('d/m/Y');
        $foto = $_FILES['fileFoto'];
        $caminhoFoto = "";

        if ($foto['error'] == 0) {
            $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));

            // verifica se a imagem é JPG, JPEG ou PNG
            if (in_array($extensao, ['jpg', 'jpeg', 'png'])) {
                $nomeFoto = uniqid('foto_') . '.' . $extensao;

                $caminhoFoto = 'uploads/' . $nomeFoto;

                // move a foto enviada para a pasta uploads
                move_uploaded_file($foto['tmp_name'], $caminhoFoto);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carteirinha Estudantil</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.svg"/>
        <link rel="stylesheet" href="css/style_carteirinha.css"/>
    </head>
    <body>
        <div>
            <table class="tabela-carteirinha">
                <tbody>
                    <!-- LOGO IFMG -->
                    <tr class="linha-logo">
                        <th class="logo">
                            <img
                                src="images/logo_ifmg.png"
                                alt="Logo do IFMG"
                                id="logo-ifmg"
                            />
                        </th>

                        <!-- FOTO e INFORMAÇÃO -->
                        <th rowspan="6" class="lado-direito">
                            <img 
                                src="<?php echo $caminhoFoto; ?>" 
                                alt="Foto do estudante"
                                id="foto-estudante"
                            />

                            <p class="aviso">
                                Este documento foi emitido <br/>
                                pelo IFCard em <?php echo date('d/m/Y'); ?>.<br/>
                                Para comprovar sua autenticidade,<br/>
                                acesse o QrCode abaixo.
                            </p>
                        </th>
                    </tr>

                    <!-- DADOS DA CARTEIRINHA -->
                    <tr>
                        <!-- NOME -->
                        <td id="nome-estudante">
                            <?php echo $nome; ?>
                        </td>
                    </tr>

                    <tr>
                        <!-- DATA DE NASCIMENTO-->
                        <td>
                            <div class="data-nascimento">
                                <span>Data de Nascimento:</span>
                                <?php echo $dataNascimento; ?>
                            </div>
                        </td>
                    </tr>

                    <!-- CPF -->
                    <tr>
                        <td>
                            <div class="cpf">
                                <span>CPF:</span>
                                <?php echo $cpf; ?>
                            </div>
                        </td>
                    </tr>

                    <!-- CURSO -->
                    <tr>
                        <td>
                            <div class="curso">
                                <span>Curso:</span>
                                <?php echo $curso; ?>
                            </div>
                        </td>
                    </tr>

                    <!--  MATRÍCULA -->
                    <tr>
                        <td>
                            <div class="matricula">
                                <span>Matrícula:</span>
                                <?php echo $matricula; ?>

                                -

                                <span>Validade:</span>
                                <?php echo $validade; ?>
                            </div>
                        </td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td class="codigo-barra">
                            <img
                                src="images/codigo_barra.png"
                                alt="Código de barra"
                                id="imagem-codigo-barra"
                            />
                        </td>

                        <td class="informacoes-qr-code">
                            <div class="qr-code">
                                <span>USO PESSOAL E INTRANSFERÍVEL.</span>
                                <br/>
                                <img
                                    src="images/qr-code.png"
                                    alt="QRCode"
                                    id="imagem-qr-code"
                                />
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>

            <button id="btnImprimir">
                Imprimir
            </button>

            <a href="logout.php" id="link-sair">Sair do Sistema</a>

            <script src="js/script.js"></script>
        </div>
    </body>
</html>