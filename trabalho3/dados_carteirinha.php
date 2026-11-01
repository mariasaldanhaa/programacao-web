<?php
session_start(); 

if (isset($_SESSION['login'])) {
    $mensagem = 'Olá ' . $_SESSION['login'] . '! ' .
        'Seja bem-vindo(a)!';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="images/"/>
        <link rel="stylesheet" href="css/style_dados.css"/>
        <title> 
            <?php
                echo $_SESSION['login'];
            ?> 
        </title>
    </head>
    <body>
        <h1>
            <?php
                echo $mensagem;
            ?>
        </h1>

        <p>
            Vamos gerar sua carteirinha. Começa me informando os dados a seguir:
        </p>
        
        <!-- FORMULARIO -->
        <form 
            action="gerar_carteirinha.php" 
            method="post"
        >
            <table>
                <!-- CAMPO DE NOME -->
                <tr>
                    <td>
                        <label for="nome-usuario">Nome:</label>
                        <input 
                            type="text"
                            placeholder="Digite seu nome"
                            id="txtNome"
                            name="txtNome"
                            title="Digite o nome do usuário"
                            required
                        />
                    </td>
                </tr>

                <tr>
                    <!-- CAMPO DE CPF -->
                    <td>
                        <label for="">CPF</label>
                        <input
                            type="text"
                            pattern="(\d{3}\.\d{3}\.\d{3}-\d{2}|\d{11})"
                            placeholder="000.000.000-00"
                            id="txtCPF"
                            name="txtCPF"
                            title="Digite o CPF no formato: 000.000.000-00"
                            required
                        />
                        <small>Formato esperado: 123.456.789-00</small>
                    </td>
                </tr>

                <tr>
                    <!-- ESCOLHER CURSO -->
                    <td>
                        <label for="slcCurso">Curso:</label>
                        <select 
                            name="slcCurso" 
                            id="slcCurso"
                            required
                        >
                            <option value="" selected>Selecione o curso...</option>
                            <option value="1">Bacharelado em Administração</option>
                            <option value="2">Bacharelado em Agronomia</option>
                            <option value="3">Bacharelado em Engenharia de Computação</option>
                            <option value="4">Bacharelado em Engenharia de Alimentos</option>
                            <option value="5">Bacharelado em Engenharia de Produção</option>
                            <option value="6">Bacharelado em Inteligência Artifical</option>
                            <option value="7">Bacharelado em Medicina Veterinária</option>
                            <option value="8">Bacharelado em Zootecnia</option>
                            <option value="9">Especialização em Educação para as Relações Étnico-Raciais</option>
                            <option value="10">Especialização em Ensino de Ciências e Matemática</option>
                            <option value="11">Especialização em Gestão</option>
                            <option value="12">Licenciatura em Ciências Biológicas</option>
                            <option value="13">Licenciatura em Educação Física</option>
                            <option value="14">BLicenciatura em Física</option>
                            <option value="15">Mestrado Profissional em Sustentabilidade e Tecnologia Ambiental</option>
                            <option value="16">Técnico em Administração</option>
                            <option value="17">Técnico em Agroindústria</option>
                            <option value="18">Técnico em Agropecuária</option>
                            <option value="19">Técnico em Biotecnologia</option>
                            <option value="20">Técnico em Eletromecânica</option>
                            <option value="21">Técnico em Informática</option>
                            <option value="22">Técnico em Manutenção Automotiva</option>
                            <option value="23">Técnico em Meio Ambiente</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <button
                            type="submit"
                            name="btnEnviar"
                            class="buttonSubmit"
                        >
                            Enviar
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>