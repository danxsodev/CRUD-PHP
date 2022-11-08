<?php
    include 'conexao.php';

    $userID = $_POST['txt-id'];

    $delete = $comando->query("delete from tbUsers where id = '$userID'");

    //echo "<script src='../src/script/excluir.js'></script>";//
?>