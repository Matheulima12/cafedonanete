
<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";

try {

  $conexao = new PDO("mysql:host=$servidor;dbname=projetom", $usuario, 
  $senha); 
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 
} catch(PDOException $e) {
  echo "Erro na Conexão " . $e->getMessage();
}
?>