<?php 

session_start();

include('create.php');

          $verifica_email= "SELECT email FROM usuarios WHERE email='".$email."'";

          	$email_rows= mysqli_query($conn, $verifica_email);

          	$email_affected_rows= mysqli_num_rows($email_rows);  	

          	if ($email_affected_rows == 1 ) {

          	$_SESSION['email ja existe']=true;

          	header('location: cadastro.php');

               die();

               exit();

          }

          	else{

          		header('location: cadastro.php');

          		die('Não foi possível realizar o cadastro');
          	

          	exit();

          }
 ?>