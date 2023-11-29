<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Listar Pedidos</title>
<!-- Font Awesome icons (free version)-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet">
    <!-- Fonts CSS-->
    <link rel="stylesheet" href="css/heading.css">
    <link rel="stylesheet" href="css/body.css">
    <script>function imprimir(){
        window.print();
    }
    </script>
    <style>
    body {
            background-color: #91121b;
            ;
        }
#table{
    margin-top: 100px;
}



</style>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="index.php">LISTA DE PEDIDOS</a>
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="listar_produto.php">LISTAR PRODUTO</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="listar_login.php">LISTAR LOGIN</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="listar_pedido.php">LISTAR PEDIDO</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cadastro_produto.html">CADASTRAR</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">PÁGINA INICIAL</a>
                    </li>
                </ul>
            </div>
        </div>
      
 
    </nav>

<?php 


include 'conexao.php';



$consulta_pedido = $conexao->query("SELECT c.nome_cliente, cc.nome_produto, c.endereco_cliente FROM `cliente` AS c JOIN carrinho AS cc ON c.idCliente= cc.Cliente_idCliente;");

?>

<table id="table" class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Nome Cliente</th>
      <th scope="col">Nome do Produto</th>
      <th scope="col">Endereço do Cliente</th>
      <th scope="col">IMPRIMIR</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($listar = $consulta_pedido->fetch(PDO::FETCH_ASSOC)) { ?>
      <tr>
        <td><?php echo $listar["nome_cliente"]; ?></td>
        <td><?php echo $listar["nome_produto"]; ?></td>
        <td><?php echo $listar["endereco_cliente"]; ?></td>


        <td>
          <button class="btn btn-info" onclick="imprimir()">Imprimir</button>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

