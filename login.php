<!DOCTYPE html>
<?php 
session_start();
$nome = $_SESSION["sessao_nome"];
if($nome == null){
$nome = "Entre com Seu Login";
}

?>
<html lang="pr-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LOGIN</title>
    <!-- Font Awesome icons (free version)-->
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
        .login-form {
            
            width: 340px;
            margin: 50px auto;
            margin-top: 150px;
            
        }
        
        .login-form form {
            color: white;
            margin-bottom: 15px;
            background: #1f1f1f;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        
        .login-form h2 {
            margin: 0 0 15px;
        }
        
        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        
        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="index.php">Café da Dona Nete</a>
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Pratos</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Página inicial</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php"><?php echo $nome?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="login-form">
        <form action="login_processo.php" method="post">
            <h2 class="text-center">LOGIN</h2>
            <div class="form-group">
                <input name="email_cliente" type="text" class="form-control" placeholder="Email" required="required">

            </div>
            <div class="form-group">
                <input name="senha_cliente" type="password" class="form-control" placeholder="Senha" required="required">

            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"href="frontend.php">Entrar</button>
            </div>
            <div class="clearfix">
                <label class="pull-left checkbox-inline"><input type="checkbox"> Lembrar senha</label>
                <a href="alterar_f.php" class="pull-right">Esqueceu a senha?</a>
            </div>
        </form>
        <p class="text-center"><a style="color:white"href="cadastro_cliente.html">Cria conta</a></p>
    </div>
</body>
<style>
    
</style>
</html>