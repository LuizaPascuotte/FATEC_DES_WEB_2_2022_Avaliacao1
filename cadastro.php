<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastrar</h2>
        <p>Favor inserir os dados a seguir.</p>
        <form action="save.php" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Esporte que pratica</label>
                <input type="text" name="esporte" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
            <div class="form-group">
                <label>Empresa que trabalha</label>
                <input type="text" name="empresa" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Telefone para contato</label>
                <input type="text" name="contato" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
            <a href="decisao.php" class="btn btn-danger">Voltar</a>
        </form>
    </div>    
</body>
</html>