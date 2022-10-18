<?php
    include 'conexao.php';

    $listar = $comando->query("select * from tbl_teste");
    $total_registros = $listar->rowCount();

    if ($total_registros > 0) {
        echo "<center>";

        echo "<table style = 'border: 2px solid #1a1a1a'>";

        echo "<tr style = 'border: 2px solid #1a1a1a'>
        <th colspan=4 style = 'border: 2px solid #1a1a1a text-align: center'> Dados Cadastrados </th></tr>";
        
        echo "<tr style = 'border: 2px solid #1a1a1a'>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; text-align: center;'> Código </th>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; text-align: center;'> Nome </th>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; text-align: center;'> Senha </th>
            <th colspan=4 style = 'border: 2px solid #1a1a1a; text-align: center;'> Sexo </th>
        </tr>";

        echo "</table>";

        echo "</center>";
    }

    else {
        echo <script src="/front/src/script/listar.js"></script>
    }

    echo "<br/><br/>";
    echo "<center>";
    echo "</center>";


?>