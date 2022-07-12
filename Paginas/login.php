<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/styleLogin.css">
    <link rel="stylesheet" href="../CSS/styleHeader.css">
    <link rel="stylesheet" href="CSS/styleFooter.css">
</head>

<body>
    <?php
    require("../templates/header.php");
    ?>

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

    <?php
        require("../templates/footer.php");
    ?>
</body>
</html>