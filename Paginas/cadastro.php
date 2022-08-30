<?php
    include "../include/functions.php";
    include "../include/MySql.php";

    //variaveis
    $email = $nome = $cpf = $senha = "";
    $emailErr = $nomeErr = $cpfErr = $senhaErr = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['cadastro'])){
        if (empty($_POST['email'])){
            $emailErr = "Email é obrigatório!";
        } else {
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST['senha'])){
            $senhaErr = "Senha é obrigatório!";
        } else {
            $senha = test_input($_POST["senha"]);
        }
        if (empty($_POST['nome'])){
            $nomeErr = "Nome é obrigatório!";
        } else {
            $nome = test_input($_POST["nome"]);
        }
        if (empty($_POST['cpf'])){
            $cpfErrErr = "cpf é obrigatório!";
        } else {
            $cpf = test_input($_POST["cpf"]);
        }
        
        //verificar se existe um usuario
        if ($email && $nome && $cpf && $senha){
            $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
            if ($sql->execute(array($email))){
                if ($sql->rowCount() > 0){
                    $msgErr = "Usuário já cadastrado!";
                }else{
                    $sql = $pdo->prepare("INSERT INTO USUARIO (codigo, email, nome, cpf, senha)
                                          values (null, ?,?,?,?)");
                    if ($sql->execute(array($nome, $email, md5($senha), $cpf))){
                        $msgErr = "Dados cadastrados com sucesso!";
                        header('location: login.php');
                    }else{
                        $msgErr = "Dados não cadastrados!";
                    }                     
                }
            }else{
                $msgErr = "Erro no comando SELECT";
            }
        }else{
            $msgErr = "Dados não cadastrados!";
        }
    }
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/styleCadastro.css">
    <link rel="stylesheet" href="../CSS/styleHeader.css">
</head>

<body>
    <nav class="menu">
        <img src="" alt="Logo">
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
    </nav>

    <!-- <div class="container"> -->
        <form method="post" action="" class="form">
            <h1>C&nbsp;&nbsp;A&nbsp;&nbsp;D&nbsp;&nbsp;A&nbsp;&nbsp;S&nbsp;&nbsp;T&nbsp;&nbsp;R&nbsp;&nbsp;O</h1>
            <br>
            <label for="email">Nome Completo:</label>
            <br>
            <input type="text" name="email">
            <span class="nanda">* <?php echo $nomeErr ?></span>
            <br>
            <br>

            <label for="senha">Email:</label>
            <br>
            <input type="text" name="senha">
            <span class="nanda">* <?php echo $emailErr ?></span>
            <br>
            <br>
            <label for="email">CPF:</label>
            <br>
            <input type="text" name="email">
            <span class="nanda">* <?php echo $cpfErr ?></span>
            <br>
            <br>
            <label for="email">Senha:</label>
            <br>
            <input type="text" name="email">
            <span class="nanda">* <?php echo $senhaErr ?></span>
            <br>
            <br>
            <br>
            <input class="botao" type="submit" value="Cadastrar">
            <p>Já possuí uma conta? <a class="espesifico" href="cadUsuario.php">Entre agora</a></p>
        </form>
    <!-- </div> -->
</body>
</html>