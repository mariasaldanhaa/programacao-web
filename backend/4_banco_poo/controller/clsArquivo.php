<?php
    class clsArquivo {
        # variaveis privadas
        private $nomeArquivo;
        private $diretorio;
        private $arquivo;

        # nome do arquivo
        public function setNomeArquivo($valor) {
            $this->nomeArquivo = $valor;
        }

        public function getNomeArquivo($valor) {
            return $this->nomeArquivo;
        }

        # diretorio
        public function setDiretorio($valor) {
            $this->diretorio = $valor;
        }

        public function getDiretorio($valor) {
            return $this->diretorio;
        }

        # arquivo
        public function setArquivo($valor) {
            $this->arquivo = $valor;
        }

        public function getArquivo($valor) {
            return $this->arquivo;
        }

        # metodos
        public function upload() {
            move_uploaded_file($this->arquivo['tmp_name'],
                                $this->diretorio . '/' . $this->nomeArquivo);
        }

        public function excluir() {
            unlink($this->diretorio . '/' . $this->nomeArquivo);
        }
    }
?>