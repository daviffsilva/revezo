<?php session_start() ?>
<html style="height: auto;" class="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Revezo - Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="height: 100vh;">
<div class="h-100 d-flex justify-content-center align-items-center flex-column">
    <div class="bg-gradient-primary p-3 rounded">
        <h1>Login</h1>
        <form action="./usuario/login.php" method="post">
        <?php if(isset($_SESSION["error"])){ ?>
            <div class="alert alert-danger">
                <span><?=$_SESSION["error"]?></span>
            </div>
        <?php unset($_SESSION["error"]);} ?>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="senha">
            </div>
            <div class="form-group">
                <button login class="btn btn-success btn-block">Entrar</button>
            </div>
            Não possui conta? <a href="cadastrar.php" class="btn btn-sm btn-outline-light">Faça seu cadastro</a>
        </form>
    </div>
</div>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>