<?php
    include 'conexao.php';

    $login = $_POST['txt-login'];

    $select_filtragem_login = $comando->query("select * from tbUsers where username like '$login%'");
    $total_registros = $select_filtragem_login->rowCount();

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

        while ($linha = $select_filtragem_login->fetch(PDO::FETCH_ASSOC)) {
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

        if ($login !="") {
            
            if ($total_registros > 0) {
                
                $select_filtragem_login = $comando->query("select * from tbUsers where username like '$login%'");
                    
            }
            
        }

    }

    else { 
        echo "<script src='../src/script/filtragem.js'></script>";
    }

    echo "</table>";
    echo "</center>";

    echo "<br/><br/>";

    echo "<center>";
    echo "<form>";
    echo "<input type='button' value='VOLTAR' style = 'cursor: pointer' onClick = 'window.history.back()'/>";
    echo "</form>";
    echo "</center>";

?>
