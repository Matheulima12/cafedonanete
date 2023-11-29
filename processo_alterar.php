<?php 
include 'conexao.php';
$email = $_POST["email_cliente"];
$senha = $_POST["senha_cliente"];
$id_cliente = $_POST["idCliente"];
$altera = $conexao->prepare("UPDATE `cliente` SET `email_cliente` = :email_cliente, `senha_cliente` = :senha_cliente WHERE `cliente`.`idCliente` = :idCliente;");

$altera->execute(array(
    ':email_cliente' => $email,    
    ':senha_cliente' => $senha,  
    ':idCliente' => $id_cliente  
));
if($altera == TRUE){
echo "<script>alert ('alterado com sucesso!')</script>";
echo "<script> location.href='index.php'</script>";
}else{
    echo "<script>alert ('Erro ao alterar!')</script>";
}   
?>