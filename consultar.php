<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Colsultar Cliente</h1>
    <hr>
    <?php
    //abrir conexao com o banco
    include_once'./conexao.php';
    //montar a instrução para ir ao banco
    $sql = "select * from cliente";
  
    $result =mysqli_query($con,$sql); //executa a consulta no mysql

    $totalregistro = mysqli_num_rows($result);
    if($totalregistro > 0){
       // echo "encontrou ".$totalregistro. " registros.";
       ?>
        <table width='800px' border='1px'>
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Telefone</td>
                <td>Data de Cadastro</td>
            <tr>
    <?php
    while($row = mysqli_fetch_array($result)){
        echo"<tr>";
        echo"<td>".$row["nome"]."</td>";
        echo"<td>".$row["email"]."</td>";
        echo"<td>".$row["telefone"]."</td>";
        echo"<td>".$row["dtcadastro"]."</td>";
        echo"</tr>";
    }
    echo "</table> Total de Registros cadastrados: " .$totalregistro;
    }else{
        echo "Nenhum registro cadastrado";
    }

    ?>
</body>
</html>