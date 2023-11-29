<?php 
include 'conexao.php';

$nome = $_POST['nome_cliente'];
$numero= $_POST['numero_cliente'];
$endereco= $_POST['endereco_cliente'];
$email= $_POST['email_cliente'];
$senha=$_POST['senha_cliente'];



// PREPARE prepara o código e as variavels para receber no SQL
$cadastro_cliente = $conexao->prepare("INSERT INTO `cliente` ( `nome_cliente`, `numero_cliente`, `endereco_cliente`, `email_cliente`,`senha_cliente`) VALUES (:nome_cliente ,:numero_cliente,:endereco_cliente,:email_cliente,:senha_cliente);");





$cadastro_cliente->execute(array(
    ':nome_cliente' => $nome ,
    ':numero_cliente'=> $numero ,
    ':endereco_cliente'=> $endereco,
    ':email_cliente'=> $email,
    ':senha_cliente'=>$senha
));
if($cadastro_cliente == TRUE){
    echo "<script>alert ('Cliente cadastrado com sucesso')</script>";
    echo "<script> location.href='login.php'</script>";
}else{
    echo "<script>alert ('Não foi possivel cadastrar Cliente ')</script>";
    echo "<script> location.href='index.php'</script>";
}
?>