<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="js/meujs.js"></script> -->
    <link rel="stylesheet" href="css/login.css">

</head>
<body>

<div class="container">
    <div class="login-form">

    <div class="main-div">
        <div class="panel">
        <h2>Cadastro Agenda 2023</h2>
        <p>Faça seu cadastro abaixo.</p>
        </div>
            <form action="" method="post">

            <div class="form-group"
            <label for="img">Escolha sua imagem</label>
                <input class="form-control nome" type="file" name='foto'  id="importImg">
            </div> 

            <div class="form-group">
                <input type="text" class="form-control nome" id="inputPassword" placeholder="*Digite seu Nome" name="nome">
            </div>

            <div class="form-group">
                <input type="email" class="form-control email" id="inputPassword" placeholder="*Digite seu E-mail" name="email">
            </div>

            <div class="form-group">
                <input type="password" class="senha form-control" id="inputPassword" placeholder="*Digite sua senha" name="senha">
            </div>


            <div class="forgot">
                <a href="index.php">Volta para o login</a>
            </div>
            <button type="submit" class="btn botao" name="cadastra">Cadastra-se</button>

            </form>
          <?php
            
            include_once('config/conexao.php');//conexão com bancode dados
            /*Verificar se i botão foi clicado*/
            if(isset($_POST['cadastra'])){
                $nome =$_POST['nome'];
                $email =$_POST['email'];
                $senha = md5(base64_encode ($_POST['senha']) );
                /*
                base654_encode():codifica a variavel para o banco de dados.
                md5():é uma hast que não pode ser descripitogrfado pelo PHP
                */
                    //Upload de imagem
                if(!empty($_FILES['foto']['name'])){
                    //Tratamento da extensão da imagem de upload
                    $formtP = array("png","jpg","jpeg","gif");//extenções aceitas
                    $extensao = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);//extrair a extenção

                    if(in_array($extensao,$formtP)){
                        //Diretório para upload da imagem do contato
                        $pasta = "img/user/";
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
                }
                }else{
                $novoNome = "avatar.png";
                }
                //Query SQL cadastro de dados
                $cadastro="INSERT INTO perfilA (fotoperfilA,nomeperfilA,emailperfilA,senhaperfilA) VALUE(:foto,:nome,:email,:senha)";//COMANDO DE INSERSÃO NO BANCO DE DADOS
                                    
                /*Cadastro de dados na tabela perfilA*/
                try {
                    //prepara conexão pro inssert
                    $result = $conect->prepare($cadastro);
                    //Definindo o caminho do Alis
                    $result->bindParam(':foto',$novoNome,PDO::PARAM_STR);
                    $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                    $result->bindParam(':email',$email,PDO::PARAM_STR);
                    $result->bindParam(':senha',$senha,PDO::PARAM_STR);
                    $result->execute();
                    //VERIFICAÇÃO DE CADASTRO
                    $contar=$result->rowCount();
                    if($contar > 0  ){
                        echo'<div  style=" margin-top: 10px;" class="alert alert-success     max-width: 300px;" role="alert">Cadastro realizado!</div>';
                    }else{
                        echo 'Não cadastrado!';
                    }//if else verificar cadastro

                } catch (PDOException $e) {
                    echo '<strong>Erro de PDO: </strong>'.$e->getMessage();
                }//fecha catch
            }//fecha if
 
            ?><!--fecha PHP-->
        </div>

        </div>
    </div><!--login-form-->
</div><!---container->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    
</body>
</html>