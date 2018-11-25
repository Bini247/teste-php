<?php 

session_start();

include('conexao.php');

if (empty($_GET['email']) or empty($_GET['senha'])){

	header('location:logar.php');

	exit();
	
 }

$email= addslashes($_GET['email']);

$senha= addslashes($_GET['senha']);

$query = "SELECT * FROM usuarios WHERE email = '".$email."' AND senha = '".$senha."' ";

$result= mysqli_query($conn, $query);

$row= mysqli_num_rows($result);

	if ($row == 1) {

		$reg=mysqli_fetch_object($result);

		$_SESSION['email'] = $reg->email;

		$_SESSION['nome'] = $reg->nome;	

		$_SESSION['foto'] = $reg->foto;	

		header('location: home.php');

		exit();

	    }

	    else{

	    $_SESSION['nao autenticado']=true;	
	    header('location: logar.php');

	    exit();			
		  
	}

 ?>