<?php
    require('../model/clsUsuario.php');

    $usuario = new clsUsuario();
    $usuario->setNome($_POST['txtNome']);
    $usuario->setLogin($_POST['txtLogin']);
    $usuario->setSenha($_POST['txtSenha']);
    $usuario->setPerfil($_POST['slcPerfil']);
    $usuario->setFoto($_FILES['txtArquivo']);

    if ($usuario->existeLogin() == false) {
        if ($usuario->salvar() == true) {
            echo 'Salvo com sucesso!';
        } else {
            echo 'Problema ao salvar o usuário no banco de dados';
        }
    } else {
        echo 'Escolha um login diferente!';
    }

    echo '<br><a href="frmNovoUsuario.php">VOLTAR  </a>';
?>