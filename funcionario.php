<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
</head>

<body>
    <?php
        //faz a requisição da classe fucionario para ser usada
        require('C:\xampp\htdocs\senac\projeto1\class\Funcionario.class.php');

        //criar o objeto do tipo funcionario
        $f1 = new Funcionario();
        echo $f1->setClass("felipe","vendedor",3000,01);
        echo $f1->exibir();
    ?>
</body>
</html>