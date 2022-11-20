<?php
    include 'conexao.php';

    $userID = $_POST['txt-id'];
    $btnDeleteUser = $_POST['btn-delete'];

    $select = $comando->query("select * from tbUsers");
    $select_filtragem_id = $comando->query("select * from tbUsers where id = '$userID'");
    $total_registros = $select_filtragem_id->rowCount();

    echo "<center>";

        echo "<table style = 'border: 2px solid #1a1a1a'>";

        echo "<tr style = 'border: 2px solid #1a1a1a' 'text-align: center;'>  
            <th colspan=4 style = 'border: 2px solid #1a1a1a; text-align: center;'>Dados Cadastrados</th>
        </tr>";
            
        echo "<tr style = 'border: 2px solid #1a1a1a'>
            <th  style = 'border: 2px solid #1a1a1a; text-align: center;'>Código</th>
            <th  style = 'border: 2px solid #1a1a1a; text-align: center;'>Username</th>
            <th  style = 'border: 2px solid #1a1a1a; text-align: center;'>Senha</th>
            <th  style = 'border: 2px solid #1a1a1a; text-align: center;'>Sexo</th>
        </tr>";

        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            $userID = $linha['id'];
            $login = $linha['username'];
            $senha = $linha['senha'];
            $sexo = $linha['sexo'];
    
            echo "<tr style = 'border: 2px solid #1a1a1a align-items: center'>
                <th  style = 'border: 2px solid #1a1a1a; align-items: center;'>$userID</th>
                <th  style = 'border: 2px solid #1a1a1a; align-items: center;'>$login</th>
                <th  style = 'border: 2px solid #1a1a1a; align-items: center;'>$senha</th>
                <th  style = 'border: 2px solid #1a1a1a; align-items: center;'>$sexo</th>
            </tr>";
        }
    


    if ($userID !="") {
        
        if ($total_registros > 0) {
        
            if($btnDeleteUser != "") {
                $delete = $comando->query("delete from tbUsers where id = '$userID'");
                echo "<script src='../src/script/excluir.js'></script>";
                echo "<meta http-equiv='refresh' content='0'/>";
            }

        }

        else { 
            echo "<script language=javascript> window.alert('Este usuário não existe!');</script>";
        }
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