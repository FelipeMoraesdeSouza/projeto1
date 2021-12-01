<?php
 include('conexao.php');
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <a href="frmdepart.php">Cadastrar Departamento</a>
        <hr>
    <div class="container">

    <!-- Inicio da tabela -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Departamento</th>
      <th scope="col">Funcionario</th>
      <th scope="col">Endereço</th>
      <th scope="col">email</th>
    </tr>
  </thead>

    <!-- fim da tabela -->
  <tbody>

  <?php
        $sql = "select * from tbldepart";
        $resultado = $con->query($sql);

        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){

                echo "<tr>";
                echo "<th>".$linha['iddepart']."</th>";
                echo "<td>".$linha['nomedepart']."</td>";
                echo "<td>".$linha['idfunc']."</td>";
                
                echo "<td>
                    <button class='btn btn-primary btn-sm'> Editar</button> 
                    <button class='btn btn-danger btn-sm'>Excluir</button> 
                </td>";
                echo "</tr>";
        }

  ?>
  </tbody>
  </table>
  </div>
</html>