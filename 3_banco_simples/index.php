<?php    
    require_once 'clsPessoa.php';
    $pessoa = new clsPessoa();

    echo '
        <html>
            <head></head>
            <body>
                <center>
                <h2> O que voce quer fazer? </h2>
                <a href="?acao=inserir"> INSERIR UM DADO NO BANCO </a><br>
                <a href="?acao=consultar"> INSERIR UMA CONSULTA NO BANCO </a><br>
                <a href="?acao=listar"> EXIBIR CONSULTA NA FORMA DE TABELA</a><br>
                <a href="?acao=excluir&id=7">EXCLUIR</a><br>
    ';

    $acao = $_GET['acao'] ?? '';
    
    switch ($acao) {
        case 'inserir':
            $pessoa-> inserir('Matheus Pio', 19);
            echo'<br>Registro inserido com sucesso';
            break;
        case 'consultar':
            $registros = $pessoa->selecionarTodos();
            if ($registros){
                foreach ($registros as $linha) {
                    echo 'ID: ' . $linha['id'] . '<br>';
                    echo 'Nome: ' . $linha['nome'] . '<br>';
                    echo 'Idade: ' . $linha['idade'] . '<br><br>';
                }
            }
            break;
        case 'listar':
            $registros = $pessoa->selecionarTodos();
            if($registros) {
                echo '<table border="1px">';
                echo '<tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>';
                foreach ($registros as $linha) {
                    echo '<tr>';
                    echo '<td>' . $linha['id'] . '</td>';
                    echo '<td>' . $linha['nome'] . '</td>';
                    echo '<td>' . $linha['idade'] . '</td>';
                }
            }
            break;
        case 'excluir':
            $id = $_GET['id'] ?? 0;

            if($pessoa->excluir($id)) {
                echo 'REGISTRO APAGADO COM SUCESSO';
            } else {
                echo 'PROBLEMA AO APAGAR O REGISTRO';
            }

            break;
        default:
            echo '<p>Escolha uma ação acima</p>';
            break;
    }
    echo '  </center>
            </body>
        </html>
    ';

?>