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
    margin-top: 100px;
}
   
    
    
</style>
<body>
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="frontend.php">CADASTRO DE PEDIDOS</a>
        <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cadastro_produto.html">CADASTRO DE PRODUTO</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cadastro_cliente.html">CADASTRO DE CLIENTE</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cadastro_pedido.html">CADASTRO DE PEDIDO</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="listar_login.php">LISTAR </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>

<?php 


include 'conexao.php';

$consulta_pedidoteste = $conexao->query("SELECT * FROM `carrinho`");


?>

<table id="table" class="table table-bordered table-dark">
<thead>
<tr>
     <th scope="col">N</th>
    <th scope="col">EMAIL</th>
    <th scope="col">SENHA</th>
    <th scope="col">ALTERAR</th>
    <th scope="col">EXCLUIR</th>
  </tr>
</thead>
  <?php 
$listar = $consulta_pedidoteste->fetch(PDO::FETCH_ASSOC)
   
  ?>
   <tbody>
  <tr>
  <th scope="row"></th>
    <td><?php echo $listar["nome_produto"]; ?></td>
    <td><?php echo $listar["qtd_produto"];  ?></td>
    <td><?php echo $listar["valor_produto"];  ?></td> 

    <td><form action="alterar_f.php" method="POST">
   <button  class="btn btn-info" name="idCliente" value='<?php echo $listar["idCliente"]; ?>'>Alterar</button>
   </form>
   <td>
     <form action="excluir_cliente.php" method="POST">
   <button  class="btn btn-info" name="idCliente" value='<?php echo $listar["idCliente"]; ?>'>Excluir</button>

    </form></td>
  
   
  </tr>
  </tbody>

</table>

