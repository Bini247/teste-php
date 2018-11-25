<?php 

session_start();

include_once('conexao.php');

if (isset($_GET['id'])) {

	$id= $_GET['id'];

	$_SESSION['id']= $id;

}

$query= "SELECT * FROM usuarios WHERE id = '$id'"; 

$executa= mysqli_query($conn, $query);

while ($mostra = mysqli_fetch_array($executa)) {
	
	$nome= $mostra['nome'];
	$email= $mostra['email'];
	$senha= $mostra['senha'];

}
 ?>

 <!DOCTYPE html>

 <html>

 <head>

 	<title>Alterar Dados</title>

 	<style type="text/css"> body{padding: 150px; height: auto; background-color: rgba(10,23,55,0.7);} div.container{ width: 100%; height: auto; margin: 0 auto; } .box{ margin: 0 auto; background-color: #d6d5d5; width: 50%;}</style>

 </head>

 <body>

 	<div class="container">

 		<div class="box">

		 	<form action="update.php" method="get"> 
		 		
		 		Nome: <input type="text" name="nome" value="<?php echo $nome ?>" placeholder="Altere o nome"><br><br>

		 		Email: <input type="Email" name="email" value="<?php echo $email ?>"  placeholder="Altere o email"><br><br>

		 		Senha: <input type="password" name="senha" value="<?php echo $senha ?>" placeholder="Altere a senha"><br><br>

		 		<input type="submit" name="alterar">

		 	</form>

		</div>

 	</div>

 </body>

 </html>