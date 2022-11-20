<body>
        <form id="form1" method="post" action="altera_dados.php">
            <h2>Atualização de Registros</h2>
            <p>
                Código do registro a ser alterado&nbsp;
                <input type="text" name="txtcod" id="txtcod" /> <br/>
                Nome&nbsp;
                <input type="text" name="txtnome" id="txtnome" /><br/>
                Sexo&nbsp;
                <input type="text" name="txtsexo" id="txtsexo" /><br/>
                Senha&nbsp;
                <input type="text" name="txtemai" id="txtemai" /><br/>
                <input type="submit" name="botao" id="botao" value="Consulta" />&nbsp;&nbsp;
                <input type="button" value="MENU" onClick="Saindo()"/>
            </p>
        </form>
       
        <?php
        //estabelecendo a conexão com banco de dados
        $conexao=mysql_pconnect('localhost','root','') or die("Problema ao efetuar a conexão com banco de dados");
       
        //abrindo o banco de dados que foi criado na área phpMyAdmin
        $abre_banco=mysql_select_db('BD_Teste',$conexao) or die("Problema ao abrir o banco de dados");
       
        //listando TODOS OS REGISTROS para disponibilizar os códigos dos registros
        $comando=mysql_query("select * from TB_Teste") or die(mysql_error());
               
        echo "<table>";
       
        echo "<tr><td colspan=4>Dados Cadastrados</td></tr>";
        echo "<tr><th>Código</th><th>Nome</th><th>Sexo</th><th>Senha</th></tr>";
               
        while ($linha=mysql_fetch_array($comando))
        {
            $ccodigo=$linha['Cod_Teste'];
            $cnome=$linha['Nome_Teste'];
            $csexo=$linha['Sexo_Teste'];
            $cemail=$linha['Email_Teste'];
                   
            //imprimindo o vetor
            echo "<tr><td>$ccodigo</td><td>$cnome</td><td>$csexo</td><td>$cemail</td></tr>";
        }
           
        //fechando a lista em forma de tabela
        echo "</table>";
       
        $bt='';
        $bt=$_POST['botao'];
       
        if ($bt!='')
        {
        if ($bt=='Consulta')
        {
            //recebe o código escolhido da lista para consultar com filtro
            $codigo=$_POST['txtcod'];
                     
            // rodando a consulta verificando se o código escolhido existe
            $comando=mysql_query("select * from TB_Teste where Cod_Teste='$codigo'") or die(mysql_error());
                       
            // se resultou algum registro(linha)
            if(mysql_num_rows($comando) > 0)
            {
                while ($linha=mysql_fetch_array($comando))
                {
                    $codigo=$linha['Cod_Teste'];
                    $nome=$linha['Nome_Teste'];
                    $sexo=$linha['Sexo_Teste'];
                    $email=$linha['Email_Teste'];
                    echo "<script language='JavaScript'>document.getElementById('txtcod').value='$codigo';</script>";
                    echo "<script language='JavaScript'>document.getElementById('txtnome').value='$nome';</script>";
                    echo "<script language='JavaScript'>document.getElementById('txtsexo').value='$sexo';</script>";
                    echo "<script language='JavaScript'>document.getElementById('txtemai').value='$email';</script>";
                   
                    // mudando  o value do botão para "Altera" para executar o bloco de comandos abaixo
                    echo "<script language='JavaScript'>document.getElementById('botao').value='Altera';</script>";
                }
            }
            else //else do "if" do "num_rows"
            {
                echo "<script language=javascript> window.alert('Registro inexistente!!! ');</script>";
            }
        }
        else if($bt=='Altera')
        {
            //recebendo os valores dos campos do formulário
            $codigo=$_POST['txtcod'];
            $nome=$_POST['txtnome'];
            $sexo=$_POST['txtsexo'];
            $email=$_POST['txtemai'];   
           
            //altera o registro com o código escolhido
            $comando=mysql_query("update TB_Teste set Nome_Teste='$nome', Sexo_Teste='$sexo', Email_Teste='$email' where Cod_Teste='$codigo'") or die(mysql_error());
            echo "<script language=javascript>window.alert('Registro alterado com sucesso!!! '); </script>";
           
            // atualizando a tela depois da exclusão
            echo "<meta http-equiv='refresh' content='0' />";
           
            // voltando o value do botão para "Consulta" para executar o bloco de comandos acima novamente
            echo "<script language='JavaScript'>document.getElementById('botao').value='Consulta';</script>";
        }
        }
        //fechando o banco de dados
        $fecha_banco=mysql_close($conexao);
        ?>
    </body>
</html>