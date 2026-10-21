<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<title>Dados Recebidos do Formulario</title>";
        echo "<meta charset='UTF-8'>";
        echo "</head>";
        echo "<body>";
        echo "<div class='campo'>";

        # nome
        if (isset($_POST['txtNome']) && !empty($_POST['txtNome'])) {
            echo "<span class='nome-campo'>Obrigado pelo contato </span>";
            echo "<span class='valor-campo'>" . htmlspecialchars($_POST['txtNome']) . "</span>";
            echo "<span class='nome-campo'>!</span>";
        } else {
            echo "<span class='nome-campo'>Nome:</span>";
            echo "<span class='vazio'>Nao preenchido</span>";
        }
        echo "</div>";

        # date
        echo "<div class='campo'>";
        if (isset($_POST['dtNascimento']) && !empty($_POST['dtNascimento'])) {
            echo "<span class='nome-campo'>Você nasceu em </span>";
            echo "<span class='valor-campo'>" . htmlspecialchars($_POST['dtNascimento']) . "</span>";
        } else {
            echo "<span class='nome-campo'>dtNascimento:</span>";
            echo "<span class='vazio'>Nao preenchido</span>";
        }

        # txtarea
        if (isset($_POST['txaObservacoes']) && !empty($_POST['txaObservacoes'])) {
            echo "<span class='nome-campo'> e a mensagem é </span><br>";
            echo nl2br(htmlspecialchars($_POST['txaObservacoes']));
        } else {
            echo "<span class='nome-campo'>Mensagem:</span>";
            echo "<span class='vazio'>Nao preenchido</span>";
        }
        echo "</div>";
        
        # radio
        echo "<div class='campo'>";
        if (isset($_POST['rdbSabor'])) {
            echo "<span class='nome-campo'>Seu sabor: </span>";
            #traduz o valor para exibicao
            $sabores = array('C' => 'Calabresa', 'M' => 'Margherita', 'B' => 'Bacon',
                            'P' => 'Palmito', 'N' => 'Nenhum', );
            if (isset($sabores[$_POST['rdbSabor']])) {
                echo $sabores[$_POST['rdbSabor']] . ".";
            }
            echo "</span>";
        } else {
            echo "<span class='nome-campo'>rdbSabor:</span>";
            echo "<span class='vazio'>Nao selecionado</span>";
        }
        echo "</div>";

        # carro
        echo "<span class='nome-campo'>Seu carro: </span>";
        #lista todos os checkboxes possiveis
        $carros = array(
            'chkBMW' => 'BMW',
            'chkFiat' => 'Fiat', 
            'chkCamaro' => 'Camaro'
        );
        $algum_marcado = false;
        foreach ($carros as $campo => $label) {
            if (isset($_POST[$campo])) {
                echo "✓ " . $label . " (valor: " . htmlspecialchars($_POST[$campo]) . ")<br>";
                $algum_marcado = true;
            }
        }
        if (!$algum_marcado) {
            echo "<span class='vazio'>Nenhum carro marcado</span>";
        }

        # estados
        if (isset($_POST['slcEstado']) && !empty($_POST['slcEstado'])) {
            echo "<span class='nome-campo'>Estado: </span>";
            echo "<span class='valor-campo'>" . htmlspecialchars($_POST['slcEstado']) . "</span><br>";
        } else {
            echo "<span class='nome-campo'>Estado: </span>";
            echo "<span class='vazio'>Nao selecionado</span>";
        }

        # cidades
        if (isset($_POST['txtCidades']) && !empty($_POST['txtCidades'])) {
            echo "<span class='nome-campo'>Cidade: </span>";
            echo "<span class='valor-campo'>" . htmlspecialchars($_POST['txtCidades']) . "</span>";
        } else {
            echo "<span class='nome-campo'>Cidade:</span>";
            echo "<span class='vazio'>Nao preenchido</span>";
        }

        echo "</body>";
    } else {
    header("Location: formulario.html");
    exit();
    }
?>