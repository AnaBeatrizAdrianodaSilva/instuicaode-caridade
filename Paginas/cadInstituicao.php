<?php
    include "../include/functions.php";
    include "../include/MySql.php";

    //variaveis
    $email = $nome = $cpf = $senha = "";
    $emailErr = $nomeErr = $cpfErr = $senhaErr = $msgErr = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['cadastro'])){
        if (empty($_POST['nome'])){
            $nomeErr = "Nome é obrigatório!";
        } else {
            $nome = test_input($_POST["nome"]);
        }
	    if (empty($_POST['email'])){
            $emailErr = "Email é obrigatório!";
        } else {
            $email = test_input($_POST["email"]);
        }
 	    if (empty($_POST['cpf'])){
            $cpfErrErr = "cpf é obrigatório!";
        } else {
            $cpf = test_input($_POST["cpf"]);
        }
	    if (empty($_POST['senha'])){
            $senhaErr = "Senha é obrigatório!";
        } else {
            $senha = test_input($_POST["senha"]);
        }
        //verificar se existe um usuario
        if ($email && $nome && $cpf && $senha){
            $sql = $pdo->prepare("SELECT * FROM cadastro WHERE email = ?");
            if ($sql->execute(array($email))){
                if ($sql->rowCount() > 0){
                    $msgErr = "Usuário já cadastrado!";
                }else{
                    $sql = $pdo->prepare("INSERT INTO CADASTRO (codigo, nome, email, senha, cpf)
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



<?php
    require ('../templates/header.php');
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

    <!-- <div class="container"> -->
        <form method="POST" action="" class="form">
            <h1>C&nbsp;&nbsp;A&nbsp;&nbsp;D&nbsp;&nbsp;A&nbsp;&nbsp;S&nbsp;&nbsp;T&nbsp;&nbsp;R&nbsp;&nbsp;O</h1>
            <br>

            <label for="nome">Nome da Instituição:</label>
            <br>
            <input type="text" name="nome" value="<?php echo $nome?>">
            <span class="obrigatorio">* <?php echo $nomeErr ?></span>
            <br>
            <br>

            <label for="email">Tipo de Instituição:</label>
            <br>
            <select class="select" name="select" id="select">
                <option value="">exemplo</option>
                <option value="">exemplo</option>
                <option value="">exemplo</option>
                <option value="">exemplo</option>
            </select>
            <button>Outros...</button>
            <!-- <input type="email" name="email" value="<?php echo $email?>">
            <span class="obrigatorio">* <?php echo $emailErr ?></span> -->
            <br>
            <br>

            <label for="cpf">Descrição:</label>
            <br>
            <input type="text" name="descricao" value="<?php echo $cpf?>" placeholder='000.000.000-0'>
            <span class="obrigatorio">* <?php echo $cpfErr ?></span>
            <br>
            <br>

            <label for="senha">Rede social/forma de contato (link):</label>
            <br>
            <input type="text" name="link" value="<?php echo $senha?>">
            <span class="obrigatorio">* <?php echo $senhaErr ?></span>
            <br>
            <br>
            <input type="file" name="arquivos" class="btn btn-success" multiple/>
            <br>
            <br>
            <br>
            <input class="botao" type="submit" value="Salvar" name="cadastro">
            <!-- <button type="submit" class="botao">Salvar</button> -->
            <span class="obrigatorio"><?php echo $msgErr ?></span>
            <p>Já possuí uma conta? <a class="espesifico" href="cadUsuario.php">Entre agora</a></p>
        </form>
    <!-- </div> -->
</body>
</html>
<?php
    require ('../templates/footer.php');
    //fazer o php
?>