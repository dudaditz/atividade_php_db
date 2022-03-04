<?php

include("conexap.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Filmes</title>
</head>
<body>
    <h1>Vídeo Locadora IFPR</h1>

<?php

include("menu.php");

?>
<h3>Cadastro de filmes</h3>
<form name="cadfilmes" action="gravarfilme.php" method="POST">

<p><label>Título</label>
<input type="text" name="titulofilme"></p>
<p><label>Duração</label>
<input type="text" name="duracaofilme"></p>
<p><label>Valor</label>
<input type="text" name="valorlocacao"></p>
<p><label>Categoria</label>
<select name="idcategoria">

<?php
$rsCategoria = mysqli_query($conexao, "select * from tbcategorias");
$linhas = mysqli_num_rows($rsCategoria);
for($i=0; $i<$linhas; $i++){
    $dados = mysqli_fetch_array($rsCategoria);
    $idcategoria = $dados["idcategoria"];
    $nomecategoria = $dados["nomecategoria"];
    echo "<option value= '$idcategoria'>$nomecategoria</option>";



}


?>
</select>
</p>
<p><input type="submit" value="Gravar"></p>
</form> 
</body>
</html>