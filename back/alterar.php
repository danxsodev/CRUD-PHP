<?php
    include 'conexao.php';

    $login = $_POST['txt-login'];
    $senha = $_POST['txt-senha'];
    $sexo = $_POST['radio-sexo'];
    $userID = $_POST['txt-id'];
    
    $update = $comando->query("update tbUsers set username = '$login', senha = '$senha', sexo = '$sexo' 
    where id = '$userID'");

    echo "<center>";
    echo "<form>";
    echo "<input type='button' value='VOLTAR AO MENU' style = 'cursor: pointer' onClick = 'window.history.back()'/>";
    echo "</form>";
    echo "</center>";


    echo "<script src='../src/script/alterar.js'></script>";
?>