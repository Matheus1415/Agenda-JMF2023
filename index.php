<?php
    //Armazena os dados no cache
    ob_start();
    //Iniciar minha sessão
    session_start();
    //Condição da minha sessão iniciada
    if(isset($_SESSION['loginEmail'])&&isset($_SESSION['loginSenha'])){
        header("location: paginas/home.php");
    }
?>
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
    <link rel="stylesheet" href="css/login.css">

</head>
<body>

<div class="container">
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
            <h2>Login Agenda 2023</h2>
            <p>Faça seu login abaixo para ter acesso a sua agenda.</p>  
            </div>
                <form action="" method="post">

                    <div class="form-group">
                         <input type="email" class="form-control" name="email" placeholder="Digite seu E-mail">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
                    </div>

                    <div class="forgot">
                        <a href="cadastro.php">Ir para cadastre-se</a>
                    </div>

                    <button type="submit" name="login" class="btn">Login</button>

                </form>
                <?php
                    include_once("config/conexao.php");
                    //acao negado
                    if(isset($_GET['acao'])){
                        $acao=$_GET['acao'];
                        if($acao == 'negado'){
                        echo '<div class="alert alert-success" role="alert">
                            <strong>Faça o login para ter acesso a agenda 2023!</strong></div>';
                            header("Refresh: 5, index.php");
                        }else if($acao == 'sair'){
                            echo '<br>'.'<div class="alert alert-info" role="alert">
                            <strong>Voçê saiu da agenda 2023!</strong></div>';
                            header("Refresh: 5, index.php");
                        }//acao sair
                    }//get acao
                    /*******Criação da sessão login*********/
                    if(isset($_POST['login'])){
                        $email = $_POST['email'];
                        $senha = md5(base64_encode($_POST['senha']));
                        //Query de consuta oa banco de dados
                        $select= "SELECT * FROM perfilA WHERE emailperfilA=:email AND senhaperfilA=:senha";
                        try {
                            //Preparando a conexão para afzer uma verificação
                            $result = $conect->prepare($select);
                            $result->bindParam(':email',$email,PDO::PARAM_STR);
                            $result->bindParam(':senha',$senha,PDO::PARAM_STR);
                            $result->execute();

                            $verificar=$result->rowCount();

                            if($verificar > 0){
                                //Criando sessão de login com e-mail e senha
                                $_SESSION['loginEmail']=$email;
                                $_SESSION['loginSenha']=$senha;
                                //Alert e3 usuario logado
                                echo'<div  style=" margin-top: 10px;" class="alert alert-success max-width: 300px;" role="alert">Você sera redirecionado para a agenda! :)</div>';
                                //Direcionadno para o home.phph
                                header("Refresh: 3, paginas/home.php?acao=bemvindo");
                            }else{
                                echo'<div  style=" margin-top: 10px;" class="alert alert-success max-width: 300px;" role="alert">Seu email ou sua senha estar errado:( , tente novamente :)</div>';
                            }// if else


                        }catch (PDOException $e) {
                            echo '<strong>Erro de PDO: </strong>'.$e->getMessage();//imprime na tela os erros do PDOException                          
                        }// try catch

                    }//if click ao btn login
                ?> 
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