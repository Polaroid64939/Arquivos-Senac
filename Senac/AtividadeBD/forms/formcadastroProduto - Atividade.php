<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados Produto - Atividade 21/09/2022 - Lucas Dos Santos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <center>
    <form action="../scripts/scriptInsert.php" method="POST" action="tesateform2.php" enctype="multipart/form-data">
    <label for="">Nome Do Poroduto:</label>
    <input type="text" name="nomeporoduto">
    <label for="">Foto Do Produto:</label>
    <input type="file" name="file">
    <label for="">Marca:</label>
    <input type="text" name="marca">
    <label for="">Quantidade:</label>
    <input type="text" name="quantidade" require>
    <label for="">Validade Do Produto:</label>
    <input type="date" name="datavalidade" required>
    <br><br>
    <input type="submit" value="Cadastrar">
    </form>
    </center>
</body>
</html>