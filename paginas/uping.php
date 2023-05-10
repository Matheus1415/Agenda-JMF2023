<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivo</title>
</head>
<body>
    <form action="" method="post">
        <input type="file" name="img">
        <input type="submit" name="botao" value="enviar">
    </form>
    <?php
    if(isset($_POST['botao'])){
        $imagem = $_POST['img'];
        var_dump($imagem);
    }
    
    ?>
</body>