<?php
require('bootstrap.php');
?>
<html style="height: auto;" class="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Revezo - Adicionar Trilhas</title>
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
<body class="sidebar-mini" style="height: auto;">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="perfil.php" class="d-block"><?= isset($_SESSION['user']) ? $_SESSION['user']['name'] : 'Não Logado' ?></a>
        </div>
      </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            <i class="nav-icon fas fa-chart-line"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="perfil.php" class="nav-link">
                            <i class="nav-icon fas fa-user-alt"></i>
                            <p>
                                Meu perfil
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Trilhas
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./trilhas.php" class="nav-link">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Trilhas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./adicionar_trilhas.php" class="nav-link active">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Adicionar Trilha</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="usuarios.php" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Usuários
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Sair
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper" style="min-height: 100vh;">
        <div class="container">
            Dashboard
        </div>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright © 2020 REVEZO </strong> All rights
        reserved.
    </footer>
</div>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/demo.js"></script>
</body>
</html>