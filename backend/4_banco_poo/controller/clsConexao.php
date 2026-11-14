<?php
class clsConexao {
    # variaveis privadas
    private $host;
    private $usuario;
    private $senha;
    private $banco;
    private $conexao;

    # propriedades
    #host
    public function setHost($valor) {
        $this->host = $valor;
    }

    public function getHost() {
        return $this->host;
    }

    #usuario
    public function setUsuario($valor) {
        $this->usuario = $valor;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    #senha
    public function setSenha($valor) {
        $this->senha = $valor;
    }

    public function getSenha() {
        return $this->senha;
    }

    #banco
    public function setBanco($valor) {
        $this->banco = $valor;
    }

    public function getBanco() {
        return $this->banco;
    }

    # metodos
    # construtor
    function __construct() {
        $this->host = 'localhost';
        $this->usuario = 'root';
        $this->senha = '';
        $this->banco = 'bd_acesso';
        $this->conecta();
    }

    public function conecta() {
        $this->conexao = mysqli_connect($this->host, 
                                        $this->usuario, 
                                        $this->senha, 
                                        $this->banco);
    }

    public function executaSQL($sql) {
        $resposta = mysqli_query($this->conexao, $sql);
        return $resposta;
    }
}
?>