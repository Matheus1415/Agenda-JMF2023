<?php
/*PDO(php data object)é um mpdúlo de PHP montado sob o paradgma orientado a abjto, cujo o objetivo prover uma padronização da forma como o Php SE COMUNICA COM O BANCO DE DADOS*/

try {
    DEFINE('HOST','localhost');//servidor
    DEFINE('USER','root');//usuario
    DEFINE('DB','agendaJmf2023');//banco de dados
    DEFINE('PASS','bdjmf');//senha

    $conect = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS);//new PDO(metodo que reune todas as informação de bancos de dados)
    $conect -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//setAtribut intepreta os erros da variavel conect
    
} catch (PDOException $e) {
    echo '<strong>Erro de PDO: </strong>'.$e->getMessage();//imprime na tela os erros do PDOException
    
}


?>