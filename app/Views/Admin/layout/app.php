<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Admin</title>

  <link href="<?php echo base_url()?>/template/assets/img/images.jpg" rel="icon">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url()?>/assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <!-- Tempusdominus Bootstrap 4 -->
  <link href="<?php echo base_url()?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?php echo base_url()?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="<?php echo base_url()?>/assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link href="<?php echo base_url()?>/assets/dist/css/adminlte.min.css" rel="stylesheet">
  <!-- overlayScrollbars -->
  <link href="<?php echo base_url()?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" rel="stylesheet">
  <!-- Daterange picker -->
  <link href="<?php echo base_url()?>/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- summernote -->
  <link href="<?php echo base_url()?>/assets/plugins/summernote/summernote-bs4.min.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?= $this->include('Admin/layout/header') ?>

<?= $this->include('Admin/layout/sidebar') ?>

<?= $this->renderSection('content') ?>

<?= $this->include('Admin/layout/footer') ?>