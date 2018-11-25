<?php 

session_start();

if (!isset($_SESSION['nome'])) {
	
	header('location:logar.php');

	exit();
}

?>

 <!DOCTYPE html> 

 <html>

 <head>

 	<title>Home</title>

 	<style type="text/css">
 		
 		a{ text-decoration: none;}

 	 	body{ background-color: rgba(10,23,55,0.7); }

 	 	img.perfil{width: 10%; height: auto;}

 	 </style>

 </head>

 <body>

 	<h2> <?php 

 	echo "<img class='perfil' src=uploads/";
 	echo $_SESSION['foto'];
 	echo ">";

 	echo "<br>Seja bem vindo ", $_SESSION['nome']; 

 	?></h2>
 
 	<h1>Página em desenvolvimento</h1>

 <h2><a href="index.php">Mudar Tema</a></h2>

 <h2><a href="consulta.php">Consulta de Usuários</a></h2><br>

 	<img src="http://2.bp.blogspot.com/-zmH6j0JPAP8/U48cUE9OtAI/AAAAAAAAAao/FgcvbiqLqoY/s1600/tumblr_inline_mffr672OVp1rrqh2o.gif"><br>

 	<h2><a href="logout.php">Logout</a></h2>


 </body>

 </html>

