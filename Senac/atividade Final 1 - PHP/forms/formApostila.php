<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir dados Apostila</title>
    <link rel="stylesheet" href="../css/css.css">
</head>
<body>
    <form action="" method="POST" enctype="multipart/form/data">
    <center>
    <label for="">Nome Apostila:</label>
    <input type="text" name="nome"><br>
    <label for="">Data Publicação Apostila:</label>
    <input type="date" name="dataapostila"><br>
    <label for="">Descrição Apostila:</label>
    <input type="text" name="descapostila"><br>
    <label for="">Nome Do Arquivo:</label>
    <input type="text" name="nomearqv"><br>
    <label for="">Data Do Cadastro:</label>
    <input type="date" name="datacadastro"><br>
    <label for="">Capa Apostila</label>
    <input type="file" name="capafoto"><br><br>
    <input type="submit" value="Cadastrar">
    </center>
    </form>

</body>
</html>