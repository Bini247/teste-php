<?php 

include_once('conexao.php');

session_start();

if (!isset($_SESSION['nome'])) {
	
	header('location:logar.php');
}

if (isset($_GET['filtro'])) {
	
	$filtro=$_GET['filtro'];
}

else{ 

	$filtro="";

}

$sql= "SELECT * FROM usuarios WHERE nome LIKE '%$filtro%'";

$seleciona= mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Consultar</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<style type="text/css">
		
	article{

		width: 100%;
		box-sizing: border-box;
		padding: 10px;
		background-color: #d6d5d5;
		margin-bottom: 5px;
		color: #000;
	}

  .deleta{

    float: right;
  }

	</style>

</head>
<body class="login">

    <div class="container">

       <div class="box"> 

          <div class="p-3 mb-2 bg-info text-white">

            <form method="get" action="" class="form-horizontal">

              <fieldset>                

                  <legend>Consultar usuários <a href="home.php" style="float: right;">Home</a></legend>                                
                <!-- Text input-->

                    <div class="form-group">

                      <label for="exampleInputEmail1">Filtrar</label>

                      <input type="text" class="form-control" id="exampleInputEmail1" name="filtro" aria-describedby="emailHelp" 
                      placeholder="Palavra-Chave" style="max-width: 80%;"><br>
                      
           <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit" value="verificar">Verificar</button>
         
         </div>

         </fieldset>

         </form>

         <?php 

         $linhas= mysqli_num_rows($seleciona);

         echo "$linhas usuários encontrados <br>";

         if (isset($_GET['filtro'])) {
         	
         	echo " com a palavra <strong>$filtro</strong>";
         }

         while ($exibregistros = mysqli_fetch_array($seleciona)) {
         	
         	$id=  $exibregistros['id'];
         	$nome=  $exibregistros['nome'];
         	$email= $exibregistros['email'];

         	echo "<article>";

         		echo "Id: $id<br>";
         		echo "Nome: $nome<br>";
         		echo "Email: $email<br>";
            echo "<a href='altera.php?id={$exibregistros['id']}'>Alterar<a>";
            echo "<a href='deleta.php?id={$exibregistros['id']}' class='deleta'>Deletar<a>";                      
            
         	echo "</article>";
         }

          ?>

        </div>

      </div>

    </div>

</body>
</html>