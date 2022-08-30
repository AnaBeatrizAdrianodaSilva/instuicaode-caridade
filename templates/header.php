<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/styleHeader.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
        <!-- font-family: 'Ubuntu', sans-serif; -->
</head>

<body>
    <!-- <nav class="menu">
        <img src="../img/logo.png" alt="Logo" class="logo">
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li id="cadastrar">
                <a href=""> Cadastrar</a>
            </li>
            <li>
                <a href="">Login</a>
            </li>
        </ul>
    </nav> -->

    <header>
        <nav class="nav-bar">
            <div class="logo">
                <!-- <h1>Logo</h1> -->
                <img class='logo' src="../img/logo.png" alt="">
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Projetos</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> Sobre</a></li>
                </ul>
            </div>
            <div class="login-button">
                <button><a href="#">Entrar</a></button>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="../img/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Cadastrar</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
            </ul>

            <div class="login-button">
                <button><a href="#">Entrar</a></button>
            </div>
        </div>
    </header>

    <script src="../JS/menu.js"></script>
</body>

</html>