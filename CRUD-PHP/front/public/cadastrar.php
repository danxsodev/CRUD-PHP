<?php
    include 'conexao.php';

    $login = $_POST['txt-login'];
    $senha = $_POST['txt-senha'];
    $sexo = $_POST['radio-sexo'];

    $insert = $comando->query("insert into tbUsers(username, senha, sexo) values('$nome', '$senha', '$sexo')");

    echo "<script src='../src/script/cadastrar.js'></script>";
?>