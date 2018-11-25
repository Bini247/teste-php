<?php 

include_once('conexao.php');

$id= $_GET['id'];

$sql= "DELETE FROM usuarios WHERE id=$id";

$query= mysqli_query($conn, $sql);

header('location: consulta.php');

exit();

 ?>