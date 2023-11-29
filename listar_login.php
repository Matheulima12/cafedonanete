<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LISTAR LOGIN</title>
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
<style>
    nav{
     background-color: black;
    }
    body {
            background-color: #91121b;
            ;
        }
#table{
    margin-top: 100px;
}



</style>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="index.php">LISTA DE CLIENTES</a>
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

$consulta_cliente = $conexao->query("SELECT * FROM `cliente`");


?>

<table id="table" class="table table-bordered table-dark ">
<thead>
<tr>
     <th scope="col">N</th>
    <th scope="col">EMAIL</th>
    <th scope="col">SENHA</th>
    <th scope="col">ALTERAR</th>
    <th scope="col">IMPRIMIR</th>
   
  </tr>
</thead>
  <?php 
while($listar = $consulta_cliente->fetch(PDO::FETCH_ASSOC)){
   
  ?>
   <tbody>
  <tr>
  <th scope="row"></th>
    <td><?php echo $listar["email_cliente"]; ?></td>
    <td><?php echo $listar["senha_cliente"]; 
    ?></td> 
    <td><form action="alterar_f.php" method="POST">
   <button  class="btn btn-info" name="idCliente" value='<?php echo $listar["idCliente"]; ?>'>Alterar</button>
  </form>
  <td>
      <button class="btn btn-info" onclick="imprimir()">Imprimir</button>
  </td>
  
   
  </tr>
  </tbody>
<?php } ?>
</table>

<style>
    nav{
     background-color: black;
    }
    body {
            background-color: #91121b;
            ;
        }
#table{
    margin-top: 100px;
}



</style>