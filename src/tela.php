<?php
session_start();
include('verificar.php');
include('conexao.php');

$query = "select * from usuario";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($result->num_rows > 0){
    echo 'contas:';
    echo '<br>';
    while($linha = $result->fetch_assoc()){
        echo '<hr>';
        echo 'Nome: ',$linha['nome']; 
        echo '<br>';
        echo 'Usúario: ',$linha['usuario'];
        echo '<br>';
        echo '<hr>';
    }
}

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
}
?>

<h2>Usúario logado: <?php echo $_SESSION['nome'];?></h2>

<h2><a href="logout.php">Sair</a></h2>
