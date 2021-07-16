<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>

<body>


    <div class="conteiner">
        <div>
            <img src="assets/imagem.png" alt="">
        </div>

        <div class="form">
            <?php
            if (isset($_SESSION['nao_autenticado'])) :
            ?>
                <div class="aviso aviso1"><strong>Usuário ou senha inválidos</strong></div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
            <?php
            if (isset($_SESSION['vazio'])) :
            ?>
                <div class="aviso aviso1"><strong>Vázio</strong></div>
            <?php
            endif;
            unset($_SESSION['vazio']);
            ?>
            <form action="src/login.php" method="POST">
                <h1>Bem vindo!</h1>
                <input class="inputs" name="usuario" name="text" placeholder="Seu usuário" autofocus="">
                <input class="inputs" name="senha" type="password" placeholder="Sua senha">
                <button class="botao" type="submit">Entrar</button>

            </form>
            <p>An? Tá esperando o que? <a href="src/cadastro.php">Se cadastre!</a></p>
        </div>
    </div>

</body>

</html>