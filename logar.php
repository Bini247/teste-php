<?php 

session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>

<body class="login">

    <div class="container">

       <div class="box"> 

          <div class="p-3 mb-2 bg-info text-white">

            <form method="get" action="login.php" class="form-horizontal">

              <fieldset>

                <!-- Form Name -->

                  <?php 

                  if (isset($_SESSION['nao autenticado'])) :                

                   ?>

                   <div class="alert alert-warning" role="alert">
              
                      ERRO: Email e/ou Senha incorretos

                   </div>             

                   <?php 

                  endif;
                  
                  unset($_SESSION['nao autenticado']);

                    ?>

                  <legend>Logar <a href="cadastro.php" style="float: right;">Cadastre-se</a></legend>                                
                <!-- Text input-->

                    <div class="form-group">

                      <label for="exampleInputEmail1">Email</label>

                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" 
                      placeholder="Digite seu Email" required>

                    </div>

                    <div class="form-group">

                      <label for="exampleInputPassword1">Senha</label>

                      <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha" required>

                    </div>

                       <div class="col-md-4">

           <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit" value="cadastrar">Login</button>

         </div>

         </div>

         </fieldset>

         </form>

</body>
</html>