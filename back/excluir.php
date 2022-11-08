<?php
    include 'conexao.php';

    $userID = $_POST['txt-id'];
    /* $login = $_POST['txt-login'];
    $senha = $_POST['txt-senha'];
    $sexo = $_POST['radio-sexo']; */

    $delete = $comando->query("delete from tbUsers where id = '$userID'");

    echo "<center>";
    echo "<form>";
    echo "<input type='button' value='VOLTAR AO MENU' style = 'cursor: pointer' onClick = 'window.history.back()'/>";
    echo "</form>";
    echo "</center>";


    echo "<script src='../src/script/excluir.js'></script>";


?>