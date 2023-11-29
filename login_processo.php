<?php 
include 'conexao.php';
    $login =$_POST['email_cliente'];
    $senha =$_POST['senha_cliente'];

$consulta_cliente = $conexao->query("SELECT * FROM  `cliente`
  WHERE `email_cliente` LIKE '$login' AND `senha_cliente` LIKE '$senha' ");

  $linhas = $consulta_cliente->fetchAll();

  if(count($linhas)>0){
      session_start();
      $consulta_cliente = $conexao->query("SELECT * FROM  `cliente`
  WHERE `email_cliente` LIKE '$login' AND `senha_cliente` LIKE '$senha' ");
  $listar = $consulta_cliente->fetch(PDO::FETCH_ASSOC);
     echo  $_SESSION["sessao_id"]= $listar["idCliente"];
     echo  $_SESSION["sessao_nome"]= $listar["nome_cliente"];
      echo"<script> alert ('login valido') </script> ";
      echo "<script> location.href='index.php'</script>";
      
      

  }else{
      echo"<script> alert('Login invalido, tente novamente')</script>";
      echo "<script> location.href='login.php'</script>";

  }