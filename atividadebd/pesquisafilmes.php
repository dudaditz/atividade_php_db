<?php

include_once("conexap.php");
$pesquisa = $_GET["pesquisa"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Filmes - Locadora IFPR</title>
</head>
<body>
  <h1>Pesquisa de Filmes</h1>
  <form name="pesquisa" action ="pesquisafilmes.php" method="GET">
  <label>Pesquisa de Filmes:</label> <input type ="text" name="pesquisa">
  <input type="submit" value="pesquisar">


  </form>  
</body>
</html>

<?php

$sqlRegistros = mysqli_query($conexao, "SELECT titulofilme, nome categoria from tbfilmes inner join
                                        tbcategorias on tbfilmes.idcategoria = tbcategorias.idcategoria
                                        where titulofilme like '%$pesquisa%'");

$num_linhas = mysqli_fetch_array($sqlRegistros);
$titulofilme =$dados ["titulofilme"];
$nomecategoria = $dados ["nomecategoria"];
echo "<tr> <td> $titulofilme</td><td> $nomecategoria</tr>"





?>