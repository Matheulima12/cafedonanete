<?php 
include 'conexao.php';
$valor = $_POST["valor_total"];
$data = $_POST["data_pedido"];
$status = $_POST["Status_pedido"];

$id_pedido = $_POST["idpedido"];
$altera = $conexao->prepare("UPDATE `pedido` SET `valor_total` = :valor_total, `data_pedido` = :data_pedido,`Status_pedido` = :Status_pedido WHERE `pedido`.`idpedido` = :idpedido;");

$altera->execute(array(
    ':valor_total' => $valor,    
    ':data_pedido' => $data,
    ':Status_pedido' => $status,  
    ':idpedido' => $id_pedido 
));
if($altera == TRUE){
echo "<script>alert ('alterado com sucesso!')</script>";
echo "<script> location.href='index.php'</script>";
}else{
    echo "Erro ao alterar!";
    echo "<script> location.href='index.php'</script>";
}
?>