<?php
    include 'conexao.php';

    $userID = $_POST['txt-id'];
    $btnUpdateUser = $_POST['btn-update'];

    $select = $comando->query("select * from tbUsers");
        
    $total_registros = $select->rowCount();
        
    echo "<center>";  
            
        echo "<table style = 'border: 2px solid #e7e7e7'>";

            while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
                $userID = $linha['id'];
                $login = $linha['username'];
                $senha = $linha['senha'];
                $sexo = $linha['sexo'];

                echo "<tr style = 'border: 2px solid #e7e7e7' 'text-align: center;'>  
                    <th colspan=4 style = 'border: 2px solid #e7e7e7; text-align: center;'>Dados Cadastrados</th>
                </tr>";
                    
                echo "<tr style = 'border: 2px solid #e7e7e7'>
                    <th  style = 'border: 2px solid #e7e7e7; text-align: center;'>Código</th>
                    <th  style = 'border: 2px solid #e7e7e7; text-align: center;'>Username</th>
                    <th  style = 'border: 2px solid #e7e7e7; text-align: center;'>Senha</th>
                    <th  style = 'border: 2px solid #e7e7e7; text-align: center;'>Sexo</th>
                </tr>";

                echo "<tr style = 'border: 2px solid #e7e7e7 align-items: center'>
                    <th  style = 'border: 2px solid #e7e7e7; align-items: center;'>$userID</th>
                    <th  style = 'border: 2px solid #e7e7e7; align-items: center;'>$login</th>
                    <th  style = 'border: 2px solid #e7e7e7; align-items: center;'>$senha</th>
                    <th  style = 'border: 2px solid #e7e7e7; align-items: center;'>$sexo</th>
                </tr>";
                }
                
        echo "</table>";

    echo "</center>";

    if ($userID !="") {
        
        if ($total_registros > 0) {

            if ($btnUpdateUser != "") {
                    
                $userID = $_POST['txt-id'];
                $login = $_POST['txt-login'];
                $senha = $_POST['txt-senha'];
                $sexo = $_POST['radio-sexo'];

                $update = $comando->query("update tbUsers set username = '$login', senha = '$senha', sexo = '$sexo' 
                where id = '$userID'");

                echo "<script src='../src/script/alterar.js'></script>";

                echo "<meta http-equiv='refresh' content='0' />";

            }

        }

        else { 
            echo "<script language='JavaScript'>window.alert('Este usuário não existe!');</script>";
        }
    }

    echo "<br/><br/>";

    echo "<center>";
        echo "<form>";
            echo "<input type='button' value='VOLTAR' style = 'cursor: pointer' onClick = 'window.history.back()'/>";
        echo "</form>";
    echo "</center>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style/main.css">
    <title>Alterar dados do usuário</title>
</head>

<body>
    <section>
        <header>
            <h1>Alterar dados do usuário</h1>
        </header>

        <form method="post" action="./alterar.php">

            <fieldset>
                <span>
                    <h3>Insira seus dados para altera-los</h3>
                </span>

                <label for="txt-id">Código de usuário</label>
                <input type="text" name="txt-id" id="txt-id" placeholder="Insira seu código de usuário" required>

                <span><a href="../back/consultar.php">Esqueceu seu código? Clique Aqui</a></span>

                <label for="txt-login">Login:</label>
                <input type="text" name="txt-login" id="txt-login" placeholder="Insira seu username" required>

                <label for="txt-senha">Senha:</label>
                <input type="password" name="txt-senha" id="txt-senha" placeholder="Insira sua senha" required>

                <div class="select-gender">
                    <span>
                        <h4>Selecione o sexo:</h4>
                    </span>

                    <span>
                        <input type="radio" name="radio-sexo" id="feminino" value="F">
                        <label for="feminino">Feminino</label>
                    </span>

                    <span>
                        <input type="radio" name="radio-sexo" id="masculino" value="M">
                        <label for="masculino">Masculino</label>
                    </span>

                    <span>
                        <input type="radio" name="radio-sexo" id="nao-binario" value="NB">
                        <label for="nao-binario">Não binário</label>
                    </span>
                </div>

                <div class="btn">
                    <input type="submit" value="Alterar" name="btn-update" id="btn-submit">
                    <input type="reset" value="Limpar" id="btn-reset">
                    <input type="button" value="Voltar ao menu" id="btn-back" onClick="location.href='../index.html'">
                </div>
            </fieldset>
        </form>
    </section>

    
</body>
</html>
