<?php 
include 'conexao.php';

$nomep = $_POST['nome_produto'];
$valor= $_POST['valor_produto'];
$descricao= $_POST['descricao_produto'];
$quantidade= $_POST['quantidade_produto'];



// PREPARE prepara o código e as variavels para receber no SQL
$cadastro_produto = $conexao->prepare("INSERT INTO  `produto` ( `nome_produto`, `valor_produto`, `descricao_produto`, `quantidade_produto`) VALUES (:nome_produto ,:valor_produto,:descricao_produto,:quantidade_produto);");





$cadastro_produto->execute(array(
    ':nome_produto' => $nomep,
    ':valor_produto'=> $valor,
    ':descricao_produto'=> $descricao,
    ':quantidade_produto'=> $quantidade,
));
if($cadastro_produto == TRUE){
    echo "<script>alert ('Produto Cadastrado com sucesso!')</script>";
    echo "<script> location.href='index.php'</script>";
}else{
    echo "Não foi possivel Cadastrar Produto!";
    echo "<script> location.href='index.php'</script>";
}
?>