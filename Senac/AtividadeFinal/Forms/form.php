<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo.css">
    <title>Formulário</title>
</head>
<body>
    <form action="../Scripts/insert.php" method="POST" enctype="multipart/form-data">
        <label for="">Nome:</label>
        <input type="text" name="nome" required>
        <label for="">Data da Publicação:</label>
        <input type="date" name="publi" required>
        <label for="">Descrição Apostila:</label>
        <textarea name="desc" id="" cols="30" rows="10" placeholder="Digite algo.." required></textarea>
        <label for="">Apostila:</label>
        <input type="file" name="apostila" required>
        <label for="">Capa Apostila:</label>
        <input type="file" name="capa" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>