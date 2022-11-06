<?php
    include 'conexao.php';

    $login = $_POST[txt-login];
    $senha = $_POST[txt-senha];
    $sexo = $_POST[radio-sexo];

    $select_filtragem = $comando->query("select from tbUsers where username = '$login' like '%' ");


    

?>