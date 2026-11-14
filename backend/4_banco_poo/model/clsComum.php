<?php
abstract class clsComum {
    protected $id;
    protected $nome;

    # propriedades
    # id
    public function setId($valor) {
        $this->id = $valor;
    }

    public function getId($valor) {
        return $this->id;
    }

    # nome
    public function setNome($valor) {
        $this->nome = $valor;
    }

    public function getNome($valor) {
        return $this->nome;
    }
}

?>