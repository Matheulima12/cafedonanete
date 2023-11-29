<?php 
include 'conexao.php';

$valor = $_POST['valor_total'];
$data1= $_POST['data_pedido'];
$status= $_POST['status_pedido'];

session_start();
echo "ID DO CLIENTE".$id_cliente = $_SESSION["sessao_id"];

// PREPARE prepara o código e as variavels para receber no SQL
$cadastro_pedido= $conexao->prepare("INSERT INTO `pedido` (`valor_total`, `data_pedido`, `Status_pedido`,`cliente_idCliente`) VALUES (:valor_total, :data_pedido ,:status_pedido,:id_cliente);");


$cadastro_pedido->execute(array(
    ':valor_total' => $valor,
    ':data_pedido'=> $data1,
    ':status_pedido'=> $status,
    ':id_cliente' => $id_cliente 
    
));
if($cadastro_pedido == TRUE){
    echo "<script>alert ('Cadastrado com sucesso!')</script>";
    echo "<script> location.href='index.php'</script>";
}else{
    echo "<script>alert ('Não foi possivel Cadastrar Pedido!')</script>";
    echo "<script> location.href='index.php'</script>";
}
?>