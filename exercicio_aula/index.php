<!DOCTYPE html>

<html>
    <head>
        <title>Formulário</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form name="frmCadastro" action="processa.php" method="post" enctype="multipart/form-data">
            <table border="1">
                <tr>
                    <th  colspan="2" class="secao-titulo">
                        FORMULÁRIO DE CONTATO
                    </th>
                </tr>

                <tr>
                    <td width=30%>
                        Nome: 
                    </td>
                    <td>
                    <input 
                        type="text" 
                        name="txtNome" 
                        placeholder="Digite seu nome completo"
                        size="50" 
                        maxlength="100"
                        required
                    />
                </td>
                </tr>

                <tr>
                    <td>
                        Data de Nascimento:
                    </td>
                    <td>
                    <input 
                        type="date" 
                        name="dtNascimento"
                        min="1900-01-01"
                    />
                </td>
                </tr>

                <tr>
                    <td>
                        Mensagem:
                    </td>
                    <td>
                    <textarea 
                        name="txaObservacoes"
                        rows="5" 
                        cols="60"
                        placeholder="Digite sua mensagem aqui..."
                    ></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Escolha o sabor:</td>
                    <td>
                        <input type="radio" name="rdbSabor" id="rdbCalabresa" value="C" checked/>
                        <label for="rdbCalabresa">Calabresa</label><br>
                        
                        <input type="radio" name="rdbSabor" id="rdbMargherita" value="M"/>
                        <label for="rdbMargherita">Margherita</label><br>
                        
                        <input type="radio" name="rdbSabor" id="rdbBacon" value="B"/>
                        <label for="rdbBacon">Bacon</label><br>

                        <input type="radio" name="rdbSabor" id="rdbPalmito" value="P"/>
                        <label for="rdbPalmito">Palmito</label><br>

                        <input type="radio" name="rdbSabor" id="rdbNenhum" value="Nenhum"/>
                        <label for="rdbNenhum">Nenhum</label><br>
                    </td>
                </tr>

                <tr>
                    <td>Escolha um carro:</td>
                    <td>
                        <input type="checkbox" name="chkBMW" id="chkBMW" value="bmw"/>
                        <label for="chkBMW">BMW</label><br>
                        
                        <input type="checkbox" name="chkFiat" id="chkFiat" value="fiat" checked/>
                        <label for="chkCamaro">Fiat</label><br>
                        
                        <input type="checkbox" name="chkCamaro" id="chkCamaro" value="Camaro"/>
                        <label for="chkCamaro">Camaro</label><br>
                    </td>
                </tr>

                <tr>
                    <td>Selecione seu estado:</td>
                    <td>
                        <select name="slcEstado">
                            <option value="" selected>Selecione...</option>
                            <option value="Minas Gerais">MG</option>
                            <option value="São Paulo">SP</option>
                            <option value="Rio de Janeiro">RJ</option>
                        </select>
                    </td>
                </tr>

               <tr>
                    <td>Cidade:</td>
                    <td>
                        <input 
                            list="cidades" 
                            name="txtCidades"
                            placeholder="Digite ou selecione..."
                        />
                        <datalist id="cidades">
                            <option value="Campinas">
                            <option value="Santos">
                            <option value="Ribeirão Preto">
                            <option value="Belo Horizonte">
                            <option value="Bambuí">
                            <option value="Campo Belo">
                            <option value="Rio de Janeiro">
                            <option value="Petrópolis">
                            <option value="Paraty">
                        </datalist>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input
                            type="reset"
                            name="btnLimpar"
                            value="Limpar Formulario"
                            class="buttonReset"
                        />
                    </td>
                    <td>
                        <input
                            type="submit"
                            name="btnEnviar"
                            value="Enviar Formulario"
                            class="buttonSubmit"
                        />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>