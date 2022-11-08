<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style/main.css">
    <title>Procurar Usuário</title>
</head>

<body>
    <section>

        <header>
            <h1>Procurar Usuário</h1>
        </header>

        <form method="post" action="../back/consultar_filtragem.php">

            <fieldset>
                <span>
                    <h3>Insira seu username para consultar seu registro</h3>
                </span>

                <label for="txt-login">Login:</label>
                <input type="text" name="txt-login" id="txt-login" placeholder="Insira seu username" required>

                <div class="btn">
                    <input type="submit" value="Pesquisar" id="btn-submit">
                    <input type="reset" value="Limpar" id="btn-reset">
                    <input type="button" value="Voltar ao menu" id="btn-back" onClick="location.href='../index.html'">
                </div>
    
            </fieldset>

        </form>

    </section>
</body>
</html>

<?php
    include 'conexao.php';

    $login = $_POST['txt-login'];

    $select_filtragem = $comando->query("select * from tbUsers where username like '%$login%' ");
    $total_registros = $select_filtragem->rowCount();

    if ($total_registros > 0) {
        echo "<center>";

        echo "<table style = 'border: 2px solid #dacadd'>";

        echo "<tr style = 'border: 2px solid #dacadd' 'text-align: center;'>  
            <th colspan=4 style = 'border: 2px solid #dacadd; text-align: center;'>Dados Cadastrados</th>
        </tr>";
            
        echo "<tr style = 'border: 2px solid #dacadd'>
            <th style = 'border: 2px solid #dacadd; text-align: center;'>Código</th>
            <th style = 'border: 2px solid #dacadd; text-align: center;'>Username</th>
            <th style = 'border: 2px solid #dacadd; text-align: center;'>Senha</th>
            <th style = 'border: 2px solid #dacadd; text-align: center;'>Sexo</th>
        </tr>";

        while ($linha = $select_filtragem->fetch(PDO::FETCH_ASSOC)) {
            $userID = $linha['id'];
            $login = $linha['username'];
            $senha = $linha['senha'];
            $sexo = $linha['sexo'];
    
            echo "<tr style = 'border: 2px solid #dacadd align-items: center'>
                <th style = 'border: 2px solid #dacadd; align-items: center;'>$userID</th>
                <th style = 'border: 2px solid #dacadd; align-items: center;'>$login</th>
                <th style = 'border: 2px solid #dacadd; align-items: center;'>$senha</th>
                <th style = 'border: 2px solid #dacadd; align-items: center;'>$sexo</th>
            </tr>";
        }

    }

    else {
        echo "<script src='../src/script/filtragem.js'></script>";
    }

    echo "</table>";
    echo "</center>";

    
?>

