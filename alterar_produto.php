<?php 
include 'conexao.php';
$nome = $_POST["nome_produto"];
$valor = $_POST["valor_produto"];
$descricao = $_POST["descricao_produto"];
$quantidade = $_POST["quantidade_produto"];

$id_produto = $_POST["idproduto"];
$altera = $conexao->prepare("UPDATE `produto` SET `nome_produto` = :nome_produto, `valor_produto` = :valor_produto,`descricao_produto` = :descricao_produto,`quantidade_produto` = :quantidade_produto WHERE `produto`.`idproduto` = :idproduto;");

$altera->execute(array(
    ':nome_produto' => $nome,    
    ':valor_produto' => $valor,
    ':descricao_produto' => $descricao,  
    ':quantidade_produto' => $quantidade,    
    ':idproduto' => $id_produto,  
));
if($altera == TRUE){
echo "<script>alert ('alterado com sucesso!')</script>";
echo "<script> location.href='index.php'</script>";
}else{
    echo "Erro ao alterar!";
    echo "<script> location.href='index.php'</script>";
}
?>