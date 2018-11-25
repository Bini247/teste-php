<?php 

  session_start(); 

 ?>

<!DOCTYPE html> 

<html>

 <head>
 
  <title>Cadastro</title>

  <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

 </head>

  <body class="cadastro">

    <div class="container">

       <div class="box"> 

          <div class="p-3 mb-2 bg-info text-white">

            <form method="post" action="create.php" class="form-horizontal" enctype="multipart/form-data">

              <fieldset>

                <!-- Form Name -->

                  <?php 

                  if (isset($_SESSION['email ja existe'])) :                

                   ?>

                   <div class="alert alert-warning" role="alert">
              
                      ERRO: Email já cadastrado

                   </div>             

                   <?php 

                  endif;
                  
                  unset($_SESSION['email ja existe']);

                    ?>

                  <legend>Cadastro <a href="logar.php" style="float: right;">Logar</a></legend>                

                    <!-- Text input-->

                    <div class="form-group">

                      <label for="formGroupExampleInput">Nome</label>

                      <input type="text" class="form-control" id="formGroupExampleInput" name="nome" placeholder="Digite seu Nome" required>

                    </div>

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

                    <div class="form-group"> 

                      <label class="col-md-4 control-label" for="filebutton">Foto</label>

                      <div class="col-md-4">

                        <input id="filebutton" name="foto" class="input-file" type="file">

                      </div><br>

                       <div class="col-md-4">

           <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit" value="cadastrar">cadastrar</button>

         </div>

         </div>

         </fieldset>

         </form>

         </div>

       </div>

     </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    </body>

    </html>

