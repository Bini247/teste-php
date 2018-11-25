<?php 	

 include_once("conexao.php");

 $nome= $_POST['nome'];
 $email= $_POST['email'];
 $senha= ($_POST['senha']);
 
 $ext = explode(".", $_FILES['foto']['name']);
 
 $extensao = end( $ext );

 $novo_nome = md5(time()).".".$extensao;

 $diretorio= "uploads/";

 move_uploaded_file($_FILES['foto']['temp_name'], $diretorio.$novo_nome);
	
 $result_nome= "INSERT INTO usuarios(nome, email, senha, foto) VALUES ('$nome', '$email', '$senha', '$novo_nome')";
 $resultado_nome= mysqli_query($conn, $result_nome);         

  if (mysqli_affected_rows($conn)>0) {
        
        header('location: home.php' );

        }
          else{                                       		 	

 			      header('location: verifica-email.php');     			        

 			      exit();

                  }	
  

?>