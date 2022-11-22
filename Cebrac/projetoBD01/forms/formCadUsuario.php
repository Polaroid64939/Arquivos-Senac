<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

    <form action="../scripts/scriptInsert.php" method="POST" enctype="multipart/form-data">
    <label for="">Nome:</label>
    <input type="text" name="nome">
    <label for="">Foto:</label>
    <input type="file" name="file">
    <label for="">E-mail:</label>
    <input type="text" name="email">
    <label for="">Senha:</label>
    <input type="password" name="senha" required>
    <label for="">Confirme sua Senha:</label>
    <input type="password" name="senha2" required>
    <input type="hidden" name="tipo" value="adm">
    <input type="submit" value="Cadastrar">
    </form>

</body>
</html>