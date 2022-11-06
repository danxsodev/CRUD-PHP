<?php
    include 'conexao.php';

    $select = $comando->query("select * from tbUsers");
    $total_registros = $select->rowCount();

    if ($total_registros > 0) {
        echo "<center>";

        echo "<table style = 'border: 2px solid #1a1a1a'>";

        echo "<tr style = 'border: 2px solid #1a1a1a' 'text-align: center;'>  
            <th style = 'border: 2px solid #1a1a1a; text-align: center;'>Dados Cadastrados</th>
        </tr>";
            
        echo "<tr style = 'border: 2px solid #1a1a1a'>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; text-align: center;'>Código</th>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; text-align: center;'>Username</th>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; text-align: center;'>Senha</th>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; text-align: center;'>Sexo</th>
        </tr>";

    }

    else {
        echo "<script src='../src/script/consultar.js'></script>";
    }

   
    while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
        $codigo = $linha['id'];
        $login = $linha['username'];
        $senha = $linha['senha'];
        $sexo = $linha['sexo'];

        echo "<tr style = 'border: 2px solid #1a1a1a align-items: center'>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; align-items: center;'>$codigo</th>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; align-items: center;'>$login</th>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; align-items: center;'>$senha</th>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; align-items: center;'>$sexo</th>
        </tr>";
    }

    echo "</table>";
    echo "</center>";

    echo "<br/><br/>";

    echo "<center>";
    echo "<form>";
    echo "<input type='button' value='VOLTAR AO MENU' style = 'cursor: pointer' onClick = 'window.history.back()'/>";
    echo "</form>";
    echo "</center>";

?>