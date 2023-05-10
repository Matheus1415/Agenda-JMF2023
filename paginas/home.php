<?php

    include_once("../include/header.php");
    if(isset($_GET['acao'])){
        $acao = $_GET['acao'];
        if($acao == 'bemvindo'){
            include_once('principal.php');
          }elseif ($acao == 'contato'){
            include_once('contato.php');
          }elseif ($acao == 'evento'){
            include_once('evento.php');
          }elseif ($acao == 'perfil'){
            include_once('perfil.php');
          }
    }else{
        include_once("principal.php");
    }
    include_once("../include/footer.php");