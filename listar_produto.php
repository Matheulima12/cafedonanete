<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Listar Produto</title>
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
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="index.php">LISTA DE PRODUTOS</a>
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

$consulta_produto = $conexao->query("SELECT * FROM `produto`");


?>

<table id="table" class="table table-bordered table-dark">
<thead>
<tr>
     <th scope="col">N</th>
    <th scope="col">NOME</th>
    <th scope="col">VALOR</th>
    <th scope="col">DESCRIÇÃO</th>
    <th scope="col">QUANTIDADE</th>
    <th scope="col">ALTERAR</th>
    <th scope="col">IMPRIMIR</th>

  </tr>
</thead>
  <?php 
while($listar = $consulta_produto->fetch(PDO::FETCH_ASSOC)){
   
  ?>
   <tbody>
  <tr>
  <th scope="row"></th>
    <td><?php echo $listar["nome_produto"]; ?></td>
    <td><?php echo $listar["valor_produto"]; ?></td>
    <td><?php echo $listar["descricao_produto"]; ?></td>
    <td><?php echo $listar["quantidade_produto"]; ?></td>
    </td> <td><form action="alterar2_produto.php" method="POST">
   <button  class="btn btn-info" name="idproduto" value='<?php echo $listar["idproduto"]; ?>'>Alterar</button>
  </form>
   <td>
      <button class="btn btn-info" onclick="imprimir()">Imprimir</button>
  </td>
  </tr>
  </tbody>
<?php } ?>
</table>

<style>
    body {
            background-color: #91121b;
            ;
        }
#table{
    margin-top: 120px;
}



</style>