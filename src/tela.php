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
    <link rel="stylesheet" href="../css/tela.css">
    <title>Tela</title>
</head>

<body>

    <div class="conteiner">
        <div class="dados">
            <h2>Marcos Vinicius</h2>
        </div>

        <div class="contas">
            <?php
            if ($result->num_rows > 0) {
                echo '<h1>contas:</h1>';
                echo '<br>';
                while ($linha = $result->fetch_assoc()) {
                    
                    echo '<div class="card"><h4>@' . $linha['usuario'] . '</h4><hr><h6>' . $linha['nome'] .'</h6><h6>' . $linha['nome'] .'</h6></div>';
                }
            }
            ?>
        </div>

        <div class="usuario">
            <h2>Usúario logado: <?php echo $_SESSION['nome']; ?></h2>
            <h2><a href="logout.php">Sair</a></h2>

            <?php
            if ($row == 1) {
                $usuario_bd = mysqli_fetch_assoc($result);
                $_SESSION['nome'] = $usuario_bd['nome'];
            }

            ?>
        </div>
    </div>
</body>

</html>

