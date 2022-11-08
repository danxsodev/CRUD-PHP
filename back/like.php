<
<?php

include 'conexao.php';
$like = $_POST['txtlike'];
$consultar = $comando->query("select * from tbteste where Nome_t like '%$like%'");

$total_registros = $consultar->rowCount();
if($total_registros > 0){
    echo "<center>";
    echo "<table style='border:2pxsolid rgb(0,0,0)'><th colspan=4 style='border:2px solid
    rgb(0,0,0);text-align:center'>Dados Cadastrados</th></tr>";
    echo "<tr style='border:2px solid rgb(0,0,0)'><th style='border:2px solid
    rgb(0,0,0);text-align:center'>Código</th><th style='border:2px solid rgb(0,0,0); text-
    align:center'>Nome</th><th style='border:2px solid rgb(0,0,0);text-
    align:center'>Senha</th><th style='border:2px solid rgb(0,0,0);text-
    align:center'>Sexo</th><th syle='border:2px solid rgb(0,0,0); text-
    align:center'></tr>";


    while ($linha = $consultar->fetch(PDO::FETCH_ASSOC)) {
        $codigo = $linha['Codi_t'];
        $nome = $linha['Nome_t'];
        $senha = $linha['Senha_t'];
        $sexo = $linha['Sexo_t'];

        echo "<tr style='border 2px solid rgb(0,0,0)'><td style='border:2px solid
    blue;text-align:center'>$codigo</td><td style='border:2px solid
    blue;text-align:center'>$nome</td><td style='border:2px solid
    blue;text-align:center'>$senha</td><td style='border:2px solid
    blue;text-align:center'>$sexo</td><td style='border:2px solid 
</td></tr>";
        echo "<input type='button' value='MENU' onClick='window.history.back()'/>";
    }
    echo "</table>";
}
else {
    echo "<script language=javascript> window.alert('Não existem registros para exibir!!');
    window.history.back();</script>";
}

echo "<br/><br/>";
echo "<center>";
echo "<form>";
echo "<input type='button' value='MENU' onClick='window.history.back()'/>";
echo "</form>";
echo "</center>";


?>