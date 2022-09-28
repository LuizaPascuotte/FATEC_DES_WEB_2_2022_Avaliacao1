<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1>Relatório de Atletas cadastrados</h1>
    <br><br>
<?php
$arquivo = "Cadastros.txt"; 

if ( file_exists( $arquivo ) ) 
{
	$ler = $handle = fopen( $arquivo, 'r' );
    while(!feof($ler))
    {
        echo fgets($ler) . "<br>";
    }
	fclose($handle);
}
?>
    <br><br>
    <a href="decisao.php" class="btn btn-danger">Voltar</a>
</body>
</html>