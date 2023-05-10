<?php
    //Armazena os dados no cache
    ob_start();
    //Iniciar minha sessão
    session_start();
    //Condição da minha sessão iniciada
    if(!isset($_SESSION['loginEmail'])&&(!isset($_SESSION['loginSenha']))){
        header("location: ../index.php?acao=negado");
    }
    include_once('../include/sair.php');

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda 2023</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<div class="menu">
    <div class="container">
        <div class="row">
            <!-- Menu -->
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand logo" href="#"><img src="../img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php?acao=bemvindo">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gerenciar Contatos e Eventos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="home.php?acao=contato">Contato</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="home.php?acao=evento">Evento</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php?acao=perfil">Perfil</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?sair">« Sair</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
<!-- Final do Menu -->
        </div>
    </div>
</div>