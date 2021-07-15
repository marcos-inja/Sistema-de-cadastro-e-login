<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
</head>

<body>
    <h3>Cadastro</h3>

    <?php
    if (isset($_SESSION['autenticado'])) :
    ?>
        
            Cadastro efetuado!<br>
            Faça login informando o seu usuário e senha <strong><a href="login.php">aqui</a></strong>
            
    <?php
    endif;
    unset($_SESSION['autenticado']);
    ?>

<?php
    if (isset($_SESSION['usuario_existe'])) :
    ?>
        
            Usuario existente!<br>
            Faça login informando o seu usuário e senha <strong><a href="login.php">aqui</a></strong>
            
        </div>
    <?php
    endif;
    unset($_SESSION['usuario_existe']);
?>

    <form action="cadastrar.php" method="POST">
        <input name="nome" type="text" placeholder="Nome" autofocus>
        <input name="email" type="text" placeholder="Email">
        <input name="usuario" type="text" placeholder="Usuário">
        <input name="senha" type="password" placeholder="Senha">
        <button type="submit">Cadastrar</button>
    </form>

</body>

</html>