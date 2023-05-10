<!-- Conteúdo -->
<div class="container contTopo">
    <div class="row">
    <?php
    include_once('../config/conexao.php'); //conexão com BD
    /* Cadastro dos dados na tebela perfilA */
    //Verificar se o botão foi clicado.
if(isset($_POST['editPerfil'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['tel'];
    /* base64_encode é uma criptografia */
    /* md5 é um Hash que não pode ser descriptografado pelo php */

    //Upload de imagem
    if(!empty($_FILES['foto']['name'])){
        //Tratamento da extensão da imagem de upload
        $formtP = array("png","jpg","jpeg","gif");
        $extensao = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);

        if(in_array($extensao,$formtP)){
            //Diretório para upload da imagem do contato
            $pasta = "../img/contato/";
            //Endereço temporario da imagem
            $temporario = $_FILES['foto']['tmp_name'];
            //Definir um novo nome para a imagem
            $novoNome = uniqid().".{$extensao}";

            if(move_uploaded_file($temporario,$pasta.$novoNome)){

            }else{
            $mensagem = "Erro, não foi possível fazer o upload do arquivo";
            }

        }else{
        echo "Arquivo inválido";
        }//fecha if else de in_array
    }else{
    $novoNome = "avatar.png";
    }//fecha if else de validação de fotos
    //Query SQL de cadastro de dados
    $cadastro = "INSERT INTO contatoA (fotocontatoA,nomecontatoA,telefonecontatoA,emaicontatoA) VALUES (:foto,:nome,:telefone,:email)";
    //Try código de cadastro.
    try{
        //Preparar a conexão para fazer o insert
        $result = $conect->prepare($cadastro);
        //Definindo o caminho do Alias
        $result->bindParam(':foto',$novoNome,PDO::PARAM_STR);
        $result->bindParam(':nome',$nome,PDO::PARAM_STR);
        $result->bindParam(':telefone',$telefone,PDO::PARAM_STR);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->execute();
        //Verificação de cadastro
        $contar = $result->rowCount();

        if($contar>0){
            echo '<div style="margin-top: 10px;" class="alert alert-success" role="alert">
            Cadastro Realizado :)
            </div>';
            header('Refresh: 5, home.php?acao=contato');
        }else{
            echo '<div style="margin-top: 10px;" class="alert alert-danger" role="alert">
            Não Cadastrado! :(
            </div>';
        }//fecha if else  de contar
    }catch(PDOException $e){
    echo '<strong>ERRO DE PDO: </strong>'.$e->getMessage();
    }
}//fecha condição de click
?><!--fecha php-->
        <div class="col-lg-12 contBottom">
            <button class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar Contato</button>
        </div>
        <div class="col-lg-12">
        <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">

        <!-- Linha a ser repetida dentro do While -->
<?php
$select = "SELECT * FROM contatoA ORDER BY idcontatoA DESC";

try{
    $cont=1;
    $result=$conect->prepare($select);
    $result->execute();

    $contar = $result->rowCount();
    if($contar>0){
        while($show = $result->FETCH(PDO::FETCH_OBJ)){
    ?>
    <tr>
    <th scope="row"><?php echo $cont++; ?></th>
    <!-- Imagem com PHP -->
    <?php
        $foto = $show->fotocontatoA;
        if($foto == "avatar.png"){
    ?><!--fe3cha php de imagen parão-->
        <td class="img"><img src="../img/<?php echo $show->fotocontatoA; ?>" alt=""></td>
        <?php

        }else{
        ?>
        <td class="img"><img src="../img/contato/<?php echo $show->fotocontatoA; ?>" alt=""></td>
    <?php

        }//fecha if else do indetidicador de imgens

    ?>
        <!-- Imagem com PHP -->
        <td><?php echo $show->nomecontatoA; ?></td>
        <td><?php echo $show->telefonecontatoA; ?></td>
        <td><?php echo $show->emaicontatoA; ?></td>
        <td><a href="#" title="Editar Contato">Editar</a> | <a href="delContato.php?delCont=<?php echo $show->idcontatoA; ?>" title="Deletar Contato">Deletar</a></td>
        </tr>
        <?php
        }//fecha while
    }else{
    echo "Não existe contatos cadastrados";
    }//fecha id else de condição contar

}catch(PDOException $e){
echo '<strong>ERRO DE PDO: </strong>'.$e->getMessage();
}
?>
<!-- Fim da linha a ser repetida dentro do While -->

        </tbody>
        </table>

        

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Contato</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <form action="" method="post"  enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="tel" class="form-control" name="tel">
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div>
                <label for="formFileLg" class="form-label">Imagem de Contato</label>
                <input class="form-control" id="formFileLg" type="file" name="foto">
            </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <input type="submit" class="btn btn-primary" name="editPerfil" value="Inserir Contato">
            </div>
            </form>
            </div>
        </div>
        </div>
        <!-- Fim do Modal -->
        </div>
        
        </div>
    </div>
</div>
<!-- Final do Conteúdo -->