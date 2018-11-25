<?php 

session_start();

if (isset($_GET['cor'])) {

$cor = $_GET['cor'];

	if ($cor==1) {

		$_SESSION['dark']= true;

		header('location:index.php');

		exit();

	}

	if ($cor==2) {

		$_SESSION['claro']=true;

		header('location:index.php');

		exit();

	}

}

 ?>