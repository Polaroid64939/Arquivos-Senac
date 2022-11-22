<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styless" href="../estilos.css">
    <title>Pagina Principal</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #container{
            width: 90%;
            padding: 25px;
            display: block;
            margin: 0 auto;
            min-height: 800px;
            font-family: 'Courier New',  Courier,monospace;
        }
        #topo{
            width: 100%;
            background-color: #4f8df0;
            padding-top: 25px;
            padding-bottom: 25px;
            margin-bottom: 25px;
        }
        .topo > h1{
            text-align: center;
        }
        .menu{
            list-style: none;
            text-align: right;
            margin-bottom: 20px;
        }
        .menu li{
            background-color: yellow;
            display: inline;
            padding: 15px;
        }
        li a{
            text-decoration: none;
            color: black;
        }
        li a:hover{
        color: blue;
        font-weight: bolder;
        background-color: red;
        }
        .menu li:hover{
            background-color: #4e5157;
            border:1px solid black;
        }
        #conteudo{
            background-color: green;
            width: 100%;
        }
    </style>
</head>
<body>
  
      <div id="container">
          <div id="topo">
              <h1>Projeto PHP e MySQL</h1>
              <p>Todos os scripts da unidade curricular</p>
          </div>
          
          <nav>
          <ul class="menu">
              <li><a href="#">Principal</a></li>
              <li><a href="forms/formCadUsuario.php">Cadastro</a></li>
              <li><a href="/forms/formLogin.php">Login</a></li>
              <li><a href="#">Fale Conosco</a></li>
              <li><a href="#">Sobre</a></li>
          </ul>
          </nav>
          <div id="conteudo">
              conteudo da primeira pagina
          </div>
      </div>
    
    
</body>
</html>