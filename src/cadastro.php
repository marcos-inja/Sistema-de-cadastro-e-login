<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastro</title>
</head>

<body>

    <div class="conteiner">
        <div>
            <img src="../assets/imagem.png" alt="">
        </div>

        <div class="form">
            <?php
            if (isset($_SESSION['autenticado'])) :
            ?>
                <div class="aviso1">
                    Cadastro efetuado!<br>
                    Faça login informando o seu usuário e senha <strong><a href="../index.php">aqui</a></strong>
                </div>
            <?php
            endif;
            unset($_SESSION['autenticado']);
            ?>

            <?php
            if (isset($_SESSION['usuario_existe'])) :
            ?>
                <div class="aviso1">
                    <p>Usuario existente!</p>
                    Faça login informando o seu usuário e senha <strong><a href="../index.php">aqui</a></strong>
                </div>
            <?php
            endif;
            unset($_SESSION['usuario_existe']);
            ?>

            <form action="cadastrar.php" method="POST">
                <h1>Cadastre-se!</h1>
                <input class="inputs" name="nome" type="text" placeholder="Nome" autofocus>
                <input class="inputs" name="email" type="text" placeholder="Email">
                <input class="inputs" name="usuario" type="text" placeholder="Usuário">
                <input class="inputs" name="senha" type="password" placeholder="Senha">
                <button class="botao" type="submit">Cadastrar</button>
            </form>
            <p>An? Já tem uma conta? <a href="../index.php">Entre aqui!</a></p>
        </div>
    </div>

</body>

</html>