<!DOCTYPE html>
<hmtml>
    <head>
        <title>
            Formulário HTML - Demonstração de controles
        </title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <h1 style="text-align:center;">Demonstração de Controles HTML para formulário</h1>
        <!-- Formulário principal !-->
        <form 
            name="frmCadastro" 
            id="frmCadastro" 
            action="index_processa.php"
            method="get"
            enctype="multipart/form-data"
        >
            <!-- campo oculto - armazena dados que nao sao visiveis !-->
            <input 
                type="hidden"
                name="hddIdSessao"
                value="ABC123"
            />

            <!-- tabela que contem formulario!-->
            <table border="1px">
                <tr>
                    <td colspan="2">Formulário de cadastro completo</td>
                </tr>
                <tr>
                    <td colspan="2">Campos de textos básicos</td>
                </tr>

                <!-- campo apenas para leitura!-->
                <tr>
                    <td width="30%">Código</td>
                    <td>
                        <input 
                            type="text"
                            name="txtCodigo"
                            value="123456"
                            readonly=True
                        />
                        <small>(Campo somente leitura)</small>
                    </td>
                </tr>

                <!-- campo texto, editavel!-->
                <tr>
                    <td width="30%">Nome:</td>
                    <td>
                        <input 
                            type="text"
                            name="txtNome"
                            placeholder="Digite o nome aqui"
                            size="50"
                            maxlength="100"
                        />
                        <small>(Máximo de 100 caracteres)</small>
                    </td>
                </tr>

                <!-- campo texto, para senha!-->
                <tr>
                    <td width="30%">Senha:</td>
                    <td>
                        <input 
                            type="password"
                            name="txtSenha"
                            placeholder="Digite a senha aqui"
                            minlength="6"
                            maxlength="8"
                            required
                        />
                        <small>(Entre 6 e 8 caracteres)</small>
                    </td>
                </tr>
                
                <!-- campo texto, desabilitado!-->
                <tr>
                    <td width="30%">Texto desabilitado:</td>
                    <td>
                        <input 
                            type="txt"
                            name="txtDesabilitado"
                            value="Texto"
                        />
                        <small>(Não enviado)</small>
                    </td>
                </tr>
            </table>

            <input 
                type="submit"
                name="btnEnviar"
            />
        </form>
    </body>
</html>