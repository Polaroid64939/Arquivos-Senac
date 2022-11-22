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
            width: 100%;
            height:100vh;
        }
        input[type='file']{
            display: none;
        }
        .foto-file{
            display:block;
            width: center 80%;
            background-color: #cccbc8;
            padding: 10px;
            border-radius: 15px;
            text-align: center;
            cursor: pointer;
            color: blue;
        }
            </style>
</head>
<body>
        <div id="form">
        <form action="../scripts/scriptInsert.php" method="POST" enctype="multipart/form-data">
             <label for="">Nome:</label>
            <div class="entrada">
             <input type="text" name="nome">
            </div>

             <label for="foto" class="foto-file">Selecione Foto</label>
             <input type="file" name="file" id="foto">

            <label for="">E-mail:</label>
            <div class="entrada">
            <input type="text" name="email">
            </div>

            <label for="">Senha:</label>
             <div class="entrada">
            <input type="password" name="senha" required>
         </div>
            <label for="">Confirme sua Senha:</label>
        <div class="entrada">
            <input type="password" name="senha2" required>
        </div>
        <input type="hidden" name="tipo" value="adm">
        <input type="submit" value="Cadastrar">

       </form>
    
</body>
</html>