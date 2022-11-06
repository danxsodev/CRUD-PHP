<?php
    include 'conexao.php';

    $userID = $_POST['txt-id'];
    $login = $_POST[txt-login];
    $senha = $_POST[txt-senha];
    $sexo = $_POST[radio-sexo];

    $update = $comando->query("update tbUsers set username = '$login', senha = '$senha', sexo = '$sexo' 
    where id = '$userID'");


?>