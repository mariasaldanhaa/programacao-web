<?php
    require_once('../controller/clsConexao.php');
    require_once('../controller/clsArquivo.php');
    require_once('clsComum.php');

    class clsUsuario extends clsComum {
        # variaveis privadas
        private $login;
        private $senha;
        private $perfil;
        private $foto;

        # propriedades
        # login
        public function setLogin($valor) {
            $this->login = $valor;
        }

        public function getLogin($valor) {
            return $this->login;
        }

        # senha
        public function setSenha($valor) {
            $this->senha = $valor;
        }

        public function getSenha($valor) {
            return $this->senha;
        }

        # perfil
        public function setPerfil($valor) {
            $this->perfil = $valor;
        }

        public function getPerfil($valor) {
            return $this->perfil;
        }

        # foto
        public function setFoto($valor) {
            $this->foto = $valor;
        }

        public function getFoto($valor) {
            return $this->foto;
        }

        public function existeLogin() {
            $conexao = new clsConexao();
            $sql = "SELECT * FROM tb_usuario WHERE 
                    login_usuario='" . $this->login . "';";

            $resultado = false;
            if (mysqli_num_rows($conexao->executaSQL($sql)) == 1) {
                $resultado = true;
            }
        }

        public function salvar($novoUsuario = true) {
            #salva foto
            $gravador = new clsArquivo();
            $gravador->setNomeArquivo($this->login . '.jpg');
            $gravador->setDiretorio('../view/img');
            $gravador->setArquivo($this->foto);
            $gravador->upload();

            #salvar dados do usuario
            if ($novoUsuario == true) {
                # insert
                $sql = "INSERT INTO tb_usuario(nome_usuario, 
                                                login_usuario,
                                                senha_usuario,
                                                id_perfil)
                        VALUES ('" . $this->nome . "', 
                        '" . $this->login . "', 
                        '" . $this->senha . "',
                        " . $this->perfil . ");";
            } else {
                # update
                $sql = "UPDATE tb_usuario SET
                        nome_usuario ='" . $this->nome . "',
                        senha_usuario ='" . $this->senha . "',
                        id_perfil = " . $this->perfil . "
                        WHERE id_usuario = " . $this->id . ";";
            }

            $conexao = new clsConexao();
            return $conexao->executaSQL($sql);
        }

        public function pegaUsuarios() {
            $conexao = new clsConexao();
            $sql = 'SELECT * FROM tb_usuario;';
            return $conexao->executaSQL($sql);
        }

        public function exclui() {
            # exclui foto
            #$gravador = new clsArquivo();
            #$gravador = setNomeArquivo($this->login . '.jpg');
            #$gravador->setDiretorio('img');
            #$gravador->excluir();

            # exclui usuario
            $conexao = new clsConexao();
            $sql = "DELETE FROM tb_usuario WHERE login_usuario='" . $this->login . "';";
            return $conexao->executaSQL($sql);
        }
    }
?>