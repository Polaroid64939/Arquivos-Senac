<?php

session_start();
if(isset($_SESSION['nome'])){
echo "Seja bem-vindo,".$_SESSION['nome'];

?>
<br>
<a href="script/scriptLogout.php">Sair</a>
<?php }{
    header("Location:forms/formsLogin.php");
}?>