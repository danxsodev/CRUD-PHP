<?php
    include 'conexao.php';

    $login = $_POST['txt-login'];
    $senha = $_POST['txt-senha'];
    $sexo = $_POST['radio-sexo'];

    $insert = $comando->query("insert into tbUsers(username, senha, sexo) values('$login', '$senha', '$sexo')");

    echo "<script src='../src/script/cadastrar.js'></script>";

    /*echo "<script type='text/JavaScript'> 
        document.querySelector('form').addEventListener('submit', (event) => {
            event.preventDefault();
            window.alert('Cadastro realizado com sucesso!');
            window.history.back();
        });
    </script>";


    echo "<center>";
    echo "<form>";
    echo "<input type='button' value='VOLTAR AO MENU' style = 'cursor: pointer' onClick = 'window.history.back()'/>";
    echo "</form>";
    echo "</center>"; */
?>