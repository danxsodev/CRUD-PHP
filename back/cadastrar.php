<?php
    include
    include 'conexao.php';

    $nome = $_POST[txt-login];
    $senha = $_POST[txt-senha];
    $sexo = $_POST[radio-sexo];

    $insert = $comando->query("insert into tbl_teste nm_teste, senha_teste, sexo_teste
    values ('$nome', '$senha', '$sexo');");

    echo "<script src='/front/src/script/cadastrar.js'></script>";
?>