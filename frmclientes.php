<?php
    include('conexao.php');

    try {
      $sql = "insert into tblclientes (cliente,email,tel,endereco) values (:cliente,:email,:tel,:endereco)";
      $stmt = $con->prepare($sql);

      $stmt->bindValue(":cliente",$_POST["cliente"]);
      $stmt->bindValue(":email",$_POST["email"]);
      $stmt->bindValue(":tel",$_POST["tel"]);
      $stmt->bindValue(":endereco",$_POST["endereco"]);
      $stmt->execute();
      header("location:listarclientes.php");

    } catch(PDOException $e){
        echo "Não Cadastrou. ".$e->getMessage();
    }
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clientes</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body class="container">

        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="frmclientes.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="frmfuncionario.php">Funcionario</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="frmdepart.php">Departamento</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="frmestoque.php">Estoque</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="frmvendas.php">Vendas</a>
                    </li>        
                </ul>
                </div>
            </div>
        </nav>

        <div class="container">
        <h1>Cadastro de Clientes</h1>
        
        <form method="post">
        <div class="mb-3" name="entrada">
            <label for="entrada" class="form-label">Nome</label>
            <input id="entrada" type="text" class="form-control" name="cliente" >
        </div>

        <div class="mb-3" name="entrada">
            <label for="entrada" class="form-label">Email address</label>
            <input id="entrada" type="email" class="form-control" name="email" >
        </div>

        <div class="mb-3" name="entrada">
            <label for="entrada" class="form-label">Telefone</label>
            <input id="entrada" type="text" class="form-control" name="tel">        
        </div>

        <div class="mb-3" name="entrada">
            <label for="entrada" class="form-label">Endereco</label>
            <input id="entrada" type="text" class="form-control" name="endereco">        
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastar</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
