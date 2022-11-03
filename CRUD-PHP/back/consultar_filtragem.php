<?php
    include 'conexao.php';

    $nome = $_POST[txt-login];
    $senha = $_POST[txt-senha];
    $sexo = $_POST[radio-sexo];

    $filtragem = $comando->query("select from tbl_teste where nm_teste = '$nome';");

    $
    
?>