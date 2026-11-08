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
        <link rel="icon" type="image/x-icon" href="images/favicon.svg"/>
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
                        <label for="txtCPF">CPF:</label>
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
                    <!-- DATA DE NASCIMENTO -->
                    <td>
                        <label for="dtNascimento">Data de Nascimento:</label>
                        <input
                            type="date"
                            id="dtNascimento"
                            name="dtNascimento"
                            title="Data de Nascimento"
                            required
                        />
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
                            <option value="Bacharelado em Administração">Bacharelado em Administração</option>
                            <option value="Bacharelado em Agronomia">Bacharelado em Agronomia</option>
                            <option value="Bacharelado em Engenharia de Computação">Bacharelado em Engenharia de Computação</option>
                            <option value="Bacharelado em Engenharia de Alimentos">Bacharelado em Engenharia de Alimentos</option>
                            <option value="Bacharelado em Engenharia de Produção">Bacharelado em Engenharia de Produção</option>
                            <option value="Bacharelado em Inteligência Artifical">Bacharelado em Inteligência Artifical</option>
                            <option value="Bacharelado em Medicina Veterinária">Bacharelado em Medicina Veterinária</option>
                            <option value="Bacharelado em Zootecnia">Bacharelado em Zootecnia</option>
                            <option value="Especialização em Educação para as Relações Étnico-Raciais">Especialização em Educação para as Relações Étnico-Raciais</option>
                            <option value="Especialização em Ensino de Ciências e Matemática">Especialização em Ensino de Ciências e Matemática</option>
                            <option value="Especialização em Gestão">Especialização em Gestão</option>
                            <option value="Licenciatura em Ciências Biológicas">Licenciatura em Ciências Biológicas</option>
                            <option value="Licenciatura em Educação Física">Licenciatura em Educação Física</option>
                            <option value="Licenciatura em Física">Licenciatura em Física</option>
                            <option value="Mestrado Profissional em Sustentabilidade e Tecnologia Ambiental">Mestrado Profissional em Sustentabilidade e Tecnologia Ambiental</option>
                            <option value="Técnico em Administração">Técnico em Administração</option>
                            <option value="Técnico em Agroindústria">Técnico em Agroindústria</option>
                            <option value="Técnico em Agropecuária">Técnico em Agropecuária</option>
                            <option value="Técnico em Biotecnologia">Técnico em Biotecnologia</option>
                            <option value="Técnico em Eletromecânica">Técnico em Eletromecânica</option>
                            <option value="Técnico em Informática">Técnico em Informática</option>
                            <option value="Técnico em Manutenção Automotiva">Técnico em Manutenção Automotiva</option>
                            <option value="Técnico em Meio Ambiente">Técnico em Meio Ambiente</option>
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

        <a href="logout.php" id="link-sair">Sair do Sistema</a>
    </body>
</html>