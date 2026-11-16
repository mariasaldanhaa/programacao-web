<?php
    require_once('../model/clsUsuario.php');

    $usuario = new clsUsuario();

    if (isset($_POST['btnExcluir'])) {
        $login = $_POST['txtLogin_' . $_POST['btnExcluir']];

        $usuario->setLogin($login);

        if ($usuario->exclui() == true) {
            header('location:frmListaUsuario.php');
        } else {
            echo 'Erro ao excluir! <br> <a href="frmListaUsuario.php">VOLTAR</a>';
        }

    } else {
        $id = $_POST['btnAlterar'];
        $usuario->setId($id);
        $usuario->setNome($_POST['txtNome_' . $id]);
        $usuario->setLogin($_POST['txtLogin_' . $id]);
        $usuario->setSenha($_POST['txtSenha_' . $id]);
        $usuario->setFoto($_FILE['txtArquivo_' . $id]);
        $usuario->setPerfil($_POST['slcPerfil_' . $id]);

        if($usuario->salvar(false) == true) {
            header('location:frmListaUsuario.php');
        } else {
            echo 'Erro ao alterar! <br> <a href="frmListaUsuario.php">VOLTAR</a>';
        }
    }
?>