<?php
    include 'conexao.php';

    $login = $_POST['txt-login'];

    $select_filtragem = $comando->query("select from tbUsers where username = '$login' like '%' ");

?>