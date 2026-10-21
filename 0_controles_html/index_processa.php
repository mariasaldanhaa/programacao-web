<?php
    $escondido= $_GET['hddIdSessao'];
    $codigo= $_GET['txtCodigo'];
    $nome = $_GET['txtNome'];
    $senha = $_GET['txtSenha'];
    $desabilitado = 'Nada foi enviado';

    if (isset($_GET['txtDesabilitado'])) {
        $desabilitado = $_GET['txtDesabilitado'];
    }

    $texto = '1: ' . $escondido . '<br>' .
            '2: ' . $codigo .
            '3: ' . $nome .
            '4: ' . $senha .
            '5: ' . $desabilitado;
    
    echo($texto);
?>