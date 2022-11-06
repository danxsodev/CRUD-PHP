<?php
    include 'conexao.php';

    $userID = $_POST['txt-id'];
    /* $login = $_POST['txt-login'];
    $senha = $_POST['txt-senha'];
    $sexo = $_POST['radio-sexo']; */

    $delete = $comando->query("delete from tbUsers where id = '$userID'");

?>