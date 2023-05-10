<?php
include_once('../config/conexao.php');
    if(isset($_GET['delCont'])){
    $id = $_GET['delCont'];
    $select = "SELECT * FROM contatoA WHERE idcontatoA=:id";
                //primeiro try/catch
    try {
        $result=$conect->prepare($select);
        $result->bindParam(':id',$id, PDO::PARAM_INT);
        $result->execute();

        $contar=$result->rowCount();
        //conta se o id é maior ou igual a zero
        if($contar>0){
            //Deletar arquivo da pasta
            $loop = $result->fetchAll();
            foreach($loop as $exibir){

            }
            //$fotoDeleta identifica o campo do BD que esta a foto a ser deletada
            $fotoDeleta = $exibir['fotocontatoA'];
            //$arquivo identifica o arquivo que deve ser deletado dentro da pasta contatos
            $arquivo = "../img/contatos/".$fotoDeleta;
            //unlink deleta o arquivo
            unlink($arquivo);
            //(query)Deletar dados do BD
            $delete = "DELETE FROM contatoA WHERE idcontatoA=:id";
            //Segudo try/catch
            try {
                $result = $conect->prepare($delete);
                $result->bindParam(':id',$id,PDO::PARAM_INT);
                $result->execute();//executanto delete

                $contar = $result->rowCount();
                //conta de a ação deletar esta correta ou errada
                if($contar>0){
                    header("Location:home.php?acao=contato");
                }else{
                    header("Location:home.php?acao=contato");
                }//verificando de apagou do banco
            } catch(PDOException $e){
            echo '<strong>ERRO DE PDO: </strong>'.$e->getMessage();
            }//fecha segundo TRY CATCH
        }else{
            header("Location:home.php?acao=contato");//caso não tenha no banco de dados fica na mesma pagina
        }//fecha if e else do primeiro try
    } catch(PDOException $e){
        echo '<strong>ERRO DE PDO: </strong>'.$e->getMessage();
    }//fecha TRY CATCH 
}else{
    header("Location:home.php?acao=contato");
}//caso não tenha no banco de dados fica na mesma pagina
//fecha if e else do primeiro try
