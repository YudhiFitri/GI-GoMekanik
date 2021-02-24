<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>GI-GoMekanik Web App</title>

    <link rel="shortcut icon" href="<?= base_url('images/GoMekanik-logo.png'); ?>">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('template/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('template/dist/css/adminlte.min.css'); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?= $this->include('layout/partial/navbar'); ?>

        <?= $this->include('layout/partial/left_sidebar'); ?>

        <?= $this->renderSection('content'); ?>

        <?= $this->include('layout/partial/footer'); ?>

        <?= $this->include('layout/partial/right_sidebar'); ?>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('template/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('template/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('template/dist/js/adminlte.min.js'); ?>"></script>
    <!-- demo.js-->
    <script src="<?= base_url('template/dist/js/demo.js'); ?>"></script>

    
</body>

</html>