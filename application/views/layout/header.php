<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url('assets/node_modules/animate.css/animate.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/Semantic-UI/semantic.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/node_modules/bootstrap/dist/css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
  <title>Portal Notícias</title>
</head>

<body class="container-fluid bg-black">
  <div class="fixed-top container-fluid ">
    <nav class="navbar navbar-light bg-azul-escuro py-3 ">
      <a class="navbar-brand text-light btn btn-primary border border-light" href="<?php echo site_url('home') ?>">Portal Notícias</a>
      <button class="navbar-toggler border border-light d-sm-block d-md-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center" id="navbarNav">
        <ul class="navbar-nav pt-4">
          <li class="nav-item active">
            <a class="nav-link text-light" href="<?php echo site_url('home') ?>">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-light" href="<?php echo site_url('usuario/login') ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo site_url('usuario/cadastro') ?>">Cadastre-se</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo site_url('politica') ?>">Politica e Privacidade</a>
          </li>
          <li class="nav-item text-light">
            <a class="nav-link text-light" href="<?php echo site_url('sobre') ?>">Sobre</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="py-4"></div>
  <div class="py-1"></div>
  <div class="py-2"></div>
  <div class="container-fluid border border-muted ">


    <div class="row bg-white">
      <div class="d-none d-md-block col-md-3 bg-light border border-right border-muted">
        <div class="pl-3 pt-2">

          <div class="py-2">
            <a href="<?php echo site_url('home') ?>" class="text-decoration-none link1">Home</a>
          </div>
          <div class="py-2">
            <a href="<?php echo site_url('usuario/login') ?>" class="text-decoration-none link1">Login</a>
          </div>
          <div class="py-2">
            <a href="<?php echo site_url('usuario/cadastro') ?>" class="text-decoration-none link1">Cadastre-se</a>
          </div>
          <div class="py-2">
            <a href="<?php echo site_url('politica') ?>" class="text-decoration-none link1">Política e privacidade</a>
          </div>
          <div class="py-2">
            <a href="<?php echo site_url('sobre') ?>" class="text-decoration-none link1">Sobre</a>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-white col-sm-12 col-md-9 animate__animated animate__fadeIn">