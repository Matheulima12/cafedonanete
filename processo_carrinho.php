<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
<!-- Core theme CSS (includes Bootstrap)-->
<link href="css/styles.css" rel="stylesheet">
<!-- Fonts CSS-->
<link rel="stylesheet" href="css/heading.css">
<link rel="stylesheet" href="css/body.css">
<style>
      body {
            background-color: #91121b;
            ;
        }
        #table{
    margin-top: 103px;
}
    
    
    
</style>
<body>
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">Carrinho</a>
        <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="frontend.php">Pagina Inicial</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="frontend.php">Login</a>
                </li>
             
            </ul>
        </div>
    </div>
</nav>
</body>


<?php 
include 'conexao.php';

$nome = $_POST['nome_produto'];
$quantidade= $_POST['qtd_produto'];
$valor= $_POST['valor_produto'];
$btn= isset($_POST['btn']);

session_start();
 $id_cliente = $_SESSION["sessao_id"];

if($btn != null){

// PREPARE prepara o código e as variavels para receber no SQL
$cadastro_carrinho= $conexao->prepare("INSERT INTO `carrinho` (`nome_produto`, `qtd_produto`, `valor_produto`, `cliente_idCliente`) VALUES (:nome_produto,:qtd_produto ,:valor_produto,:idCliente);");


$cadastro_carrinho->execute(array(
    ':nome_produto' => $nome,
    ':qtd_produto'=> $quantidade,
    ':valor_produto'=> $valor,
    ':idCliente' => $id_cliente
   
    
));
if($cadastro_carrinho== TRUE){
    echo "carrinho Cadastrado com Sucesso!";
    echo"<script> alert ('Pedido efetuado com sucesso!') </script> ";
    echo "<script> location.href='index.php'</script>";
  

}else{
    echo "Não foi possivel Cadastrar Pedido!";
}
}

?>

<body>

<div class="container mt-5">
  <h2 class="text-center">Finalizar Pedido</h2>
  <table class="table table-bordered table-dark mt-4">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome do Produto</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Valor</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr> 
        <td><?php echo $id_cliente; ?></td>
        <td><?php echo $nome; ?></td>
        <td><?php echo $quantidade; ?></td>
        <td>R$ <?php echo $valor ?></td>
        <td>
          <form action="" method="POST">
            <input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">
            <input type="hidden" name="nome_produto" value="<?php echo $nome; ?>">
            <input type="hidden" name="qtd_produto" value="<?php echo $quantidade; ?>">
            <input type="hidden" name="valor_produto" value="<?php echo $valor; ?>"> 
            <button class="btn btn-info" type="submit" name="btn" value="confirmado"> Confirmar </button>
          </form>
        </td>
      </tr>
    </tbody>
  </table>

  <div class="text-center mt-4">
    <button class="btn btn-success">Finalizar Pedido</button>
  </div>
</div>

</body>
</html>