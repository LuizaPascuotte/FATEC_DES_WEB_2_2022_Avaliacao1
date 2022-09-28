<?php

function gravar($texto)
{
    $arquivo = "Cadastros.txt";

    $open = fopen($arquivo, "a");
    fwrite($open, $texto);
    fflush($open);

    fclose($open);
}

if(isset($_POST["nome"]) and isset($_POST["esporte"]) and isset($_POST["empresa"]))
{
    gravar($_POST["nome"] . "\n");
    gravar($_POST["esporte"] . "\n");
    gravar($_POST["empresa"] . "\n");
    gravar($_POST["contato"] . "\n");
}
header("location: decisao.php");
exit;

?>