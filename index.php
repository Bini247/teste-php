<?php 

session_start();

if (!isset($_SESSION['nome'])) {
  
  header('location:logar.php');

  exit();
}

if (isset($_SESSION['dark'])) :
  
?>
 
 <style type="text/css">

	.tema{

		background: rgba(10,23,55,0.7);;
		color: #fff;
	}

</style>

<?php 

unset($_SESSION['dark']);

endif;

if (isset($_SESSION['claro'])):

 ?>

 <style type="text/css">
 	
 	.tema{

 		background: #fff;
    color: #000;
 	}

 </style>

 <?php 
unset($_SESSION['claro']);

endif;
  ?>

<!DOCTYPE html>
<html>
<head> 
	<title>Teste</title>
</head>
<body class="tema">

	<div style="max-width: 1140px; margin: 0 auto;">

<div style="max-width: 30%; margin: 0 auto; overflow: hidden;">
	
	<img src="https://avatars.mds.yandex.net/get-pdb/34158/6ecba4c4-0c04-402e-b058-7e4aac9a3726/orig">

<form method="GET" action="muda.php">

<legend>Tema</legend>

<div class="form-group">

  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="cor" id="checkboxes-0" value="1">
      Escuro
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="cor" id="checkboxes-1" value="2">
      Claro
    </label>
	</div>
  </div>
</div>

 <input type="submit" name="enviar" value=mudar>

</fieldset>

</form>

</select><br>

<a href="home.php">Home</a>

</div>

</div>

</body>
</html>