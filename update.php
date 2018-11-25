<?php 

session_start();

include_once('conexao.php');

if (isset($_SESSION['id'])) {
	
	$id= $_SESSION['id'];

}

$nome= $_GET['nome'];

$email= $_GET['email'];

$senha= $_GET['senha'];

$query= "UPDATE usuarios SET nome= '$nome', email= '$email', senha= '$senha' WHERE id= '$id'";

$executa= mysqli_query($conn, $query);

$rows= mysqli_affected_rows($conn);

if ($rows == 1) {
	
	header('location: consulta.php');

	exit();
}

else{

 	header('location: altera.php');

 	die();
}
 ?>
