<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<title>Locadora de Filmes - Locadora IFPR</title>
<body>
    <h1> Selecionando registros por categoria</h1>

    <?php
    include_once("conexap.php");
    $sqlRegistros = mysqli_query($conexao, "SELECT titulofilme, nomecategoria from tbfilmes inner join tbcategoria on tbfilmes.idcategoria = tbcategoria.idcategoria");
    
    $num_linhas = mysqli_num_rows($sqlRegistros);
    echo "<table border = '1'>";
    echo "<tr> <th> Título do Filme</th> <th>Categoria</th> </tr>";
    echo  $sqlRegistros;
    for($i = 0; $i<$num_linhas; $i++){

        $dados = mysqli_fetch_array($sqlRegistros);
        $titulofilme = $dados["titulofilme"];
        $nomecategoria = $dados["nomecategoria"];
        echo "<tr> <td> $titulofilme </td> <td> $nomecategoria </td> </tr>";


    }
    echo "</table>";
    
    ?>
</body>
</html>