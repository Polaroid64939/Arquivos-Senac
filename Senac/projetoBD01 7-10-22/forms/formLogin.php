<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title> 
    <link rel="stylesheet" href="../css/estilos.css">
    <style>
        body{
            width:100%;
            height: 100vh;
        }
    </style>
</head>
<body>
<div id="form">
    <form action="" method="POST">
    <label for="">E-mail:</label>
    <div class="entrada">
        <input type="text" name="email" require>
    </div>
    <label for="">Senha:</label>
    <div class="entrada">
        <input type="password" name="senha" require>
    </div>
    <input type="submit" value="login">
    </form>
</div>
</body>
</html>