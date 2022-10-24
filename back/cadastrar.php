<?php
    include 'conexao.php';

    $nome = $_POST[txt-login];
    $senha = $_POST[txt-senha];
    $sexo = $_POST[radio-sexo];

    $insert = $comando->query("insert into tbl_teste nm_usuario, senha_usuario, sexo_usuario
    values ('$nome', '$senha', '$sexo')");

    echo <script src="/front/src/script/cadastrar.js"></script>
?>