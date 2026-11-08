<?php

class clsConexao {
    private static $instancia = null;
    private $conexao;

    // metodo construtor chamado no momento que a classe é instanciada
    // cria um objeto de conexao e guarda na variavel conexao
    private function __construct() 
    {
        $this->conexao = new mysqli('localhost', 'root', '', 'bd_teste');

        if($this->conexao->connect_error) {
            die('Erro de conexão: ' . $this->conexao->connect_error);
        }
    }

    // controla a quantidade de objetos de conexao com o bd
    // permitindo apenas um objeto
    public static function getInstancia() {
        if (!self::$instancia) {
            self::$instancia = new clsConexao();
        }

        return self::$instancia;
    }

    private function detectarTipos($parametros) {
        $tipos = '';
        foreach ($parametros as $parametro) {
            if(is_int($parametros)) {
                $tipos .= 'i';
            } elseif (is_double($parametro) || is_float($parametro)) {
                $tipos .= 'd';
            } elseif (is_string($parametro)) {
                $tipos .= 's';
            } else {
                $tipos .= 'b';
            }
        }
        return $tipos;
    }

    // executa comandos sql no bd
    public function executarConsulta($sql, $parametros = []) {
        $stmt = $this->conexao->prepare($sql);

        if (!empty($parametros)) {
            $tipos = $this->detectarTipos($parametros);
            $stmt->bind_param($tipos, ...$parametros);
        }

        $stmt->execute();
        return $stmt;
    }
}

?>