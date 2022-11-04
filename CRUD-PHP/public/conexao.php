<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "12345678";
    $banco = "bdTeste";
    $comando = new PDO("mysql:host=$servidor; dbname=$banco", $usuario, $senha);
?>