<?php
    require("../CSS/style.php");
    require("../CSS/styleHeader.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <nav class="menu">
        <img src="" alt="Logo">
        <ul>
            <li><a href="">Home----</a></li>
            <li id="cadastrar"><a href=""> Cadastrar</a></li>
            <li><a href="">Login</a></li>
        </ul>
    </nav>


    <!-- <div class="container"> -->
        <form method="post" action="" class="form">
            <h1>L&nbsp;&nbsp;O&nbsp;&nbsp;G&nbsp;&nbsp;I&nbsp;&nbsp;N</h1>
            <label for="email">Email:</label>
            <br>
            <input type="text" name="email">
            <span class="nanda">*</span>
            <br>
            <br>
            <label for="senha">Senha:</label>
            <br>
            <input type="text" name="senha">
            <span class="nanda">* </span>
            <br>
            <br>
            <input class="botao" type="submit" value="Login">
            <p>Não possui conta? <a href="cadUsuario.php">Crie agora</a></p>
        </form>
    <!-- </div> -->
</body>

</html>