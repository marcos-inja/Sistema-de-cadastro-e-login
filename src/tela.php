<?php
session_start();
include('verificar.php');
include('conexao.php');

$query = "select * from usuario";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela</title>
</head>

<body>
<?php

if ($result->num_rows > 0) {
    echo 'contas:';
    echo '<br>';
    while ($linha = $result->fetch_assoc()) {
        
        echo '<div class="card bg-light mb-3" style="max-width: 18rem;">';
        echo '<div class="card-header">@'. $linha['usuario'].'</div>';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">'.$linha['nome'].'</h5>';
        echo '</div>';
        echo '</div>'; 
    
    }
}
?>
    
</body>

</html>

<h2>Usúario logado: <?php echo $_SESSION['nome']; ?></h2>

<h2><a href="logout.php">Sair</a></h2>
<?php
if ($row == 1) {
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuario_bd['nome'];
}
?>