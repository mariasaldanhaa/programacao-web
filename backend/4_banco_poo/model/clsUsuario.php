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

        public function salvar($novoUsuario = true) {
            #salva foto
            $gravador = new clsArquivo();
            $gravador->setNomeArquivo($this->login . '.jpg');
            $gravador->setDiretorio('../view/img');
            $gravador->setArquivo($this->foto);
            $gravador->upload();
        }
    }
?>