<?php
    class clsControlesHTML {
        function __construct() {}

        public function geraSelect($nome, $tabela, $codigoSelecionado = '') {
            $options = '<select name="' . $nome . '">';
            
            while ($linha = mysqli_fetch_row($tabela)) {
                if ($codigoSelecionado == $linha[0]) {
                     $options .= '<option value="' . $linha[0] . '" selected>' . $linha[1] . '</option>';
                } else {
                    $options .= '<option value="' . $linha[0] . '">' . $linha[1] . '</option>';
                }
            }
            return $options . '</select>';
        }
    }
?>