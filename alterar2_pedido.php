<?php 
include 'conexao.php';
$id_pedido = $_POST["idpedido"];
$consulta_pedido = $conexao->query("SELECT * FROM `pedido` WHERE idpedido = $id_pedido");
$lista = $consulta_pedido->fetch(PDO::FETCH_ASSOC);
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<link href="css/styles.css" rel="stylesheet">
    <!-- Fonts CSS-->
    <link rel="stylesheet" href="css/heading.css">
    <link rel="stylesheet" href="css/body.css">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<style>
   body {
            background-color: #91121b;
            ;
        }
    #formulario{
        width: 50%;
        margin-left: 30%;
        margin-top: 10%;
    }
    #formulario {
            color: white;
            margin-bottom: 15px;
            background: #1f1f1f;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
    }
</style>
<form id="formulario" action="alterar_pedido.php" method="POST" >
    <h1>Alterar Pedido</h1> 
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Valor do Pedido:</label>
      <input type="text" value="<?php echo $lista["valor_total"] ?>" name="valor_total" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>  
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Data do Pedido:</label>
      <input type="text" value="<?php echo $lista["data_pedido"] ?>" name="data_pedido" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>   
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Status do Pedido:</label>
      <input type="text" value="<?php echo $lista["Status_pedido"] ?>" name="Status_pedido" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
       
    <button type="submit" name="idpedido" value="<?php echo $lista["idpedido"] ?>" class="btn btn-success">Alterar</button>
  </form>
  <head>
<body>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="index.php">Café Dona Nete</a>
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="listar_produto.php">Alterar Produto</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="listar_login.php">Alterar Cliente</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="listar_pedido.php">Imprimir Pedido</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  


</body>



  </head>